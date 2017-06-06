<?php include_once '../general/navigation.php';
include_once '../../../class/Phong.php';
include_once '../../../class/Khu.php';
include_once '../../../class/Loai.php';

if(isset($_GET['id'])) {
    $_GET['ThongBao'] = 'Có Chắc Bạn Muốn Xóa!';
    $MaPhong = $_GET['id'];
    $ModelPhong = new Phong();
    $ModelKhu = new Khu();
    $ModelLoai = new Loai();
    $row = $ModelPhong->LayChiTietTin($_GET['id']);
    $DSKhu = $ModelKhu->LayDanhSach();

    $DSLoai = $ModelLoai->LayDanhSach();
    if (isset($_POST['ok'])) {
        $rs = $ModelPhong->Xoa('MA_PHONG = ' . $MaPhong);
        if ($rs == 1) {
            header('location: ../../pages/phong.php');
        } else {
            $_GET['ThongBao'] = 'Sửa Thất Bại !';
        }
    }
} else
{
    header('location: ../../pages/taisan.php');
}
;?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Sửa Tài Sản
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
                                    <h3 class="text-danger"><?php echo isset($_GET['ThongBao'])?$_GET['ThongBao']:''; ?></h3>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="TEN_PHONG" class="col-sm-2 control-label">Tên Phòng</label>
                                <div class="col-sm-10">
                                    <?php echo $row['TEN_PHONG'];?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="SUC_CHUA" class="col-sm-2 control-label">Sức Chứa</label>
                                <div class="col-sm-10">
                                    <?php echo $row['SUC_CHUA'];?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="MA_KHU" class="col-sm-2 control-label">Khu</label>
                                <div class="col-sm-10">
                                        <?php
                                        foreach ($DSKhu as $item )
                                        {
                                            if($item['MA_KHU']==$row['MA_KHU'])
                                            {
                                                echo $item['TEN_KHU'];
                                            }

                                        }

                                        ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="MA_LOAI" class="col-sm-2 control-label">Loại</label>
                                <div class="col-sm-10">
                                        <?php
                                        foreach ($DSLoai as $item )
                                        {
                                            if($item['MA_LOAI']==$row['MA_LOAI'])
                                            {
                                                echo $item['TEN_LOAI'];
                                            }

                                        }
                                        ?>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="GIOI_TINH_PHONG" class="col-sm-2 control-label">Giới Tính Phòng</label>
                                <div class="col-sm-10">
                                        <?php echo $row['GIOI_TINH_PHONG']==0?'Nam':'Nữ'; ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="TRANG_THAI_PHONG" class="col-sm-2 control-label">Trạng Thái</label>
                                <div class="col-sm-10">
                                    <?php echo $row['TRANG_THAI_PHONG']==1?'Sử dụng':'Chưa sử dụng'; ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-danger" name="ok">Xóa</button>
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
