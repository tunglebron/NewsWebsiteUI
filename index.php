<?php
// kết nối Database
require  "lib/db_connect.php";
require "lib/db_function.php";
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
    <link rel="stylesheet" type="text/css" href="style.css">
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
                                    <a class="nav-link" href="./">Trang Chủ<span class="sr-only">(current)</span></a>
                                </li>
                                <!-- DS Menu -->
                                <?php
                                $dsMenu = DSMenu();
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
                    <div class="post-content-area mb-50">
                        <!-- Catagory Area -->
                        <div class="world-catagory-area">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="title">Tin Chính</li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="world-tab-1" role="tabpanel" aria-labelledby="tab1">
                                    <div class="row">
                                        <div class="col-12 col-md-12">
                                            <div class="headline">
                                                <!-- Anh tin chinh  -->
                                                <?php
                                                $tinTieuDe1 = tinTieuDe1();
                                                $row_tinTieuDe1 = mysqli_fetch_array($tinTieuDe1);
                                                ?>
                                                <a href="single-blog.php?idTin=<?php echo $row_tinTieuDe1['idTin'] ?>" class="thumb thumb-5x3">
                                                    <img src="upload/tintuc/<?php echo $row_tinTieuDe1['urlHinh'] ?>">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-12">
                                            <div class="headline-text" style="padding-left: 10px;">
                                                <p>
                                                    <h2><?php echo $row_tinTieuDe1['TieuDe'] ?></h2>
                                                    <p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Catagory Area -->
                    </div>
                </div>

                <!-- ========== Sidebar Area ========== -->
                <div class="col-12 col-md-8 col-lg-4">
                    <div class="post-sidebar-area wow fadeInUpBig" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUpBig;">
                        <!-- Widget Area -->

                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title"><br></h5>
                            <div class="widget-content">
                                <!-- Single Blog Post -->
                                <?php
                                $tinTieuDe2 = tinTieuDe2();
                                while ($row_tinTieuDe2 = mysqli_fetch_array($tinTieuDe2)) {

                                ?>
                                    <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <a href="single-blog.php"><img src="upload/tintuc/<?php echo $row_tinTieuDe2['urlHinh'] ?>" alt=""></a>
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="single-blog.php" class="headline">
                                                <h5 class="mb-0"><?php echo $row_tinTieuDe2['TieuDe'] ?></h5>
                                            </a>
                                        </div>
                                    </div>

                                <?php
                                }
                                ?>
                                <!-- Single Blog Post -->

                            </div>
                        </div>
                        <!-- Widget Area -->

                        <!-- Widget Area -->

                    </div>
                </div>
            </div>
            <!-- Tin mới khác tin chính -->

            <div class="row justify-content-center">
                <!-- ========== Single Blog Post ========== -->
                <?php
                for ($i = 1; $i <= 3; $i++) {
                    $idTL = $i;
                    $tenTheLoai = tenTheLoai($idTL);
                    $row_tenTheLoai = mysqli_fetch_array($tenTheLoai);
                    $tinMoi_duoiTinChinh = tinMoiNhat_duoiTinChinh13($idTL);
                    $row_timMoi_duoiTinChinh = mysqli_fetch_array($tinMoi_duoiTinChinh);
                ?>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="single-blog-post post-style-3 mt-50 wow fadeInUpBig" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUpBig;">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <a href="single-blog.php"><img src="upload/tintuc/<?php echo $row_timMoi_duoiTinChinh['urlHinh'] ?>" alt=""></a>
                                <!-- Post Content -->
                                <div class="post-content d-flex align-items-center justify-content-between">
                                    <!-- Catagory -->
                                    <div class="post-tag"><a href="catagory.php?idTL=<?php echo $row_tenTheLoai['idTL'] ?>"><?php echo $row_tenTheLoai['TenTL'] ?></a></div>
                                    <!-- Headline -->
                                    <a href="single-blog.php?idTin=<?php echo $row_timMoi_duoiTinChinh['idTin'] ?>" class="headline">
                                        <h5><?php echo $row_timMoi_duoiTinChinh['TieuDe'] ?></h5>
                                    </a>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <p><a href="#" class="post-date"><?php echo $row_timMoi_duoiTinChinh['Ngay'] ?> :Views <?php echo $row_timMoi_duoiTinChinh['SoLanXem'] ?></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Blog Post ========== -->
                <?php
                }
                ?>
            </div>




            <div class="row justify-content-center">
                <!-- ========== Single Blog Post ========== -->
                <?php
                for ($i = 4; $i <= 6; $i++) {
                    $idTL = $i;
                    $tenTheLoai = tenTheLoai($idTL);
                    $row_tenTheLoai = mysqli_fetch_array($tenTheLoai);
                    $tinMoi_duoiTinChinh = tinMoiNhat_duoiTinChinh46($idTL);
                    $row_timMoi_duoiTinChinh = mysqli_fetch_array($tinMoi_duoiTinChinh);
                ?>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="single-blog-post post-style-3 mt-50 wow fadeInUpBig" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUpBig;">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <a href="single-blog.php"><img src="upload/tintuc/<?php echo $row_timMoi_duoiTinChinh['urlHinh'] ?>" alt=""></a>
                                <!-- Post Content -->
                                <div class="post-content d-flex align-items-center justify-content-between">
                                    <!-- Catagory -->
                                    <div class="post-tag"><a href="catagory.php?idTL=<?php echo $row_tenTheLoai['idTL'] ?>"><?php echo $row_tenTheLoai['TenTL'] ?></a></div>
                                    <!-- Headline -->
                                    <a href="single-blog.php?idTin=<?php echo $row_timMoi_duoiTinChinh['idTin'] ?>" class="headline">
                                        <h5><?php echo $row_timMoi_duoiTinChinh['TieuDe'] ?></h5>
                                    </a>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <p><a href="#" class="post-date"><?php echo $row_timMoi_duoiTinChinh['Ngay'] ?> :Views <?php echo $row_timMoi_duoiTinChinh['SoLanXem'] ?></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========== Single Blog Post ========== -->
                <?php
                }
                ?>
            </div>

            <!-- Tin mới khác tin chính -->

            <!-- Trang tin -->
            <?php
            for ($i = 1; $i <= 6; $i++) {
                $idTL = $i;
                $tenTheLoai = tenTheLoai($idTL);
                $row_tenTheLoai = mysqli_fetch_array($tenTheLoai);
            ?>
                <div class="world-latest-articles">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <div class="title">
                                <a href="catagory.php?idTL=<?php echo $row_tenTheLoai['idTL'] ?>">
                                    <h5><?php echo $row_tenTheLoai['TenTL'] ?></h5>
                                </a>
                            </div>
                            
                            <!-- Single Blog Post -->
                            <?php
                                $tinTheoTL = TinMoiTheoTheLoai_index($idTL);
                                while($row_tinMoiTheoTL = mysqli_fetch_array($tinTheoTL)){
                            ?>

                            <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUpBig;">
                                <!-- Post Thumbnail -->
                                <div class="post-thumbnail">
                                    <img src="upload/tintuc/<?php echo $row_tinMoiTheoTL['urlHinh'] ?>" alt="">
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <a href="single-blog.php?idTin=<?php echo $row_tinMoiTheoTL['idTin'] ?>" class="headline">
                                        <h5><?php echo $row_tinMoiTheoTL['TieuDe'] ?></h5>
                                    </a>
                                    <p><?php echo $row_tinMoiTheoTL['TomTat'] ?></p>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <p><a href="#" class="post-date"><?php echo $row_tinMoiTheoTL['Ngay'] ?>, Views:  <?php echo $row_tinMoiTheoTL['SoLanXem'] ?></a></p>
                                    </div>
                                </div>
                            </div>

                            <?php
                                }
                            ?>
                            <!-- Single Blog Post -->
                           
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
            <!-- Trang tin -->

        </div>
    </div>

    <a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647; display: none;"><i class="fa fa-angle-up" aria-hidden="true"></i></a>

    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <a href="./"><img src="image/logo1_200x70.png" alt=""></a>
                        <div class="copywrite-text mt-30">
                            <!-- mô tả footer  -->
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                © Copyright <script>
                                    document.write(new Date().getFullYear());
                                </script>, All rights reserved <br>
                                ® <i class="fa fa-heart-o" aria-hidden="true"></i><a href="https://docs.google.com/spreadsheets/d/1tbTIXoVWm3AZM5cjC5AMx9pFMRfie6xA1JGcuLVj9R8/edit#gid=0&range=A76:A79" target="_blank">Team21 </a>
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

                        <h5>Liên hệ</h5>
                        <h6>Email: <a href="https://docs.google.com/spreadsheets/d/1tbTIXoVWm3AZM5cjC5AMx9pFMRfie6xA1JGcuLVj9R8/edit#gid=0&range=A76:A79">Team21@vnu.edu.vn</a></h6>
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