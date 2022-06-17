<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class categoryController extends Controller
{
    public function loadCategory()
    {
        $data = DB::select('SELECT * FROM chude');
        return view('admin.pages.post',compact('data'));
    }
}
