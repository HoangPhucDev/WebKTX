<?php   
  include_once 'Model.php';
  include_once 'BaseClass.php';
  /**
  * 
  */
  class NguoiDung extends Model implements BaseClass
  {
    private $__Model;
    
    function __construct()
    {
      $__Model = new Model();
    }

    public function Them($data)
    {
     $rs = $this->__Model->insert('nguoi_dung', $data);
      return $rs;
    }
    public function Sua($data, $where){

    }
    public function Xoa($where){

    }

    public function LayDanhSach(){

    }
    public function LayChiTietTin(){
      
    }
  
  }

?>