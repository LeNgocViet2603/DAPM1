<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function showDashboard()
    {
        return view('backend_pages/pages/dashboard');
    }
}
