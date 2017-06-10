<?php include_once '../general/navigation.php';
include_once '../../../class/Model.php';
session_start();
if(isset($_GET['id']))
{
    $MaTin = $_GET['id'];
    $Model = new Model();
    $row =  $Model->get_row('SELECT * FROM `tin_tuc` WHERE MA_TIN ='.$MaTin);
    if(isset($_POST['ok'])) {
        $TieuDe = isset($_POST['TIEU_DE'])?$_POST['TIEU_DE']:'';
        $NoiDung = isset($_POST['NOI_DUNG'])?$_POST['NOI_DUNG']:'';
        if (!empty($TieuDe) && !empty($NoiDung)) {
            $data = array('TIEU_DE' => ''.$TieuDe,
                'NOI_DUNG' => ''.$NoiDung,
                'NGAY_DANG' => time(),
                'MA_ND' => $_SESSION['username']);
            $rs = $Model->update('tin_tuc',$data ,'MA_TIN = '.$MaTin);
            if ($rs==1)
            {
                $_GET['ThongBao'] = 'Sửa Thành Công!';
            }else
            {
                $_GET['ThongBao'] = 'Sửa Thất Bại !';
            }
        } else {
            $_GET['ThongBao'] = 'Vui Lòng Nhập Dữ Liệu !';
        }
    }
}else
{
    header('location: ../../pages/taisan.php');
}

;?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Sửa Tin Tức
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
                                    <h4 class="text-danger"><?php echo isset($_GET['ThongBao'])?$_GET['ThongBao']:''; ?></h4>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="TIEU_DE" class="col-sm-2 control-label">Tiêu Đề</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="TIEU_DE" name="TIEU_DE" placeholder="Tiêu Đề" value="<?= $row['TIEU_DE']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="NOI_DUNG" class="col-sm-2 control-label">Nội Dung</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="NOI_DUNG" name="NOI_DUNG" cols="30" rows="10" placeholder="Nội Dung" ><?= $row['NOI_DUNG']?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-success" name="ok">Sửa</button>
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
