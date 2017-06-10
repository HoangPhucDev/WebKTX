
<?php include 'general/header.php';
 include 'class/Model.php';
$data2 = new Model();
?>
<div class="clearfix"></div>

<div id="maincontent">
    <div id="maincontent-section1">
        <div class="listbox listbox-main news-box">
            <?php if(isset($_GET['id'])):
            $result = $data2->get_row('SELECT * FROM tin_tuc WHERE MA_TIN = '.$_GET['id']); ?>
            <h1 style="text-align: center; color: red"><?= $result['TIEU_DE']; ?></h1><br>
            <div class="text-left">
                <div class="text-sm">
                    <em><?=  date('d/m/Y H:i:s',$result['NGAY_DANG']); ?> </em><br>
                </div>
                <?= $result['NOI_DUNG']; ?>
            </div>
                <?php else:
                $result = $data2->get_list('SELECT * FROM tin_tuc');
                ?>
                <h1 style="text-align: center; color: red">Danh Sách Tin Tức</h1><br>
                <ul>
                    <?php foreach ($result as $row){
                        echo "<li><a style='text-transform: uppercase; color: blue; font-weight: bold' href=tintuc.php?id=".$row['MA_TIN'].">".$row['TIEU_DE']." - ".date('d/m/Y - H:i:s',$row['NGAY_DANG'])."</a></li>";
                    } ?>
                </ul>

            <?php endif; ?>
        </div>

        <?php include 'general/slider.php';?>
<?php include 'general/footer.php';?>