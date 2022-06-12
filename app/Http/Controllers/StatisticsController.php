<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    //
    public function Statistics()
    {
        return view('admin.pages.statistics');
    }
}
