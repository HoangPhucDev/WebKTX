<?php
   $mail = isset($_GET['duyet'])?$_GET['duyet']:'';
   if(isset($mail)){
       echo $to       = "'$mail'";
       die('FUNC');
       $subject  = 'Testing sendmail.exe';
       $message  = 'Hi, you just received an email using sendmail!';
       $headers  = 'From: nguyenhoangphuc1995@gmail.com';
       if(mail($to, $subject, $message, $headers)){
          
           header("Location: phong.php");
       }else{
           echo "'$mail'";
           echo "Email sending failed";
       }
   }