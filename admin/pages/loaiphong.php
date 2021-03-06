<?php include_once '../general/navigation.php';?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Danh Sách Loại
      </h1>
        <a href="../data/insert/insertLoaiPhong.php" class="btn btn-success">Thêm Mới</a>
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
                  <th>Mã Loại Phòng</th>
                  <th>Tên Loại Phòng</th>
                  <th>Giá Phòng</th>
                  <th colspan="2">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                    include '../../class/Model.php';
                    $data = new Model();
                    $sql = $data->get_list("SELECT * FROM `loai_phong`");
                    foreach ($sql as $row){
                ?>
                <tr>
                  <td><?php echo $row['MA_LOAI'];?></td>
                  <td><?php echo $row['TEN_LOAI'];?></td>
                  <td><?php echo $row['GIA_PHONG'];?></td>
                  <td><a href="../data/update/updateLoaiPhong.php?id=<?php echo $row['MA_LOAI'];?>">Edit</a></td>
                  <td><a href="../data/delete/deleteLoaiPhong.php?id=<?php echo $row['MA_LOAI'];?>">Delete</a></td>
                </tr>
                <?php 
                    }
                ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
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
