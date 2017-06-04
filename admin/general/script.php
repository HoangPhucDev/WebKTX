<!-- jQuery 2.2.3 -->
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
        "language": {
            "lengthMenu": "Hiển thị _MENU_ dòng trong mõi trang",
            "zeroRecords": "Không tìm thấy dữ liệu yêu cầu",
            "info": "Trang thứ _PAGE_ trong _PAGES_ trang",
            "infoEmpty": "Dữ liệu không có sẵn",
            "infoFiltered": "(lọc từ _MAX_ dòng dữ liệu)",
            "search": "Tìm:",
            "paginate": {
                "first":      "Đầu",
                "last":       "Cuối",
                "next":       "Tiếp",
                "previous":   "Quay Lại"
            }
        }
    });
  });
</script>


