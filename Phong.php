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
			FROM `Phong`
			INNER JOIN loai_phong,khu
			where 	phong.MA_PHONG = '.$MaPhong.' and 
					phong.MA_KHU = khu.MA_KHU and 
					phong.MA_LOAI = loai_phong.MA_LOAI';
    $Phong = $data->get_list($sql);
    $SVTrongPhong = $data->get_list('SELECT * FROM `nguoi_dung` WHERE MA_PHONG = '.$MaPhong);
    $Phong[1] = $SVTrongPhong;
    //print_r($Phong);
   	echo json_encode($Phong);

}else
{
	$sql = 'select  MA_PHONG,
					TEN_PHONG,
					khu.TEN_KHU,
					loai_phong.TEN_LOAI,
					SUC_CHUA,
					GIOI_TINH_PHONG,
					TRANG_THAI_PHONG,
					loai_phong.GIA_PHONG
			FROM `Phong`
			INNER JOIN loai_phong,khu
			where 	 
					phong.MA_KHU = khu.MA_KHU and 
					phong.MA_LOAI = loai_phong.MA_LOAI';
    $Phong = $data->get_list($sql);
   	echo json_encode($Phong);
}
?>