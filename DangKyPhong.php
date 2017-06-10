<?php 
	include_once './class/Model.php';       

	$data = new Model();

	if(isset($_POST['MSVV']) && isset($_POST['MaPhong']))
	{
		$MSSV = $_POST['MSVV'];
		$MaPhong = $_POST['MaPhong'];

		$Phong = $data->get_row('SELECT * FROM `phong` WHERE MA_PHONG = '.$MaPhong);
		$SucChua = $Phong['SUC_CHUA'];
		$SoLuongSVTrongPhong = $data->get_row("
                            SELECT COUNT(MA_ND) FROM `nguoi_dung` WHERE `MA_PHONG`=".$MaPhong." AND `TRANG_THAI_ND`>0");
		$SinhVien = $data->get_row('SELECT * FROM `nguoi_dung` WHERE MA_ND = "'.$MSSV.'"');

		if($SoLuongSVTrongPhong['COUNT(MA_ND)']>=$SucChua)
		{
			echo 'Hiện Tại Phòng Đã Đầy';
		}else
		{
			if($SinhVien['GIOI_TINH_ND']!=$Phong['GIOI_TINH_PHONG'])
			{
				echo 'Giới Tính Không Phù Hợp';
			}else
			{
				$dataupdate = array('MA_PHONG'=>''.$MaPhong,'TRANG_THAI_ND'=>''.'1');
				echo $data->update('nguoi_dung',$dataupdate,'`MA_ND` = "'.$MSSV.'"')==1?'Đăng Ký Thành Công':'Đăng Ký Thất Bại';
			}
			
		}
	}else
	{
	    if(isset($_GET['MSSV']))
        {
            $dataupdate = array('MA_PHONG'=>'10','TRANG_THAI_ND'=>''.'1');
            echo $data->update('nguoi_dung',$dataupdate,'`MA_ND` = "'.$_GET['MSSV'].'"')==1?'Đăng Ký Thành Công':'Đăng Ký Thất Bại';
        }else {
            echo 'Lổi';
        }
	}
 ?>