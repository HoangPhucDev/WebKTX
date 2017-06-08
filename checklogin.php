<?php 
   include 'class/Model.php';
    $data = new Model();  
    @session_start(); 
    if (isset($_POST['submit'])){
     $user = $_POST['nguoidung'];
     $pass = md5($_POST['matkhau']);
     $sql = $data->get_row('SELECT * FROM `nguoi_dung` WHERE `MA_ND` = "'.$user.'" AND `MAT_KHAU` = "'.$pass.'"');
     if (count($sql)>=9){
         $_SESSION['username'] = $user;
         $_SESSION['chuc_vu']=$data->get_row("SELECT CHUC_VU FROM `nguoi_dung` WHERE MA_ND = '".$user."'")['CHUC_VU'];
     }else {
         $_SESSION['error'] = 'Đăng nhập thất bại!';
     }
    header("Location: index.php");
 }
 ?>