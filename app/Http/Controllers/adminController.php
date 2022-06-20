<?php

namespace App\Http\Controllers;

use App\Models\BaiDang;
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
        $data = DB::table('baidang')->select('*', 'baidang.ngayTao')
            ->join('nguoidung', 'baidang.maNguoiDang', '=', 'nguoidung.maNguoiDung')
            ->join('chude', 'baidang.maChuDe', '=', 'chude.maChuDe')->orderby('baidang.ngayTao', 'desc')->get();
        return $data;
    }
    public function addPost()
    {
        $data = $this->loadCategory();
        return view('admin.pages.addPost', compact('data'));
    }
    public function editPost(Request $request)
    {
        $image = $request->file('image');
        $post = BaiDang::find($request->id);

        $post->maChuDe = $request->category;
        $post->tieuDe = $request->title;
        $post->slug = $request->slug;
        $post->noiDung  = $request->content;
        if (isset($image)) {
            $data['anhBia'] = $image->getClientOriginalName();
            $image->move('images/post-avatar', $data['anhBia']);
        }
        $post->save();
        return Redirect::to('/admin-page/posts');
    }


    public function handleAddPost(Request $request)
    {
        $data = array();
        $image = $request->file('image');

        $data['maChuDe'] = $request->category;
        $data['tieuDe'] = $request->title;
        $data['slug'] = $request->slug;
        $data['noiDung'] = $request->content;
        $data['maNguoiDang'] = 1;
        $data['trangThai'] = 1;
        if (isset($image)) {
            $data['anhBia'] = $image->getClientOriginalName();
            $image->move('images/post-avatar', $data['anhBia']);
        }

        $result = DB::table('baidang')->insert($data);
        if ($result) {
            return Redirect::to('/admin-page/posts');
        } else {
            return Redirect::to('/admin-page/add-post');
        }
    }
}
