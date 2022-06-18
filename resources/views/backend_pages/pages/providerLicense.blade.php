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
      <div class="container">
         <div class="block-head">
            <h2>Cấp giấy chứng nhận vệ sinh ATTP </h2>
         </div>

         <div class="provider-form-search">
            <form>
               <div class="row pb-4">
                  <div class="col col-4">
                     <div class="provider-form__item">
                        <span>Lĩnh vực</span>
                        <select name="option" id="myselect">
                           <option value=""> Tất cả </option>
                           < @foreach ($option as $key=> $item)
                              <option value="{{$item->maLoaiCSKD}}">{{$item->tenLoaiCSKD}}</option>
                              @endforeach
                        </select>

                     </div>
                  </div>
                  <div class=" col col-4">
                     <div class="provider-form__item">
                        <span>Mã cơ sở: </span>
                        <input type="text" placeholder="Nhập mã cơ sở" id="search-input" name="search">
                     </div>
                  </div>
                  <div class="col col-4">
                     <!-- <div style="display: flex; justify-content: flex-end;"> -->
                     <button class="btn btn-primary" type="submit" id="submit-search">Tìm kiếm</button>
                     <!-- </div> -->
                  </div>
               </div>
            </form>
         </div>
         <div class="row">
            @if(count($postlist) <=0) <div style="font-size: 20px; display: block;">Không có cơ sở nào </div>
         @else
         <table class="table table-bordered">
            <h4>Danh sách cơ sở</h4>
            <thead>
               <tr>
                  <th scope="col">STT</th>
                  <th scope="col">Tên cơ sở</th>
                  <th scope="col">Mã cơ sở</th>
                  <th scope="col">Địa chỉ</th>
                  <th scope="col">Lĩnh vực</th>
                  <th scope="col">Hành động</th>
                  <th scope="col">Trạng thái</th>
               </tr>
            </thead>
            <tbody>
               @foreach ($postlist as $key => $item)
               <tr>
                  <th scope="row">{{$key + 1}}</th>
                  <td>{{$item->tenCSKD}}</td>
                  <td>{{$item->maCSKD}}</td>
                  <td>{{$item->diaChi}}</td>
                  <td>
                     {{$item->tenLoaiCSKD}}
                  </td>
                  <td>
                     <button type="button" class="btn btn-link" id="btn-detail" data-id="{{ $item->maCSKD}}">Xem chi
                        tiết </button>
                  </td>
                  <td>
                     @if($item->trangThaiGP === 1)
                     <p class="btn btn-success" style="cursor: default;">Đã cấp</p>
                     @else

                     <p class="btn btn-danger" style="cursor: default;">Chờ đợi</p>
                     @endif
                  </td>
               </tr>
               @endforeach
            </tbody>
         </table>
         @endif
      </div>
</div>
@include('backend_pages/pages/components/modal')
</section>
<!-- /.content -->
</div>

@endsection