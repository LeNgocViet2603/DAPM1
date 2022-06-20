@extends('layouts.layout')
@section('title')
<title>Trang Chủ</title>
@endsection

@section('content')
@include('components.search-bar')
<div class="grid grid-cols-10 space-x-8 p-4 container mx-auto">
    <div class="col-span-10 lg:col-span-7 pt-2 space-y-4">
        <div class="min-h-[300px] border-[1px] border-slate-900/30 shadow-md px-4 pb-10">
            <h1 class="p-3 font-bold py-3 border-b-[1px] border-slate-900/50">
                <span class="text-green-500 text-xl uppercase tracking-wider"> Kết quả tìm kiếm cho: </span>
                <span class="text-xl "> "{{$text}}"</span>
            </h1>
            @if(count($posts) == 0)
            <div class="text-center pt-10 font-bold text-xl text-pink-500 capitalize"> không có kết quả tìm kiếm phù hợp! </div>
            @else
            <div class="py-4 space-y-2 ">
                @foreach($posts as $post)
                <a class="flex min-h-24 gap-4 hover:bg-gray-400/40 cursor-pointer p-2 shadow-md" href="{{URL::to('/posts/'.$post->slug)}}">
                    <div class="h-28 w-[10rem]">
                        @if(isset($post->anhBia))
                        <img src="{{asset('images/'.$post->anhBia)}}" alt="" class="h-full object-cover w-full">
                        @else
                        <img src="{{asset('images/post-avatar/default-post-avatar.jpg')}}" alt="" class="h-full object-cover w-full">
                        @endif
                    </div>
                    <div class="flex-1 space-y-2">
                        <h1 class="text-teal-600 font-bold uppercase">
                            <?php
                            $content = preg_split('/\s/', $post->tieuDe);
                            $unicode = array(
                                'a' => 'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
                                'd' => 'đ',
                                'e' => 'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
                                'i' => 'í|ì|ỉ|ĩ|ị',
                                'o' => 'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
                                'u' => 'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
                                'y' => 'ý|ỳ|ỷ|ỹ|ỵ',
                                'A' => 'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
                                'D' => 'Đ',
                                'E' => 'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
                                'I' => 'Í|Ì|Ỉ|Ĩ|Ị',
                                'O' => 'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
                                'U' => 'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
                                'Y' => 'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
                            );
                            foreach ($unicode as $nonUnicode => $uni) {
                                $text = preg_replace("/($uni)/i", $nonUnicode, $text);
                                $post->tieuDe = preg_replace("/($uni)/i", $nonUnicode, $post->tieuDe);
                            }
                            $words = preg_split('/\s/', strtolower($post->tieuDe));
                            $searchWords = explode(' ', strtolower($text));
                            foreach ($words as $key => $word) {
                                if (in_array($word, $searchWords)) {
                                    $content[$key] = '<span class="bg-teal-700 px-1 text-slate-100">' . $content[$key] . '</span>';
                                }
                            }
                            echo implode(' ', $content);
                            ?>
                        </h1>
                        <p class="text-overflow">
                            <?php
                            $content = str_replace(array('<em>', '</em>', '<p>', '</p>', '<strong>', '</strong>', '<a>', '</a>', '<h1>', '</h1>'), '', $post->noiDung);
                            $content = preg_split('/\s/', $content);
                            $unicode = array(
                                'a' => 'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
                                'd' => 'đ',
                                'e' => 'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
                                'i' => 'í|ì|ỉ|ĩ|ị',
                                'o' => 'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
                                'u' => 'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
                                'y' => 'ý|ỳ|ỷ|ỹ|ỵ',
                                'A' => 'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
                                'D' => 'Đ',
                                'E' => 'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
                                'I' => 'Í|Ì|Ỉ|Ĩ|Ị',
                                'O' => 'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
                                'U' => 'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
                                'Y' => 'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
                            );
                            foreach ($unicode as $nonUnicode => $uni) {
                                $text = preg_replace("/($uni)/i", $nonUnicode, $text);
                                $post->noiDung = preg_replace("/($uni)/i", $nonUnicode, $post->noiDung);
                            }
                            $post->noiDung = str_replace(array('<em>', '</em>', '<p>', '</p>', '<strong>', '</strong>', '<a>', '</a>', '<h1>', '</h1>'), '', $post->noiDung);
                            $words = preg_split('/\s/', strtolower($post->noiDung));
                            $searchWords = explode(' ', strtolower($text));
                            $showKeyWords = $words;
                            $firstEllipsis = false;
                            foreach ($words as $key => $word) {
                                if (in_array($word, $searchWords)) {
                                    if ($key > 6 && $firstEllipsis == false) {
                                        echo '... ';
                                        $firstEllipsis = true;
                                    }
                                    $content[$key] = '<span class="bg-teal-700 px-1 text-slate-100">' . $content[$key] . '</span>';
                                    for ($i = $key - 7; $i <= $key + 7; $i++) {
                                        if ($i >= 0)
                                            $showKeyWords[$i] = '*true*';
                                    }
                                }
                            }
                            foreach ($content as $key => $word) {
                                if ($showKeyWords[$key] == '*true*') {
                                    echo $word . ' ';
                                } else if ($key > 1 && $showKeyWords[$key - 1] == '*true*' && $showKeyWords[$key] != '*true*') {
                                    echo '...';
                                }
                            }
                            ?>
                        </p>
                        <small class="block text-right text-teal-800">{{$post->ngayTao}}</small>
                    </div>
                </a>
                @endforeach
            </div>
            @endif
        </div>
    </div>
    @include('components.sidebar')
</div>
@endsection