<?php include 'general/header.php';
        include 'class/Model.php';
$data2 = new Model();
$result = $data2->get_row('SELECT * FROM tin_tuc WHERE NGAY_DANG =(SELECT MAX(NGAY_DANG) FROM tin_tuc)');
?>

<div class="clearfix"></div>
<div id="maincontent">
    <div id="maincontent-section1">
    <div class="listbox listbox-main news-box">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" style="height: 280px">
                <div class="item active">
                    <img src="./Images/2.png" alt="...">
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="item">
                    <img src="./Images/5.jpg" alt="...">
                    <div class="carousel-caption">
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
        <div class="listbox listbox-main" style="margin-top: 20px">
            <div class="listbox-title">
                    <h4>TIN TỨC - THÔNG BÁO MỚI NHẤT</h4>
                </div>
            <div class="listbox listbox-main faqs-box">
                    <div style="color:blue;font-size:22px;text-align:left;font-weight:bold;padding:20px; text-transform:uppercase"><?= $result['TIEU_DE']; ?></div><br>
                    <span style="color:silver;font-family:'Lucida Sans';font-size:10px;float:left;"><?= date('d/m/Y - H:i:s',$result['NGAY_DANG']); ?></span><br>
                    <div style="text-align:justify;">
                        <p><strong><?= $result['NOI_DUNG']; ?></strong></p>

                <p>&nbsp;</p>

                    </div>
            </div>
        </div>
     </div>
        <script>
            $('.carousel').carousel({
                interval: 2000
            })
        </script>
<?php include 'general/slider.php';?>        
<?php include 'general/footer.php';?>        