<?php
include_once '../../class/NguoiDung.php';
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 04/06/2017
 * Time: 6:17 CH
 */

    if(isset($_POST['MSVV']) && isset($_POST['Loai']))
    {
        $NguoiDung = new NguoiDung();
        $MSSV = $_POST['MSVV'];
        $SV=$NguoiDung->LayChiTietTin(''.$MSSV);
        if($_POST['Loai']==1)
        {
           $rs = $NguoiDung->Sua(array('TRANG_THAI_ND'=>''.'2'),'MA_ND ="'.$MSSV .'"');
           if($rs == 1)
           {
                echo 'Phê duyệt thành công.';
                GuiMail($SV['EMAIL'],'Đã Được Phê Duyệt');
           }else
           {
                echo 'Lổi 1';
           }
        }else
        {
            $rs =  $NguoiDung->Sua(array('TRANG_THAI_ND'=>''.'0'),'MA_ND ="'.$MSSV.'"');
            if($rs == 1)
            {
                echo 'Phê duyệt thành công.';
                GuiMail($SV['EMAIL'],'Không Được Chấp Nhận');
            }else
            {
                echo 'Lổi 2';
            }
        }
    }else
    {
        echo 'Lổi';
    }

    function GuiMail($mail,$message)
    {
            $to = $mail;
            $subject  = 'Xác Nhận Đăng Ký KTX';
            $headers  = 'From: nguyenhoangphuc1995@gmail.com' . "\r\n" .
                        'MIME-Version: 1.0' . "\r\n" .
                        'Content-type: text/html; charset=utf-8';
            if(mail($to, '=?utf-8?B?'.base64_encode($subject).'?=', $message, $headers)){
                echo "<br>Gửi Email Thành Công.";
            }else {
                echo "<br>Gửi Email Thất bại";
            }
    }