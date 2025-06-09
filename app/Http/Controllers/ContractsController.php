<?php

namespace App\Http\Controllers;

use App\Models\Contracts;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ContractsController extends Controller
{
    public function index()
    {
        $Contracts = Contracts::all();
        return view('Dashboard.Contracts.index')->with(['Contracts' => $Contracts]);
    }
    public function Add()
    {
        return view('Dashboard.Contracts.Add');
    }
    public function Edit()
    {

    }
    public function Create(Request $request)
    {
        $request->validate([
            'Name' => 'required|string',
            'Description' => 'required|string',
            'Time' => 'nullable|integer',
            'MinProfit' => 'required|integer',
            'MaxProfit' => 'required|integer',
            'Status' => 'required|string|in:Open,Closed',
        ]);

        $Contract = Contracts::create([
            'Name' => $request->Name,
            'Description' => $request->Description,
            'Time' => $request->Time,
            'MinProfit' => $request->MinProfit,
            'MaxProfit' => $request->MaxProfit,
            'Status' => $request->Status,
        ]);

        Alert::success('Contract Created Successfully');

        return redirect()->route('Dashboard.Contracts.index');

    }
    public function Update()
    {

    }
    public function Delete()
    {

    }
}
