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
          $maphong = isset($_POST['maphong'])?$_POST['maphong']:'';
          $tennguoidung = isset($_POST['ten'])?$_POST['ten']:'';
          $email = isset($_POST['email'])?$_POST['email']:'';
          $sdt = isset($_POST['sdt'])?$_POST['sdt']:'';
          $gioitinh = isset($_POST['gioitinh'])?$_POST['gioitinh']:'';
          $trangthai = isset($_POST['trangthai'])?$_POST['trangthai']:'';
          $chucvu = isset($_POST['chucvu'])?$_POST['chucvu']:'';
          $updateNguoiDung = $data->Sua(array('MA_ND' => $manguoidung,'MAT_KHAU' => $pass,'MA_PHONG' => $maphong,'TEN_ND' => $tennguoidung,'EMAIL' => $email,'SDT' => $sdt,'GIOI_TINH_ND' => $gioitinh,'TRANG_THAI_ND' => $trangthai,'CHUC_VU' => $chucvu),"`MA_ND` = '$id'");
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
                                     <td class="update-td"><input style="width:300px" value="<?php echo $arrNguoiDung['MA_ND']?>" name="ma" type="text" maxlength="255" id="txtname"><span id="error-name" class="label-validate"></span></td>
                                 </tr>
                                 <tr><td class="update-td" style="width:150px;">
                                         <span class="update-header-td">Mật Khẩu:</span></td>
                                     <td class="update-td"><input style="width:300px" value="<?php echo $arrNguoiDung['MAT_KHAU']?>" name="matkhau" type="text" maxlength="255" id="txtname"><span id="error-name" class="label-validate"></span></td>
                                 </tr>
                                 <tr>
                                     <td class="update-td" style="width:150px;">
                                         <span class="update-header-td">Tên Phòng:</span>
                                     </td>
                                     <td>
                                         <select name='maphong'>
                                             <?php
                                             $phong = $phong->LayDanhSach();
                                             foreach ($phong as $arrPhong ){
                                                 if ($arrPhong['MA_PHONG'] == $arrNguoiDung['MA_PHONG']) $selected ='selected=selected';else $selected = '';
                                                 echo '<option '.$selected.' value="'.$arrPhong['MA_PHONG'].'">'.$arrPhong['TEN_PHONG'].'</option>';
                                             }
                                             ?>
                                         </select>
                                     </td>
                                 </tr>
                                 <tr><td class="update-td" style="width:150px;">
                                         <span class="update-header-td">Tên Người Dùng:</span></td>
                                     <td class="update-td"><input style="width:300px" value="<?php echo $arrNguoiDung['TEN_ND'];?>" name="ten" type="text" maxlength="255" id="txtname"><span id="error-name" class="label-validate"></span></td>
                                 </tr>
                                 <tr><td class="update-td" style="width:150px;">
                                         <span class="update-header-td">Email:</span></td>
                                     <td class="update-td"><input style="width:300px" value="<?php echo $arrNguoiDung['EMAIL']?>" name="email" type="text" maxlength="255" id="txtname"><span id="error-name" class="label-validate"></span></td>
                                 </tr>
                                 <tr><td class="update-td" style="width:150px;">
                                         <span class="update-header-td">Số Điện Thoại:</span></td>
                                     <td class="update-td"><input style="width:300px" value="<?php echo $arrNguoiDung['SDT']?>" name="sdt" type="text" maxlength="255" id="txtname"><span id="error-name" class="label-validate"></span></td>
                                 </tr>
                                 <tr><td class="update-td" style="width:150px;">
                                         <span class="update-header-td">Giới Tính:</span></td>
                                     <td class="update-td">
                                         <select name="gioitinh">
                                             <?php
                                             if ($arrNguoiDung['GIOI_TINH_ND'] == 1){?>
                                                 <option selected="selected" value="1">Nam</option>
                                                 <option value="0">Nữ</option>
                                             <?php }else {?>
                                                 <option  value="1">Nam</option>
                                                 <option selected="selected" value="0">Nữ</option>
                                             <?php }
                                             ?>


                                         </select>
                                     </td>
                                 </tr>
                                 <tr><td class="update-td" style="width:150px;">
                                         <span class="update-header-td">Trạng Thái:</span></td>
                                     <td class="update-td"><input style="width:300px" value="<?php echo $arrNguoiDung['TRANG_THAI_ND'];?>" name="trangthai" type="text" maxlength="255" id="txtname"><span id="error-name" class="label-validate"></span></td>
                                 </tr>
                                 <tr><td class="update-td" style="width:150px;">
                                         <span class="update-header-td">Chức Vụ:</span></td>
                                     <td class="update-td"><input style="width:300px" value="<?php echo $arrNguoiDung['CHUC_VU'];?>" name="chucvu" type="text" maxlength="255" id="txtname"><span id="error-name" class="label-validate"></span></td>
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



