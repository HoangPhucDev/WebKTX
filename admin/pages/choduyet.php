
<?php include_once '../general/navigation.php';?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Danh Sách Sinh Viên Đăng Ký Phòng
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
                                    <th>Mã SV</th>
                                    <th>Tên SV</th>
                                    <th>Email</th>
                                    <th>Giới Tính SV</th>
                                    <th>Tên Phòng</th>
                                    <th>Khu</th>
                                    <th>Giới Tính Phòng</th>
                                    <th>Trạng Thái Phòng</th>
                                    <th>Số SV Đang Thuê</th>

                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                include '../../class/Model.php';
                                $data = new Model();
                                $sql = $data->get_list("SELECT * FROM `nguoi_dung`
                                                            INNER JOIN phong,khu
                                                            WHERE `TRANG_THAI_ND` = '1' AND 
                                                                    nguoi_dung.MA_PHONG = phong.MA_PHONG AND 
                                                                    phong.MA_KHU = khu.MA_KHU");
                                foreach ($sql as $row){
                                    ?>
                                    <tr>
                                        <td><?php echo $row['MA_ND'];?></td>
                                        <td><?php echo $row['TEN_ND'];?></td>
                                        <td><?php echo $row['EMAIL'];?></td>
                                        <td><?php echo $row['GIOI_TINH_ND']==0?'Nam':'Nữ'; ?></td>
                                        <td><?php echo $row['TEN_PHONG'];?></td>
                                        <td><?php echo $row['TEN_KHU'];?></td>
                                        <td><?php echo $row['GIOI_TINH_PHONG']==0?'Nam':'Nữ'; ?></td>
                                        <td><?php echo $row['TRANG_THAI_PHONG']==0?'Chưa Sử Dụng':'Đang Sử Dụng'; ?></td>
                                        <td><?php echo $data->get_row('SELECT COUNT(MA_ND) FROM nguoi_dung
                                                                            WHERE `TRANG_THAI_ND` = 2 AND 
                                                                            nguoi_dung.MA_PHONG ='.$row['MA_PHONG'])['COUNT(MA_ND)'];?></td>
                                        <td id="nutduyet_<?php echo $row['MA_ND'];?>">
                                            <a href="xacnhan.php?duyet=<?php echo $row['EMAIL']?>">Duyệt</a> |
                                            <a href="#" data-toggle="modal" data-target="#ThongBao" onclick="Duyet('<?php echo $row['MA_ND'];?>','0')">Không Duyệt</a> </td>
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

    <div class="modal fade" id="ThongBao" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Thông Báo</h4>
                </div>
                <div class="modal-body">
                    <div id="resultThongBao">
                                    Nội dung ajax sẽ được load ở đây
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
    <!--Thông Báo -->
<?php include_once '../general/script.php';?>
<script>
    function Duyet(MSSV,DuyetHayKhongDuyet){
            $.ajax({
                url : "DuyetDangKy.php",
                type : "post",
                dataType:"text",
                data : {
                    MSVV: MSSV,
                    Loai: DuyetHayKhongDuyet
                },
                success : function (result){
                    $('#resultThongBao').html('<h4>'+result+'</h4>');
                    if(DuyetHayKhongDuyet==0)
                    {
                        $('#nutduyet_'+MSSV).text('Đã từ chối');
                    }else
                    {
                        $('#nutduyet_'+MSSV).text('Đã chấp nhận');
                    }

                }
            });
    }
</script>
</body>
</html>
