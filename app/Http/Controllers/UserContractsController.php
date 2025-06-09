<?php

namespace App\Http\Controllers;

use App\Http\Traits\Uploader;
use App\Models\Contracts;
use App\Models\User;
use App\Models\UserContractPayments;
use App\Models\UserContracts;
use Carbon\Carbon;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserContractsController extends Controller
{
    use Uploader;
    public function index($UserID)
    {
        $Contracts = UserContracts::where('UserID', $UserID)->get();
        confirmDelete('Delete Contract!', 'Are you sure you want to delete this Contract?');

        return view('Dashboard.Users.Contracts.index')->with(['Contracts' => $Contracts, 'UserID' => $UserID]);
    }
    public function Add($UserID)
    {
        $Contracts = Contracts::all();
        return view('Dashboard.Users.Contracts.Add')->with(['Contracts' => $Contracts, 'UserID' => $UserID]);
    }
    public function View($ContractID)
    {
        $Contracts = UserContracts::find($ContractID);
        return view('Dashboard.Users.Contracts.View')->with(['Contracts' => $Contracts]);
    }
    public function Create(Request $request)
    {
        $request->validate([
            'UserID' => 'required|integer|exists:users,id',
            'Amount' => 'required|numeric',
            'Start' => 'required|date_format:Y-m-d H:i:s',
            'ContractID' => 'required|integer|exists:contracts,id',
            'SignedContract' => 'required|file|mimes:pdf'
        ]);




        $Contract = Contracts::find($request->ContractID);
        $User = User::find($request->UserID);

        $AttachmentAddress = $this->UploadPDF($request->SignedContract , 'SignedContracts');

        $PaymentCount = $Contract->Time / 3;
        $PaymentDates = [];
        $LastDate = $request->Start;

        for ($i = 1; $i <= $PaymentCount ; $i++) {
            $PaymentDates[$i] = Carbon::parse($LastDate)->addDays(90)->format('Y-m-d H:i:s');
            $LastDate = $PaymentDates[$i];
        }

        $EndDates = $Contract->Time * 30;

        $EndDate = Carbon::parse($request->Start)->addDays($EndDates)->format('Y-m-d H:i:s');

        $UserContract = UserContracts::create([
            'UserID' => $User->id,
            'ContractID' => $Contract->id,
            'Amount' => $request->Amount,
            'StartDate' => $request->Start,
            'EndDate' => $EndDate,
            'PaymentDates' => $PaymentDates,
            'SignedContract' => $AttachmentAddress,
        ]);

        foreach ($UserContract->PaymentDates as $paymentDate) {
            UserContractPayments::create([
                'ContractID' => $UserContract->id,
                'PaymentDate' => $paymentDate,
                'Status' => 'Pending',
            ]);
        }

        Alert::success('Contract Created Successfully');

        return redirect()->route('Dashboard.Users.Contracts.index' , $User->id);



    }
    public function Delete(int $ID)
    {
        $Contract = UserContracts::find($ID);
        $Contract->delete();
        Alert::success('Contract Deleted successfully');
        return redirect()->route('Dashboard.Users.index');

    }
    public function EditPayment(int $ID)
    {
        $Payment = UserContractPayments::find($ID);
        return view('Dashboard.Users.Contracts.EditPayment')->with(['Payment' => $Payment]);


    }
    public function UpdatePayment(int $ID , Request $request)
    {
        $request->validate([
            'PaymentDate' => 'required|date_format:Y-m-d H:i:s',
            'Amount' => 'required|numeric',
            'Percent' => 'required|numeric',
            'Status' => 'required|in:Pending,Paid',
            'VerificationNumber' => 'required|numeric',
            'ReferenceNumber' => 'required|numeric',
        ]);
        $Payment = UserContractPayments::find($ID);

        $Payment->update([
            'PaymentDate' => $request->PaymentDate,
            'Amount' => $request->Amount,
            'Percent' => $request->Percent,
            'Status' => $request->Status,
            'VerificationNumber' => $request->VerificationNumber,
            'ReferenceNumber' => $request->ReferenceNumber,
        ]);

        Alert::success('Payment Updated Successfully');

        return redirect()->route('Dashboard.Users.Contracts.View' , $Payment->ContractID);


    }
}
