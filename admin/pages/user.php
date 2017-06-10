<?php include_once '../general/navigation.php';?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Danh Sách Sinh Viên
      </h1>
        <a href="../data/insert/insertNguoiDung.php" class="btn btn-success">Thêm Mới</a>
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
                  <th>Mã Phòng</th>
                  <th>Tên Người Dùng</th>
                  <th>Email</th>
                  <th>Số Điện Thoại</th>
                  <th>Giới Tính</th>
                  <th>Trạng Thái</th>
                  <th>Chức Vụ</th>
                  <th colspan="3">Action</th>
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
                  <td><?php echo $row['MA_PHONG'];?></td>
                  <td><?php echo $row['TEN_ND'];?></td>
                  <td><?php echo $row['EMAIL'];?></td>
                  <td><?php echo $row['SDT'];?></td>
                  <td><?php echo $row['GIOI_TINH_ND']==0?'Nam':'Nữ';?></td>
                  <td>
                      <?php
                      switch ($row['TRANG_THAI_ND']) {
                          case 0:
                              echo 'Chưa Thuê';
                              break;
                          case 1:
                              echo 'Chờ Duyệt';
                              break;
                          case 2:
                              echo 'Đang Thuê';
                              break;
                          default:
                              echo 'Chưa Thuê';
                      }
                      ;
                  ?>
                  </td>
                  <td><?php echo $row['CHUC_VU']==0?'Sinh Viên':'Quản Trị';?></td>
                  <td><a href="../data/update/updateNguoiDung.php?id=<?php echo $row['MA_ND'];?>">Sửa</a></td>
                  <td><a href="../data/delete/deleteNguoiDung.php?id=<?php echo $row['MA_ND'];?>">Xóa</a></td>
                    <td><a href="../data/update/changePass.php?id=<?php echo $row['MA_ND'];?>">Đổi Mật Khẩu</a></td>
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
