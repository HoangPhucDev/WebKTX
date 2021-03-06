<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Quản trị</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="../../plugins/select2/select2.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>KTX</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>KTX</b> CTUET</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-table"></i> <span>Quản Lý</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="../../pages/choduyet.php"> Chờ Duyệt</a></li>
          </ul>
           <ul class="treeview-menu">
            <li ><a href="../../pages/khuvuc.php">Khu Vực</a></li>
          </ul>
           <ul class="treeview-menu">
            <li ><a href="../../pages/loaiphong.php">Loại Phòng</a></li>
          </ul>
           <ul class="treeview-menu">
            <li ><a href="../../pages/user.php">Người Dùng</a></li>
          </ul>
           <ul class="treeview-menu">
            <li ><a href="../../pages/phong.php"> Phòng</a></li>
          </ul>
           <ul class="treeview-menu">
            <li ><a href="../../pages/taisan.php"> Tài Sản</a></li>
          </ul>
            <ul class="treeview-menu">
                <li ><a href="../../pages/tintuc.php"> Tin Tức</a></li>
            </ul>
        </li>

          <li class="treeview active">
              <a href="#">
                  <i class="fa fa-dashboard"></i> <span>Chức Năng</span>
                  <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                  <li ><a href="../../../index.php"> Quay Về Trang Chủ</a></li>
              </ul>
              <ul class="treeview-menu">
                  <li ><a href="../../../logout.php"> Thoát</a></li>
              </ul>
          </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
