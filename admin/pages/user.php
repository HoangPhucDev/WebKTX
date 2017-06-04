<?php include_once '../general/navigation.php';?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Danh Sách Sinh Viên
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Mã Người Dùng</th>
                  <th>Mật Khẩu</th>
                  <th>Mã Phòng</th>
                  <th>Tên Người Dùng</th>
                  <th>Email</th>
                  <th>Số Điện Thoại</th>
                  <th>Giới Tính</th>
                  <th>Trạng Thái</th>
                  <th>Chức Vụ</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                    include '../../class/Model.php';
                    $data = new Model();
                    $sql = $data->get_list("SELECT * FROM `nguoi_dung`");
                    foreach ($sql as $row){
                ?>
                <tr>
                  <td><?php echo $row['MA_ND'];?></td>
                  <td><?php echo $row['MAT_KHAU'];?></td>
                  <td><?php echo $row['MA_PHONG'];?></td>
                  <td><?php echo $row['TEN_ND'];?></td>
                  <td><?php echo $row['EMAIL'];?></td>
                  <td><?php echo $row['SDT'];?></td>
                  <td><?php echo $row['GIOI_TINH_ND'];?></td>
                  <td><?php echo $row['TRANG_THAI_ND'];?></td>
                  <td><?php echo $row['CHUC_VU'];?></td>
                </tr>  
                <?php 
                    }
                ?>             
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<?php include_once '../general/script.php';?>

</body>
</html>
