<?php
require_once '../../../class/NguoiDung.php';
require_once '../../../class/Phong.php';
$data = new NguoiDung();
$phong = new Phong();
$id = isset($_GET['id'])?$_GET['id']:'';
$arrNguoiDung = $data->LayChiTietTin($id);
if (isset($_POST['submit'])){
    $manguoidung = isset($_POST['ma'])?$_POST['ma']:'';
    $matkhau = isset($_POST['matkhau'])?$_POST['matkhau']:'';
    $pass = md5($matkhau);

    $updateNguoiDung = $data->Sua(array('MAT_KHAU' => $pass),"`MA_ND` = '$id'");
    if (isset($updateNguoiDung)){
        header("Location: ../../pages/user.php");
    }else {
        echo "Thêm Thất Bại";
    }
}
?>
<?php include_once '../general/navigation.php';?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Sửa Người Dùng
        </h1>

    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <form id="form-update" action="" name="themdml" method="post">

                            <input type="hidden" name="textPage" value="1" id="textPageUpdate">
                            <input type="hidden" name="textAction" id="textAction" value="">
                            <span id="labelmessageForm" class="labelmessageForm"></span>
                            <div class="pnlUpdateAction">
                                <input type="submit" class="btn btn-default"  name="submit" value="Lưu" > |
                                <a href="../../pages/user.php" class="btn btn-default"><i class="fa fa-chevron-left"></i>Trở Về</a>
                                <input style="display: none" type="submit" id="btnUpdateAction">
                            </div>
                            <br>

                            <table class="update-table" cellspacing="0" cellpadding="0">
                                <tbody>
                                <tr style="display: none;"><td class="update-td">
                                    <td class="update-td"><input value="" readonly="" name="txtid" type="text" id="txtid">
                                        <span id="error-id" class="label-validate"></span></td></tr>
                                <tr><td class="update-td" style="width:150px;">
                                        <span class="update-header-td">Mã Người Dùng:</span></td>
                                    <td class="update-td"><input class="form-control"  style="width:300px" value="<?php echo $arrNguoiDung['MA_ND']?>" name="ma" type="text" maxlength="255" id="txtname"><span id="error-name" class="label-validate"></span></td>

                                <tr><td class="update-td" style="width:150px;">
                                        <span class="update-header-td">Mật Khẩu Mới:</span></td>
                                    <td class="update-td"><input class="form-control" style="width:300px" name="matkhau" type="text" maxlength="255" id="txtname"><span id="error-name" class="label-validate"></span></td>
                                </tr>

                                </tbody>
                            </table>
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



