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
            <div class="provider-form-search">
            <form>
               <div class="row pb-4">
                  <div class="col col-4 cbb-filter">
                     <div class="provider-form__item">
                        <span>Lĩnh vực</span>
                        <select class="cbb-input" name="option" id="myselect">
                           <option value="">Tất cả</option>
                           <option value="">Dịch vụ ăn uống</option>
                           <option value="">Dịch vụ ăn uống</option>
                           <option value="">Dịch vụ ăn uống</option>
                           <option value="">Dịch vụ ăn uống</option>
                           <option value="">Dịch vụ ăn uống</option>
                           <option value="">Dịch vụ ăn uống</option>
                        </select>

                     </div>
                  </div>

                  <div class=" col col-4 cbb-filter">
                     <div class="provider-form__item">
                        <span>Tình trạng: </span>
                        <select class="cbb-input" name="option" id="myselect">
                           <option value="">Tất cả</option>
                           <option value="">Không vi phạm</option>
                           <option value="">Vi phạm</option>
                        </select>
                     </div>
                  </div>

                  <div class="col col-4 cbb-filter">
                     <div class="provider-form__item">
                        <span>Quận/Huyện: </span>
                        <select class="cbb-input" name="option" id="myselect">
                           <option value="">Tất cả</option>
                           <option value="">Hải Châu</option>
                           <option value="">Thanh Khuê</option>
                           <option value="">Liên Chiểu</option>
                           <option value="">Ngũ hành Sơn</option>
                           <option value="">Sơn Trà</option>
                           <option value="">Hòa Vang</option>
                           <option value="">Hoàng Sa</option>
                        </select>
                     </div>
                  </div>

                  <div class="col col-4 cbb-filter">
                     <div class="provider-form__item">
                        <span>Phường/Xã: </span>
                        <select class="cbb-input" name="option" id="myselect">
                           <option value="">Tất cả</option>
                           <option value="">Thanh Bình</option>
                           <option value="">Thanh Bình</option>
                           <option value="">Thanh Bình</option>
                           <option value="">Thanh Bình</option>
                           <option value="">Thanh Bình</option>
                           <option value="">Thanh Bình</option>
                           <option value="">Thanh Bình</option>
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
                     <th scope="col">STT</th>
                     <th scope="col">Tên cơ sở</th>
                     <th scope="col">Số CN ATTP</th>
                     <th scope="col">Địa chỉ</th>
                     <th scope="col">Lĩnh vực</th>
                     <!-- <th scope="col">Trạng thái</th> -->
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <th scope="row">1</th>
                     <td class="row-name">Địa điểm kinh doanh Phúc Long ĐNG 63 - KS - Chi nhánh Đà Nẵng - Công ty cổ phẩn Phúc Long Heritage</td>
                     <td>132/2022/ATTP-CNĐK</td>
                     <td>588 Phạm Hùng</td>
                     <td>Kinh doanh thực phẩm</td>
                  </tr>

                  <tr>
                     <th scope="row">2</th>
                     <td class="row-name">Địa điểm kinh doanh Phúc Long ĐNG 63 - KS - Chi nhánh Đà Nẵng - Công ty cổ phẩn Phúc Long Heritage</td>
                     <td>132/2022/ATTP-CNĐK</td>
                     <td>588 Phạm Hùng</td>
                     <td>Kinh doanh thực phẩm</td>
                  </tr>

                  <tr>
                     <th scope="row">3</th>
                     <td class="row-name">Địa điểm kinh doanh Phúc Long ĐNG 63 - KS - Chi nhánh Đà Nẵng - Công ty cổ phẩn Phúc Long Heritage</td>
                     <td>132/2022/ATTP-CNĐK</td>
                     <td>588 Phạm Hùng</td>
                     <td>Kinh doanh thực phẩm</td>
                  </tr>

                  <tr>
                     <th scope="row">4</th>
                     <td class="row-name">Địa điểm kinh doanh Phúc Long ĐNG 63 - KS - Chi nhánh Đà Nẵng - Công ty cổ phẩn Phúc Long Heritage</td>
                     <td>132/2022/ATTP-CNĐK</td>
                     <td>588 Phạm Hùng</td>
                     <td>Kinh doanh thực phẩm</td>
                  </tr>

                  <tr>
                     <th scope="row">5</th>
                     <td class="row-name">Địa điểm kinh doanh Phúc Long ĐNG 63 - KS - Chi nhánh Đà Nẵng - Công ty cổ phẩn Phúc Long Heritage</td>
                     <td>132/2022/ATTP-CNĐK</td>
                     <td>588 Phạm Hùng</td>
                     <td>Kinh doanh thực phẩm</td>
                  </tr>

                  <tr>
                     <th scope="row">6</th>
                     <td class="row-name">Địa điểm kinh doanh Phúc Long ĐNG 63 - KS - Chi nhánh Đà Nẵng - Công ty cổ phẩn Phúc Long Heritage</td>
                     <td>
                        <button type="button" class="btn btn-link error" id="btn-detail" data-id="">Vi phạm</button>
                     </td>
                     <td>588 Phạm Hùng</td>
                     <td>Kinh doanh thực phẩm</td>
                  </tr>

                  <tr>
                     <th scope="row">7</th>
                     <td class="row-name">Địa điểm kinh doanh Phúc Long ĐNG 63 - KS - Chi nhánh Đà Nẵng - Công ty cổ phẩn Phúc Long Heritage</td>
                     <td>132/2022/ATTP-CNĐK</td>
                     <td>588 Phạm Hùng</td>
                     <td>Kinh doanh thực phẩm</td>
                  </tr>

                  <tr>
                     <th scope="row">8</th>
                     <td class="row-name">Địa điểm kinh doanh Phúc Long ĐNG 63 - KS - Chi nhánh Đà Nẵng - Công ty cổ phẩn Phúc Long Heritage</td>
                     <td>132/2022/ATTP-CNĐK</td>
                     <td>588 Phạm Hùng</td>
                     <td>Kinh doanh thực phẩm</td>
                  </tr>

                  <tr>
                     <th scope="row">9</th>
                     <td class="row-name">Địa điểm kinh doanh Phúc Long ĐNG 63 - KS - Chi nhánh Đà Nẵng - Công ty cổ phẩn Phúc Long Heritage</td>
                     <td>132/2022/ATTP-CNĐK</td>
                     <td>588 Phạm Hùng</td>
                     <td>Kinh doanh thực phẩm</td>
                  </tr>

                  <tr>
                     <th scope="row">10</th>
                     <td class="row-name">Địa điểm kinh doanh Phúc Long ĐNG 63 - KS - Chi nhánh Đà Nẵng - Công ty cổ phẩn Phúc Long Heritage</td>
                     <td>132/2022/ATTP-CNĐK</td>
                     <td>588 Phạm Hùng</td>
                     <td>Kinh doanh thực phẩm</td>
                  </tr>
               </tbody>
            </table>

            <!-- begin paginate -->
            <div class="page-form">
                <div class="ew-page">
                    <span class="page">Trang thứ </span>
                    <input class="form-control" type="text" data-pagesize="100" data-pagecount="12" name="pageno" value="1">
                    <span class="total-page"> / 100</span>
                </div>

                <div class="ew-page">
                    <span class="total-result">Hiển thị 10 của 500 kết quả</span>
                </div>

                <div class="ew-page">
                    <span>Số hàng </span>
                    <select name="recperpage" class="line-number" id="">
                        <option value="10">10</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>
            </div>
            <!-- end paginate -->
        </div>
        <!-- end table -->
    </section>
    <!-- /.content -->
  </div>

@endsection