@extends('backend_pages.master_layout')
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
      </div>
      <div class="row">
         <div class="col col-12" id="box-list">
            <div class="list-result">
               <div class="list-result__box">
                  <h5 class="pb-4">Kết quả thanh tra tháng 6</h5>
                  <div class="filter-option">
                     Lọc theo tháng:
                     <select>
                        @foreach ($arr as $key => $item)
                        <option value={{$item}}>{{$item}}</option>
                        @endforeach
                     </select>
                  </div>
               </div>
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
                                 <button type="button" class="btn btn-link btn-link-detail" id="block-detail"
                                    data-iddetail="{{$item->maCSKD}}" data-makehoach="{{$item->maKHTT}}">Xem
                                    chi
                                    tiết</button>

                                 @if($item->trangThai === 2)
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

            <div class="col col-5" id="info-premises" style="display: none;">
               @include('backend_pages/pages/components/infoPremises')
            </div>

         </div>
      </div>
   </section>
   <!-- /.content -->
</div>

@endsection