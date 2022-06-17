<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\CoSoKinhDoanh;
use App\Models\GiayPhepATTP;
use App\Models\LoaiCSKD;
use App\Models\PhuongXa;
use App\Models\QuanHuyen;


class StatisticsController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    // public function statistical()
    // {
    //     $store = DB::table('cosokinhdoanh')
    //         ->select('cosokinhdoanh.tenCSKD', 'cosokinhdoanh.diaChi', 'cosokinhdoanh.maCSKD',
    //                 'loaicskd.tenLoaiCSKD','giayphepattp.maGiayPhepATTP', 'giayphepattp.trangThai')
    //         ->join('giayphepattp','cosokinhdoanh.maCSKD','=', 'giayphepattp.maCSKD')
    //         ->join('loaicskd', 'cosokinhdoanh.maLoaiCSKD', '=', 'loaicskd.maLoaiCSKD' )
    //         ->get();

    //     $service = LoaiCSKD::all();
    //     // $status
    //     $district = QuanHuyen::all();
    //     $commune = PhuongXa::all();

    //     return ['store' => $store, 'service' => $service, 'district' => $district, 'commune' => $commune];
    // }

    public function statistical(Request $request)
    {
        $countstore = count(CoSoKinhDoanh::all());
        if (!empty($request)) {
            $store = DB::table('cosokinhdoanh')
                ->select('cosokinhdoanh.tenCSKD', 'cosokinhdoanh.diaChi', 'cosokinhdoanh.maCSKD',
                        'loaicskd.tenLoaiCSKD','giayphepattp.maGiayPhepATTP', 'giayphepattp.trangThai')
                ->join('giayphepattp','cosokinhdoanh.maCSKD','=', 'giayphepattp.maCSKD')
                ->join('loaicskd', 'cosokinhdoanh.maLoaiCSKD', '=', 'loaicskd.maLoaiCSKD' )
                ->get();

            $service = LoaiCSKD::all();
            // $status
            $district = QuanHuyen::all();
            $commune = PhuongXa::all();
        }

        if (!empty($request->service)) {
            $fservice = $request->service;
            $store = DB::table('cosokinhdoanh')
                ->select('cosokinhdoanh.tenCSKD', 'cosokinhdoanh.diaChi', 'cosokinhdoanh.maCSKD',
                        'loaicskd.tenLoaiCSKD','giayphepattp.maGiayPhepATTP', 'giayphepattp.trangThai')
                ->join('giayphepattp','cosokinhdoanh.maCSKD','=', 'giayphepattp.maCSKD')
                ->join('loaicskd', 'cosokinhdoanh.maLoaiCSKD', '=', 'loaicskd.maLoaiCSKD' )
                ->where('loaicskd.maLoaiCSKD', $fservice)
                ->get();

            $service = LoaiCSKD::all();
            // $status
            $district = QuanHuyen::all();
            $commune = PhuongXa::all();
        }

        if (!empty($request->district)) {
            $fdistrict = $request->district;
            $store = DB::table('cosokinhdoanh')
                ->select('cosokinhdoanh.tenCSKD', 'cosokinhdoanh.diaChi', 'cosokinhdoanh.maCSKD',
                        'loaicskd.tenLoaiCSKD','giayphepattp.maGiayPhepATTP', 'giayphepattp.trangThai')
                ->join('giayphepattp','cosokinhdoanh.maCSKD','=', 'giayphepattp.maCSKD')
                ->join('loaicskd', 'cosokinhdoanh.maLoaiCSKD', '=', 'loaicskd.maLoaiCSKD' )
                ->join('quanhuyen', 'cosokinhdoanh.maQuanHuyen', '=', 'quanhuyen.maQuanHuyen' )
                ->where('quanhuyen.maQuanHuyen', $fdistrict)
                ->get();

            $service = LoaiCSKD::all();
            // $status
            $district = QuanHuyen::all();
            $commune = PhuongXa::all();
        }

        if (!empty($request->commune)) {
            $fcommune = $request->commune;
            $store = DB::table('cosokinhdoanh')
                ->select('cosokinhdoanh.tenCSKD', 'cosokinhdoanh.diaChi', 'cosokinhdoanh.maCSKD',
                        'loaicskd.tenLoaiCSKD','giayphepattp.maGiayPhepATTP', 'giayphepattp.trangThai')
                ->join('giayphepattp','cosokinhdoanh.maCSKD','=', 'giayphepattp.maCSKD')
                ->join('loaicskd', 'cosokinhdoanh.maLoaiCSKD', '=', 'loaicskd.maLoaiCSKD' )
                ->join('phuongxa', 'cosokinhdoanh.maPhuongXa', '=', 'phuongxa.maPhuongXa' )
                ->where('phuongxa.maPhuongXa', $fcommune)
                ->get();

            $service = LoaiCSKD::all();
            // $status
            $district = QuanHuyen::all();
            $commune = PhuongXa::all();
        }

        return ['store' => $store, 'service' => $service, 'district' => $district, 'commune' => $commune];
    }

    public function index(Request $request)
    {
        $data = $this->statistical($request);
        return view('admin.pages.statistics', compact('data'));
    }
}