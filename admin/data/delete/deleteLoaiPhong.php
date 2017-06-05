<?php 
    require_once '../../../class/Loai.php';
    $data = new Loai();
    $id = isset($_GET['id'])?$_GET['id']:'';
    $arrLoai = $data->LayChiTietTin($id);
    if (isset($_POST['submit'])){
        $updateLoai = $data->Xoa("`MA_LOAI`='$id'");
        if(isset($updateLoai)){
            header("Location: ../../pages/loaiphong.php");
        }else {
            echo "Sửa Thất bại";
        }
    }
    
    ?>
<?php include '../general/header.php';?>
            <form id="form-update" action="" name="themdml" method="post">
                     <span class="title-table">Thêm Loại Phòng</span>
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
 </body>
 </html>
