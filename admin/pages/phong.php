<?php include_once '../general/navigation.php';?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Danh Sách Phòng
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
                  <th>Mã Phòng</th>
                  <th>Tên Phòng</th>
                  <th>Mã Khu</th>
                  <th>Mã Loại</th>
                  <th>Sức Chứa</th>
                  <th>Giới Tính</th>
                  <th>Trạng Thái</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                    include '../../class/Model.php';
                    $data = new Model();
                    $sql = $data->get_list("SELECT * FROM `phong`");
                    foreach ($sql as $row){
                ?>
                <tr>
                  <td><?php echo $row['MA_PHONG'];?></td>
                  <td><?php echo $row['TEN_PHONG'];?></td>
                  <td><?php echo $row['MA_KHU'];?></td>
                  <td><?php echo $row['MA_LOAI'];?></td>
                  <td><?php echo $row['SUC_CHUA'];?></td>
                  <td><?php echo $row['GIOI_TINH_PHONG'];?></td>
                  <td><?php echo $row['TRANG_THAI_PHONG'];?></td>
                </tr>
                <?php 
                    }
                ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<?php include_once '../general/script.php';?>

</body>
</html>
