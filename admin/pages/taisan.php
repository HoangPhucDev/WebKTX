<?php include_once '../general/navigation.php';?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Danh Sách Tài Sản
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
                  <th>Mã Tài Sản</th>
                  <th>Tên Tài Sản</th>
                  <th>Giá Trị Tài Sản</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                    include '../../class/Model.php';
                    $data = new Model();
                    $sql = $data->get_list("SELECT * FROM `tai_san`");
                    foreach ($sql as $row){
                ?>
                <tr>
                  <td><?php echo $row['MA_TAI_SAN'];?></td>
                  <td><?php echo $row['TEN_TAI_SAN'];?></td>
                  <td><?php echo $row['GIA_TRI_TS'];?></td>
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
