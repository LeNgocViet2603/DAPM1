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
    public function showPageManageLicense(Request $request)
    {
        $arr = array(1, 2, 3, 4,5,6,7,8,9,10,11,12);
        if($request->month_option === null) {
            $getList = KeHoachThanhTra::join('ketquathanhtra','ketquathanhtra.maKHTT','=', 'kehoachthanhtra.maKHTT')
            ->join('cosokinhdoanh', 'cosokinhdoanh.maCSKD', '=', 'kehoachthanhtra.maCSKD' )
            ->join('giayphepattp', 'giayphepattp.maCSKD', '=', 'kehoachthanhtra.maCSKD' )
            ->where('ketquathanhtra.trangThai', 1) 
            ->get(['cosokinhdoanh.tenCSKD','cosokinhdoanh.maCSKD', 'giayphepattp.maGiayPhepATTP',  'ketquathanhtra.ketQuaThanhTra',
             'ketQuaThanhTra.maKHTT', 'giayphepattp.trangThai']);
        } else {
            $getList = KeHoachThanhTra::join('ketquathanhtra','ketquathanhtra.maKHTT','=', 'kehoachthanhtra.maKHTT')
            ->join('cosokinhdoanh', 'cosokinhdoanh.maCSKD', '=', 'kehoachthanhtra.maCSKD' )
            ->join('giayphepattp', 'giayphepattp.maCSKD', '=', 'kehoachthanhtra.maCSKD' )
            ->where('ketquathanhtra.trangThai', 1) 
            ->whereRaw('EXTRACT(MONTH FROM ketquathanhtra.thoiGianThanhTra) = ?', $request->month_option)
            ->get(['cosokinhdoanh.tenCSKD','cosokinhdoanh.maCSKD', 'giayphepattp.maGiayPhepATTP',  'ketquathanhtra.ketQuaThanhTra',
             'ketQuaThanhTra.maKHTT', 'giayphepattp.trangThai']);
        }
        
        return view('backend_pages/pages/manageLicense')->with(compact('getList'))
        ->with(compact('arr'));
    }

    public function Store(Request $request)
    {
      GiayPhepAttp::updateOrCreate(
        [
          'maGiayPhepATTP' => $request->maGiayPhepATTP 
        ],
        [
          'ngayThuHoi' => $request->ngayThuHoi,
          'trangThai' => $request->trangThai
        ]
      );
  
      return response()->json(
        [
          'success' => true,
          'message' => 'Data inserted successfully'
        ]
      );
    }
    public function update($id, $makehoach)
    {
        $coso  = Cosokinhdoanh::join('nguoidung', 'nguoidung.maNguoiDung', '=', 'cosokinhdoanh.maNguoiDung')
        ->join('loaicskd', 'cosokinhdoanh.maLoaiCSKD', '=', 'loaicskd.maLoaiCSKD' )
        ->join('giayphepattp', 'giayphepattp.maCSKD', '=', 'cosokinhdoanh.maCSKD' )
        ->where('cosokinhdoanh.maCSKD', '=', $id)
        ->get();
        $ketqua = KetQuaThanhTra::where('maKHTT','=', $makehoach)->get();
        $canbo = NhomThanhTra::join('kehoachthanhtra','kehoachthanhtra.maNhomThanhTra', '=', 'nhomthanhtra.maNhomThanhTra')
        ->join('nguoidung', 'nguoidung.maNguoiDung', '=', 'nhomthanhtra.maNguoiThanhTra')
        ->where('kehoachthanhtra.maKHTT', '=',$makehoach)
        ->get(['ho','ten']);
        return response()->json([ 
        'data' => $coso,
        'ketqua' => $ketqua,
        'canbott'=> $canbo
        ]);
  }
    
}