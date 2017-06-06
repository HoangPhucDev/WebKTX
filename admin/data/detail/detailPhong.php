<?php include_once '../general/navigation.php';
include_once '../../../class/Phong.php';
include_once '../../../class/Khu.php';
include_once '../../../class/Loai.php';
include_once '../../../class/Model.php';
    if(isset($_GET['id'])) {
        $MaPhong = $_GET['id'];
        $data = new Model();
        $ModelPhong = new Phong();
        $ModelKhu = new Khu();
        $ModelLoai = new Loai();
        $row = $ModelPhong->LayChiTietTin($_GET['id']);
        $DSKhu = $ModelKhu->LayDanhSach();
        $DSLoai = $ModelLoai->LayDanhSach();
        $TaiSanTrongPhong = $data->get_list('SELECT tai_san.TEN_TAI_SAN,tai_san.GIA_TRI_TS,`SO_LUONG` 
                                                FROM `ct_tai_san`,`tai_san` 
                                                WHERE `MA_PHONG` = '.$MaPhong.' AND ct_tai_san.MA_TAI_SAN = tai_san.MA_TAI_SAN');

        $SVTrongPhong = $data->get_list('SELECT `MA_ND`,`TEN_ND`,`TRANG_THAI_ND` 
                                              FROM `nguoi_dung` 
                                              WHERE `TRANG_THAI_ND` >0 AND `MA_PHONG` = '.$MaPhong.' 
                                              ORDER BY `nguoi_dung`.`TRANG_THAI_ND` DESC');
    } else
    {
        header('location: ../../pages/phong.php');
    }
;?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Chi Tiết Phòng
        </h1>
        <a href="../../pages/phong.php" class="btn btn-warning">Quay Lại</a>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <h1>Thông Tin Phòng</h1><hr>
                            <div class="row">
                                <table class="table">
                                    <tr>
                                        <th>Tên Phòng:</th>
                                        <td><?php echo $row['TEN_PHONG'];?></td>
                                    </tr>
                                    <tr>
                                        <th> Sức Chứa:</th>
                                        <td><?php echo $row['SUC_CHUA'];?></td>
                                    </tr>

                                    <tr>
                                        <th>Giới Tính: </th>
                                        <td> <?php echo $row['GIOI_TINH_PHONG']==0?'Nam':'Nữ'; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Trạng Thái: </th>
                                        <td><?php echo $row['TRANG_THAI_PHONG']==1?'Sử dụng':'Chưa sử dụng'; ?></td>
                                    </tr>
                                    <tr>
                                        <th> Khu:</th>
                                        <td><?php
                                            foreach ($DSKhu as $item )
                                            {
                                                if($item['MA_KHU']==$row['MA_KHU'])
                                                {
                                                    echo $item['TEN_KHU'];
                                                }

                                            }

                                            ?></td>
                                    </tr>
                                    <tr>
                                        <th>Loại:</th>
                                        <td> <?php
                                            foreach ($DSLoai as $item )
                                            {
                                                if($item['MA_LOAI']==$row['MA_LOAI'])
                                                {
                                                    echo $item['TEN_LOAI'];
                                                }

                                            }
                                            ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <h1>Danh Sách Sinh Viên</h1><hr>
                            <table class="table"><thead><tr><th>Tên</th><th>MSSV</th><th>Trạng Thái</th></tr></thead><tbody>
                            <?php
                            foreach ($SVTrongPhong as $item)
                            { switch ((int)$item['TRANG_THAI_ND'])
                            {
                                case 0 : {
                                    $item['TRANG_THAI_ND'] = 'Không Thuê Phòng';
                                    break;
                                }
                                case 1 : {
                                    $item['TRANG_THAI_ND'] = 'Chờ Xác Nhận';
                                    break;
                                }
                                case 2 : {
                                    $item['TRANG_THAI_ND'] = 'Đang Thuê';
                                    break;
                                }
                                default : {
                                    $item['TRANG_THAI_ND']='Không Thuê Phòng';
                                }
                            }
                                echo '<tr>
                                        <td>'.$item['TEN_ND'].'</td>
                                        <td>'.$item['MA_ND'].'</td>
                                        <td>'.$item['TRANG_THAI_ND'].'</td>
                                     </tr>';
                            };

                            ?>
                                </tbody></table>
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <h1>Danh Sách Tài Sản</h1><hr>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Tên</th>
                                    <th>Số Lượng</th>
                                    <th>Giá</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($TaiSanTrongPhong as $item)
                                    {
                                        echo '<tr>
                                        <td>'.$item['TEN_TAI_SAN'].'</td>
                                        <td>'.$item['SO_LUONG'].'</td>
                                        <td>'.$item['GIA_TRI_TS'].'</td>
                                     </tr>';
                                    }

                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<?php include_once '../general/script.php';?>

</body>
</html>
