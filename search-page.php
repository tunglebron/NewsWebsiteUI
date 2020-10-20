<?php
// kết nối Database
require  "lib/db_connect.php";
require "lib/db_function.php";
?>



<?php
// Lấy 5 tin nổi bật
$tinNoiBat = tinNoiBat();
// $row_tinNoiBat = mysqli_fetch_array($tinNoiBat);

?>

<?php
// Lấy thông tin tên thể loại
$tenTheLoai = tenTheLoai($idTL);
$row_tenTheLoai = mysqli_fetch_array($tenTheLoai);
?>

<?php
// Lấy  tin theo thể loại
// $tinTheoTL = tinTheo_TheLoai($idTL);
// danh sách Menu
$dsMenu = DSMenu();
?>



<?php
// Phân trang tin
$sotin1trang = 11;
if (isset($_GET['trang'])) {
    $trang = $_GET['trang'];
    settype($trang, 'int');
} else {
    $trang = 1;
}
$from = ($trang - 1) * $sotin1trang;
//Tin theo 1 trang
// $tinTheoTrang = TinTheoTheLoai_PhanTrang($idTL, $from, $sotin1trang);
if (isset($_GET['search'])) {
    $tuKhoa = $_GET['search'];
    // settype($trang, 'int');
} else {
    $tuKhoa = 'Hà Nội';
}
$tinTimKiem = timKiem_PhanTrang($tuKhoa, $from, $sotin1trang);
?>









<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>News</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="preloader">
        <div class="preload-content">
            <div id="world-load"></div>
        </div>
    </div>

    <header class="header-area sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <!-- Logo -->
                        <a class="navbar-brand" href="./"><img class="pageLogo" src="image/logo1_200x70.png" alt="Logo"></a>
                        <!-- Navbar Toggler -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav" aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <!-- Navbar -->
                        <div class="collapse navbar-collapse" id="worldNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="./">Trang Chủ <span class="sr-only">(current)</span></a>
                                </li>
                                <!-- DS Menu -->
                                <?php
                                // $dsMenu = DSMenu();
                                while ($row_dsMenu = mysqli_fetch_array($dsMenu)) {
                                    $idTL = $row_dsMenu['idTL'];
                                ?>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="catagory.php?idTL=<?php echo $row_dsMenu['idTL'] ?>"><?php echo $row_dsMenu['TenTL'] ?></a>

                                        <!-- chi tiết thể loại -->

                                        <!-- chi tiết thể loại -->


                                    </li>
                                <?php
                                }
                                ?>

                                <!-- DS Menu -->
                            </ul>
                            <!-- Tìm kiếm -->
                            <div id="search-wrapper" class="">
                                <form action="search-page.php" method="GET" target="_self">
                                    <input type="text" id="search" placeholder="Tìm kiếm tin tức" name="search" value="" require>
                                    <div id="close-icon" style="display: none;" class=""></div>
                                    <input class="d-none" type="submit" value="">
                                    <!-- tạo tìm kiếm search='timkiem' trên url -- ?name=value>
                                    <!-- <input type="hidden" name="search" value="timkiem"> -->
                                </form>
                            </div>
                            <!-- Tìm kiếm -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- ============= Post Content Area Start ============= -->
                <div class="col-12 col-lg-8">
                    <div class="post-content-area mb-100">
                        <!-- Catagory Area -->
                        <div class="world-catagory-area">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="title">Tìm kiếm: "<?php echo $tuKhoa ?>"</li>
                            </ul>

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="world-tab-1" role="tabpanel" aria-labelledby="tab1">
                                    <!-- Single Blog Post -->
                                    <!-- Nội dung -->
                                    <?php
                                    while ($row_tinTimKiem = mysqli_fetch_array($tinTimKiem)) {
                                    ?>

                                        <div class="single-blog-post post-style-4 d-flex align-items-center">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="upload/tintuc/<?php echo $row_tinTimKiem['urlHinh'] ?>" alt="" style="max-height: 150px;min-height: 120px;  ">

                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="single-blog.php?idTin=<?php echo $row_tinTimKiem['idTin'] ?>" class="headline">
                                                    <h5><?php echo $row_tinTimKiem['TieuDe'] ?></h5>
                                                </a>
                                                <p> <?php echo $row_tinTimKiem['TomTat'] ?></p>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-date"><?php echo $row_tinTimKiem['Ngay'] ?>. Views: <?php echo $row_tinTimKiem['SoLanXem'] ?></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>

                                    <!-- Single Blog Post -->

                                </div>

                                <!-- id= 'world-tab-1' đến id= 'world-tab-5' là next trang -->
                                <!-- Không dùng -->
                                <div class="tab-pane fade" id="world-tab-2" role="tabpanel" aria-labelledby="tab2">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-4 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b18.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                            </a>
                                            <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-4 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b19.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                            </a>
                                            <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-4 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b20.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                            </a>
                                            <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-4 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b21.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                            </a>
                                            <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-4 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b23.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                            </a>
                                            <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-4 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b24.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                            </a>
                                            <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Không dùng -->
                                <!-- id= 'world-tab-1' đến id= 'world-tab-5' là next trang -->
                            </div>
                            <!-- Nội dung -->
                        </div>
                    </div>
                </div>

                <!-- ========== Sidebar Area ========== -->
                <div class="col-12 col-md-8 col-lg-4">
                    <div class="post-sidebar-area">
                        <!-- Widget Area -->

                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title" style="font-size: 20px;">Tin tức nổi bật</h5>
                            <div class="widget-content">
                                <?php
                                while ($row_tinNoiBat = mysqli_fetch_array($tinNoiBat)) {

                                ?>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="upload/tintuc/<?php echo $row_tinNoiBat['urlHinh'] ?>" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="single-blog.php?idTin=<?php echo $row_tinNoiBat['idTin'] ?>" class="headline">
                                                <h5 class="mb-0"><?php echo $row_tinNoiBat['TieuDe'] ?></h5>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Single Blog Post -->

                                <?php
                                }
                                ?>


                            </div>
                        </div>
                        <!-- Kết nối mạng xã hội -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Connected</h5>
                            <div class="widget-content">
                                <div class="social-area d-flex justify-content-between">
                                    <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="https://twitter.com/?lang=vi" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a>
                                    <a href="https://vimeo.com/" target="_blank"><i class="fa fa-vimeo"></i></a>
                                    <a href="https://www.instagram.com/?hl=vi" target="_blank"><i class="fa fa-instagram"></i></a>
                                    <a href="https://www.google.com/" target="_blank"><i class="fa fa-google"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Kết nối mạng xã hội -->

                        <!-- Tin nổi bật -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Tin xem nhiều</h5>
                            <div class="widget-content">
                                <!-- Single Blog Post -->
                                <?php
                                //  Lấy thông tin 'idTL'
                                if (isset($_GET['idTL'])) {
                                    $idTL = $_GET['idTL'];
                                    settype($idTL, "int");
                                } else {
                                    $idTL = 1;
                                }
                                //  Lấy thông tin 'idTL'
                                $tinXemNhieu = tinXemNhieu_search();
                                while ($row_tinXemNhieu = mysqli_fetch_array($tinXemNhieu)) {
                                ?>

                                    <div class="single-blog-post todays-pick">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="upload/tintuc/<?php echo $row_tinXemNhieu['urlHinh'] ?>" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content px-0 pb-0">
                                            <a href="single-blog.php?idTin=<?php echo $row_tinXemNhieu['idTin'] ?>" class="headline">
                                                <h5><?php echo $row_tinXemNhieu['TieuDe'] ?></h5>
                                            </a>
                                        </div>
                                    </div>

                                <?php
                                }
                                ?>
                                <!-- Single Blog Post -->


                            </div>
                        </div>
                        <!-- Tin nổi bật -->
                    </div>
                </div>
            </div>
            <!-- load more -->
            <div class="row">
                <div class="col-12">
                    <div class="load-more-btn mt-50 text-center">
                        <!-- <a href="catagory.php?idTL=5&amp;trang=5" class="btn world-btn">Trang Trước</a> -->
                        <a href="search-page.php?search=<?php echo $tuKhoa ?>&trang=<?php echo ($trang + 1) ?>" class="btn world-btn">Xem thêm</a>

                        

                    </div>
                </div>
            </div>
            <!-- load more -->
        </div>
    </div>

    <a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647; display: none;"><i class="fa fa-angle-up" aria-hidden="true"></i></a>

    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <a href="index.php"><img src="image/logo1_200x70.png" alt=""></a>
                        <div class="copywrite-text mt-30">
                            <!-- mô tả footer  -->
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                © Copyright <script>
                                    document.write(new Date().getFullYear());
                                </script>, All rights reserved <br>
                                ® <i class="fa fa-heart-o" aria-hidden="true"></i><a href="http://uet.vnu.edu.vn/" target="_blank">Team21 </a>
                                giữ bản quyền Website này!
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget" style="text-align: center;">
                        <ul class="footer-menu d-flex justify-content-between">
                             <!-- Menu -->
                             <?php
                            $dsMenu = DSMenu();
                            while ($row_dsMenu = mysqli_fetch_array($dsMenu)) {
                            ?>

                                <li class="nav-item active"><a href="catagory.php?idTL=<?php echo $row_dsMenu['idTL'] ?>"><?php echo $row_dsMenu['TenTL'] ?></a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <!-- liên hệ  -->
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget" style="margin-left: 100px;">
                        
                        <h5 >Liên hệ</h5>
                        <h6>Email: <a href="#" >Team21@vnu.edu.vn</a></h6>
                        <!-- <form action="#" method="post">
                            <input type="email" name="email" id="email" placeholder="Enter your mail">
                            <button type="button"><i class="fa fa-arrow-right"></i></button>
                        </form> -->
                    </div>
                </div>
                <!-- liên hệ  -->
            </div>
        </div>
    </footer>
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>





</body>

</html>