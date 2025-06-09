<?php

namespace App\Http\Controllers;

use App\Models\UserContracts;
use Hekmatinasser\Verta\Verta;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class PanelController extends Controller
{
    public function index()
    {
        $Contracts = UserContracts::where('UserID' , Auth::id())->get();
        return view('Front.Panel.index')->with(['Contracts' => $Contracts]);
    }
    public function Report($ContractID)
    {
        $Contract = UserContracts::find($ContractID);
        return view('Front.Panel.Report')->with(['Contract' => $Contract]);
    }
    public function DownloadSampleContract()
    {
        $filepath = public_path('Contract.pdf');
        return Response::download($filepath);
    }
}
