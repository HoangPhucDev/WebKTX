<?php include_once '../general/navigation.php';?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Danh Sách Khu
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
                  <th>Mã Khu</th>
                  <th>Tên Khu</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                    include '../../class/Model.php';
                    $data = new Model();
                    $sql = $data->get_list("SELECT * FROM `khu`");
                    foreach ($sql as $row){
                ?>
                <tr>
                  <td><?php echo $row['MA_KHU'];?></td>
                  <td><?php echo $row['TEN_KHU'];?></td>
                </tr>
                <?php 
                    }
                ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<?php include_once '../general/script.php';?>

</body>
</html>
