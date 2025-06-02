<?php

namespace App\Http\Controllers;

class PanelController extends Controller
{
    public function index()
    {
        return view('Front.Panel.index');
    }
    public function Report()
    {
        return view('Front.Panel.Report');
    }
}
