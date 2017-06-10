<?php
include_once '../general/navigation.php';
include_once '../../../class/Model.php';
@session_start();
$TieuDe = isset($_POST['TIEU_DE'])?$_POST['TIEU_DE']:'';
$NoiDung = isset($_POST['NOI_DUNG'])?$_POST['NOI_DUNG']:'';
if(isset($_POST['ok'])) {
    if (!empty($TieuDe) && !empty($NoiDung)) {
        $Model = new Model();
        $data = array('TIEU_DE' => ''.$TieuDe,
                        'NOI_DUNG' => ''.$NoiDung,
                        'NGAY_DANG' => time(),
                        'MA_ND' => $_SESSION['username']);
        $rs = $Model->insert('tin_tuc',$data);
        if ($rs==1)
        {
            header('location: ../../pages/tintuc.php');
        }else
        {
            $_GET['Loi'] = 'Thêm Thất Bại !<br>'.mysqli_error($Model->__conn);
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
            Đăng Tin
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
                                <label for="TIEU_DE" class="col-sm-2 control-label">Tiêu Đề</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="TIEU_DE" name="TIEU_DE" placeholder="Tiêu Đề" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="NOI_DUNG" class="col-sm-2 control-label">Nội Dung</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="NOI_DUNG" name="NOI_DUNG" cols="30" rows="10" placeholder="Nội Dung"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-success" name="ok">Thêm</button>
                                    <a href="../../pages/tintuc.php" class="btn btn-default">Quay Lại</a>
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
