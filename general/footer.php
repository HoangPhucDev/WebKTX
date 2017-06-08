<div class="footer" id="footer">
            <div id="footer-content">
                <div class="container">
                    <div id="footer-content-nav">
                        <div id="footer-content-nav-brand">
                            <h4><a href="#"><b>KÝ TÚC XÁ ĐẠI HỌC KỸ THUẬT - CÔNG NGHỆ CẦN THƠ</b></a></h4>
                        </div>
                    </div>
                    <div id="footer-content-links">
                        <div class="links-group contact">
                            <h4>LIÊN HỆ</h4>
                            <p>Ban quản lý KTX - Đại học Kỹ thuật - Công nghệ Cần Thơ.</p>
                            <p>Địa chỉ: 256 Nguyễn Văn Cừ, Quận Ninh Kiều, Thành phố Cần Thơ.</p>
                            <p>Tel: 0511.3736.936</p>
                            <p>Email: phonghanhchinh@ctuet.edu.vn</p>
                        </div>
                        <div class="links-group connectus" style="margin-left: 20px;">
                            <h4>LIÊN KẾT</h4>

                        </div>
                    </div>
                </div>
            </div>
            <div id="footer-copyright">
                <div class="container">
                    <p>Bản quyền trường Đại học Kỹ thuật - Công nghệ Cần Thơ</p>
                </div>
            </div>
        </div>

        <div class="search-area">
            <div class="search-area-div">
                <div class="search-area-div-form">
                    <div class="col-sm-offset-6 col-sm-6 input-group">
                        <input type="text" class="form-control" placeholder="Nhập họ tên hoặc MSSV" id="txtTimKiem1" name="txtTimKiem1">
                        <span class="input-group-btn">
                            <button class="btn btn-success" type="button" onclick="TimKiem1();"><span class="glyphicon glyphicon-search"></span>Tìm kiếm</button>
                        </span>
                        <script>
                            function TimKiem1() {
                                window.location.href = "#" + txtTimKiem1.value;
                            }
                        </script>

                    </div>
                </div>
            </div>
            <div class="search-area-background" style="display:none;">
            </div>
        </div>
    <script src="./Content/Script/jquery.bootstrap.newsbox.min.js"></script>
    <script src="./Content/Script/jssor.slider.mini.js"></script>
    <script src="./Content/Script/bootstrap.min.js"></script>
    <script src="./Content/Script/jquery.mmenu.min.all.js"></script>
    <script src="./Content/Script/jquery.mmenu.fixedelements.min.js"></script>

    <script type="text/javascript">
                $(document).ready(function () {
                // Hover to show dropdown in bootstrap
                $('ul.nav li.dropdown').hover(function () {
                    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
                }, function () {
                    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
                });

                //Set script for slide fixed
                // hide .navbar first
                $(".navbar-slide").hide();

                // fade in .navbar
                $(function () {
                    $(window).scroll(function () {
                        // set distance user needs to scroll before we fadeIn navbar
                        if ($(this).scrollTop() > $('#wrapper-header').height() + 80) {
                            $('.navbar-slide').fadeIn();
                        } else if ($('#wrapper-header').css('display') != 'none') {
                            $('.navbar-slide').fadeOut();
                        }
                    });

                });
                //set menu slide side
                $("#my-menu").mmenu();

                //slide logo of party with school
                $(function animate() {
                    $(".ads-slide .ads-slide-item:first").each(function () {
                        $(this).animate(
                            {
                                marginLeft: -$(this).outerWidth(true),
                                opacity: "hide"

                            }, 2000, function () {
                                $(this).insertAfter(".ads-slide .ads-slide-item:last");
                                $(this).fadeIn();
                                $(this).css({ marginLeft: 0 });
                                setTimeout(function () { animate() }, 2000);
                            });
                    });
                });

                // Show search bar
                $(".search-area-background").click(function () {
                    $(".search-area > div").removeClass("search-show");
                    $(this).fadeOut();
                    $("#btn-search i").removeClass("fa-remove");
                    $("#btn-search i").addClass("fa-search");
                });
                $("#btn-search").click(function () {
                    if ($(".search-area-background").css("display") == "none") {
                        $(".search-area-background").fadeIn();
                        $(".search-area > div").addClass("search-show");
                        $("#btn-search i").removeClass("fa-search");
                        $("#btn-search i").addClass("fa-remove");
                    } else {
                        $(".search-area-background").fadeOut();
                        $(".search-area > div").removeClass("search-show");
                        $("#btn-search i").removeClass("fa-remove");
                        $("#btn-search i").addClass("fa-search");
                    }
                });

            });
            $(function () {
            $(".news").bootstrapNews({
                newsPerPage: 5,
                autoplay: true,
                pauseOnHover: true,
                navigation: false,
                direction: 'up',
                newsTickerInterval: 3000,
                onToDo: function () {
            }
                } );
                    });

            jQuery(document).ready(function ($) {
            var jssor_1_SlideoTransitions = [
              [{ b: 5500.0, d: 3000.0, o: -1.0, r: 240.0, e: { r: 2.0 } }],
              [{ b: -1.0, d: 1.0, o: -1.0, c: { x: 51.0, t: -51.0 } }, { b: 0.0, d: 1000.0, o: 1.0, c: { x: -51.0, t: 51.0 }, e: { o: 7.0, c: { x: 7.0, t: 7.0 } } }],
              [{ b: -1.0, d: 1.0, o: -1.0, sX: 9.0, sY: 9.0 }, { b: 1000.0, d: 1000.0, o: 1.0, sX: -9.0, sY: -9.0, e: { sX: 2.0, sY: 2.0 } }],
              [{ b: -1.0, d: 1.0, o: -1.0, r: -180.0, sX: 9.0, sY: 9.0 }, { b: 2000.0, d: 1000.0, o: 1.0, r: 180.0, sX: -9.0, sY: -9.0, e: { r: 2.0, sX: 2.0, sY: 2.0 } }],
              [{ b: -1.0, d: 1.0, o: -1.0 }, { b: 3000.0, d: 2000.0, y: 180.0, o: 1.0, e: { y: 16.0 } }],
              [{ b: -1.0, d: 1.0, o: -1.0, r: -150.0 }, { b: 7500.0, d: 1600.0, o: 1.0, r: 150.0, e: { r: 3.0 } }],
              [{ b: 10000.0, d: 2000.0, x: -379.0, e: { x: 7.0 } }],
              [{ b: 10000.0, d: 2000.0, x: -379.0, e: { x: 7.0 } }],
              [{ b: -1.0, d: 1.0, o: -1.0, r: 288.0, sX: 9.0, sY: 9.0 }, { b: 9100.0, d: 900.0, x: -1400.0, y: -660.0, o: 1.0, r: -288.0, sX: -9.0, sY: -9.0, e: { r: 6.0 } }, { b: 10000.0, d: 1600.0, x: -200.0, o: -1.0, e: { x: 16.0 } }]
            ];

            var jssor_1_options = {
                $AutoPlay: true,
                $SlideDuration: 800,
                $SlideEasing: $Jease$.$OutQuint,
                $CaptionSliderOptions: {
                    $Class: $JssorCaptionSlideo$,
                    $Transitions: jssor_1_SlideoTransitions
                },
                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$
                },
                $BulletNavigatorOptions: {
                    $Class: $JssorBulletNavigator$
                }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
        function TimKiem() {
            window.location.href = "#" + txtTimKiem.value;
        }
    </script>

                                
                            
    </div>
</body>
</html>

