<?php

namespace App\Http\Controllers;

use App\Http\Traits\Uploader;
use App\Models\BulkPurchase;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BulkPurchaseController extends Controller
{
    use Uploader;

    public function index()
    {
        $Orders = BulkPurchase::all();
        confirmDelete('Delete Order!', 'Are you sure you want to delete this Order?');

        return view('Dashboard.BulkPurchase.index')->with(['Orders' => $Orders]);
    }



    public function Edit(int $ID)
    {
        $Order = BulkPurchase::find($ID);
        return view('Dashboard.BulkPurchase.Edit')->with(['Order' => $Order]);


    }
    public function Update(int $ID , Request $request)
    {
        $request->validate([
            'Status' => 'required|in:Pending,Paid,Canceled,Finished',
            'Price' => 'nullable|numeric',
            'Percentage' => 'nullable|numeric',
            'Commission' => 'nullable|numeric',
        ]);
        $Payment = BulkPurchase::find($ID);

        $Payment->update([
            'Status' => $request->Status,
            'Price' => $request->Price,
            'Percentage' => $request->Percentage,
            'Commission' => $request->Commission,

        ]);

        Alert::success('BulkPurchase Updated Successfully');

        return redirect()->route('Dashboard.BulkPurchase.index');


    }


    public function Delete(int $ID)
    {
        $Contract = BulkPurchase::find($ID);
        $Contract->delete();
        Alert::success('BulkPurchase Deleted successfully');
        return redirect()->route('Dashboard.BulkPurchase.index');

    }


    public function UploadPriceList()
    {
        return view('Dashboard.BulkPurchase.UploadPriceList');
    }



    public function UploadPriceListPost(Request $request)
    {
        $request->validate([
            'PriceList' => 'required|file|mimes:pdf'
        ]);

        $AttachmentAddress = $this->UploadPriceList($request->PriceList);

        Alert::success('Price List Updated');
        return redirect()->back();

    }


}
