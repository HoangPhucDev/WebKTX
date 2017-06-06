<?php
include_once '../general/navigation.php';
include_once '../../../class/Phong.php';
include_once '../../../class/Khu.php';
include_once '../../../class/Loai.php';
if(isset($_GET['id'])) {
    $MaPhong = $_GET['id'];
    $TenPhong = isset($_POST['TEN_PHONG']) ? $_POST['TEN_PHONG'] : '';
    $MaKhu = isset($_POST['MA_KHU']) ? $_POST['MA_KHU'] : '';
    $MaLoai = isset($_POST['MA_LOAI']) ? $_POST['MA_LOAI'] : '';
    $SucChua = isset($_POST['SUC_CHUA']) ? $_POST['SUC_CHUA'] : '';
    $GioiTinh = isset($_POST['GIOI_TINH_PHONG']) ? $_POST['GIOI_TINH_PHONG'] : '';
    $TrangThai = isset($_POST['TRANG_THAI_PHONG']) ? $_POST['TRANG_THAI_PHONG'] : '';

    $ModelPhong = new Phong();
    $ModelKhu = new Khu();
    $ModelLoai = new Loai();
    $row = $ModelPhong->LayChiTietTin($_GET['id']);
    $DSKhu = $ModelKhu->LayDanhSach();
    $DSLoai = $ModelLoai->LayDanhSach();

    if (isset($_POST['ok'])) {
        if (!empty($TenPhong) && !empty($SucChua)) {

            $data = array(
                'TEN_PHONG' => '' . $TenPhong,
                'MA_KHU' => '' . $MaKhu,
                'MA_LOAI' => '' . $MaLoai,
                'SUC_CHUA' => '' . $SucChua,
                'GIOI_TINH_PHONG' => '' . $GioiTinh,
                'TRANG_THAI_PHONG' => '' . $TrangThai
            );
            $rs = $ModelPhong->Sua($data,'MA_PHONG = '.$MaPhong);
            if ($rs == 1) {
                $_GET['Loi'] = 'Sửa Thành Công!';
            } else {
                $_GET['Loi'] = 'Sửa Thất Bại !';
            }
        } else {
            $_GET['Loi'] = 'Vui Lòng Nhập Dữ Liệu !';
        }
    }
}else
{
    header('location: ../../pages/phong.php');
}
;?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Thêm Tài Sản
        </h1>

    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <form class="form-horizontal" role="form" method="post">
                            <div class="form-group">
                                <div class="col-sm-12 col-sm-offset-2">
                                    <h4 class="text-danger"><?php echo isset($_GET['Loi'])?$_GET['Loi']:''; ?></h4>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="TEN_PHONG" class="col-sm-2 control-label">Tên Phòng</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="TEN_PHONG" name="TEN_PHONG" placeholder="Tên" value="<?php echo $row['TEN_PHONG'];?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="SUC_CHUA" class="col-sm-2 control-label">Sức Chứa</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="SUC_CHUA" name="SUC_CHUA" placeholder="Sức Chứa" value="<?php echo $row['SUC_CHUA'];?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="MA_KHU" class="col-sm-2 control-label">Khu</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="MA_KHU" name="MA_KHU">
                                        <?php
                                        foreach ($DSKhu as $item )
                                        {
                                            if($item['MA_KHU']==$row['MA_KHU'])
                                            {
                                                echo '<option selected value='.$item['MA_KHU'].'>'.$item['TEN_KHU'].'</option>';
                                            }else
                                            {
                                                echo '<option value='.$item['MA_KHU'].'>'.$item['TEN_KHU'].'</option>';
                                            }

                                        }

                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="MA_LOAI" class="col-sm-2 control-label">Loại</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="MA_LOAI" name="MA_LOAI">
                                        <?php
                                        foreach ($DSLoai as $item )
                                        {
                                            if($item['MA_LOAI']==$row['MA_LOAI'])
                                            {
                                                echo '<option selected value='.$item['MA_LOAI'].'>'.$item['TEN_LOAI'].'</option>';
                                            }else
                                            {
                                                echo '<option value='.$item['MA_LOAI'].'>'.$item['TEN_LOAI'].'</option>';
                                            }

                                        }

                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="GIOI_TINH_PHONG" class="col-sm-2 control-label">Giới Tính Phòng</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="GIOI_TINH_PHONG" name="GIOI_TINH_PHONG">
                                        <option value="0" <?php echo $row['GIOI_TINH_PHONG']==0?'selected':''; ?> >Nam</option>
                                        <option value="1" <?php echo $row['GIOI_TINH_PHONG']==1?'selected':''; ?> >Nữ</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="TRANG_THAI_PHONG" class="col-sm-2 control-label">Trạng Thái</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="TRANG_THAI_PHONG" name="TRANG_THAI_PHONG">
                                        <option value="1" <?php echo $row['TRANG_THAI_PHONG']==1?'selected':''; ?>>Sử dụng</option>
                                        <option value="0" <?php echo $row['TRANG_THAI_PHONG']==0?'selected':''; ?>>Chưa sử dụng</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-success" name="ok">Thêm</button>
                                    <a href="../../pages/phong.php" class="btn btn-default">Quay Lại</a>
                                </div>
                            </div>
                        </form>

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
