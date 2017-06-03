<?php 
   include 'class/Model.php';
    $data = new Model();  
    @session_start(); 
 if (isset($_POST['submit'])){
     $user = $_POST['nguoidung'];
     $pass = md5($_POST['matkhau']);
     $sql = $data->get_row("SELECT * FROM `nguoi_dung` WHERE `MA_ND` = '$user' AND `MAT_KHAU` = '$pass'");
     if (isset($sql)){
         $_SESSION['username'] = $user;
         
     }else {
         $_SESSION['error'] = 'Đăng nhập thất bại!';
     }
     header("Location: index.php");
 }
 ?>