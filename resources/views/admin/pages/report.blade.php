<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REPORT</title>

    <style>
        * {
            font-family: 'Roboto', sans-serif;
            font-size: 14px;
        }
        .titler {
            margin: 20px 0 10px 670px;
            text-transform: uppercase;
        }
    </style>
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('admin/css/adminlte.min.css')}}">

    <link rel="stylesheet" href="{{asset('admin/css/statistic.css')}}">
</head>
<body>
    <!-- begin table -->
    <h1 class="titler">Báo cáo</h1>
    <div class="row list-form">
        <h3>Danh sách cơ sở</h3>
        <table class="table table-bordered">
            <thead class="table-header">
                <tr>
                    <th scope="col" class="row-stt">STT</th>
                    <th scope="col" class="row-name">Tên cơ sở</th>
                    <th scope="col" class="row-cert">Số CN ATTP</th>
                    <th scope="col" class="row-address">Địa chỉ</th>
                    <th scope="col" class="row-areas">Lĩnh vực</th>
                    <!-- <th scope="col">Trạng thái</th> -->
                </tr>
            </thead>
            <tbody>
                <?php $stt = 1; ?>
                @foreach ($data['store'] as $item)
                    <tr>
                    <th scope="row">{{$stt++}}</th>
                    <td>{{$item->tenCSKD}}</td>
                    <td>
                        @if($item->trangThai === 1)
                            {{$item->maGiayPhepATTP}}
                        @else
                            <button type="button" class="btn btn-link error" id="btn-detail" data-id="{{ $item->maCSKD}}">Vi phạm</button>
                        @endif
                        </td>
                    <td>{{$item->diaChi}}</td>
                    <td>{{$item->tenLoaiCSKD}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- end table -->
</body>
</html>