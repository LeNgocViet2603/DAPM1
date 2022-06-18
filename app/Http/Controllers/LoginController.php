<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    //
    public function index()
    {
        if (!request()->session()->get('user'))
            return view('pages.login');
        return  Redirect::to('/');
    }

    public function authentication(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $data = DB::table('nguoidung')->where('email', $email)->first();

        if ($data) {
            if (password_verify($password, $data->matKhau)) {
                $status = $data->trangThai;
                if ($status == 1) {
                    $quyen = $data->maQuyen;

                    request()->session()->put('user', $data);
                    if ($quyen == 1) {

                        return Redirect::to('/');
                    } else if ($quyen == 3 || $quyen == 4) {
                        return Redirect::to('/admin');
                    } else {
                        return Redirect::to('/login');
                    }
                } else {
                    request()->session()->put('msg', 'Tài khoản đã bị khoá!');
                    return Redirect::to('/login');
                }
            } else {
                request()->session()->put('msg', 'Mật khẩu không đúng!');
                return Redirect::to('/login');
            }
        } else {

            request()->session()->put('msg', 'Tài khoản không tồn tại!');
            return Redirect::to('/login');
        }
    }
}
