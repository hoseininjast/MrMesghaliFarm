<?php

namespace App\Http\Controllers;

use App\Models\UserContracts;
use Illuminate\Http\Request;

class UserContractsController extends Controller
{
    public function index($UserID)
    {
        $Contracts = UserContracts::where('UserID', $UserID)->get();
        return view('Dashboard.Users.Contracts.index')->with(['Contracts' => $Contracts, 'UserID' => $UserID]);
    }
    public function Add()
    {

    }
    public function Edit()
    {

    }
    public function Create()
    {

    }
    public function Update()
    {

    }
    public function Delete()
    {

    }
}
