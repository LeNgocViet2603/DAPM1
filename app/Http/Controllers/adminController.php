<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index()
    {
        return view('admin.pages.dashboard');
    }

    // public function ShowDashboard()
    // {
    //     return view('admin.pages.dashboard');
    // }
}
