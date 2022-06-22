<div class="sidebar">

  <!-- Sidebar user panel (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <!-- <div class="image">
      <img src="{{asset('backend/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
    </div> -->
    <div class="info">
      <a href="#" class="d-block">Xin chào <span style="font-weight: bold;">
          {{request()->session()->get('user')->ho}} {{request()->session()->get('user')->ten}}
        </span></a>
    </div>
  </div>

  <!-- SidebarSearch Form -->
  <div class="form-inline">
    <div class="input-group" data-widget="sidebar-search">
      <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-sidebar">
          <i class="fas fa-search fa-fw"></i>
        </button>
      </div>
    </div>
  </div>

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-edit"></i>
          <p>
            Tài Khoản
            <i class="fas right"></i>
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{route('admin.posts')}}" class="nav-link">
          <i class="nav-icon fas fa-table"></i>
          <p>
            Bài Đăng
            <i class="fas right"></i>
          </p>
        </a>
        <!--   <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="pages/tables/simple.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Danh sách bài đăng</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/tables/data.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>DataTables</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/tables/jsgrid.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>jsGrid</p>
            </a>
          </li>
        </ul> -->
      </li>



      <li class="nav-item">
        <a class="nav-link">
          <i class="nav-icon fas fa-edit"></i>
          <p>
            Giấy chứng nhận ATTP
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="provider-license" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Cấp giấy phép</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="manage-license" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Thu hồi giấy phép</p>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a href="{{route('statistics.statistics')}}" class="nav-link">
          <i class="nav-icon fas fa-edit"></i>
          <p>
            Thống kê
            <i class="fas right"></i>
          </p>
        </a>

      </li>

      <li class="nav-item">
        <a href="{{route('index')}}" class="nav-link">
          <i class="nav-icon fas fa-edit"></i>
          <p>
            Trang chủ
            <i class="fas right"></i>
          </p>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>

<!-- /.sidebar-menu -->
</div>