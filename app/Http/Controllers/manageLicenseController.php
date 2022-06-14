<?php

namespace App\Http\Controllers;

use App\Models\Cosokinhdoanh;
use App\Models\GiayPhepAttp;
use App\Models\KeHoachThanhTra;
use App\Models\KetQuaThanhTra;
use App\Models\LoaiCSKD;
use App\Models\NhomThanhTra;
use Illuminate\Http\Request;

class manageLicenseController extends Controller
{
    public function showPageManageLicense()
    {
        $getList = KeHoachThanhTra::join('ketquathanhtra','ketquathanhtra.maKHTT','=', 'kehoachthanhtra.maKHTT')
        ->join('cosokinhdoanh', 'cosokinhdoanh.maCSKD', '=', 'kehoachthanhtra.maCSKD' )
        ->join('giayphepattp', 'giayphepattp.maCSKD', '=', 'kehoachthanhtra.maCSKD' )
        ->get(['cosokinhdoanh.tenCSKD','cosokinhdoanh.maCSKD', 'giayphepattp.maGiayPhepATTP',  'ketquathanhtra.ketQuaThanhTra',
         'ketQuaThanhTra.maKHTT']);
        
        return view('backend_pages/pages/manageLicense')->with(compact('getList'));
    }
    public function update($id, $makehoach)
    {
        $coso  = Cosokinhdoanh::find($id);
        $giayphep = GiayPhepAttp::find($id);
        $name = $coso->nguoidung->ho .' '. $coso->nguoidung->ten;
        $nameService = LoaiCSKD::find($coso->maLoaiCSKD);
        $ketqua = KetQuaThanhTra::find($makehoach);
        $manhomtt = KeHoachThanhTra::where('maKHTT', '=', $makehoach)->get("maNhomThanhTra");
        return response()->json([ 
        'data' => $coso,
        'giayphep' => [
            'ngayCap' => $giayphep->ngayCap,
            'thoiHan' => $giayphep->thoiHan,
            'maGiayPhepATTP'=> $giayphep->maGiayPhepATTP,
            'trangThaiGP' => $giayphep->trangThaiGP,
        ],
        'info'=> [
            'name' =>  $name,
            'nameService' => $nameService->tenLoaiCSKD
        ],
        'ketquathanhtra' => [
            'thoigian' =>$ketqua->thoiGianThanhTra,
            'ketqua' => $ketqua->ketQuaThanhTra,
            'canbott' => $manhomtt[0]->maNhomThanhTra,
        ]
        ]);
  }
    
}