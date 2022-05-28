<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class providerLicenseController extends Controller
{
    public function showPageProviderLicense()
    {
        return view('backend_pages/pages/providerLicense');
    }
}