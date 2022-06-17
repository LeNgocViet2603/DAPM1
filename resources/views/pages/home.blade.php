@extends('layouts.layout')
@section('title')
<title>Trang Chủ</title>
@endsection

@section('content')
<div class="">
    <div class="flex justify-between border-b-[1px] py-2 text-green-500 px-4">
        <p> Thứ 4, 15/6/2022 </p>
        <div class="ring-green-600 ring-2 text-black focus-within:ring-[3px] ">
            <input type="text" class="outline-none px-2">
            <button></button>
        </div>
    </div>
    <div class="grid grid-cols-10 space-x-8 p-4">
        <!-- main  -->
        <div class="col-span-10 lg:col-span-7 pt-2 space-y-4">

            <div class="min-h-[600px] border-[1px] border-slate-900 grid grid-cols-8 space-x-4">
                <div class="relative col-span-3">
                    <div>
                        <!-- list  -->
                    </div>
                    <span class="absolute col-span-3 px-3 py-1 bg-green-600 uppercase text-slate-100 translate-x-2 -translate-y-5 text-sm font-bold"> thông báo</span>
                </div>
                <div class="relative col-span-5">
                    <div>
                        <!-- list  -->
                    </div>
                    <span class="absolute col-span-3 px-3 py-1 bg-green-600 uppercase text-slate-100 translate-x-2 -translate-y-5 text-sm font-bold"> tin tức - sự kiện</span>
                </div>
            </div>

            <div>
                <img src="{{asset('images/banner CDS.jpg')}}" alt="" class="w-full">
            </div>
        </div>

        <div class="hidden lg:col-span-3 lg:block space-y-2">
            <div class="grid grid-cols-2 gap-2">

                <div class="flex gap-4 border-2 border-green-600 p-2 items-center text-green-600 cursor-pointer hover:bg-slate-200">
                    <div class="h-6 w-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">

                            <path d="M160 32V64H288V32C288 14.33 302.3 0 320 0C337.7 0 352 14.33 352 32V64H400C426.5 64 448 85.49 448 112V160H0V112C0 85.49 21.49 64 48 64H96V32C96 14.33 110.3 0 128 0C145.7 0 160 14.33 160 32zM0 192H448V464C448 490.5 426.5 512 400 512H48C21.49 512 0 490.5 0 464V192zM64 304C64 312.8 71.16 320 80 320H112C120.8 320 128 312.8 128 304V272C128 263.2 120.8 256 112 256H80C71.16 256 64 263.2 64 272V304zM192 304C192 312.8 199.2 320 208 320H240C248.8 320 256 312.8 256 304V272C256 263.2 248.8 256 240 256H208C199.2 256 192 263.2 192 272V304zM336 256C327.2 256 320 263.2 320 272V304C320 312.8 327.2 320 336 320H368C376.8 320 384 312.8 384 304V272C384 263.2 376.8 256 368 256H336zM64 432C64 440.8 71.16 448 80 448H112C120.8 448 128 440.8 128 432V400C128 391.2 120.8 384 112 384H80C71.16 384 64 391.2 64 400V432zM208 384C199.2 384 192 391.2 192 400V432C192 440.8 199.2 448 208 448H240C248.8 448 256 440.8 256 432V400C256 391.2 248.8 384 240 384H208zM320 432C320 440.8 327.2 448 336 448H368C376.8 448 384 440.8 384 432V400C384 391.2 376.8 384 368 384H336C327.2 384 320 391.2 320 400V432z" />
                        </svg>
                    </div>
                    <span class="font-bold"> Lịch công tác </span>
                </div>
                <div class="flex gap-4 border-2 border-green-600 p-2 items-center text-green-600 cursor-pointer hover:bg-slate-200">
                    <div class="h-6 w-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M448 336v-288C448 21.49 426.5 0 400 0H96C42.98 0 0 42.98 0 96v320c0 53.02 42.98 96 96 96h320c17.67 0 32-14.33 32-31.1c0-11.72-6.607-21.52-16-27.1v-81.36C441.8 362.8 448 350.2 448 336zM143.1 128h192C344.8 128 352 135.2 352 144C352 152.8 344.8 160 336 160H143.1C135.2 160 128 152.8 128 144C128 135.2 135.2 128 143.1 128zM143.1 192h192C344.8 192 352 199.2 352 208C352 216.8 344.8 224 336 224H143.1C135.2 224 128 216.8 128 208C128 199.2 135.2 192 143.1 192zM384 448H96c-17.67 0-32-14.33-32-32c0-17.67 14.33-32 32-32h288V448z" />
                        </svg>
                    </div>
                    <span class="font-bold"> Dự thảo góp ý </span>
                </div>
                <div class="flex gap-4 border-2 border-green-600 p-2 items-center text-green-600 cursor-pointer hover:bg-slate-200">
                    <div class="h-6 w-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 400c-18 0-32-14-32-32s13.1-32 32-32c17.1 0 32 14 32 32S273.1 400 256 400zM325.1 258L280 286V288c0 13-11 24-24 24S232 301 232 288V272c0-8 4-16 12-21l57-34C308 213 312 206 312 198C312 186 301.1 176 289.1 176h-51.1C225.1 176 216 186 216 198c0 13-11 24-24 24s-24-11-24-24C168 159 199 128 237.1 128h51.1C329 128 360 159 360 198C360 222 347 245 325.1 258z" />
                        </svg>
                    </div>
                    <span class="font-bold"> Hỏi đáp </span>
                </div>
                <div class="flex gap-4 border-2 border-green-600 p-2 items-center text-green-600 cursor-pointer hover:bg-slate-200">
                    <div class="h-6 w-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path d="M506.3 417l-213.3-364c-16.33-28-57.54-28-73.98 0l-213.2 364C-10.59 444.9 9.849 480 42.74 480h426.6C502.1 480 522.6 445 506.3 417zM232 168c0-13.25 10.75-24 24-24S280 154.8 280 168v128c0 13.25-10.75 24-23.1 24S232 309.3 232 296V168zM256 416c-17.36 0-31.44-14.08-31.44-31.44c0-17.36 14.07-31.44 31.44-31.44s31.44 14.08 31.44 31.44C287.4 401.9 273.4 416 256 416z" />
                        </svg>
                    </div>
                    <span class="font-bold"> Ngộ độc thực phẩm </span>
                </div>
                <div class="flex gap-4 border-2 border-green-600 p-2 items-center text-green-600 cursor-pointer hover:bg-slate-200">
                    <div class="h-6 w-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path d="M384 476.1L192 421.2V35.93L384 90.79V476.1zM416 88.37L543.1 37.53C558.9 31.23 576 42.84 576 59.82V394.6C576 404.4 570 413.2 560.9 416.9L416 474.8V88.37zM15.09 95.13L160 37.17V423.6L32.91 474.5C17.15 480.8 0 469.2 0 452.2V117.4C0 107.6 5.975 98.78 15.09 95.13V95.13z" />
                        </svg>
                    </div>
                    <span class="font-bold"> Kế hoạch - báo cáo </span>
                </div>
                <div class="flex gap-4 border-2 border-green-600 p-2 items-center text-green-600 cursor-pointer hover:bg-slate-200">
                    <div class="h-6 w-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path d="M180.7 4.686C186.9-1.562 197.1-1.562 203.3 4.686L283.3 84.69C285.8 87.2 287.4 90.48 287.9 94.02L328.1 416H55.88L96.12 94.02C96.57 90.48 98.17 87.2 100.7 84.69L180.7 4.686zM152 272C138.7 272 128 282.7 128 296C128 309.3 138.7 320 152 320H232C245.3 320 256 309.3 256 296C256 282.7 245.3 272 232 272H152zM352 448C369.7 448 384 462.3 384 480C384 497.7 369.7 512 352 512H32C14.33 512 0 497.7 0 480C0 462.3 14.33 448 32 448H352z" />
                        </svg>
                    </div>
                    <span class="font-bold"> Trung tâm kiểm nghiệm </span>
                </div>
            </div>
            <a class="block" href="/bantinattp">
                <img src="{{asset('images/bantinattp.png')}}" alt="" class="w-full">
            </a>
            <a class="block" href="/bantinattp">
                <img src="{{asset('images/ddn-min.png')}}" alt="" class="w-full">
            </a>
            <a class="block" href="/bantinattp">
                <img src="{{asset('images/dvc-t7-min.jpg')}}" alt="" class="w-full">
            </a>
            <a class="block" href="/bantinattp">
                <img src="{{asset('images/covic-19.jpg')}}" alt="" class="w-full">
            </a>
            <a class="block" href="/bantinattp">
                <img src="{{asset('images/logo-txngtp.jpg')}}" alt="" class="w-full">
            </a>
            <a class="block" href="/bantinattp">
                <img src="{{asset('images/logo-tthc.jpg')}}" alt="" class="w-full">
            </a>
        </div>
    </div>
</div>
@endsection