<?php 
    require_once '../../../class/Khu.php';
    $data = new Khu();
    $id = isset($_GET['id'])?$_GET['id']:'';
    $arrKhu = $data->LayChiTietTin($id);
    if (isset($_POST['submit'])){
        $makhu = isset($_POST['makhu'])?$_POST['makhu']:'';
        $tenkhu = isset($_POST['tenkhu'])?$_POST['tenkhu']:'';
        $updateKhu = $data->Sua(array('MA_KHU' => $makhu,'TEN_KHU' => $tenkhu), "`MA_KHU`='$id'");
        if(isset($updateKhu)){
            header("Location: ../../pages/khuvuc.php");
        }else {
            echo "Sửa Thất bại";
        }
    }
    
    ?>
<?php include '../general/header.php';?>
            <form id="form-update" action="" name="themdml" method="post">
                     <span class="title-table">Thêm Khu Vực</span>
                     <input type="hidden" name="textPage" value="1" id="textPageUpdate">
                     <input type="hidden" name="textAction" id="textAction" value="">
                     <span id="labelmessageForm" class="labelmessageForm"></span>
                     <div class="pnlUpdateAction">
                        <input type="submit" class="btn btn-default"  name="submit" value="Lưu" > | 
						<a href="../../pages/khuvuc.php" class="btn btn-default"><i class="fa fa-chevron-left"></i>Trở Về</a>
                        <input style="display: none" type="submit" id="btnUpdateAction">
                     </div>   
                     <br>
                                          
                     <table class="update-table" cellspacing="0" cellpadding="0"><tbody>
                           <tr style="display: none;"><td class="update-td">
                              <td class="update-td"><input value="" readonly="" name="txtid" type="text" id="txtid">
                              <span id="error-id" class="label-validate"></span></td>
                           </tr>
                           <tr>
                                 <td class="update-td" style="width:150px;">
                                 <span class="update-header-td">Mã Khu:</span></td>
                                 <td class="update-td"><input style="width:300px" value="<?php echo $arrKhu['MA_KHU']?>" name="makhu" type="text" maxlength="255" id="txtname"><span id="error-name" class="label-validate"></span>
                                 </td>
                           </tr>
                           <tr>
                                 <td class="update-td" style="width:150px;">
                                 <span class="update-header-td">Tên Khu:</span></td>
                                 <td class="update-td"><input style="width:300px" value="<?php echo $arrKhu['TEN_KHU']?>" name="tenkhu" type="text" maxlength="255" id="txtname"><span id="error-name" class="label-validate"></span>
                                 </td>
                           </tr>
                        </tbody></table>
                  </form>
 </body>
 </html>
