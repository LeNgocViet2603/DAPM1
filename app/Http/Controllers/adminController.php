<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class adminController extends Controller
{
    public function index()
    {
        return view('admin.pages.dashboard');
    }
    public function loadCategory()
    {
        //$data = DB::select('SELECT * FROM chude');
        $data = DB::table('chude')->get();
        return $data;
    }
    public function posts()
    {
        //$data = DB::select('SELECT * FROM chude');
        $data = $this->loadCategory();        
        $posts = $this->fetchPosts();
        $allPosts = $posts->count();
        $postDrag = DB::table('baidang')
        ->join('nguoidung', 'baidang.maNguoiDang', '=', 'nguoidung.maNguoiDung')
        ->join('chude','baidang.maChuDe','=','chude.maChuDe')->where('status','=',0)->get()->count();
        $postPublished = DB::table('baidang')
        ->join('nguoidung', 'baidang.maNguoiDang', '=', 'nguoidung.maNguoiDung')
        ->join('chude','baidang.maChuDe','=','chude.maChuDe')->where('status','=',1)->get()->count();
        return view('admin.pages.post',compact('data','posts','allPosts','postDrag','postPublished'));
    }
    public function fetchPosts()
    {
        $data = DB::table('baidang')
        ->join('nguoidung', 'baidang.maNguoiDang', '=', 'nguoidung.maNguoiDung')
        ->join('chude','baidang.maChuDe','=','chude.maChuDe')->get();
        return $data;
        
    }
    public function addPost()
    {
        $data = $this->loadCategory();
        return view('admin.pages.addPost',compact('data'));
    }

    // public function ShowDashboard()
    // {
    //     return view('admin.pages.dashboard');
    // }
}
