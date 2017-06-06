 <?php 
    require_once '../../../class/Loai.php';
    $data = new Loai();
          $maphong = isset($_POST['maphong'])?$_POST['maphong']:'';
          $tenphong = isset($_POST['tenphong'])?$_POST['tenphong']:'';
          $giaphong = isset($_POST['giaphong'])?$_POST['giaphong']:'';
          if(!empty($maphong) && !empty($tenphong) && is_numeric($giaphong)){
             $insertLoai = $data->Them(array('MA_LOAI' => ''.$maphong, 'TEN_LOAI' => ''.$tenphong,'GIA_PHONG' => ''.$giaphong));
              if (isset($insertLoai)){
                  header("Location: ../../pages/loaiphong.php");
              }else {
                 echo "Thêm Thất Bại";
              }
          }else{
              echo "Vui lòng nhập vào ô bên dưới";
          }
?>


 <?php include_once '../general/navigation.php';?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <h1>
             Thêm Loại Phòng
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
                                     <td class="update-td"><input style="width:300px" value="" name="maphong" type="text" maxlength="255" id="txtname"><span id="error-name" class="label-validate"></span></td>
                                 </tr>
                                 <tr><td class="update-td" style="width:150px;">
                                         <span class="update-header-td">Tên Phòng:</span></td>
                                     <td class="update-td"><input style="width:300px" value="" name="tenphong" type="text" maxlength="255" id="txtname"><span id="error-name" class="label-validate"></span></td>
                                 </tr>
                                 <tr><td class="update-td" style="width:150px;">
                                         <span class="update-header-td">Giá:</span></td>
                                     <td class="update-td"><input style="width:300px" value="" name="giaphong" type="text" maxlength="255" id="txtname"><span id="error-name" class="label-validate"></span></td>
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

