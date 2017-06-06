<?php include_once '../general/navigation.php';?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Danh Sách Phòng
      </h1>
        <a href="../data/insert/insertPhong.php" class="btn btn-success">Thêm Mới</a>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
                <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Mã Phòng</th>
                    <th>Tên Phòng</th>
                    <th>Mã Khu</th>
                    <th>Mã Loại</th>
                    <th>Sức Chứa</th>
                    <th>Giá</th>
                    <th>Giới Tính Phòng</th>
                    <th>Trạng Thái</th>
                    <th>Hành Động</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                    include '../../class/Model.php';
                    $data = new Model();
                    $sql = $data->get_list("SELECT * FROM `phong`,`khu`,`loai_phong` WHERE phong.MA_KHU = khu.MA_KHU AND phong.MA_LOAI = loai_phong.MA_LOAI");
                    foreach ($sql as $row){
                ?>
                <tr>
                  <td> <a href="../data/detail/detailPhong.php?id=<?php echo $row['MA_PHONG'].'">'.$row['MA_PHONG'];?></a></td>
                  <td><?php echo $row['TEN_PHONG'];?></td>
                  <td><?php echo $row['TEN_KHU'];?></td>
                  <td><?php echo $row['TEN_LOAI'];?></td>
                  <td><?php echo $row['SUC_CHUA'];?></td>
                    <td><?php echo $row['GIA_PHONG'];?></td>
                  <td><?php echo $row['GIOI_TINH_PHONG']==0?'Nam':'Nữ';?></td>
                  <td><?php echo $row['TRANG_THAI_PHONG']==1?'Đang sử dụng':'Chưa sử dụng';?></td>
                    <td>
                        <a href="../data/update/updatePhong.php?id=<?php echo $row['MA_PHONG'];?>">Sửa</a> |
                        <a href="../data/delete/deletePhong.php?id=<?php echo $row['MA_PHONG'];?>">Xóa</a> |
                        <a href="../data/detail/detailPhong.php?id=<?php echo $row['MA_PHONG'];?>">Chi Tiết</a></td>
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
      </div>
    </section>
  </div>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<?php include_once '../general/script.php';?>

</body>
</html>
