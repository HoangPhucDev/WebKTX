<?php
include_once './class/Model.php';             
$data = new Model();
$Khu = $data->get_list("select * FROM `Khu`");

?>
<?php include 'general/header.php';?>
        

        <div class="clearfix"></div>

        <div id="maincontent">
            <div id="maincontent-section1">
                        <div id="jssor_1">
                            <div data-u="slides"">
                            </div>
                        </div>
                    
                    <div style="color:#6684d2;border-bottom:solid 4px #6684d2">
                    <center><h3>THÔNG TIN PHÒNG</h3></center>
                    </div>
            </div>
            <div class="clearfix"></div>
            <br>
            <div class="container">
            <!--Bất đầu lập 1 khu -->
            <?php foreach ($Khu as $valueKhu): ?>
            <div class="row">
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <?php
                           echo $valueKhu["TEN_KHU"];
                        ?>
                      </div>
                      <div class="panel-footer">
                        <div class="row">
                        <!--Bất đầu lập 1 phòng -->
                        <?php
                            $Phong = $data->get_list("SELECT * FROM `phong` WHERE `TRANG_THAI_PHONG`>0 AND `MA_KHU`=".$valueKhu["MA_KHU"]);
                            foreach ($Phong as $valuePhong):
                        ?>
                        <?php 
                        $MaPhong = $valuePhong['MA_PHONG'];
                        $TenPhong = $valuePhong['TEN_PHONG'];
                        $GioiTinhPhong = $valuePhong['GIOI_TINH_PHONG'];
                        $SucChua = $valuePhong['SUC_CHUA'];
                        $SVTrongPhong = $data->get_row("
                            SELECT COUNT(MA_ND) FROM `nguoi_dung` WHERE `MA_PHONG`=".$MaPhong." AND `TRANG_THAI_ND`>0");
                         ?>
                            <?php if($SucChua==$SVTrongPhong['COUNT(MA_ND)']): ?>
                            <!--Nếu phòng đầy -->
                            <div class="col-lg-3 col-md-6">
                                <div class="panel panel-warning">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-6">
                                            <?php for($i = 0 ;$i < $SucChua;$i++){
                                                if($GioiTinhPhong==0){
                                                    echo ($i<$SVTrongPhong['COUNT(MA_ND)'])?
                                                    ' <i class="fa male fa-2x"></i>':
                                                    '<i class="fa fa-user-o fa-2x"></i>';
                                                }else
                                                {
                                                    echo ($i<$SVTrongPhong['COUNT(MA_ND)'])?
                                                    ' <i class="fa fa-female fa-2x"></i>':
                                                    '<i class="fa fa-user-o fa-2x"></i>';
                                                }
                                            }
                                            ?>
                                            </div>
                                            <div class="col-xs-6 text-right">
                                                <div class="huge"><?php echo $TenPhong ?></div>
                                                <span class="badge">
                                                <?php echo $SVTrongPhong['COUNT(MA_ND)'].'/'.$SucChua; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" data-toggle="modal" data-target="#myModal" onclick="load_ajax(<?php echo $MaPhong ?>)">
                                        <div class="panel-footer">
                                            <span class="pull-left">Chi Tiết</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php continue; endif; ?>

                            <?php if($GioiTinhPhong==0): ?>
                            <!--Nếu phòng là nam -->
                            <div class="col-lg-3 col-md-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-6">
                                            <?php for($i = 0 ;$i < $SucChua;$i++){
                                                echo ($i<$SVTrongPhong['COUNT(MA_ND)'])?
                                                ' <i class="fa fa-male fa-2x"></i>':
                                                '<i class="fa fa-user-o fa-2x"></i>';
                                            }
                                            ?>
                                            </div>
                                            <div class="col-xs-6 text-right">
                                                <div class="huge"><?php echo $TenPhong ?></div>
                                                <span class="badge">
                                                <?php echo $SVTrongPhong['COUNT(MA_ND)'].'/'.$SucChua; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" data-toggle="modal" data-target="#myModal" onclick="load_ajax(<?php echo $MaPhong ?>)">
                                        <div class="panel-footer">
                                            <span class="pull-left">Chi Tiết</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                             </div>
                            <?php endif; ?>

                            <?php if($GioiTinhPhong==1): ?>
                            <!--Nếu phòng là nữ -->
                            <div class="col-lg-3 col-md-6">
                                <div class="panel panel-danger">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-6">
                                            <?php for($i = 0 ;$i < $SucChua;$i++){
                                                echo ($i<$SVTrongPhong['COUNT(MA_ND)'])?
                                                ' <i class="fa fa-female fa-2x"></i>':
                                                '<i class="fa fa-user-o fa-2x"></i>';
                                            }
                                            ?>
                                            </div>
                                            <div class="col-xs-6 text-right">
                                                <div class="huge"><?php echo $TenPhong ?></div>
                                                <span class="badge">
                                                <?php echo $SVTrongPhong['COUNT(MA_ND)'].'/'.$SucChua; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" data-toggle="modal" data-target="#myModal" onclick="load_ajax(<?php echo $MaPhong ?>)">
                                        <div class="panel-footer">
                                            <span class="pull-left">Chi Tiết</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                             </div>
                            <?php endif; ?>

                            <?php endforeach; ?>
                            <!--Kết Thúc lập 1 phòng -->
                        </div>
                      </div>
                    </div>
            </div>
            <?php endforeach; ?>
            <!--Kết Thúc lập 1 Khu -->
        </div>



        <div id="footer">
            <div id="footer-content">
                <div class="container">
                    <div id="footer-content-nav">
                        <div id="footer-content-nav-brand">
                            <h4><a href="#"><b>KÝ TÚC XÁ ĐẠI HỌC KỸ THUẬT - CÔNG NGHỆ CẦN THƠ</b></a></h4>
                        </div>
                    </div>
                    <div id="footer-content-links">
                        <div class="links-group contact">
                            <h4>LIÊN HỆ</h4>
                            <p>Ban quản lý KTX - Đại học Kỹ thuật - Công nghệ Cần Thơ.</p>
                            <p>Địa chỉ: 256 Nguyễn Văn Cừ, Quận Ninh Kiều, Thành phố Cần Thơ.</p>
                            <p>Tel: 0511.3736.936</p>
                            <p>Email: phonghanhchinh@ctuet.edu.vn</p>
                        </div>
                        <div class="links-group connectus" style="margin-left: 20px;">
                            <h4>LIÊN KẾT</h4>

                        </div>
                    </div>
                </div>
            </div>
            <div id="footer-copyright">
                <div class="container">
                    <p>Bản quyền trường Đại học Kỹ thuật - Công nghệ Cần Thơ</p>
                </div>
            </div>
        </div>
        <nav id="my-menu">
            <ul>
                <li class="Selected"><a href="/">Trang chủ</a></li>                
                <li>
                    <a>KÝ TÚC XÁ</a>
                    <ul>
                        <li><a href="#">Giới thiệu Ký túc xá</a></li>
                        <li><a href="#">Danh sách cán bộ</a></li>
                        <li><a href="#">Thông tin phòng</a></li>
                    </ul>
                </li>
                <li>
                    <a>SINH VIÊN</a>
                    <ul>
                            <li><a href="#">Đăng nhập</a></li>
                        <li><a href="#">Cá nhân</a></li>
                        <li>
                            <a href="#">
                                Thông báo
                            </a>
                        </li>
                        <li><a href="#">Góp ý</a></li>
                        <li><a href="#">Báo vắng</a></li>
                        <li><a href="#">Connection</a></li>
                    </ul>
                </li>
                <li>
                    <a>HOẠT ĐỘNG NỘI TRÚ</a>
                    <ul>
                        <li><a href="#">Đăng ký phòng</a></li>
                        <li><a href="#">Gia hạn phòng</a></li>
                        <li><a href="#">Yêu cầu</a></li>
                        <li><a href="#">Dịch vụ</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="navbar-slide Fixed">
            <ul class="nav navbar-nav">
                <li class="navbar-slide-show">
                    <a href="#my-menu"><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span></a>
                </li>
                <li class="navbar-slide-show navbar-right" id="btn-search">
                    <a><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
                </li>
                <li class="navbar-brand">
                    <span>KÝ TÚC XÁ ĐẠI HỌC BÁCH KHOA</span>
                </li>
                <li class="navbar-slide-logo">
                    <div class="header-slice-logo-img">
                    </div>
                </li>
                <li class="dropdown">
                    <a href="/">TRANG CHỦ</a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">KÝ TÚC XÁ</a>
                    <ul class="dropdown-menu menumarchil">
                        <li><a href="#">Giới thiệu Ký túc xá</a></li>
                        <li><a href="#">Danh sách cán bộ</a></li>
                        <li><a href="#">Thông tin phòng</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">SINH VIÊN</a>
                    <ul class="dropdown-menu menumarchil">
                            <li><a href="#">Đăng nhập</a></li>
                        <li><a href="#">Cá nhân</a></li>
                        <li>
                            <a href="#">
                                Thông báo
                            </a>
                        </li>
                        <li><a href="#">Góp ý</a></li>
                        <li><a href="#">Báo vắng</a></li>
                        <li><a href="#">Connection</a></li>
                    </ul>
                </li>                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">HOẠT ĐỘNG NỘI TRÚ</a>
                    <ul class="dropdown-menu menumarchil">
                        <li><a href="#">Đăng ký phòng</a></li>
                        <li><a href="#">Gia hạn phòng</a></li>
                        <li><a href="#">Yêu cầu</a></li>
                        <li><a href="#">Dịch vụ</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="search-area">
            <div class="search-area-div">
                <div class="search-area-div-form">
                    <div class="col-sm-offset-6 col-sm-6 input-group">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Nhập họ tên hoặc MSSV" id="txtTimKiem1" name="txtTimKiem1">
                        <span class="input-group-btn">
                            <button class="btn btn-success" type="button" onclick="TimKiem1();"><span class="glyphicon glyphicon-search"></span>Tìm kiếm</button>
                        </span>
                    </div>
                    </div>
                </div>
            </div>
            <div class="search-area-background" style="display:none;">
            </div>
        </div>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Thông Tin Phòng</h4>
              </div>
              <div class="modal-body">
                <div id="result">
                    Đang Tải Dữ Liệu...Vui Lòng Đợi.
                </div>
              </div>
              <div class="modal-footer">
                <b id="nutdangky"></b>
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="ThongBao" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Thông Báo</h4>
              </div>
              <div class="modal-body">
                <div id="resultThongBao">
                    Đang Xác Nhận...Vui Lòng Đợi.
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
              </div>
            </div>
          </div>
        </div>      
    <script src="./Content/Script/jquery.bootstrap.newsbox.min.js"></script>
    <script src="./Content/Script/jssor.slider.mini.js"></script>
    <script src="./Content/Script/bootstrap.min.js"></script>
    <script src="./Content/Script/jquery.mmenu.min.all.js"></script>
    <script src="./Content/Script/jquery.mmenu.fixedelements.min.js"></script>

    <script type="text/javascript">
     function TimKiem1() {window.location.href = "#" + txtTimKiem1.value;}

                $(document).ready(function () {

                // Hover to show dropdown in bootstrap
                $('ul.nav li.dropdown').hover(function () {
                    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
                }, function () {
                    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
                });

                //Set script for slide fixed
                // hide .navbar first
                $(".navbar-slide").hide();

                // fade in .navbar
                $(function () {
                    $(window).scroll(function () {
                        // set distance user needs to scroll before we fadeIn navbar
                        if ($(this).scrollTop() > $('#wrapper-header').height() + 80) {
                            $('.navbar-slide').fadeIn();
                        } else if ($('#wrapper-header').css('display') != 'none') {
                            $('.navbar-slide').fadeOut();
                        }
                    });

                });
                //set menu slide side
                $("#my-menu").mmenu();

                //slide logo of party with school
                $(function animate() {
                    $(".ads-slide .ads-slide-item:first").each(function () {
                        $(this).animate(
                            {
                                marginLeft: -$(this).outerWidth(true),
                                opacity: "hide"

                            }, 2000, function () {
                                $(this).insertAfter(".ads-slide .ads-slide-item:last");
                                $(this).fadeIn();
                                $(this).css({ marginLeft: 0 });
                                setTimeout(function () { animate() }, 2000);
                            });
                    });
                });

                // Show search bar
                $(".search-area-background").click(function () {
                    $(".search-area > div").removeClass("search-show");
                    $(this).fadeOut();
                    $("#btn-search i").removeClass("fa-remove");
                    $("#btn-search i").addClass("fa-search");
                });
                $("#btn-search").click(function () {
                    if ($(".search-area-background").css("display") == "none") {
                        $(".search-area-background").fadeIn();
                        $(".search-area > div").addClass("search-show");
                        $("#btn-search i").removeClass("fa-search");
                        $("#btn-search i").addClass("fa-remove");
                    } else {
                        $(".search-area-background").fadeOut();
                        $(".search-area > div").removeClass("search-show");
                        $("#btn-search i").removeClass("fa-remove");
                        $("#btn-search i").addClass("fa-search");
                    }
                });

            });
            $(function () {
            $(".news").bootstrapNews({
                newsPerPage: 5,
                autoplay: true,
                pauseOnHover: true,
                navigation: false,
                direction: 'up',
                newsTickerInterval: 3000,
                onToDo: function () {
            }
                } );
                    });

            jQuery(document).ready(function ($) {
            var jssor_1_SlideoTransitions = [
              [{ b: 5500.0, d: 3000.0, o: -1.0, r: 240.0, e: { r: 2.0 } }],
              [{ b: -1.0, d: 1.0, o: -1.0, c: { x: 51.0, t: -51.0 } }, { b: 0.0, d: 1000.0, o: 1.0, c: { x: -51.0, t: 51.0 }, e: { o: 7.0, c: { x: 7.0, t: 7.0 } } }],
              [{ b: -1.0, d: 1.0, o: -1.0, sX: 9.0, sY: 9.0 }, { b: 1000.0, d: 1000.0, o: 1.0, sX: -9.0, sY: -9.0, e: { sX: 2.0, sY: 2.0 } }],
              [{ b: -1.0, d: 1.0, o: -1.0, r: -180.0, sX: 9.0, sY: 9.0 }, { b: 2000.0, d: 1000.0, o: 1.0, r: 180.0, sX: -9.0, sY: -9.0, e: { r: 2.0, sX: 2.0, sY: 2.0 } }],
              [{ b: -1.0, d: 1.0, o: -1.0 }, { b: 3000.0, d: 2000.0, y: 180.0, o: 1.0, e: { y: 16.0 } }],
              [{ b: -1.0, d: 1.0, o: -1.0, r: -150.0 }, { b: 7500.0, d: 1600.0, o: 1.0, r: 150.0, e: { r: 3.0 } }],
              [{ b: 10000.0, d: 2000.0, x: -379.0, e: { x: 7.0 } }],
              [{ b: 10000.0, d: 2000.0, x: -379.0, e: { x: 7.0 } }],
              [{ b: -1.0, d: 1.0, o: -1.0, r: 288.0, sX: 9.0, sY: 9.0 }, { b: 9100.0, d: 900.0, x: -1400.0, y: -660.0, o: 1.0, r: -288.0, sX: -9.0, sY: -9.0, e: { r: 6.0 } }, { b: 10000.0, d: 1600.0, x: -200.0, o: -1.0, e: { x: 16.0 } }]
            ];

            var jssor_1_options = {
                $AutoPlay: true,
                $SlideDuration: 800,
                $SlideEasing: $Jease$.$OutQuint,
                $CaptionSliderOptions: {
                    $Class: $JssorCaptionSlideo$,
                    $Transitions: jssor_1_SlideoTransitions
                },
                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$
                },
                $BulletNavigatorOptions: {
                    $Class: $JssorBulletNavigator$
                }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
        function TimKiem() {
            window.location.href = "#" + txtTimKiem.value;
        }


        function load_ajax(_id){
                $.ajax({
                    url : "Phong.php",
                    type : "post",
                    dataType:"json",
                    data : {
                         id: _id
                    },
                    success : function (result){
                        var html = '';
                        $('#myModalLabel').text('Phòng '+result[0]['TEN_PHONG']);
                        $('#nutdangky').html('<button type="button" data-toggle="modal" data-target="#ThongBao" class="btn btn-info" data-dismiss="modal" onclick="DangKy('+result[0]['MA_PHONG']+')">Đăng Ký</button>');
                            if(result[0]['GIOI_TINH_PHONG']==0)
                            {
                                result[0]['GIOI_TINH_PHONG'] = 'Nam';
                            }else{
                                result[0]['GIOI_TINH_PHONG'] = 'Nữ';
                            }

                            switch (Number(result[0]['TRANG_THAI_PHONG']))
                            {
                                case 0 : {
                                    result[0]['TRANG_THAI_PHONG']='Chưa Sử Dụng';
                                    break;
                                }
                                case 1 : {
                                    result[0]['TRANG_THAI_PHONG']='Đang Sử Dụng';
                                    break;
                                }
                                case 2 : {
                                    result[0]['TRANG_THAI_PHONG']='Đã Đầy';
                                    break;
                                }
                                default : {
                                    result[0]['TRANG_THAI_PHONG']='Chưa Sử Dụng';
                                }
                            }                            

                         html +='<div class="row">'+
            '<div class=" col-md-6 col-sm-6 col-lg-6">'+
            '<strong><h4>THÔNG TIN PHÒNG</h3></strong><hr>'+
                '<b>Tên Phòng: </b>'+
                    result[0]['TEN_PHONG']+'<br>'+
                '<b>Khu: </b>'+
                    result[0]['TEN_KHU']+'<br>'+
                '<b>Loại: </b>'+
                    result[0]['TEN_LOAI']+'<br>'+
                '<b>Số Giường: </b>'+
                    result[0]['SUC_CHUA']+'<br>'+
                '<b>Phòng Cho: </b>'+
                    result[0]['GIOI_TINH_PHONG']+'<br>'+
                '<b>Trạng Thái: </b>'+
                    result[0]['TRANG_THAI_PHONG']+'<br>'+
                '<b>Giá : </b>'+
                    result[0]['GIA_PHONG']+
        '</div>'+
        '<div class="col-md-6 col-sm-6 col-lg-6">'+
            '<strong><h4>DANH SÁCH SINH VIÊN</h3></strong>'+
            '<hr><table class="table"><thead><tr><th>Tên</th><th>MSSV</th><th>Trạng Thái</th></tr></thead><tbody>';
            $.each (result[1], function (key, item){
                switch (Number(item['TRANG_THAI_ND']))
                {
                    case 0 : {
                        item['TRANG_THAI_ND'] = 'Không Thuê Phòng';
                        break;
                    }
                    case 1 : {
                        item['TRANG_THAI_ND'] = 'Chờ Xác Nhận';
                        break;
                    }
                    case 2 : {
                        item['TRANG_THAI_ND'] = 'Đang Thuê';
                        break;
                    }
                    default : {
                        item['TRANG_THAI_ND']='Không Thuê Phòng';
                    }
                }
             html +='<tr>'+
                '<td>'+item['TEN_ND']+'</td>'+
                '<td>'+item['MA_ND']+'</td>'+
                '<td>'+item['TRANG_THAI_ND']+'</td></tr>';
            });
       html += '</tbody></table></div>'+
    '</div>';
                        

                        $('#result').html(html);
                    }
                });
        }

        function DangKy(_id){
            MaNguoiDung = <?php echo @session_start(); echo isset($_SESSION['username'])?'"'.$_SESSION['username'].'"':'"Not Login"'; ?>;
            if(MaNguoiDung!="Not Login")
            {
            $.ajax({
                    url : "DangKyPhong.php",
                    type : "post",
                    dataType:"text",
                    data : {
                         MaPhong: _id,
                         MSVV: MaNguoiDung
                    },
                    success : function (result){
                        $('#resultThongBao').html('<h4>'+result+'</h4>');
                        setTimeout("location.reload(true);", 2000);
                    }
                    });
            }else{
                $('#resultThongBao').html('<h4>Vui Lòng Đăng Nhập</h4>');
            }
        }
    </script>
        
    </div>
</body>
</html>
