@extends('admin.master_layout')
@section('title')
<title>Admin | Statistics</title>
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">THỐNG KÊ</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Statistics</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <!-- begin container-fluid -->
        <div class="container-fluid">
            <!-- begin row filter-->
            <div class="form-filter">
            <form>
               <div class="row pb-4">
                  <div class="col col-4 cbb-filter">
                     <div class="form-item">
                        <span>Lĩnh vực</span>
                        <select class="cbb-input" name="service" id="">
                              <option value="0">Tất cả</option>
                           @foreach ($data['service'] as $item)
                              <option value="{{$item->maLoaiCSKD}}">{{$item->tenLoaiCSKD}}</option>
                           @endforeach
                        </select>

                     </div>
                  </div>

                  <div class=" col col-4 cbb-filter">
                     <div class="form-item">
                        <span>Tình trạng: </span>
                        <select class="cbb-input" name="status" id="">
                           <option value="0">Tất cả</option>
                           <option value="inactive">Không vi phạm</option>
                           <option value="active">Vi phạm</option>
                        </select>
                     </div>
                  </div>

                  <div class="col col-4 cbb-filter">
                     <div class="form-item">
                        <span>Quận/Huyện: </span>
                        <select class="cbb-input js-location" name="district" id="">
                              <option value="0">Tất cả</option>
                           @foreach ($data['district'] as $item)
                              <option value="{{$item->maQuanHuyen}}">{{$item->tenQuanHuyen}}</option>
                           @endforeach
                        </select>
                     </div>
                  </div>

                  <div class="col col-4 cbb-filter">
                     <div class="form-item">
                        <span>Phường/Xã: </span>
                        <select class="cbb-input" name="ward" id="">
                              <option value="0">Tất cả</option>
                           @foreach ($data['ward'] as $item)
                              <option value="{{$item->maPhuongXa}}">{{$item->tenPhuongXa}}</option>
                           @endforeach
                        </select>
                     </div>
                  </div>

                  

                  <div class="col col-4 btn-filter">
                     <!-- <div style="display: flex; justify-content: flex-end;"> -->
                     <button class="btn btn-primary" type="submit" id="submit-search">Thống kê</button>
                     <!-- </div> -->
                  </div>
               </div>
            </form>
         </div>
            <!-- end row -->
        </div>
        <!--/. container-fluid -->

        <!-- begin table -->
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

            <!-- begin paginate -->
            <div class="page-form">
                <div class="ew-page">
                    <span class="page">Trang thứ </span>
                    <input class="form-control" type="text" data-pagesize="100" data-pagecount="12" name="pageno" value="1">
                    <span class="total-page"> / 1</span>
                </div>

                <div class="ew-page">
                    <span class="total-result">Hiển thị <?php echo $stt-1 ?> của {{count(\app\Models\CoSoKinhDoanh::all())}} kết quả</span>
                </div>

                <div class="ew-page">
                    <span>Số hàng </span>
                    <select name="recperpage" class="line-number" id="">
                        <option value="10">10</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>

                <div class="report-btn">
                     <a href="{{route('statistics.download')}}" class="btn btn-primary">Xuất PDF</a>
                </div>
            </div>
            <!-- end paginate -->
        </div>
        <!-- end table -->

        <!-- begin chart -->
         <div class="chartbox">
            <h3>Biểu đồ</h3>
            <div class="chart-container">
               <canvas id="myChart"></canvas>
            </div>
         </div>
         <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
         <script>
            const data = {
               labels: [
                  'Nhà hàng ăn uống (<?php echo round($data['countpie1']*100/$data['countstore']); echo '%' ?>)',
                  'Cửa hàng ăn uống (<?php echo round($data['countpie2']*100/$data['countstore']); echo '%' ?>)',
                  'Chợ (<?php echo round($data['countpie3']*100/$data['countstore']); echo '%' ?>)',
                  'Sản Phẩm Cung Ứng (<?php echo round($data['countpie4']*100/$data['countstore']); echo '%' ?>)',
               ],

               datasets: [{
                  label: 'My First Dataset',
                  data: [
                     <?php echo $data['countpie1'] ?>,
                     <?php echo $data['countpie2'] ?>,
                     <?php echo $data['countpie3'] ?>,
                     <?php echo $data['countpie4'] ?>
                  ],
                  backgroundColor: [
                     'rgb(255, 99, 132)',
                     'rgb(54, 162, 235)',
                     'rgb(255, 205, 86)',
                     'rgb(75, 192, 192)'
                  ],
                  hoverOffset: 20 // Độ lệch khi hover
               }]
            };

            // const option = {

            // }

            const config = {
               type: 'pie',
               data: data
               // options: option
            };

            const myChart = new Chart(
               document.getElementById('myChart'),
               config
            );
         </script>
        <!-- end chart -->
    </section>
    <!-- /.content -->
  </div>

@endsection