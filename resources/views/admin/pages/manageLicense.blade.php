@extends('admin.master_layout')
@section('title')
<title>Dashboard</title>
@endsection
@section('content')
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <!-- /.content-header -->

   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
         <div class="block-head">
            <h2>Danh sách những cơ sở kinh doanh không đủ tiêu chuẩn VSATTP </h2>
         </div>
         <form action="" class="form-option">
            <h5 class="pb-4">Kết quả thanh tra tháng: <span id="month-id"></span></h5>
            <div class="filter-option">
               Lọc theo tháng:
               <select name="month_option">
                  <option value=""> Tất cả </option>
                  @foreach ($arr as $key => $item)
                  <option value={{$item}}>{{$item}}</option>
                  @endforeach
               </select>

               <button type="submit" class="btn btn-primary" style="padding: 0 40px">Lọc</button>
            </div>
         </form>
         <div class="row">
            @if(count($getList) <=0) <div style="font-size: 20px; display: block;">Không có cơ sở nào vi phạm </div>
         @else
         <div class="col col-12" id="box-list">
            <div class="list-result">
               <div class="list-result__box">
                  <div class="list-result__wrapper">
                     <table class="table table-bordered">
                        <thead>
                           <tr>
                              <th scope="col">STT</th>
                              <th scope="col">Tên cơ sở</th>
                              <th scope="col">Số CN ATTP</th>
                              <th scope="col">Lỗi vi phạm</th>
                              <th scope="col">Hành động</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach ($getList as $key => $item)
                           <tr>
                              <th scope="row">{{$key + 1}}</th>
                              <td>{{$item->tenCSKD}}</td>
                              <td>{{$item->maGiayPhepATTP}}</td>
                              <td>{{$item->ketQuaThanhTra}}</td>
                              <td>
                                 <div class="action-wrapper">
                                    <button type="button" class="btn btn-link btn-link-detail" id="block-detail" data-iddetail="{{$item->maCSKD}}" data-makehoach="{{$item->maKHTT}}" style="border:none;border-radius: 5px;background:#076aff; padding: 4px 8px; color: white;">Xem
                                       chi
                                       tiết</button>

                                    @if($item->trangThai == 2)
                                    <p type="text" class="btn btn-danger" style="cursor: default">Đã thu hồi
                                    </p>
                                    @endif
                                 </div>
                              </td>
                           </tr>
                           @endforeach
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>

         <div class="col col-5" id="info-premises">
            @include('admin/pages/components/infoPremises')
         </div>
         @endif
      </div>
</div>
</section>
<!-- /.content -->
</div>

@endsection