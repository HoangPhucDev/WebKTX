<?php
include_once './class/Model.php';             
$data = new Model();


if(isset($_POST['id']))
{
	$MaPhong = $_POST['id'];
	$sql = 'select  MA_PHONG,
					TEN_PHONG,
					khu.TEN_KHU,
					loai_phong.TEN_LOAI,
					SUC_CHUA,
					GIOI_TINH_PHONG,
					TRANG_THAI_PHONG,
					loai_phong.GIA_PHONG
			FROM `phong`
			INNER JOIN loai_phong,khu
			where 	phong.MA_PHONG = '.$MaPhong.' and 
					phong.MA_KHU = khu.MA_KHU and 
					phong.MA_LOAI = loai_phong.MA_LOAI';
    $Phong = $data->get_list($sql);
    $SVTrongPhong = $data->get_list('SELECT `MA_ND`,`TEN_ND`,`TRANG_THAI_ND` FROM `nguoi_dung` WHERE `TRANG_THAI_ND` >0 AND `MA_PHONG` = '.$MaPhong.' ORDER BY `nguoi_dung`.`TRANG_THAI_ND` DESC');
    $Phong[1] = $SVTrongPhong;
   	echo json_encode($Phong);

}

if(isset($_GET['id']))
{
    echo 'Phòng '.$_GET['id'];
}
?>