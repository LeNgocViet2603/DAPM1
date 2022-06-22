@extends('layouts.layout')
@section('title')
<title>{{$post->tieuDe}}</title>
@endsection

@section('content')
@include('components.search-bar')

<div class="grid grid-cols-10 space-x-8 p-4 container mx-auto px-14">
    <!-- main content -->
    <div class="col-span-10 lg:col-span-7 space-y-4 border-t-8 border-green-700">
        <div class="min-h-[300px] border-[1px] border-slate-900/10 shadow-md p-4 pb-10">
            <h1 class="font-bold text-teal-600 text-xl mb-8 border-b-[1px] border-teal-500/50 pb-4">{{$post->tieuDe}} <small class="text-slate-900 font-normal">({{$post->ngayTao}})</small></h1>
            <div>
                <div class="post-content space-y-4">
                    <?php echo $post->noiDung ?>
                </div>
            </div>
            <div class="text-right mt-4 italic px-4 capitalize text-gray-600">
                Ban quản lý
            </div>
        </div>
        <div class="min-h-[100px] border-[1px] border-slate-900/10 shadow-md p-4 pb-10">
            <h1 class="text-red-500 font-bold uppercase pb-4 underline underline-offset-2">Các tin khác</h1>
            <div class="space-y-2 px-4">
                @foreach($posts as $post)
                <a href="{{URL::to('/posts/'.$post->slug)}}" class="flex hover:text-red-400 text-sm gap-4 items-center">
                    <div class="h-3 w-3 text-red-400">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="currentColor">
                            <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path d="M246.6 233.4l-160-160c-12.5-12.5-32.75-12.5-45.25 0s-12.5 32.75 0 45.25L178.8 256l-137.4 137.4c-12.5 12.5-12.5 32.75 0 45.25C47.63 444.9 55.81 448 64 448s16.38-3.125 22.62-9.375l160-160C259.1 266.1 259.1 245.9 246.6 233.4zM438.6 233.4l-160-160c-12.5-12.5-32.75-12.5-45.25 0s-12.5 32.75 0 45.25L370.8 256l-137.4 137.4c-12.5 12.5-12.5 32.75 0 45.25C239.6 444.9 247.8 448 256 448s16.38-3.125 22.62-9.375l160-160C451.1 266.1 451.1 245.9 438.6 233.4z" />
                        </svg>
                    </div>
                    <p class="flex-1 truncate">
                        {{$post->tieuDe}}
                    </p>
                </a>
                @endforeach
            </div>
        </div>
    </div>
    @include('components.sidebar')
</div>

<script async src="https://widget.websitevoice.com/ICCJZN2UEr7BGKJqNP2ThQ"></script>
<script>
    window.wvData = window.wvData || {};

    function wvtag(a, b) {
        wvData[a] = b;
    }
    wvtag('id', 'ICCJZN2UEr7BGKJqNP2ThQ');
    wvtag('language', 'vi-VN');
    wvtag('widget-style', {
        backgroundColor: '#74C284'
    });
</script>

@endsection