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
      if($request->option === null && $request->search === null) {
        $postlist = Cosokinhdoanh::join('giayphepattp','cosokinhdoanh.maCSKD','=', 'giayphepattp.maCSKD')
        ->join('loaicskd', 'cosokinhdoanh.maLoaiCSKD', '=', 'loaicskd.maLoaiCSKD' )
        ->get(['cosokinhdoanh.tenCSKD', 'cosokinhdoanh.diaChi', 'cosokinhdoanh.maCSKD','loaicskd.tenLoaiCSKD',
         'giayphepattp.trangThaiGP']);
      } else if( $request->search === null){
        $postlist = Cosokinhdoanh::join('giayphepattp','cosokinhdoanh.maCSKD','=', 'giayphepattp.maCSKD')
        ->join('loaicskd', 'cosokinhdoanh.maLoaiCSKD', '=', 'loaicskd.maLoaiCSKD' )
        ->where('loaicskd.maLoaiCSKD', $request->option)
        ->get(['cosokinhdoanh.tenCSKD', 'cosokinhdoanh.diaChi', 'cosokinhdoanh.maCSKD','loaicskd.tenLoaiCSKD',
         'giayphepattp.trangThaiGP']);
      } else {
        $postlist = Cosokinhdoanh::join('giayphepattp','cosokinhdoanh.maCSKD','=', 'giayphepattp.maCSKD')
        ->join('loaicskd', 'cosokinhdoanh.maLoaiCSKD', '=', 'loaicskd.maLoaiCSKD' )
        ->where('loaicskd.maLoaiCSKD', $request->option)
        ->where('cosokinhdoanh.maCSKD','LIKE', "%$request->search%")
        ->get(['cosokinhdoanh.tenCSKD', 'cosokinhdoanh.diaChi', 'cosokinhdoanh.maCSKD','loaicskd.tenLoaiCSKD',
         'giayphepattp.trangThaiGP']);
      }

         $option = LoaiCSKD::all();
        return view('backend_pages/pages/providerLicense')->with(compact('postlist'))
        ->with(compact('option'));
    }
    public function Store(Request $request)
  {
    echo $request;
    GiayPhepAttp::updateOrCreate(
      [
        'maGiayPhepATTP' => $request->maGiayPhepATTP 
      ],
      [
        'thoiHan' => $request->thoiHan,
        'trangThaiGP' => $request->trangThaiGP
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
        $coso  = Cosokinhdoanh::find($id);
        $giayphep = GiayPhepAttp::find($id);
        $name = $coso->nguoidung->ho .' '. $coso->nguoidung->ten;
        $nameService = LoaiCSKD::find($coso->maLoaiCSKD);
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
        ]
        ]);
  }
}