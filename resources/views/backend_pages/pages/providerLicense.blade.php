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
            <form action="">
               <div class="row pb-4">
                  <div class="col col-4">
                     <div class="provider-form__item">
                        <span>Lĩnh vực</span>
                        <select name="myselect" id="myselect">
                           <option value="1" selected='selected'>-- Chọn ngành kinh doanh -- </option>
                           <option value="2">Item 2</option>
                        </select>

                     </div>
                  </div>
                  <div class="col col-4">
                     <div class="provider-form__item">
                        <span>Mã cơ sở: </span>
                        <input type="text" placeholder="Nhập mã cơ sở">
                     </div>
                  </div>
                  <div class="col col-4">
                     <!-- <div style="display: flex; justify-content: flex-end;"> -->
                     <button class="btn btn-primary">Tìm kiếm</button>
                     <!-- </div> -->
                  </div>
               </div>
            </form>
         </div>
         <div class="row">
            <h4>Danh sách cơ sở</h4>
            <table class="table table-bordered">
               <thead>
                  <tr>
                     <th scope="col">STT</th>
                     <th scope="col">Tên cơ sở</th>
                     <th scope="col">Mã cơ sở</th>
                     <th scope="col">Địa chỉ</th>
                     <th scope="col">Lĩnh vực</th>
                     <th scope="col">Hành động</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <th scope="row">1</th>
                     <td>Địa Điểm Kinh Doanh Phúc Long ĐNG 63 - KS - Chi nhánh Đà Nẵng - Công ty Cổ phần
                        Phúc Long
                        Heritage</td>
                     <td>132/2022/ATTP-CNĐK</td>
                     <td>Lô 38, 39, B1.17, KĐT Sinh thái ven sông Hòa Xuân</td>
                     <td>
                        Công nghiệp
                     </td>
                     <td><button type="button" class="btn btn-link">Xem chi tiết</button></td>
                  </tr>
                  <tr>
                     <th scope="row">2</th>
                     <td>Địa Điểm Kinh Doanh Phúc Long ĐNG 63 - KS - Chi nhánh Đà Nẵng - Công ty Cổ phần
                        Phúc Long
                        Heritage</td>
                     <td>132/2022/ATTP-CNĐK</td>
                     <td>Lô 38, 39, B1.17, KĐT Sinh thái ven sông Hòa Xuân</td>
                     <td>
                        Công nghiệp
                     </td>
                     <td><button type="button" class="btn btn-link">Xem chi tiết</button></td>

                  </tr>
                  <tr>
                     <th scope="row">3</th>
                     <td>Địa Điểm Kinh Doanh Phúc Long ĐNG 63 - KS - Chi nhánh Đà Nẵng - Công ty Cổ phần
                        Phúc Long
                        Heritage</td>
                     <td>132/2022/ATTP-CNĐK</td>
                     <td>Lô 38, 39, B1.17, KĐT Sinh thái ven sông Hòa Xuân</td>
                     <td>
                        Công nghiệp
                     </td>
                     <td><button type="button" class="btn btn-link">Xem chi tiết</button></td>

                  </tr>
               </tbody>
            </table>
         </div>
      </div>

      <button id="myBtn">Open Modal</button>
      <div id="myModal" class="modal">
         <!-- Modal content -->
         <div class="modal-content">
            <span class="close">&times;</span>
            <h2 style="text-align: center">Thông tin cơ sở kinh doanh</h2>
            <ul class="info-sup__list pt-2">
               <li class="info-sup__list-item">
                  <span>
                     <span class="title">Mã cơ sở: </span>
                     <span>CSKDCN01</span>
                  </span>
               </li>
               <li class="info-sup__list-item">
                  <span>
                     <span class="title">Tên chủ cơ sở: </span>
                     <span>Nguyễn Quang Huy</span>
                  </span>

               </li>
               <li class="info-sup__list-item">
                  <span>
                     <span class="title">Tên cơ sở: </span>
                     <span>Địa Điểm Kinh Doanh Phúc Long ĐNG 63 - KS - Chi nhánh Đà Nẵng - Công ty Cổ phần Phúc Long
                        Heritage</span>
                  </span>
               </li>
               <li class="info-sup__list-item">
                  <span>
                     <span class="title">Địa chỉ: </span>
                     <span>Lô 38, 39, B1.17, KĐT Sinh thái ven sông Hòa Xuân</span>
                  </span>
               </li>

               <li class="info-sup__list-item">
                  <span>
                     <span class="title">Dịch vụ kinh doanh: </sơam>
                        <span>Công nghiệp</span>
                     </span>
               </li>
               <li class="info-sup__list-item">
                  <div class="box-time-licence">
                     <div>
                        Từ ngày:
                        <input type="date" id="start" name="trip-start" value="2018-07-22" min="2018-01-01"
                           max="2018-12-31">
                     </div>
                     <div>
                        Từ ngày:
                        <input type="date" id="start" name="trip-start" value="2018-07-22" min="2018-01-01"
                           max="2018-12-31">
                     </div>
                  </div>
               </li>
               <i>*Chứng nhập đạt yêu cầu vệ sinh an toàn thực phẩm</i>
               <div class="pt-4">
                  <button type="button" class="btn btn-primary">Cấp giấy chứng nhận
                  </button>
                  <button type="button" class="btn btn-danger">Đóng</button>
               </div>
            </ul>
         </div>
      </div>
   </section>
   <!-- /.content -->
</div>

@endsection