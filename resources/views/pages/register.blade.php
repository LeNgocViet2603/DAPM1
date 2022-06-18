@extends('layouts.layout')
@section('title')
<title>Đăng kí</title>
@endsection

@section('content')
<div class="flex p-2 items-center border-b-[1px] border-slate-900">
    <a class="block text-xs px-3 py-2 font-bold cursor-pointer"> TRANG CHỦ </a>
    <span class="flex items-center w-3 h-3"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
            <path d="M246.6 233.4l-160-160c-12.5-12.5-32.75-12.5-45.25 0s-12.5 32.75 0 45.25L178.8 256l-137.4 137.4c-12.5 12.5-12.5 32.75 0 45.25C47.63 444.9 55.81 448 64 448s16.38-3.125 22.62-9.375l160-160C259.1 266.1 259.1 245.9 246.6 233.4zM438.6 233.4l-160-160c-12.5-12.5-32.75-12.5-45.25 0s-12.5 32.75 0 45.25L370.8 256l-137.4 137.4c-12.5 12.5-12.5 32.75 0 45.25C239.6 444.9 247.8 448 256 448s16.38-3.125 22.62-9.375l160-160C451.1 266.1 451.1 245.9 438.6 233.4z" />
        </svg>
    </span>
    <a class="block text-xs px-3 py-2 font-bold underline decoration-double underline-offset-2 cursor-pointer"> ĐĂNG KÍ </a>
</div>
<div class="flex min-h-[600px] p-20 py-12 justify-between gap-4">
    <div class="w-fit">
        <h1 class="text-green-600 font-bold text-center mb-7"> Ban Quản Lý An Toàn Thực Phẩm </h1>
        <?php
        $message = request()->session()->get('msg');
        if ($message) {
            echo '<small class="text-red-500 bg-red-400 font-bold px-4 py-1">' . $message . '<small>';
            request()->session()->put('msg', null);
        }
        ?>
        <form class="flex flex-col gap-4 py-6 space-y-4 w-[400px]" method="post">
            @csrf
            <div class="flex justify-between">
                <div class="w-[180px]">
                    <div class="relative flex justify-between">
                        <input class="peer w-full border-b-2 border-b-gray-400 bg-transparent p-2 text-sm placeholder-transparent focus:border-4 focus:border-b-slate-900 focus:outline-none focus:border-white" placeholder="Họ" id="firstName" name="firstName" />
                        <label for="firstName" class="pointer-events-none absolute left-0 -top-3.5 text-sm font-bold transition-all peer-placeholder-shown:top-3
                            peer-placeholder-shown:left-[11px] peer-placeholder-shown:font-normal peer-placeholder-shown:text-gray-400">
                            Họ
                        </label>
                    </div>
                </div>

                <div class="w-[180px]">
                    <div class="relative flex justify-between">
                        <input class="peer w-full border-b-2 border-b-gray-400 bg-transparent p-2 text-sm placeholder-transparent focus:border-4 focus:border-b-slate-900 focus:outline-none focus:border-white" placeholder="Họ" id="lastName" name="lastName" />
                        <label for="lastName" class="pointer-events-none absolute left-0 -top-3.5 text-sm font-bold transition-all peer-placeholder-shown:top-3
                            peer-placeholder-shown:left-[11px] peer-placeholder-shown:font-normal peer-placeholder-shown:text-gray-400">
                            Tên
                        </label>
                    </div>
                </div>
            </div>
            <div class="flex gap-6 mx-auto text-sm">
                <div class="flex items-center gap-2 ">
                    <label for="">Nam</label>
                    <input type="radio" name="gender" value="Nam" required>
                </div>
                <div class="flex items-center gap-2 ">
                    <label for="">Nữ</label>
                    <input type="radio" name="gender" value="Nữ">
                </div>
                <div class="flex items-center gap-2 ">
                    <label for="">Khác</label>
                    <input type="radio" name="gender" value="Khác">
                </div>
            </div>
            <div class="space-x-4">
                <label for="birthDay">Ngày sinh: </label>
                <input type="date" name="birthDay" id="birthDay" required>
            </div>
            <div class="w-[400px]">
                <div class="relative flex justify-between">
                    <input id="email" name="email" class="peer w-full border-b-2 border-b-gray-400 bg-transparent p-2 text-sm placeholder-transparent focus:border-4 focus:border-white focus:border-b-slate-900 focus:outline-none" placeholder="Email" type="email" required />
                    <label for="email" class="pointer-events-none absolute left-0 -top-3.5 text-sm font-bold transition-all peer-placeholder-shown:top-3
                        peer-placeholder-shown:left-[11px] peer-placeholder-shown:font-normal peer-placeholder-shown:text-gray-400">
                        Email
                    </label>
                </div>
            </div>
            <div class="w-[400px]">
                <div class="relative flex justify-between">
                    <input id="phone" name="phone" class="peer w-full border-b-2 border-b-gray-400 bg-transparent p-2 text-sm placeholder-transparent focus:border-4 focus:border-white focus:border-b-slate-900 focus:outline-none" placeholder="Số điện thoại" type="tel" pattern="[0-9]{10}" required />
                    <label for="phone" class="pointer-events-none absolute left-0 -top-3.5 text-sm font-bold transition-all peer-placeholder-shown:top-3
                        peer-placeholder-shown:left-[11px] peer-placeholder-shown:font-normal peer-placeholder-shown:text-gray-400">
                        Số điện thoại
                    </label>
                </div>
            </div>
            <div class="flex items-center gap-2">
                <div class="w-[230px]">
                    <div class="relative flex justify-between">
                        <input id="address" name="address" class="peer w-full border-b-2 border-b-gray-400 bg-transparent p-2 text-sm placeholder-transparent focus:border-4 focus:border-white focus:border-b-slate-900 focus:outline-none" placeholder="Địa chỉ" type="text" required />
                        <label for="address" class="pointer-events-none absolute left-0 -top-3.5 text-sm font-bold transition-all peer-placeholder-shown:top-3
                            peer-placeholder-shown:left-[11px] peer-placeholder-shown:font-normal peer-placeholder-shown:text-gray-400">
                            Địa chỉ
                        </label>
                    </div>
                </div>
                <div>
                    <select name="wardId" id="wardId" class="text-sm" required>
                        <option value="">Chọn phường xã</option>
                        @foreach($wards as $ward)
                        <option value="{{$ward->maPhuongXa}}">{{$ward->tenPhuongXa}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="w-[400px]">
                <div class="relative flex justify-between">
                    <input id="password" name="password" class="peer w-full border-b-2 border-b-gray-400 bg-transparent p-2 text-sm placeholder-transparent focus:border-4 focus:border-white focus:border-b-slate-900 focus:outline-none" placeholder="Mật khẩu" type="password" required />
                    <label for="password" class="pointer-events-none absolute left-0 -top-3.5 text-sm font-bold transition-all peer-placeholder-shown:top-3
                        peer-placeholder-shown:left-[11px] peer-placeholder-shown:font-normal peer-placeholder-shown:text-gray-400">
                        Mật khẩu
                    </label>
                </div>
            </div>
            <div class="w-[400px]">
                <div class="relative flex justify-between">
                    <input id="confirm-password" name="confirm-password" class="peer w-full border-b-2 border-b-gray-400 bg-transparent p-2 text-sm placeholder-transparent focus:border-4 focus:border-white focus:border-b-slate-900 focus:outline-none" placeholder="Nhập Lại Mật khẩu" type="password" required />
                    <label for="confirm-password" class="pointer-events-none absolute left-0 -top-3.5 text-sm font-bold transition-all peer-placeholder-shown:top-3
                        peer-placeholder-shown:left-[11px] peer-placeholder-shown:font-normal peer-placeholder-shown:text-gray-400">
                        Nhập Lại Mật khẩu
                    </label>
                </div>
            </div>

            <button type="submit" class="h-14 w-40 rounded-xl bg-green-600 text-slate-100 mx-auto !mt-10 font-bold">
                Đăng Kí
            </button>
        </form>
    </div>
    <div class="hidden md:block h-[400px]">
        <img src="{{asset('images/AN-TOAN-THUC-PHAM-LA-GI.jpg')}}" alt="" class="h-full object-cover">
    </div>
</div>
@endsection