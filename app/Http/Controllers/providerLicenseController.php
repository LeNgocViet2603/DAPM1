<?php

namespace App\Http\Controllers;

use App\Models\Cosokinhdoanh;
use App\Models\GiayPhepAttp;
use App\Models\LoaiCSKD;
use Illuminate\Http\Request;

class providerLicenseController extends Controller
{
  public function showPageProviderLicense(Request $request)
  {
    if ($request->option === null && $request->search === null) {
      $postlist = Cosokinhdoanh::join('dangkygpattp', 'cosokinhdoanh.maCSKD', '=', 'dangkygpattp.maCSKD')
        ->join('loaicskd', 'cosokinhdoanh.maLoaiCSKD', '=', 'loaicskd.maLoaiCSKD')
        ->where('dangkygpattp.trangThai', 2)
        ->where('cosokinhdoanh.trangThai', 1)
        ->get([
          'cosokinhdoanh.tenCSKD', 'cosokinhdoanh.diaChi', 'dangkygpattp.maCSKD', 'loaicskd.tenLoaiCSKD',
          'dangkygpattp.trangThai'
        ]);
    } else if ($request->search === null) {
      $postlist = Cosokinhdoanh::join('dangkygpattp', 'cosokinhdoanh.maCSKD', '=', 'dangkygpattp.maCSKD')
        ->join('loaicskd', 'cosokinhdoanh.maLoaiCSKD', '=', 'loaicskd.maLoaiCSKD')
        ->where('dangkygpattp.trangThai', 2)
        ->where('cosokinhdoanh.trangThai', 1)
        ->where('loaicskd.maLoaiCSKD', $request->option)
        ->get([
          'cosokinhdoanh.tenCSKD', 'cosokinhdoanh.diaChi', 'dangkygpattp.maCSKD', 'loaicskd.tenLoaiCSKD',
          'dangkygpattp.trangThai'
        ]);
    } else {
      $postlist = Cosokinhdoanh::join('dangkygpattp', 'cosokinhdoanh.maCSKD', '=', 'dangkygpattp.maCSKD')
        ->join('loaicskd', 'cosokinhdoanh.maLoaiCSKD', '=', 'loaicskd.maLoaiCSKD')
        ->where('dangkygpattp.trangThai', 2)
        ->where('cosokinhdoanh.trangThai', 1)
        ->where('loaicskd.maLoaiCSKD', $request->option)
        ->where('cosokinhdoanh.maCSKD', 'LIKE', "%$request->search%")
        ->get([
          'cosokinhdoanh.tenCSKD', 'cosokinhdoanh.diaChi', 'dangkygpattp.maCSKD', 'loaicskd.tenLoaiCSKD',
          'dangkygpattp.trangThai'
        ]);
    }

    $option = LoaiCSKD::all();
    return view('admin/pages/providerLicense')->with(compact('postlist'))
      ->with(compact('option'));
    return response()->json(['postlist' => $postlist]);
  }
  public function Store(Request $request)
  {
    GiayPhepAttp::updateOrCreate(
      [
        'maGiayPhepATTP' => $request->maGiayPhepATTP
      ],
      [
        'maCSKD' => $request->maCSKD,
        'maVanBan' => $request->maVanBan,
        'ngayCap' => $request->ngayCap,
        'thoiHan' => $request->thoiHan,
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

  public function UpdateStatus(Request $request)
  {
    Cosokinhdoanh::updateOrCreate(
      [
        'maCSKD' => $request->maCSKD
      ],
      [
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

  public function update($id)
  {
    $coso = Cosokinhdoanh::join('dangkygpattp', 'cosokinhdoanh.maCSKD', '=', 'dangkygpattp.maCSKD')
      ->join('loaicskd', 'cosokinhdoanh.maLoaiCSKD', '=', 'loaicskd.maLoaiCSKD')
      ->join('nguoidung', 'nguoidung.maNguoiDung', '=', 'cosokinhdoanh.maNguoiDung')
      ->where('cosokinhdoanh.maCSKD', $id)
      ->get([
        'cosokinhdoanh.tenCSKD', 'cosokinhdoanh.diaChi', 'dangkygpattp.maCSKD', 'loaicskd.tenLoaiCSKD',
        'nguoidung.ho', 'nguoidung.ten'
      ]);
    return response()->json([
      'data' => $coso,
    ]);
  }
}

// SELECT * from ketquathanhtra, kehoachthanhtra, nhomthanhtra WHERE kehoachthanhtra.maKHTT = ketquathanhtra.maKHTT
// and kehoachthanhtra.maNhomThanhTra = nhomthanhtra.maNhomThanhTra and kehoachthanhtra.maKHTT = 1 GROUP by kehoachthanhtra.maKHTT