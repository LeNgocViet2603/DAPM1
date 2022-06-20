@extends('admin.master_layout')
@section('title')
<title>Quản lí bài đăng</title>
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 d-flex flex-row pl-2">
                    <h1 class="m-0">Bài viết</h1>
                    <button class="btn-addpost ml-3"><a href="{{route('admin.addPost')}}" class="text-white">Thêm bài đăng</a> </button>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Bài viết</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="sub">
                    <ul>
                        <li><a href="#">Tất cả ({{$allPosts}})</a></li>
                        <li><a href="#">Đã xuất bản ({{$postPublished}})</a></li>
                        <li><a href="#">Bản nháp ({{$postDrag}})</a></li>
                        <li><a href="#">Thùng rác</a></li>
                    </ul>
                    <form class="search_post">
                        <input type="search" name="" id="">
                        <button type="submit" class="bg-success text-white"><i class="fa fa-search" aria-hidden="true"></i>Tìm</button>
                    </form>
                </div>
            </div>
            <div class="filter" style="display: flex; align-items:center;">
                <div class="chooseOperator">
                    <select class="form-select form-select-sm border border-success p-2">
                        <option selected>Chọn tác vụ</option>
                        <option value="1">Chỉnh sửa</option>
                        <option value="2">Xóa</option>
                        <option value="3">Lưu nháp</option>
                    </select>
                    <button type="submit" class="btn btn-primary">Áp dụng</button>
                </div>
                <div class="chooseCategory">
                    <select name="" id="" class="form-select border border-info p-2">
                        <option value="">Chọn danh mục</option>
                        @foreach($data as $row)
                        <option value="{{$row->maChuDe}}">{{$row->tenChuDe}}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn btn-warning">Lọc</button>
                </div>
            </div>
            <!-- Table with panel -->
            <div class="col-12 card card-cascade narrower">
                <div class="px-4">
                    <div class="table-wrapper">
                        <!--Table-->
                        <table class="table table-hover mb-0">

                            <!--Table head-->
                            <thead>
                                <tr>
                                    <th>
                                        <input class="form-check-input" type="checkbox" id="checkbox">
                                        <label class="form-check-label" for="checkbox" class="mr-2 label-table"></label>
                                    </th>
                                    <th class="th-lg">
                                        <a href="#">Tiêu đề
                                    </th>
                                    <th class="th-lg">
                                        <a href="#">Tác giả</a>
                                    </th>
                                    <th class="th-lg">
                                        <a href="#">Chủ đề </a>
                                    </th>
                                    <th class="th-lg">
                                        <a href="#">Thời gian
                                        </a>
                                    </th>
                                </tr>
                            </thead>
                            <!--Table head-->

                            <!--Table body-->
                            <tbody>
                                @foreach($posts as $item)
                                <tr>
                                    <th scope="row">
                                        <input class="form-check-input" type="checkbox" id="checkbox1">
                                        <label class="form-check-label" for="checkbox1" class="label-table"></label>
                                    </th>
                                    <td style="width:350px;"><a style="overflow: hidden;text-overflow: ellipsis;
                            display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;" href="#">{{$item->tieuDe}}</a></td>
                                    <td>{{$item->ten}}</td>
                                    <td>{{$item->tenChuDe}}</td>
                                    <td>{{$item->ngayTao}}</td>
                                    <td>
                                        <button> <a href="{{URL::to('/admin-page/posts/'.$item->maBaiDang)}}">Chinh sua</a></button>
                                        <button>Xoá</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <!--Table body-->
                        </table>
                        <!--Table-->
                    </div>
                </div>
            </div>
            <!-- Table with panel -->
        </div>
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
@endsection