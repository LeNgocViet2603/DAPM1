<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class manageLicenseController extends Controller
{
    public function showPageManageLicense()
    {
        return view('backend_pages/pages/manageLicense');
    }
}