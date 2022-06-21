<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use PDF;

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
    //     $ward = PhuongXa::all();

    //     return ['store' => $store, 'service' => $service, 'district' => $district, 'ward' => $ward];
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
                ->take(10)
                ->get();

            $service = LoaiCSKD::all();
            // $status
            $district = QuanHuyen::all();
            $ward = PhuongXa::all();
        }

        if (!empty($request->service)) {
            $fservice = $request->service;
            $store = DB::table('cosokinhdoanh')
                ->select('cosokinhdoanh.tenCSKD', 'cosokinhdoanh.diaChi', 'cosokinhdoanh.maCSKD',
                        'loaicskd.tenLoaiCSKD','giayphepattp.maGiayPhepATTP', 'giayphepattp.trangThai')
                ->join('giayphepattp','cosokinhdoanh.maCSKD','=', 'giayphepattp.maCSKD')
                ->join('loaicskd', 'cosokinhdoanh.maLoaiCSKD', '=', 'loaicskd.maLoaiCSKD' )
                ->where('loaicskd.maLoaiCSKD', $fservice)
                ->take(10)
                ->get();

            $service = LoaiCSKD::all();
            // $status
            $district = QuanHuyen::all();
            $ward = PhuongXa::all();
        }

        if (!empty($request->status)) {
            $fstatus = $request->status;
            if ($fstatus == 'inactive') {
                $fstatus = 1;
            } else {
                $fstatus = 2;
            }

            $store = DB::table('cosokinhdoanh')
                ->select('cosokinhdoanh.tenCSKD', 'cosokinhdoanh.diaChi', 'cosokinhdoanh.maCSKD',
                        'loaicskd.tenLoaiCSKD','giayphepattp.maGiayPhepATTP', 'giayphepattp.trangThai')
                ->join('giayphepattp','cosokinhdoanh.maCSKD','=', 'giayphepattp.maCSKD')
                ->join('loaicskd', 'cosokinhdoanh.maLoaiCSKD', '=', 'loaicskd.maLoaiCSKD' )
                ->where('giayphepattp.trangThai', $fstatus)
                ->take(10)
                ->get();
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
                ->take(10)
                ->get();

            $service = LoaiCSKD::all();
            // $status
            $district = QuanHuyen::all();
            $ward = PhuongXa::all();
        }

        if (!empty($request->ward)) {
            $fward = $request->ward;
            $store = DB::table('cosokinhdoanh')
                ->select('cosokinhdoanh.tenCSKD', 'cosokinhdoanh.diaChi', 'cosokinhdoanh.maCSKD',
                        'loaicskd.tenLoaiCSKD','giayphepattp.maGiayPhepATTP', 'giayphepattp.trangThai')
                ->join('giayphepattp','cosokinhdoanh.maCSKD','=', 'giayphepattp.maCSKD')
                ->join('loaicskd', 'cosokinhdoanh.maLoaiCSKD', '=', 'loaicskd.maLoaiCSKD' )
                ->join('phuongxa', 'cosokinhdoanh.maPhuongXa', '=', 'phuongxa.maPhuongXa' )
                ->where('phuongxa.maPhuongXa', $fward)
                ->take(10)
                ->get();

            $service = LoaiCSKD::all();
            // $status
            $district = QuanHuyen::all();
            $ward = PhuongXa::all();
        }

        // $countpie = $store->where('cosokinhdoanh.maLoaiCSKD', '=', 'loaicskd.maLoaiCSKD')
        //                     ->groupby('cosokinhdoanh.maLoaiCSKD') ->count();
        // $countpie1 = count($store->where('cosokinhdoanh.maLoaiCSKD', '=', 'loaicskd.maLoaiCSKD')
        //                     ->where('loaicskd.maLoaiCSKD', '=', '1'));
        $countpie1 = DB::table('cosokinhdoanh')
            ->join('loaicskd', 'cosokinhdoanh.maLoaiCSKD', 'loaicskd.maLoaiCSKD')
            ->where('loaicskd.maLoaiCSKD', '1')->count('cosokinhdoanh.maCSKD');
        $countpie2 = DB::table('cosokinhdoanh')
            ->join('loaicskd', 'cosokinhdoanh.maLoaiCSKD', 'loaicskd.maLoaiCSKD')
            ->where('loaicskd.maLoaiCSKD', '2')->count('cosokinhdoanh.maCSKD');
        $countpie3 = DB::table('cosokinhdoanh')
            ->join('loaicskd', 'cosokinhdoanh.maLoaiCSKD', 'loaicskd.maLoaiCSKD')
            ->where('loaicskd.maLoaiCSKD', '3')->count('cosokinhdoanh.maCSKD');
        $countpie4 = DB::table('cosokinhdoanh')
            ->join('loaicskd', 'cosokinhdoanh.maLoaiCSKD', 'loaicskd.maLoaiCSKD')
            ->where('loaicskd.maLoaiCSKD', '4')->count('cosokinhdoanh.maCSKD');


        return ['store' => $store, 'service' => $service, 'district' => $district, 'ward' => $ward,
            'countpie1' => $countpie1, 'countpie2' => $countpie2, 'countpie3' => $countpie3, 'countpie4' => $countpie4,
            'countstore' => $countstore];
    }

    public function downloadPDF(Request $request) {
        $data = $this->statistical($request);
        // $pdf = PDF::loadView('admin.pages.report', compact('data'));
        // return $pdf->stream('report.pdf');
        return view('admin.pages.report', compact('data'));
    }

    public function index(Request $request)
    {
        $data = $this->statistical($request);
        return view('admin.pages.statistics', compact('data'));
    }
}
