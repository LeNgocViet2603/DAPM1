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
            <input type="text" class="outline-none px-2" name="searchText">
            <button type="submit">tim</button>
        </form>
    </div>
</div>