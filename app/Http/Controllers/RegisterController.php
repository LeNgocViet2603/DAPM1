<?php

namespace App\Http\Controllers;

use App\Models\PhuongXa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class RegisterController extends Controller
{
    //
    public function index()
    {
        $wards = PhuongXa::all();
        return view('pages.register')->with('wards', $wards);
    }

    public function register(Request $request)
    {

        $data = array();
        $data['maQuyen'] = 1;
        $data['ten'] = $request->lastName;
        $data['ho'] = $request->firstName;
        $data['matKhau'] = password_hash($request->password, PASSWORD_DEFAULT);
        $data['avatar'] = null;
        $data['ngaySinh'] = $request->birthDay;
        $data['gioiTinh'] = $request->gender;
        $data['email'] = $request->email;
        $data['sodt'] = $request->phone;
        $data['diaChi'] = $request->address;
        $data['maPhuongXa'] = $request->wardId;
        $data['trangThai'] = 1;

        $get1 = DB::table('nguoidung')->where('email', $request->email)->first();

        if ($get1) {
            request()->session()->put('msg', "Tài khoản đã tồn tại!");
            return Redirect::to('/register');
        } else {
            $result = DB::table('nguoidung')->insert($data);
            if ($result) {

                $user = DB::table('nguoidung')->orderby('maNguoiDung', 'desc')->first();

                request()->session()->put('user', $user);
                return Redirect::to('/');
            } else {
                request()->session()->put('msg', "Đăng ký không thành công!");
                return Redirect::to('/register');
            }
        }
    }
}
