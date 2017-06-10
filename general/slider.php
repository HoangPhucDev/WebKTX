<?php
include_once 'class/Model.php';
$data = new Model();
    @session_start();
    $chucvu = 0;
    $fullname = "";
   if (isset($_SESSION['username'])) {
       $row1 = $data->get_row('SELECT * FROM `nguoi_dung` WHERE `MA_ND`="' . $_SESSION['username'] . '"');
       $fullname = $row1['TEN_ND'];
       $chucvu = $_SESSION['chuc_vu'];
   }
?>


<div class="listbox listbox-sidebar news-box">
            <div class="listbox listbox-sidebar notify-box">
                <div class="listbox-title" style="background-color: #337ab7">
                    <h4 style="width:100%">
                        <span class="glyphicon glyphicon-globe" aria-hidden="true"></span> Thông Tin
                        <span class="glyphicon glyphicon-triangle-right" aria-hidden="true" style="float:right"></span>
                    </h4>
                </div>
                <div class="listbox-content" style="border-color: #337ab7;">
                    <form action="checklogin.php" method="post" class="<?php echo isset($_SESSION['username'])?'hidden':''; ?>"><br>
                        <input type="text" name="nguoidung" class="form-control" placeholder="MSSV"><br>
                        <input type="password" name="matkhau" class="form-control" placeholder="Mật khẩu"><br>
                        <input type="checkbox" id="ghinho" name="ghinho">Ghi Nhớ
                        <br>
                        <br>
                        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" ><span class="glyphicon glyphicon-log-in"></span> Đăng Nhập</button>
                        <br>
                    </form>
                    <div class="<?php echo isset($_SESSION['username'])?'':'hidden'; ?>"><br>
                        <label>Xin Chào</label>
                        <h4  class="text-danger text-bold"><?php echo $fullname ?></h4>
                        <br>
                        <?= ($chucvu>0)?'<a href="./admin" class="btn btn-lg btn-primary btn-block"><span class="glyphicon glyphicon-cog"></span> Trang Quản Lý</a>':
                                        '<a href="#" class="btn btn-lg btn-primary btn-block"><span class="glyphicon glyphicon-user"></span> Thônng Tin Sinh viên</a>';
                        ?><br>
                        <a href="logout.php" class="btn btn-lg btn-primary btn-block"><span class="glyphicon glyphicon-log-out"></span> Đăng Xuất</a>

                        <br>
                    </div>
                </div>
            </div>

            <div class="listbox listbox-sidebar event-box <?php echo isset($_SESSION['username'])?'':'hidden'; ?>">
                <div class="listbox-title" style="background-color: #f0ad4e">
                    <h4 style="width:100%">
                        <span class="glyphicon glyphicon-globe" aria-hidden="true"></span> Chức Năng
                        <span class="glyphicon glyphicon-triangle-right" aria-hidden="true" style="float:right"></span>
                    </h4>
                </div>
                <div class="listbox-content" style="border-color: #f0ad4e;">
                    <div class="container" style="width:100%; padding:0px;">
                        <ul class="list-group-item-warning">
                            <li><a href="./xemphong.php"><h5>Xem Phòng</h5></a></li>
                            <li><a href="dangky.php"><h5>Đăng Ký Phòng Nhanh</h5></a></li>
                        </ul>
                    </div>
                </div>
            </div>

           <div class="listbox listbox-sidebar event-box">
                <div class="listbox-title" style="background-color: #5cb85c">
                    <a href="tintuc.php">
                        <h4 style="width:100%">
                            <span class="glyphicon glyphicon-globe" aria-hidden="true"></span> TIN TỨC  -THÔNG BÁO
                            <span class="glyphicon glyphicon-arrow-right" aria-hidden="true" style="float:right"></span>
                        </h4>
                    </a>
                </div>
                <div class="listbox-content" style="border-color: #4cae4c;">
                    <div class="container" style="width:100%; padding:0px;">
                            <ul class="news">
                                <?php $result = $data->get_list('SELECT * FROM tin_tuc');
                                foreach ($result as $row):
                                ?>

                                    <li class="news-item">
                                        <table cellpadding="4">
                                            <tr>
                                                <td>
                                                    <div class="listbox-content-item-title">
                                                        <a href="tintuc.php?id=<?= $row['MA_TIN']; ?>">
                                                            <span style="text-transform: uppercase; color: blue; font-weight: bold"><?= $row['TIEU_DE']; ?></span>
                                                        </a>
                                                    </div>
                                                    <div class="listbox-content-item-moreinfo">
                                                        <span class="listbox-content-item-moreinfo-comment date">
                                                            <span class="glyphicon glyphicon-calendar" aria-hidden="true">
                                                                <?= date('d/m/Y - H:i:s',$row['NGAY_DANG']); ?>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </li>

                                <?php endforeach; ?>
                            </ul>
                    </div>
                </div>
            </div>
    </div>

    <div class="clearfix"></div>
</div>
