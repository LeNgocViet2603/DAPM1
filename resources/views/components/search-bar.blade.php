<div class="sticky top-[172px] z-50 bg-white border-b-[1px] border-slate-900/20 ">
    <div class="container flex justify-between py-2 text-green-500 px-4 mx-auto">
        <p><?php
            date_default_timezone_set("Asia/Ho_Chi_Minh");
            $today = getDate();
            switch ($today['weekday']) {
                case 'Monday':
                    $today['weekday'] = 'Thứ Hai';
                    break;
                case 'Tuesday':
                    $today['weekday'] = 'Thứ Ba';
                    break;
                case 'Wednesday':
                    $today['weekday'] = 'Thứ Tư';
                    break;
                case 'Thursday':
                    $today['weekday'] = 'Thứ Năm';
                    break;
                case 'Friday':
                    $today['weekday'] = 'Thứ Sáu';
                    break;
                case 'Saturday':
                    $today['weekday'] = 'Thứ Bảy';
                    break;
                case 'Sunday':
                    $today['weekday'] = 'Chủ Nhật';
                    break;
            }
            echo $today['weekday'] . ', ' . $today['mday'] . '/' . $today['mon'] . '/' . $today['year']
            ?></p>
        <form class="ring-green-600 ring-2 text-black focus-within:ring-[3px]" method="get" action="{{URL::to('/search')}}">
            <div class="flex justify-between">
                <input type="text" class="outline-none px-2" name="searchText">
                <button type="submit" class="px-3 font-bold border-l-2 text-sm uppercase bg-slate-300">
                    <div class="h-4 w-4 text-green-500">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor">
                            <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z" />
                        </svg>
                    </div>
                </button>
            </div>
        </form>
    </div>
</div>