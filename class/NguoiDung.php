<?php   
  include_once 'Model.php';
  include_once 'BaseClass.php';
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 04/06/2017
 * Time: 3:17 CH
 */
  class NguoiDung extends Model implements BaseClass
  {
      private $TENBANG;
      private $TENKHOACHINH;
      private $__Model;

      function __construct()
      {
          $this->__Model = new Model();
          $this->TENBANG = 'nguoi_dung';
          $this->TENKHOACHINH = 'MA_ND';
      }

      public function Them($data)
      {
          $rs = $this->__Model->insert($this->TENBANG, $data);
          return $rs;
      }
      public function Sua($data, $where)
      {
          $rs = $this->__Model->update($this->TENBANG, $data, $where);
          return $rs;
      }
      public function Xoa($where){
          $rs = $this->__Model->delete($this->TENBANG, $where);
          return $rs;
      }

      public function LayDanhSach(){
          $rs = $this->__Model->get_list('SELECT * FROM '.$this->TENBANG);
          return $rs;
      }
      public function LayChiTietTin($where){
          $rs = $this->__Model-> get_row('SELECT * FROM '.$this->TENBANG.' WHERE `'.$this->TENKHOACHINH.'`='.$where);
          return $rs;
      }
  
  }

