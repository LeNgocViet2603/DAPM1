@extends('layouts.layout')
@section('title')
<title>{{$post->tieuDe}}</title>
@endsection

@section('content')
@include('components.search-bar')

<div class="grid grid-cols-10 space-x-8 p-4 container mx-auto">
    <!-- main content -->
    <div class="col-span-10 lg:col-span-7 space-y-4 border-t-8 border-green-700">
        <div class="min-h-[300px] border-[1px] border-slate-900/10 shadow-md p-4 pb-10">
            <h1 class="font-bold text-teal-600 text-xl mb-8">{{$post->tieuDe}} <small class="text-slate-900 font-normal">({{$post->ngayTao}})</small></h1>
            <div>
                <div class="post-content space-y-4">
                    <?php echo $post->noiDung ?>
                </div>
            </div>
        </div>
    </div>
    @include('components.sidebar')
</div>

@endsection