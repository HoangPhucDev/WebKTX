<?php
include_once '../general/navigation.php';
include_once '../../../class/TaiSan.php';
$TenTaiSan = isset($_POST['TEN_TAI_SAN'])?$_POST['TEN_TAI_SAN']:'';
$Gia = isset($_POST['GIA_TAI_SAN'])?$_POST['GIA_TAI_SAN']:'';
    if(isset($_POST['ok'])) {
        if (!empty($TenTaiSan) && !empty($Gia)) {
            $ModelTaiSan = new TaiSan();
            $rs = $ModelTaiSan->Them(array('TEN_TAI_SAN' => '' . $_POST['TEN_TAI_SAN'], 'GIA_TRI_TS' => '' . $_POST['GIA_TAI_SAN']));
            if ($rs==1)
            {
                header('location: ../../pages/taisan.php');
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
                                <label for="TEN_TAI_SAN" class="col-sm-2 control-label">Tên Tài Sản</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="TEN_TAI_SAN" name="TEN_TAI_SAN" placeholder="Tên" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="GIA_TAI_SAN" class="col-sm-2 control-label">Giá Tài Sản</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="GIA_TAI_SAN" name="GIA_TAI_SAN" placeholder="Giá">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-success" name="ok">Thêm</button>
                                    <a href="../../pages/taisan.php" class="btn btn-default">Quay Lại</a>
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
