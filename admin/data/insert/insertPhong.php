<?php
include_once '../general/navigation.php';
include_once '../../../class/Phong.php';
include_once '../../../class/Khu.php';
include_once '../../../class/Loai.php';
include_once '../../../class/TaiSan.php';
$TenPhong = isset($_POST['TEN_PHONG'])?$_POST['TEN_PHONG']:'';
$MaKhu = isset($_POST['MA_KHU'])?$_POST['MA_KHU']:'';
$MaLoai = isset($_POST['MA_LOAI'])?$_POST['MA_LOAI']:'';
$SucChua = isset($_POST['SUC_CHUA'])?$_POST['SUC_CHUA']:'';
$GioiTinh = isset($_POST['GIOI_TINH_PHONG'])?$_POST['GIOI_TINH_PHONG']:'';
$TrangThai = isset($_POST['TRANG_THAI_PHONG'])?$_POST['TRANG_THAI_PHONG']:'';
$ModelKhu = new Khu();
$ModelLoai = new Loai();
$ModelTaiSan = new TaiSan();
$DSKhu = $ModelKhu->LayDanhSach();
$DSLoai = $ModelLoai->LayDanhSach();
$DSTaiSan = $ModelTaiSan->LayDanhSach();
if(isset($_POST['ok'])) {
    if (!empty($TenPhong) && !empty($SucChua)) {
        $ModelPhong = new Phong();
        $data = array(
            'TEN_PHONG' => '' .$TenPhong,
            'MA_KHU' => '' .$MaKhu,
            'MA_LOAI' => '' .$MaLoai,
            'SUC_CHUA' => '' .$SucChua,
            'GIOI_TINH_PHONG' => '' .$GioiTinh,
            'TRANG_THAI_PHONG' => '' .$TrangThai
        );
        $rs = $ModelPhong->Them($data);
        if ($rs==1)
        {
            header('location: ../../pages/phong.php');
        }else
        {
            $_GET['Loi'] = 'Thêm Thất Bại !';
        }
    } else {
        $_GET['Loi'] = 'Vui Lòng Nhập Dữ Liệu !';
    }
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
                                    <input type="text" class="form-control" id="TEN_PHONG" name="TEN_PHONG" placeholder="Tên" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="SUC_CHUA" class="col-sm-2 control-label">Sức Chứa</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="SUC_CHUA" name="SUC_CHUA" placeholder="Sức Chứa">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="MA_KHU" class="col-sm-2 control-label">Khu</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="MA_KHU" name="MA_KHU">
                                       <?php
                                       foreach ($DSKhu as $item )
                                       {
                                           echo '<option value='.$item['MA_KHU'].'>'.$item['TEN_KHU'].'</option>';
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
                                            echo '<option value='.$item['MA_LOAI'].'>'.$item['TEN_LOAI'].'</option>';
                                        }

                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="TAI_SAN" class="col-sm-2 control-label">Tài Sản</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="TAI_SAN" name="TAI_SAN" multiple="true">
                                        <?php
                                        foreach ($DSTaiSan as $item )
                                        {
                                            echo '<option value='.$item['MA_TAI_SAN'].'>'.$item['TEN_TAI_SAN'].'-'.$item['GIA_TRI_TS'].'</option>';
                                        }

                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="GIOI_TINH_PHONG" class="col-sm-2 control-label">Giới Tính Phòng</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="GIOI_TINH_PHONG" name="GIOI_TINH_PHONG">
                                        <option value="0">Nam</option>
                                        <option value="1">Nữ</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="TRANG_THAI_PHONG" class="col-sm-2 control-label">Trạng Thái</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="TRANG_THAI_PHONG" name="TRANG_THAI_PHONG">
                                        <option value="1">Sử dụng</option>
                                        <option value="0">Chưa sử dụng</option>
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
<script src="../../plugins/select2/select2.min.js"></script>
<script>
    $("#TAI_SAN").select2({
        placeholder: "Danh Sách Tài Sản"
    });
</script>
</body>
</html>
