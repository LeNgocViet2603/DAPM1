<header class="bg-green-600 sticky top-0 z-[999]">
    <div class="container mx-auto">
        <!-- main-header -->
        <div class="relative flex h-[8rem] items-center">
            <a href="/" class="bg-green-600 block w-[475px] border-logo h-full z-10">
                <img src="https://antoanthucpham.danang.gov.vn/image/company_logo?img_id=10834&t=1655276002575" alt="logo" class="object-cover">
            </a>
            <div class="banner-slider h-full flex-1 overflow-hidden -ml-24">
                <div>
                    <img src="https://antoanthucpham.danang.gov.vn/documents/10181/10940/05.png" alt="" class="object-cover w-full h-full">
                </div>
                <div>
                    <img src="https://antoanthucpham.danang.gov.vn/documents/10181/10940/06.png" alt="" class="object-cover w-full h-full">
                </div>
                <div>
                    <img src="https://antoanthucpham.danang.gov.vn/documents/10181/10940/03.png" alt="" class="object-cover w-full h-full">
                </div>
            </div>
            <?php
            $isLogin = request()->session()->get('user');
            if ($isLogin) {
            ?>
                <div class="absolute bottom-0 right-0 bg-green-500/80 space-x-2 flex items-center">
                    <span class="px-3 py-1 text-slate-900 font-bold text-sm"> Xin chào </span>
                    <button class="pr-3 py-1 text-slate-100 font-bold"> {{$isLogin->ho}} {{$isLogin->ten}}</button>
                </div>
            <?php
            } else { ?>
                <div class="absolute bottom-0 right-0 bg-green-500/80 space-x-2 flex items-center">
                    <button class=" px-3 py-1 text-slate-900 font-bold text-sm">
                        <a href="{{route('register')}}">
                            Đăng Ký
                        </a>
                    </button>
                    <span class="w-[1px] h-5 block bg-slate-900"></span>
                    <button class=" px-3 py-1 text-slate-900 font-bold text-sm"> <a href="{{route('login')}}">
                            Đăng Nhập
                        </a></button>
                </div>
            <?php
            }
            ?>
        </div>
        <!-- menu-header -->
        <ul class="flex text-sm items-center">
            <li class="flex-1 px-3 py-3 text-white font-bold uppercase cursor-pointer hover:bg-green-700 text-center">
                <a href="/">
                    trang chủ
                </a>
            </li>
            <li class="flex-1 px-3 py-3 text-white font-bold uppercase cursor-pointer hover:bg-green-700 text-center">
                giới thiệu
            </li>
            <li class="flex-1 px-3 py-3 text-white font-bold uppercase cursor-pointer hover:bg-green-700 text-center">
                tin tức - sự kiện
            </li>
            <li class="flex-1 px-3 py-3 text-white font-bold uppercase cursor-pointer hover:bg-green-700 text-center">
                thanh tra - kiểm tra
            </li>
            <li class="flex-1 px-3 py-3 text-white font-bold uppercase cursor-pointer hover:bg-green-700 text-center">
                hệ thống - văn bản
            </li>
            <li class="flex-1 px-3 py-3 text-white font-bold uppercase cursor-pointer hover:bg-green-700 text-center">
                truyền thông
            </li>
            <li class="flex-1 px-3 py-3 text-white font-bold uppercase cursor-pointer hover:bg-green-700 text-center">
                chứng nhận ATTP
            </li>
        </ul>

    </div>
</header>