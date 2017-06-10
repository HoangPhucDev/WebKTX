<?php include_once '../general/navigation.php';?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Danh Sách Tin Tức
        </h1>
        <a href="../data/insert/insertTinTuc.php" class="btn btn-success">Thêm Mới</a>
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
                                <th>#</th>
                                <th>Tiêu Đề</th>
                                <th>Ngày Đăng</th>
                                <th>Người Đăng</th>
                                <th>Hành Động</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            include '../../class/Model.php';
                            $data = new Model();
                            $sql = $data->get_list("SELECT * FROM `tin_tuc` ORDER BY `NGAY_DANG` DESC");
                            foreach ($sql as $row){
                                ?>
                                <tr>
                                    <td><?php echo $row['MA_TIN'];?></td>
                                    <td><?php echo $row['TIEU_DE'];?></td>
                                    <td><?php echo date('d/m/Y - H:i:s',$row['NGAY_DANG']);?></td>
                                    <td><?php echo $row['MA_ND'];?></td>
                                    <td>
                                        <a href="../data/update/updateTinTuc.php?id=<?php echo $row['MA_TIN'];?>">Sửa</a> |
                                        <a href="../data/delete/deleteTinTuc.php?id=<?php echo $row['MA_TIN'];?>">Xóa</a>
                                    </td>
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
