<?php 
	/**
	* 
	*/
	include_once 'Model.php';

	interface BaseClass
	{
		
		
		function __construct();

		public function Them($data);
		public function Sua($data, $where);
		public function Xoa($where);
		public function LayDanhSach();
		public function LayChiTietTin();
	
		
	}
 ?>