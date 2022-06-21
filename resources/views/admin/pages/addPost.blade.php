@extends('admin.master_layout')
@section('title')
<title>Bài đăng</title>
@endsection
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6 d-flex flex-row pl-2">
          @if(isset($post))
          <h1 class="m-0">CHỈNH SỬA BÀI ĐĂNG <?php if ($post->trangThai == 0) echo '<span style="font-size: 14px; color: orange"> Bản Nháp </span>';
                                              else if ($post->trangThai == 1) echo '<span style="font-size: 14px; color: green"> Đã Công Khai </span>';
                                              else echo '<span style="font-size: 14px; color: red"> Bản Đã Xoá </span>' ?></h1>
          @else
          <h1 class="m-0">THÊM BÀI ĐĂNG</h1>
          @endif
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
        @if(isset($post))
        @method('PUT')
        @endif
        <div class="row">
          <div class="col-9">
            <div class="d-flex flex-column">
              <label for="">Tiêu đề</label>
              <input type="text" name="title" id="title" value="<?php if (isset($post)) echo $post->tieuDe;
                                                                else echo ''; ?>" required>


              <label for="slug">Slug</label>
              <div class="d-flex">
                <input type="text" required style="flex: 1" name="slug" id='slug' value="<?php if (isset($post)) echo $post->slug;
                                                                                          else echo ''; ?>">
                <button id="create-slug"> Tạo </button>
              </div>
              <label for="">Nội dung</label>
              <textarea name="content" id="contentPost" cols="30" rows="10"></textarea>
              <textarea style="display: none;" id="content-draft" cols="30" rows="10">
                @if(isset($post))
                   {{$post->noiDung}}
               @endif
              </textarea>

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
                <input class="form-check-input" type="radio" name="category" value="{{$row->maChuDe}}" id="{{$row->tenChuDe.$key}}" required <?php if (isset($post)) if ($row->maChuDe == $post->maChuDe) echo 'checked' ?>>
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