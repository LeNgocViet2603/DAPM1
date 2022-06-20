@extends('layouts.layout')
@section('title')
<title>Trang Chủ</title>
@endsection

@section('content')
<div class="">
    <div class="sticky top-[172px] z-50 bg-white border-b-[1px] border-slate-900/20 ">
        <div class="container flex justify-between py-2 text-green-500 px-4 mx-auto">
            <p> Thứ 4, 15/6/2022 </p>
            <form class="ring-green-600 ring-2 text-black focus-within:ring-[3px]" method="get" action="{{URL::to('/search')}}">
                <input type="text" class="outline-none px-2" name="searchText">
                <button type="submit">tim</button>
            </form>
        </div>
    </div>
    <div class="grid grid-cols-10 space-x-8 p-4 container mx-auto">
        <!-- main  -->
        <div class="col-span-10 lg:col-span-7 pt-2 space-y-4">

            <div class="min-h-[600px] border-[1px] border-slate-900 grid grid-cols-8 space-x-4">
                <div class="relative col-span-3">
                    <div class="p-4 space-y-4">
                        <!-- list  -->
                        @foreach($posts as $key => $post)
                        @if(true)
                        <a class="text-slate-900 font-bold flex gap-4 items-center hover:text-green-600" href="">
                            <div class="h-4 w-4 text-teal-600">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="currentColor">
                                    <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path d="M246.6 233.4l-160-160c-12.5-12.5-32.75-12.5-45.25 0s-12.5 32.75 0 45.25L178.8 256l-137.4 137.4c-12.5 12.5-12.5 32.75 0 45.25C47.63 444.9 55.81 448 64 448s16.38-3.125 22.62-9.375l160-160C259.1 266.1 259.1 245.9 246.6 233.4zM438.6 233.4l-160-160c-12.5-12.5-32.75-12.5-45.25 0s-12.5 32.75 0 45.25L370.8 256l-137.4 137.4c-12.5 12.5-12.5 32.75 0 45.25C239.6 444.9 247.8 448 256 448s16.38-3.125 22.62-9.375l160-160C451.1 266.1 451.1 245.9 438.6 233.4z" />
                                </svg>
                            </div>
                            <p class="flex-1">
                                {{$post->tieuDe}}
                            </p>
                        </a>
                        @endif
                        @endforeach
                    </div>
                    <span class="absolute col-span-3 px-3 py-1 bg-green-600 uppercase text-slate-100 translate-x-2 -translate-y-5 text-sm font-bold top-0 left-0"> thông báo</span>
                </div>
                <div class="relative col-span-5">
                    <div class="p-4 space-y-2">
                        <!-- list  -->
                        @foreach($posts as $key => $post)
                        @if($key == 0)
                        <a class="relative text-slate-900 font-bold gap-4 hover:text-green-600 group !mb-4 block" href="">
                            <div class="h-[300px]">
                                <img src="{{asset('images/'.$post->anhBia)}}" alt="" class="w-full h-full object-cover">
                            </div>
                            <p class="absolute bottom-0 left-0 right-0 bg-black/70 text-slate-200 font-bold px-4 py-2">
                                {{$post->tieuDe}}
                            </p>
                            <div class="absolute inset-0 pointer-events-none group-hover:bg-black/30"></div>
                        </a>
                        @else
                        <a class="text-slate-900 font-bold flex gap-4 items-center hover:text-green-600" href="">
                            <div class="h-4 w-4 text-teal-600">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="currentColor">
                                    <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path d="M246.6 233.4l-160-160c-12.5-12.5-32.75-12.5-45.25 0s-12.5 32.75 0 45.25L178.8 256l-137.4 137.4c-12.5 12.5-12.5 32.75 0 45.25C47.63 444.9 55.81 448 64 448s16.38-3.125 22.62-9.375l160-160C259.1 266.1 259.1 245.9 246.6 233.4zM438.6 233.4l-160-160c-12.5-12.5-32.75-12.5-45.25 0s-12.5 32.75 0 45.25L370.8 256l-137.4 137.4c-12.5 12.5-12.5 32.75 0 45.25C239.6 444.9 247.8 448 256 448s16.38-3.125 22.62-9.375l160-160C451.1 266.1 451.1 245.9 438.6 233.4z" />
                                </svg>
                            </div>
                            <p class="flex-1">
                                {{$post->tieuDe}}
                            </p>
                        </a>
                        @endif
                        @endforeach
                    </div>
                    <span class="absolute col-span-3 px-3 py-1 bg-green-600 uppercase text-slate-100 translate-x-2 -translate-y-5 text-sm font-bold top-0 left-0"> tin tức - sự kiện</span>
                </div>
            </div>

            <div>
                <img src="{{asset('images/banner CDS.jpg')}}" alt="" class="w-full">
            </div>

            <div class="relative h-[250px] border-[1px] border-slate-900 !mt-10">
                <div class="flex h-full p-4 gap-6">
                    <div class="h-full w-[350px]">
                        @foreach($posts as $key => $post)
                        @if($post->maChuDe == 1)
                        <img src="{{asset('images/'.$post->anhBia)}}" alt="" class="w-full h-full object-cover">
                        @break
                        @endif
                        @endforeach
                    </div>
                    <div class="flex-1 space-y-2">
                        @foreach($posts as $key => $post)
                        @if(true)
                        @if($key == 0)
                        <a class="text-slate-900 font-bold block gap-4 hover:text-green-600 border-b-[1px] border-slate-900 pb-2 !mb-5" href="">
                            <p class="flex-1 text-green-600 uppercase">
                                {{$post->tieuDe}}
                            </p>
                        </a>
                        @elseif($key <= 5) <a class="text-slate-900 font-bold flex gap-4 items-center hover:text-green-600 text-sm" href="">
                            <div class="h-4 w-4 text-teal-600">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="currentColor">
                                    <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path d="M246.6 233.4l-160-160c-12.5-12.5-32.75-12.5-45.25 0s-12.5 32.75 0 45.25L178.8 256l-137.4 137.4c-12.5 12.5-12.5 32.75 0 45.25C47.63 444.9 55.81 448 64 448s16.38-3.125 22.62-9.375l160-160C259.1 266.1 259.1 245.9 246.6 233.4zM438.6 233.4l-160-160c-12.5-12.5-32.75-12.5-45.25 0s-12.5 32.75 0 45.25L370.8 256l-137.4 137.4c-12.5 12.5-12.5 32.75 0 45.25C239.6 444.9 247.8 448 256 448s16.38-3.125 22.62-9.375l160-160C451.1 266.1 451.1 245.9 438.6 233.4z" />
                                </svg>
                            </div>
                            <p class="flex-1">
                                {{$post->tieuDe}}
                            </p>
                            </a>
                            @endif
                            @endif
                            @endforeach
                    </div>
                </div>
                <span class="absolute col-span-3 px-3 py-1 bg-green-600 uppercase text-slate-100 -translate-y-5 text-sm font-bold top-0 left-3"> hoạt động chuyên môn/chuyên đề</span>
            </div>

            <div class="relative h-[250px] border-[1px] border-slate-900 !mt-10">
                <div class="flex h-full p-4 gap-6">
                    <div class="h-full w-[350px]">
                        @foreach($posts as $key => $post)
                        @if($post->maChuDe == 1)
                        <img src="{{asset('images/'.$post->anhBia)}}" alt="" class="w-full h-full object-cover">
                        @break
                        @endif
                        @endforeach
                    </div>
                    <div class="flex-1 space-y-2">
                        @foreach($posts as $key => $post)
                        @if(true)
                        @if($key == 0)
                        <a class="text-slate-900 font-bold block gap-4 hover:text-green-600 border-b-[1px] border-slate-900 pb-2 !mb-5" href="">
                            <p class="flex-1 text-green-600 uppercase">
                                {{$post->tieuDe}}
                            </p>
                        </a>
                        @elseif($key <= 5) <a class="text-slate-900 font-bold flex gap-4 items-center hover:text-green-600 text-sm" href="">
                            <div class="h-4 w-4 text-teal-600">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="currentColor">
                                    <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path d="M246.6 233.4l-160-160c-12.5-12.5-32.75-12.5-45.25 0s-12.5 32.75 0 45.25L178.8 256l-137.4 137.4c-12.5 12.5-12.5 32.75 0 45.25C47.63 444.9 55.81 448 64 448s16.38-3.125 22.62-9.375l160-160C259.1 266.1 259.1 245.9 246.6 233.4zM438.6 233.4l-160-160c-12.5-12.5-32.75-12.5-45.25 0s-12.5 32.75 0 45.25L370.8 256l-137.4 137.4c-12.5 12.5-12.5 32.75 0 45.25C239.6 444.9 247.8 448 256 448s16.38-3.125 22.62-9.375l160-160C451.1 266.1 451.1 245.9 438.6 233.4z" />
                                </svg>
                            </div>
                            <p class="flex-1">
                                {{$post->tieuDe}}
                            </p>
                            </a>
                            @endif
                            @endif
                            @endforeach
                    </div>
                </div>
                <span class="absolute col-span-3 px-3 py-1 bg-green-600 uppercase text-slate-100 -translate-y-5 text-sm font-bold top-0 left-3"> Truyền Thông </span>
            </div>

            <div class="relative h-[250px] border-[1px] border-slate-900 !mt-10">
                <div class="flex h-full p-4 gap-6">
                    <div class="h-full w-[350px]">
                        @foreach($posts as $key => $post)
                        @if($post->maChuDe == 1)
                        <img src="{{asset('images/'.$post->anhBia)}}" alt="" class="w-full h-full object-cover">
                        @break
                        @endif
                        @endforeach
                    </div>
                    <div class="flex-1 space-y-2">
                        @foreach($posts as $key => $post)
                        @if(true)
                        @if($key == 0)
                        <a class="text-slate-900 font-bold block gap-4 hover:text-green-600 border-b-[1px] border-slate-900 pb-2 !mb-5" href="">
                            <p class="flex-1 text-green-600 uppercase">
                                {{$post->tieuDe}}
                            </p>
                        </a>
                        @elseif($key <= 5) <a class="text-slate-900 font-bold flex gap-4 items-center hover:text-green-600 text-sm" href="">
                            <div class="h-4 w-4 text-teal-600">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="currentColor">
                                    <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path d="M246.6 233.4l-160-160c-12.5-12.5-32.75-12.5-45.25 0s-12.5 32.75 0 45.25L178.8 256l-137.4 137.4c-12.5 12.5-12.5 32.75 0 45.25C47.63 444.9 55.81 448 64 448s16.38-3.125 22.62-9.375l160-160C259.1 266.1 259.1 245.9 246.6 233.4zM438.6 233.4l-160-160c-12.5-12.5-32.75-12.5-45.25 0s-12.5 32.75 0 45.25L370.8 256l-137.4 137.4c-12.5 12.5-12.5 32.75 0 45.25C239.6 444.9 247.8 448 256 448s16.38-3.125 22.62-9.375l160-160C451.1 266.1 451.1 245.9 438.6 233.4z" />
                                </svg>
                            </div>
                            <p class="flex-1">
                                {{$post->tieuDe}}
                            </p>
                            </a>
                            @endif
                            @endif
                            @endforeach
                    </div>
                </div>
                <span class="absolute col-span-3 px-3 py-1 bg-green-600 uppercase text-slate-100 -translate-y-5 text-sm font-bold top-0 left-3"> hoạt động thanh tra kiểm tra </span>
            </div>

            <div>
                <img src="{{asset('images/bannerHaidao.jpg')}}" alt="" class="w-full">
            </div>

        </div>

        @include('components.sidebar')
    </div>
</div>
@endsection