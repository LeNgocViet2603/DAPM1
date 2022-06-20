<div class="sidebar">
   <!-- Sidebar user panel (optional) -->
   <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
         <img src="{{asset('admin/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
         <a href="#" class="d-block">Alexander Pierce</a>
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
         <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
               <i class="nav-icon fas fa-tachometer-alt"></i>
               <p>
                  Dashboard
                  <i class="right fas fa-angle-left"></i>
               </p>
            </a>
            <ul class="nav nav-treeview">
               <!--    <li class="nav-item">
                <a href="{{asset('admin/index.html')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li> -->
               <!-- <li class="nav-item">
                <a href="{{asset('admin/index2.html')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{asset('admin/index3.html')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li> -->
            </ul>
         </li>
         <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
               <i class="nav-icon fas fa-th"></i>
               <p class="">
                  tài khoản
                  <span class="right badge badge-danger">New</span>
               </p>
            </a>
         </li>
         <li class="nav-item">
            <a href="#" class="nav-link">
               <i class="nav-icon fas fa-copy"></i>
               <p>
                  Bài Đăng
                  <i class="fas fa-angle-left right"></i>
                  <span class="badge badge-info right">6</span>
               </p>
            </a>
            <ul class="nav nav-treeview">
               <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                     <i class="far fa-circle nav-icon"></i>
                     <p>Đăng Bài</p>
                  </a>
               </li>
               <li class="nav-item">
                  <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                     <i class="far fa-circle nav-icon"></i>
                     <p>Chỉnh sửa & Xoá</p>
                  </a>
               </li>

            </ul>
         </li>
         <li class="nav-item">
            <a href="{{route('statistics.statistics')}}" class="nav-link">
               <i class="nav-icon fas fa-chart-pie"></i>
               <p>
                  Statistics
                  <i class="right fas fa-angle-left"></i>
               </p>
            </a>
            <!-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ChartJS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Flot</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/uplot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>uPlot</p>
                </a>
              </li>
            </ul> -->
         </li>
         <li class="nav-item">
            <a href="#" class="nav-link">
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
            <a href="#" class="nav-link">
               <i class="nav-icon fas fa-edit"></i>
               <p>
                  Forms
                  <i class="fas fa-angle-left right"></i>
               </p>
            </a>
            <ul class="nav nav-treeview">
               <li class="nav-item">
                  <a href="pages/forms/general.html" class="nav-link">
                     <i class="far fa-circle nav-icon"></i>
                     <p>General Elements</p>
                  </a>
               </li>
               <li class="nav-item">
                  <a href="pages/forms/advanced.html" class="nav-link">
                     <i class="far fa-circle nav-icon"></i>
                     <p>Advanced Elements</p>
                  </a>
               </li>
               <li class="nav-item">
                  <a href="pages/forms/editors.html" class="nav-link">
                     <i class="far fa-circle nav-icon"></i>
                     <p>Editors</p>
                  </a>
               </li>
               <li class="nav-item">
                  <a href="pages/forms/validation.html" class="nav-link">
                     <i class="far fa-circle nav-icon"></i>
                     <p>Validation</p>
                  </a>
               </li>
            </ul>
         </li>
         <li class="nav-item">
            <a href="#" class="nav-link">
               <i class="nav-icon fas fa-table"></i>
               <p>
                  Tables
                  <i class="fas fa-angle-left right"></i>
               </p>
            </a>
            <ul class="nav nav-treeview">
               <li class="nav-item">
                  <a href="pages/tables/simple.html" class="nav-link">
                     <i class="far fa-circle nav-icon"></i>
                     <p>Simple Tables</p>
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
            </ul>
         </li>

      </ul>
   </nav>
   <!-- /.sidebar-menu -->
</div>