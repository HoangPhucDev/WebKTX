<?php 
    require_once '../../../class/Loai.php';
    $data = new Loai();
    $id = isset($_GET['id'])?$_GET['id']:'';
    $arrLoai = $data->LayChiTietTin($id);
    if (isset($_POST['submit'])){
        $maloai = isset($_POST['maphong'])?$_POST['maphong']:'';
        $tenloai = isset($_POST['tenphong'])?$_POST['tenphong']:'';
        $gia = isset($_POST['giaphong'])?$_POST['giaphong']:'';
        $updateLoai = $data->Sua(array('MA_LOAI' => $maloai,'TEN_LOAI' => $tenloai,'GIA_PHONG' => $gia), "`MA_LOAI`='$id'");
        if(isset($updateLoai)){
            header("Location: ../../pages/loaiphong.php");
        }else {
            echo "Sửa Thất bại";
        }
    }
    
    ?>


<?php include_once '../general/navigation.php';?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Sửa Loại Phòng
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
                                <a href="../../pages/loaiphong.php" class="btn btn-default"><i class="fa fa-chevron-left"></i>Trở Về</a>
                                <input style="display: none" type="submit" id="btnUpdateAction">
                            </div>
                            <br>

                            <table class="update-table" cellspacing="0" cellpadding="0">
                                <tbody>
                                <tr style="display: none;"><td class="update-td">
                                    <td class="update-td"><input value="" readonly="" name="txtid" type="text" id="txtid">
                                        <span id="error-id" class="label-validate"></span></td></tr>
                                <tr><td class="update-td" style="width:150px;">
                                        <span class="update-header-td">Mã Loại Phòng:</span></td>
                                    <td class="update-td"><input style="width:300px" value="<?php echo $arrLoai['MA_LOAI']?>" name="maphong" type="text" maxlength="255" id="txtname"><span id="error-name" class="label-validate"></span></td>
                                </tr>
                                <tr><td class="update-td" style="width:150px;">
                                        <span class="update-header-td">Tên Phòng:</span></td>
                                    <td class="update-td"><input style="width:300px" value="<?php echo $arrLoai['TEN_LOAI']?>" name="tenphong" type="text" maxlength="255" id="txtname"><span id="error-name" class="label-validate"></span></td>
                                </tr>
                                <tr><td class="update-td" style="width:150px;">
                                        <span class="update-header-td">Giá:</span></td>
                                    <td class="update-td"><input style="width:300px" value="<?php echo $arrLoai['GIA_PHONG']?>" name="giaphong" type="text" maxlength="255" id="txtname"><span id="error-name" class="label-validate"></span></td>
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

