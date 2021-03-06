@extends('admin.master_layout')
@section('title')
<title>Thêm bài đăng</title>
@endsection
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6 d-flex flex-row pl-2">
          <h1 class="m-0">Thêm bài đăng</h1>

        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Bài viết</a></li>
            <li class="breadcrumb-item active">Thêm</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <form method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-9">
            <div class="d-flex flex-column">
              <label for="">Tiêu đề</label>
              <input type="text" name="title" value="<?php if (isset($post)) echo $post->tieuDe;
                                                      else echo ''; ?>">
              <label for="">Nội dung</label>
              <textarea name="content" id="contentPost" cols="30" rows="10"></textarea>
            </div>
          </div>
          <div class="col-3">
            <div class="btn-operator d-flex justify-content-center shadow-sm p-3 mb-5 bg-white rounded">
              <button class="btn btn-info mr-3" type="submit">Lưu nháp</button>
              <button class="btn btn-success" type="submit">Xuất bản</button>
            </div>
            <div class="category d-flex flex-column shadow-sm p-3 mb-5 bg-white rounded">
              <p> <b>Chọn danh mục</b> </p>
              <div class="form-check">
                @foreach($data as $key => $row)
                <input class="form-check-input" type="radio" name="category" value="{{$row->maChuDe}}" id="{{$row->tenChuDe.$key}}">
                <label class="form-check-label" for="{{$row->tenChuDe.$key}}">
                  {{$row->tenChuDe}}
                </label><br>
                @endforeach

              </div>

            </div>
            <div class="chooseAvatarPost shadow-sm p-3 mb-5 bg-white rounded">
              <p class="border-bottom"> <b>Chọn ảnh đại diện</b></p>
              <div class="chooseFile">
                <input type="file" name="image" id="" value="/images/post-avatar/AN-TOAN-THUC-PHAM-LA-GI.jpg">
              </div>
            </div>
          </div>
        </div>
      </form>

    </div>
  </section>
  <!-- /.content -->
</div>
@endsection