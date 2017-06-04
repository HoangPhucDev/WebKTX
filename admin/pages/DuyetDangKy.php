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
        if($_POST['Loai']==1)
        {
           $rs = $NguoiDung->Sua(array('TRANG_THAI_ND'=>''.'2'),'MA_ND ="'.$_POST['MSVV'].'"');
           if($rs == 1)
           {
                echo 'Phê duyệt thành công.';
           }else
           {
                echo 'Lổi 1';
           }
        }else
        {
            $rs =  $NguoiDung->Sua(array('TRANG_THAI_ND'=>''.'0'),'MA_ND ="'.$_POST['MSVV'].'"');
            if($rs == 1)
            {
                echo 'Phê duyệt thành công.';
            }else
            {
                echo 'Lổi 2';
            }
        }
    }else
    {
        echo 'Lổi';
    }