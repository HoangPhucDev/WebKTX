 <?php 
    require_once '../../../class/NguoiDung.php';
    require_once '../../../class/Phong.php';
    $phong = new Phong();
    $data = new NguoiDung();
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
          if(!empty($manguoidung) && !empty($matkhau) && !empty($tennguoidung) && !empty($email) && is_numeric($sdt) && !empty($trangthai) && !empty($chucvu)){
             $insertNguoiDung = $data->Them(array('MA_ND' => ''.$manguoidung,'MAT_KHAU' => ''.$pass,'MA_PHONG' => ''.$maphong,'TEN_ND' => ''.$tennguoidung,'EMAIL' => ''.$email,'SDT' => $sdt,'GIOI_TINH_ND' => ''.$gioitinh,'TRANG_THAI_ND' => ''.$trangthai,'CHUC_VU' => ''.$chucvu));
              if (isset($insertNguoiDung)){
                  header("Location: ../../pages/user.php");
              }else {
                 echo "Thêm Thất Bại";
              }
          }else{
              echo "Vui lòng nhập vào ô bên dưới";
          }
?>
<?php include '../general/header.php';?>
            <form id="form-update" action="" name="themdml" method="post">
                     <span class="title-table">Thêm Người Dùng</span>
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
                              <td class="update-td"><input style="width:300px" value="" name="ma" type="text" maxlength="255" id="txtname"><span id="error-name" class="label-validate"></span></td>
                           </tr>
                           <tr><td class="update-td" style="width:150px;">
                                 <span class="update-header-td">Mật Khẩu:</span></td>
                              <td class="update-td"><input style="width:300px" value="" name="matkhau" type="text" maxlength="255" id="txtname"><span id="error-name" class="label-validate"></span></td>
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
                                                 echo '<option value="'.$arrPhong['MA_PHONG'].'">'.$arrPhong['TEN_PHONG'].'</option>';
                                             }
                                  ?>
                              </select>
                              </td>
                           </tr>
                           <tr><td class="update-td" style="width:150px;">
                                 <span class="update-header-td">Tên Người Dùng:</span></td>
                              <td class="update-td"><input style="width:300px" value="" name="ten" type="text" maxlength="255" id="txtname"><span id="error-name" class="label-validate"></span></td>
                           </tr>
                           <tr><td class="update-td" style="width:150px;">
                                 <span class="update-header-td">Email:</span></td>
                              <td class="update-td"><input style="width:300px" value="" name="email" type="text" maxlength="255" id="txtname"><span id="error-name" class="label-validate"></span></td>
                           </tr>
                           <tr><td class="update-td" style="width:150px;">
                                 <span class="update-header-td">Số Điện Thoại:</span></td>
                              <td class="update-td"><input style="width:300px" value="" name="sdt" type="text" maxlength="255" id="txtname"><span id="error-name" class="label-validate"></span></td>
                           </tr>
                           <tr><td class="update-td" style="width:150px;">
                                 <span class="update-header-td">Giới Tính:</span></td>
                              <td class="update-td">
                                <select name="gioitinh">
                                   <option value="1">Nam</option>
                                   <option value="0">Nữ</option>
                                </select>
                              </td>
                           </tr>
                           <tr><td class="update-td" style="width:150px;">
                                 <span class="update-header-td">Trạng Thái:</span></td>
                              <td class="update-td"><input style="width:300px" value="" name="trangthai" type="text" maxlength="255" id="txtname"><span id="error-name" class="label-validate"></span></td>
                           </tr>
                           <tr><td class="update-td" style="width:150px;">
                                 <span class="update-header-td">Chức Vụ:</span></td>
                              <td class="update-td"><input style="width:300px" value="" name="chucvu" type="text" maxlength="255" id="txtname"><span id="error-name" class="label-validate"></span></td>
                           </tr>
                        </tbody>
                     </table>
                  </form>
 </body>
 </html>
