<!DOCTYPE html>
<html>
<head>
    <title>KTX Đại học Kỹ Thuật Công Nghệ Cần Thơ</title>
    <link rel="shortcut icon" href="./Images/logo.jpg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <meta content='1594821870830928' property='fb:app_id' />
    <script src="./Content/Script/jquery-1.9.1.min.js"></script>
    <link href="./Content/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./Content/css/normalize.css" rel="stylesheet" />
    <link href="./Content/css/styleTrangSinhVien.css" rel="stylesheet" />
    <link href="./Content/css/font-awesome.min.css" rel="stylesheet" />
    <link href="./Content/css/jquery.mmenu.all.css" rel="stylesheet" />
</head>
<body>
    <div id="page">
        <div id="wrapper-header">
            <div id="header" class="container">
                <div id="header-logo">
                    <a href="index.html">
                        <div id="header-logo-img">
                        </div>
                        <div id="header-logo-infologo">
                            <h4>KÝ TÚC XÁ ĐẠI HỌC KỸ THUẬT - CÔNG NGHỆ CẦN THƠ</h3>
                            <p>Dormitory of Can Tho University of Technology</p>
                        </div>
                    </a>
                </div>
                <div id="header-nav">
                    <div id="header-nav-sub">
                        <div class="col-sm-offset-5 col-sm-7 input-group">
                            <input type="text" class="form-control" placeholder="Nhập họ tên hoặc MSSV" id="txtTimKiem" name="txtTimKiem">
                            <span class="input-group-btn">
                                <button class="btn btn-success" type="button" onclick="TimKiem();"><span class="glyphicon glyphicon-search"></span>Tìm kiếm</button>
                            </span>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div id="header-nav-main">
                        <ul class="nav navbar-nav">
                        <li><a href="index.php">TRANG CHỦ</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown">KÝ TÚC XÁ</a>
                                <ul class="dropdown-menu menumarchil">
                                    <li><a href="gioithieu.html">Giới thiệu Ký túc xá</a></li>
                                    <li><a href="tochuc.html">Tổ Chức Sinh Viên</a></li>                                    
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown">SINH VIÊN</a>
                                <ul class="dropdown-menu menumarchil">
                                        <li><a href="huongdan.html">Hướng dẫn đăng ký</a></li>
                                        <li><a href="dangky.php">Đăng ký online</a></li>
                                </ul>
                            </li>                            
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown">Cơ Sở Vật Chất</a>
                                <ul class="dropdown-menu menumarchil">
                                    <li><a href="xemphong.php">Thông Tin Phòng</a></li>
                                    <li><a href="chitietphong.html">Chi Tiết Phòng Ở</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
<style>
    .jssorb05 {
        position: absolute;
    }

        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            width: 16px;
            height: 16px;
            background: url('./Images/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }

        .jssorb05 div {
            background-position: -7px -7px;
        }

            .jssorb05 div:hover, .jssorb05 .av:hover {
                background-position: -37px -7px;
            }

        .jssorb05 .av {
            background-position: -67px -7px;
        }

        .jssorb05 .dn, .jssorb05 .dn:hover {
            background-position: -97px -7px;
        }

    .jssora22l, .jssora22r {
        display: block;
        position: absolute;
        width: 40px;
        height: 58px;
        cursor: pointer;
        background: url('./Images/a22.png') center center no-repeat;
        overflow: hidden;
    }

    .jssora22l {
        background-position: -10px -31px;
    }

    .jssora22r {
        background-position: -70px -31px;
    }

    .jssora22l:hover {
        background-position: -130px -31px;
    }

    .jssora22r:hover {
        background-position: -190px -31px;
    }

    .jssora22l.jssora22ldn {
        background-position: -250px -31px;
    }

    .jssora22r.jssora22rdn {
        background-position: -310px -31px;
    }
</style>
<div class="clearfix"></div>
