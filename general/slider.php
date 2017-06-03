<?php 
    include 'class/Model.php';
    $data = new Model();  
    @session_start();
    $fullname = "";
    $html = '<div class="listbox listbox-sidebar notify-box">
                  <div class="listbox-title" style="background-color: #337ab7">
                        <h4 style="width:100%">
                            <span class="glyphicon glyphicon-globe" aria-hidden="true"></span> Đăng Nhập
                            <span class="glyphicon glyphicon-triangle-right" aria-hidden="true" style="float:right"></span>
                        </h4>
                </div>
                    <div class="listbox-content" style="border-color: #337ab7;">
    
                            <form action="checklogin.php" method="post"><br>
                                <input type="text" name="nguoidung" class="form-control" placeholder="MSSV" required="" autofocus="" background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;"><br>
                                <input type="password" name="matkhau" class="form-control" placeholder="Mật khẩu" required="" background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;"><br>
                                <input type="checkbox" id="ghinho" name="matKhau">Ghi Nhớ
                                <br>
                                <br>
                                <input class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="Đăng Nhập">
                                <br>
                            </form>
    
                    </div>
        </div>';
   if (isset($_SESSION['username'])){
       $row1 = $data->get_row("SELECT * FROM `nguoi_dung` WHERE `MA_ND`=".$_SESSION['username']);
       $fullname = $row1['TEN_ND'];
        $html = '<div class="listbox listbox-sidebar notify-box">
                  <div class="listbox-title" style="background-color: #337ab7">
                        <h4 style="width:100%">
                            <span class="glyphicon glyphicon-globe" aria-hidden="true"></span> Thông Tin
                            <span class="glyphicon glyphicon-triangle-right" aria-hidden="true" style="float:right"></span>
                        </h4>
                </div>
                    <div class="listbox-content" style="border-color: #337ab7;">
    
                            <form action="checklogin.php" method="post"><br>
                                <label>Xin Chào</label>
                                <p>'.$fullname.'</p>
                                <br>
                                <a href="logout.php"><input class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="Đăng Xuât"></a>
                                <br>
                            </form>
    
                    </div>
        </div>';
   }
?>
<div class="listbox listbox-sidebar news-box">
           <?php echo $html;?>
           <div class="listbox listbox-sidebar notify-box" style="margin-top: 30px;">
                <div class="listbox-title" style="background-color: #5cb85c">
                    <a href="/TrangChu/TatCaTinTuc">
                        <h4 style="width:100%">
                            <span class="glyphicon glyphicon-globe" aria-hidden="true"></span> TIN TỨC  -THÔNG BÁO
                            <span class="glyphicon glyphicon-triangle-right" aria-hidden="true" style="float:right"></span>
                        </h4>
                    </a>
                </div>
                <div class="listbox-content" style="border-color: #4cae4c;">
                    <div class="container" style="width:100%; padding:0px;">
                            <ul class="news">
                                    <li class="news-item">
                                        <table cellpadding="4">
                                            <tr>
                                                <td>
                                                    <div class="listbox-content-item-title">
                                                        <a href="/TrangChu/ChiTietBaiViet?idBaiViet=2038">
                                                            <span style="text-transform: uppercase; color: blue; font-weight: bold">TH&#212;NG B&#193;O VỀ VIỆC ĐĂNG K&#221; NỘI TR&#218; H&#200; NĂM 2017</span>
                                                        </a>
                                                    </div>
                                                    <div class="listbox-content-item-moreinfo">
                                                        <span class="listbox-content-item-moreinfo-comment date">
                                                            <span class="glyphicon glyphicon-calendar" aria-hidden="true">
                                                                09/05/2017 14:14
                                                            </span>
                                                        </span>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </li>
                                    <li class="news-item">
                                        <table cellpadding="4">
                                            <tr>
                                                <td>
                                                    <div class="listbox-content-item-title">
                                                        <a href="/TrangChu/ChiTietBaiViet?idBaiViet=1038">
                                                            <span style="text-transform: uppercase; color: blue; font-weight: bold">ĐIỆN NƯỚC NH&#192; 3 TH&#193;NG 03.2017</span>
                                                        </a>
                                                    </div>
                                                    <div class="listbox-content-item-moreinfo">
                                                        <span class="listbox-content-item-moreinfo-comment date">
                                                            <span class="glyphicon glyphicon-calendar" aria-hidden="true">
                                                                04/04/2017 11:09
                                                            </span>
                                                        </span>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </li>
                                    <li class="news-item">
                                        <table cellpadding="4">
                                            <tr>
                                                <td>
                                                    <div class="listbox-content-item-title">
                                                        <a href="/TrangChu/ChiTietBaiViet?idBaiViet=1037">
                                                            <span style="text-transform: uppercase; color: blue; font-weight: bold">ĐIỆN NƯỚC NH&#192; 3TH&#193;NG 12.2016</span>
                                                        </a>
                                                    </div>
                                                    <div class="listbox-content-item-moreinfo">
                                                        <span class="listbox-content-item-moreinfo-comment date">
                                                            <span class="glyphicon glyphicon-calendar" aria-hidden="true">
                                                                06/01/2017 09:11
                                                            </span>
                                                        </span>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </li>
                                    <li class="news-item">
                                        <table cellpadding="4">
                                            <tr>
                                                <td>
                                                    <div class="listbox-content-item-title">
                                                        <a href="/TrangChu/ChiTietBaiViet?idBaiViet=37">
                                                            <span style="text-transform: uppercase; color: blue; font-weight: bold">C&#212;NG ĐIỆN BỘ TRƯỞNG BỘ GI&#193;O DỤC Đ&#192;O TẠO</span>
                                                        </a>
                                                    </div>
                                                    <div class="listbox-content-item-moreinfo">
                                                        <span class="listbox-content-item-moreinfo-comment date">
                                                            <span class="glyphicon glyphicon-calendar" aria-hidden="true">
                                                                17/12/2016 09:58
                                                            </span>
                                                        </span>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </li>
                                    <li class="news-item">
                                        <table cellpadding="4">
                                            <tr>
                                                <td>
                                                    <div class="listbox-content-item-title">
                                                        <a href="/TrangChu/ChiTietBaiViet?idBaiViet=36">
                                                            <span style="text-transform: uppercase; color: blue; font-weight: bold">TH&#212;NG B&#193;O VỀ VIỆC GIA HẠN V&#192; ĐĂNG K&#221; NỘI TR&#218; HỌC KỲ II NĂM HỌC 2016 - 2017</span>
                                                        </a>
                                                    </div>
                                                    <div class="listbox-content-item-moreinfo">
                                                        <span class="listbox-content-item-moreinfo-comment date">
                                                            <span class="glyphicon glyphicon-calendar" aria-hidden="true">
                                                                12/12/2016 13:36
                                                            </span>
                                                        </span>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </li>
                                    <li class="news-item">
                                        <table cellpadding="4">
                                            <tr>
                                                <td>
                                                    <div class="listbox-content-item-title">
                                                        <a href="/TrangChu/ChiTietBaiViet?idBaiViet=35">
                                                            <span style="text-transform: uppercase; color: blue; font-weight: bold">ĐIỆN NƯỚC NH&#192; 3 TH&#193;NG 10.2016</span>
                                                        </a>
                                                    </div>
                                                    <div class="listbox-content-item-moreinfo">
                                                        <span class="listbox-content-item-moreinfo-comment date">
                                                            <span class="glyphicon glyphicon-calendar" aria-hidden="true">
                                                                03/11/2016 00:22
                                                            </span>
                                                        </span>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </li>
                                    <li class="news-item">
                                        <table cellpadding="4">
                                            <tr>
                                                <td>
                                                    <div class="listbox-content-item-title">
                                                        <a href="/TrangChu/ChiTietBaiViet?idBaiViet=34">
                                                            <span style="text-transform: uppercase; color: blue; font-weight: bold">TH&#212;NG B&#193;O VỀ VIỆC ĐĂNG K&#221; INTERNET </span>
                                                        </a>
                                                    </div>
                                                    <div class="listbox-content-item-moreinfo">
                                                        <span class="listbox-content-item-moreinfo-comment date">
                                                            <span class="glyphicon glyphicon-calendar" aria-hidden="true">
                                                                02/11/2016 23:47
                                                            </span>
                                                        </span>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </li>
                                    <li class="news-item">
                                        <table cellpadding="4">
                                            <tr>
                                                <td>
                                                    <div class="listbox-content-item-title">
                                                        <a href="/TrangChu/ChiTietBaiViet?idBaiViet=33">
                                                            <span style="text-transform: uppercase; color: blue; font-weight: bold">T&#204;NH H&#204;NH TRIỂN KHAI INTERNET</span>
                                                        </a>
                                                    </div>
                                                    <div class="listbox-content-item-moreinfo">
                                                        <span class="listbox-content-item-moreinfo-comment date">
                                                            <span class="glyphicon glyphicon-calendar" aria-hidden="true">
                                                                17/10/2016 03:31
                                                            </span>
                                                        </span>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </li>
                            </ul>
                    </div>
                </div>
            </div>
           <div class="listbox listbox-sidebar event-box" style="margin-top: 30px;">
                <div class="listbox-title" style="background-color: #5bc0de">
                    <a href="/TrangChu/TatCaVanBan">
                        <h4 style="width:100%">
                            <span class="glyphicon glyphicon-file" aria-hidden="true"></span> VĂN BẢN
                            <span class="glyphicon glyphicon-triangle-right" aria-hidden="true" style="float:right"></span>
                        </h4>
                    </a>
                </div>
                <div class="listbox-content" style="border-color: #46b8da">
                        <div class="listbox-content-item">
                            <div class="col-xs-12">
                                <div class="listbox-content-item-title">
                                    <a href="/TrangChu/XemVanBan?idVanBanBieuMau=4" title="Ban h&#224;nh Quy chế học sinh, sinh vi&#234;n tr&#250; tại c&#225;c cơ sở gi&#225;o dục thuộc hệ thống gi&#225;o dục quốc d&#226;n">
                                        <span style="text-transform:uppercase">Ban h&#224;nh Quy chế học sinh, sinh vi&#234;n tr&#250; tại c&#225;c c...</span>
                                    </a>
                                </div>
                                <div class="listbox-content-item-moreinfo">
                                    <span class="listbox-content-item-moreinfo-comment date">
                                        <span class="glyphicon glyphicon-calendar" aria-hidden="true">
                                            05/05/2016 14:19
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
             <div class="listbox listbox-sidebar event-box">
                <div class="listbox-title" style="background-color: #5bc0de; margin-top: 20px;">
                    <a href="/TrangChu/TatCaBieuMau">
                        <h4 style="width:100%">
                            <span class="glyphicon glyphicon-file" aria-hidden="true"></span> BIỂU MẪU
                            <span class="glyphicon glyphicon-triangle-right" aria-hidden="true" style="float:right"></span>
                        </h4>
                    </a>
                </div>
                <div class="listbox-content" style="border-color: #46b8da">
                        <div class="listbox-content-item">
                            <div class="col-xs-12">
                                <div class="listbox-content-item-title">
                                    <a href="/TrangChu/XemVanBan?idVanBanBieuMau=2">
                                        <span style="text-transform:uppercase">T&#211;M TẮT L&#221; LỊCH SINH VI&#202;N</span>
                                    </a>
                                </div>
                                <div class="listbox-content-item-moreinfo">
                                    <span class="listbox-content-item-moreinfo-comment date">
                                        <span class="glyphicon glyphicon-calendar" aria-hidden="true">
                                            05/05/2016 09:49
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                </div>
            </div>  
    </div>

    <div class="clearfix"></div>
</div>
