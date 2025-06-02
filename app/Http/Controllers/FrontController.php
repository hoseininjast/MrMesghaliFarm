<?php

namespace App\Http\Controllers;

class FrontController extends Controller
{
    public function index()
    {
        return view('Front.index');
    }

    public function About()
    {
        return view('Front.About');
    }

    public function Collaboration()
    {
        return view('Front.About');

    }

    public function Contact()
    {
        return view('Front.Contact');
    }
}
