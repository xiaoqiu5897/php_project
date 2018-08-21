<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"></script>
  <link href="https://fonts.googleapis.com/css?family=Comfortaa|Cormorant+Garamond:600i|Playfair+Display:400i" rel="stylesheet">
  <style type="text/css">
  .data-list th,.data-list td{
    text-align: center;
  }
</style>
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>

      <!-- SEARCH FORM -->
      <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" href="index.php?mod=login&act=logout">
            <span >ĐĂNG XUẤT</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fa fa-th-large"></i></a>
          </li>
        </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
          <span class="brand-text font-weight-light" style="padding-left: 20px!important;">Zent Closet</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="img/me.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block">Thu Nguyễn</a>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item">
                <a href="index.php" class="nav-link">
                  <i class="nav-icon fa fa-dashboard"></i>
                  <p>
                    Bảng điều khiển
                  </p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="?mod=sale&act=createBill" class="nav-link">
                  <i class="nav-icon fa fa-book"></i>
                  <p>
                    Bán hàng
                  </p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="?mod=product&act=list" class="nav-link">
                  <i class="nav-icon fa fa-archive"></i>
                  <p>
                    Quản lý sản phẩm
                  </p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="?mod=customer&act=list" class="nav-link">
                  <i class="nav-icon fa fa-users"></i>
                  <p>
                    Quản lý khách hàng
                  </p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="?mod=employee&act=list" class="nav-link">
                  <i class="nav-icon fa fa-user"></i>
                  <p>
                    Quản lý nhân viên
                  </p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="?mod=bill&act=list" class="nav-link">
                  <i class="nav-icon fa fa-book"></i>
                  <p>
                    Quản lý hóa đơn
                  </p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="?mod=&act=list" class="nav-link">
                  <i class="nav-icon fa fa-book"></i>
                  <p>
                    Thống kê
                  </p>
                </a>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>