@extends('layouts.layout')
@section('title')
<title>Đăng nhập</title>
@endsection

@section('content')
<div class="flex p-2 items-center border-b-[1px] border-slate-900">
    <a class="block text-xs px-3 py-2 font-bold cursor-pointer"> TRANG CHỦ </a>
    <span class="flex items-center w-3 h-3"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
            <path d="M246.6 233.4l-160-160c-12.5-12.5-32.75-12.5-45.25 0s-12.5 32.75 0 45.25L178.8 256l-137.4 137.4c-12.5 12.5-12.5 32.75 0 45.25C47.63 444.9 55.81 448 64 448s16.38-3.125 22.62-9.375l160-160C259.1 266.1 259.1 245.9 246.6 233.4zM438.6 233.4l-160-160c-12.5-12.5-32.75-12.5-45.25 0s-12.5 32.75 0 45.25L370.8 256l-137.4 137.4c-12.5 12.5-12.5 32.75 0 45.25C239.6 444.9 247.8 448 256 448s16.38-3.125 22.62-9.375l160-160C451.1 266.1 451.1 245.9 438.6 233.4z" />
        </svg>
    </span>
    <a class="block text-xs px-3 py-2 font-bold underline decoration-double underline-offset-2 cursor-pointer"> ĐĂNG NHẬP </a>
</div>
<div class="flex min-h-[600px] p-20 py-12 justify-between gap-4">
    <div class="w-fit">
        <h1 class="text-green-600 font-bold text-center mb-7"> Ban Quản Lý An Toàn Thực Phẩm </h1>
        <?php
        $message = request()->session()->get('msg');
        if ($message) {
            echo '<small class="text-slate-900 bg-red-400 font-bold px-4 py-1 rounded-xl">' . $message . '</small>';
            request()->session()->put('msg', null);
        }
        ?>
        <form class="flex flex-col gap-4 py-6 w-fit space-y-4" method="post">
            @csrf
            <div class="w-[400px]">
                <div class="relative flex justify-between">
                    <input class="peer w-full border-b-2 border-b-gray-400 bg-transparent p-2 text-sm placeholder-transparent focus:border-4 focus:border-b-slate-900 focus:outline-none focus:border-white" placeholder="Email or Phone" id="email" name="email" />
                    <label for="email" class="pointer-events-none absolute left-0 -top-3.5 text-sm font-bold transition-all peer-placeholder-shown:top-3
                        peer-placeholder-shown:left-[11px] peer-placeholder-shown:font-normal peer-placeholder-shown:text-gray-400">
                        Địa chỉ thư điện tử
                    </label>
                </div>

            </div>
            <div class="w-[400px]">
                <div class="relative flex justify-between">
                    <input id="password" name="password" class="peer w-full border-b-2 border-b-gray-400 bg-transparent p-2 text-sm placeholder-transparent focus:border-4 focus:border-white focus:border-b-slate-900 focus:outline-none" placeholder="Mật khẩu" type="password" />
                    <label for="password" class="pointer-events-none absolute left-0 -top-3.5 text-sm font-bold transition-all peer-placeholder-shown:top-3
                        peer-placeholder-shown:left-[11px] peer-placeholder-shown:font-normal peer-placeholder-shown:text-gray-400">
                        Mật khẩu
                    </label>
                </div>

            </div>
            <div class="flex items-center gap-2">
                <input type="checkbox" id="remember" name="remember" class="cursor-pointer">
                <label for="remember" class="text-sm cursor-pointer"> Ghi nhớ tôi! </label>
            </div>
            <button type="submit" class="h-14 w-40 rounded-xl bg-green-600 text-slate-100 mx-auto !mt-10 font-bold">
                Đăng Nhập
            </button>
        </form>
    </div>
    <div class="hidden md:block h-[400px]">
        <img src="{{asset('images/AN-TOAN-THUC-PHAM-LA-GI.jpg')}}" alt="" class="h-full object-cover">
    </div>
</div>
@endsection