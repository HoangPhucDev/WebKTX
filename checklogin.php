<?php 
   include 'class/Model.php';
    $data = new Model();  
    @session_start(); 
    if (isset($_POST['submit'])){
     $username = $_POST['nguoidung'];
     $pass = md5($_POST['matkhau']);
     $sql = $data->get_row('SELECT * FROM `nguoi_dung` WHERE `MA_ND` = "'.$username.'" AND `MAT_KHAU` = "'.$pass.'"');
     if (count($sql)>=9){
         $user = $data->get_row('SELECT MA_ND,CHUC_VU FROM `nguoi_dung` WHERE `MA_ND` = "'.$username.'"');
         $_SESSION['username'] = $user['MA_ND'];
         $_SESSION['chuc_vu']= $user['CHUC_VU'];
     }else {
         $_SESSION['error'] = 'Đăng nhập thất bại!';
     }
    header("Location: index.php");
 }
 ?>