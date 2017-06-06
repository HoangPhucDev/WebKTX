 <?php 
    require_once '../../../class/Khu.php';
    $data = new Khu();
          $makhu = isset($_POST['makhu'])?$_POST['makhu']:'';
          $tenkhu = isset($_POST['tenkhu'])?$_POST['tenkhu']:'';
          if(!empty($makhu) && !empty($tenkhu)){
             $insertKhu = $data->Them(array('MA_KHU' => ''.$makhu, 'TEN_KHU' => ''.$tenkhu));
              if (isset($insertKhu)){
                  header("Location: ../../pages/khuvuc.php");
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
             Thêm Khu
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
                                     <td class="update-td"><input style="width:300px" value="" name="makhu" type="text" maxlength="255" id="txtname"><span id="error-name" class="label-validate"></span>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td class="update-td" style="width:150px;">
                                         <span class="update-header-td">Tên Khu:</span></td>
                                     <td class="update-td"><input style="width:300px" value="" name="tenkhu" type="text" maxlength="255" id="txtname"><span id="error-name" class="label-validate"></span>
                                     </td>
                                 </tr>
                                 </tbody></table>
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



