<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

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
            ->join('chude', 'baidang.maChuDe', '=', 'chude.maChuDe')->get()->count();
        $postPublished = DB::table('baidang')
            ->join('nguoidung', 'baidang.maNguoiDang', '=', 'nguoidung.maNguoiDung')
            ->join('chude', 'baidang.maChuDe', '=', 'chude.maChuDe')->get()->count();
        return view('admin.pages.post', compact('data', 'posts', 'allPosts', 'postDrag', 'postPublished'));
    }

    public function postDetail($id, Request $request)
    {
        $data = $this->loadCategory();
        $post = DB::table('baidang')->where('maBaiDang', '=', $id)->first();
        return view('admin.pages.addPost', compact('data', 'post'));
    }

    public function fetchPosts()
    {
        $data = DB::table('baidang')
            ->join('nguoidung', 'baidang.maNguoiDang', '=', 'nguoidung.maNguoiDung')
            ->join('chude', 'baidang.maChuDe', '=', 'chude.maChuDe')->get();
        return $data;
    }
    public function addPost()
    {
        $data = $this->loadCategory();
        return view('admin.pages.addPost', compact('data'));
    }


    public function handleAddPost(Request $request)
    {
        $data = array();
        $image = $request->file('image');
        echo $image;
        $data['maChuDe'] = $request->category;
        $data['tieuDe'] = $request->title;
        $data['noiDung'] = $request->content;
        $data['maNguoiDang'] = 1;
        $data['trangThai'] = 1;
        $data['anhBia'] = $image->getClientOriginalName();
        $image->move('images/post-avatar', $data['anhBia']);

        $result = DB::table('baidang')->insert($data);
        if ($result) {
            return Redirect::to('/admin-page/posts');
        } else {
            return Redirect::to('/admin-page/add-post');
        }
    }
}
