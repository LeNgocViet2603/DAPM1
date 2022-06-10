<?php

namespace App\Http\Controllers;

use App\Models\Cosokinhdoanh;
use App\Models\GiayPhepAttp;
use App\Models\LoaiCSKD;
use Illuminate\Http\Request;

class providerLicenseController extends Controller
{
    public function showPageProviderLicense()
    {
        $postlist = Cosokinhdoanh::orderBy('maCSKD', 'DESC')->get();
        return view('backend_pages/pages/providerLicense')->with(compact('postlist'));
    }
    public function Store(Request $request)
  {
    Cosokinhdoanh::updateOrCreate(
      [
        'id' => $request->id
      ],
      [
        'name' => $request->name,
        'address' => $request->address
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
            'thoiHan' => $giayphep->thoiHan
        ],
        'info'=> [
            'name' =>  $name,
            'nameService' => $nameService->tenLoaiCSKD
        ]
        ]);
  }
}