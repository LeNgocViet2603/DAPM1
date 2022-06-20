<?php

namespace App\Http\Controllers;

use App\Models\BaiDang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    //
    public function index()
    {
        $posts = DB::table('baidang')->select()->join('nguoidung', 'baidang.maNguoiDang', '=', 'nguoidung.maNguoiDung')->join('chude', 'baidang.maChuDe', '=', 'chude.maChuDe')->orderby('baidang.ngayTao', 'desc')->get();
        return view('pages.home', compact('posts'));
    }

    public function handleSearch(Request $request)
    {
        $text = $request->searchText;
        if (isset($text)) {
            $qr = "select *, MATCH(tieuDe, noiDung) AGAINST ('.$text.') as score from baidang WHERE  MATCH(tieuDe, noiDung) AGAINST ('.$text.') > 0 limit 10";

            $posts = DB::select($qr);
            return view('pages.search', compact('posts', 'text'));
        } else {
            return Redirect::to('/');
        }
    }

    public function postDetail(Request $request)
    {
        $post = BaiDang::find($request->slug);
        return view('pages.post-detail', compact('post'));
    }
}
