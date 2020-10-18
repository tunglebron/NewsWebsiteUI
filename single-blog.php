<?php
// kết nối Database
require  "lib/db_connect.php";
require "lib/db_function.php";
?>

<?php
if (isset($_GET['idTin'])) {
    $idTin = $_GET['idTin'];
    settype($idTin, 'int');
} else {
    $idTin = 1585;
}
// Cập nhật lượt xem tin
CapNhatSoLanXemTin($idTin);
?>



<?php
if (isset($_GET['idTL'])) {
    $idTL = $_GET['idTL'];
    settype($idTL, "int");
} else {
    $idTL = 1;
}
?>

<?php
$chiTietTin = chiTietMotTin($idTin);
$row_chiTietTin = mysqli_fetch_array($chiTietTin);

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
    <link rel="stylesheet" href="style.css">
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

                                <!-- Menu -->
                                <?php
                                $dsMenu = DSMenu();
                                while ($row_dsMenu = mysqli_fetch_array($dsMenu)) {
                                    $idTL = $row_dsMenu['idTL'];
                                ?>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="catagory.php?idTL=<?php echo $row_dsMenu['idTL'] ?>"><?php echo $row_dsMenu['TenTL'] ?></a>
                                    </li>
                                <?php
                                }
                                ?>

                                <!-- Menu -->
                                </li>
                            </ul>
                            <!-- Tìm kiếm -->
                            <div id="search-wrapper" class="">
                                <form action="#">
                                    <input type="text" id="search" placeholder="Tìm kiếm tin tức">
                                    <div id="close-icon" style="display: none;" class=""></div>
                                    <input class="d-none" type="submit" value="">
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
                <!-- ============= Post Content Area ============= -->
                <div class="col-12 col-lg-8">
                    <div class="single-blog-content mb-100">
                        <!-- Post Content -->
                        <div class="post-content">
                            <!-- Headline -->
                            <h2 style="margin-bottom: 30px;"><?php echo $row_chiTietTin['TieuDe'] ?></h2>
                            <h6> <?php echo $row_chiTietTin['TomTat'] ?></h6>
                            <h6></h6>
                            <!-- <blockquote class="mb-30"> -->
                            <div class="post-thumbnail">
                                <img id='viet' src="upload/tintuc/<?php echo $row_chiTietTin['urlHinh'] ?>" alt="" style="text-align: center;
                            width:600px;
                            height: 400px; ">
                            </div>
                            <!-- </blockquote> -->
                            <br>
                            <h6 style="color: #3D2B1F; font-family: Arial, Helvetica, sans-serif;"><?php echo $row_chiTietTin['Content'] ?> </h6>
                            <!-- Post Tags -->


                            <!-- Post Meta -->
                            <div class="post-meta second-part">
                                <p><a href="#" class="post-author"></a>  <a href="#" class="post-date"><?php echo $row_chiTietTin['Ngay'] ?>. Views: <?php echo $row_chiTietTin['SoLanXem'] ?></a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ========== Sidebar Area ========== -->
                <div class="col-12 col-md-8 col-lg-4">
                    <div class="post-sidebar-area mb-100">
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Tin tức nổi bật</h5>
                            <div class="widget-content">
                                <!-- Single Blog Post -->
                                <?php
                                $tinNoiBat = tinNoiBat();
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
                                <!-- Single Blog Post -->
                                
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
                                $idTL = $row_chiTietTin['idTL'];
                                //  Lấy thông tin 'idTL'
                                $tinXemNhieu = tinXemNhieu_single($idTL);
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


            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="post-a-comment-area mt-70">
                        <h5>Bình luận</h5>
                        <!-- Contact Form -->
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="text" name="name" id="name" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your name</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="email" name="email" id="email" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group">
                                        <textarea name="message" id="message" required></textarea>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your comment</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn world-btn">Đăng bình luận</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-lg-8">
                    <!-- Comment Area Start -->
                    <div class="comment_area clearfix mt-70">
                        <ol>
                            <!-- Single Comment Area -->
                            <li class="single_comment_area">
                                <!-- Comment Content -->
                                <div class="comment-content">
                                    <!-- Comment Meta -->
                                    <div class="comment-meta d-flex align-items-center justify-content-between">
                                        <p><a href="#" class="post-author">Ngọc Tùng</a> : <a href="#" class="post-date">10 tháng 10 năm 2020 9:48 am</a></p>
                                        <a href="#" class="comment-reply btn world-btn">Trả lời</a>
                                    </div>
                                    <p>Một bài viết rất hay và bổ ích.</p>
                                </div>
                                <ol class="children">
                                    <li class="single_comment_area">
                                        <!-- Comment Content -->
                                        <div class="comment-content">
                                            <!-- Comment Meta -->
                                            <div class="comment-meta d-flex align-items-center justify-content-between">
                                                <p><a href="#" class="post-author">Văn Trường</a> : <a href="#" class="post-date">10 tháng 10 năm 2020 10:48 am</a></p>
                                                <a href="#" class="comment-reply btn world-btn">Trả lời</a>
                                            </div>
                                            <p>Không những bài viết hay mà 'Giao diện' còn đẹp. Thực sự thích Website này quá.</p>
                                        </div>
                                    </li>
                                </ol>
                            </li>

                            <!-- Single Comment Area -->
                            <li class="single_comment_area">
                                <!-- Comment Content -->
                                <div class="comment-content">
                                    <!-- Comment Meta -->
                                    <div class="comment-meta d-flex align-items-center justify-content-between">
                                        <p><a href="#" class="post-author">Anh Vũ</a> : <a href="#" class="post-date">10 tháng 10 năm 2020 11:49 am</a></p>
                                        <a href="#" class="comment-reply btn world-btn">Trả lời</a>
                                    </div>
                                    <p>Thực sự ấn tượng với "Giao diện" của web. Perfect!</p>
                                </div>
                            </li>
                            <!-- Xem thêm -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="load-more-btn mt-50 text-center">

                                        <a href="#" class="btn world-btn">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Xem thêm -->
                        </ol>
                    </div>
                </div>
            </div>

            <!-- ============== Related Post ============== -->
            <br><br><br><br>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Single Blog Post -->
                    <div class="single-blog-post">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <img src="img/blog-img/b1.jpg" alt="">
                            <!-- Catagory -->
                            <div class="post-cta"><a href="catagory.php">travel</a></div>
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <a href="single-post.php" class="headline">
                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                            </a>
                            <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Single Blog Post -->
                    <div class="single-blog-post">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <img src="img/blog-img/b2.jpg" alt="">
                            <!-- Catagory -->
                            <div class="post-cta"><a href="#">travel</a></div>
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <a href="#" class="headline">
                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                            </a>
                            <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Single Blog Post -->
                    <div class="single-blog-post">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <img src="img/blog-img/b7.jpg" alt="">
                            <!-- Catagory -->
                            <div class="post-cta"><a href="#">travel</a></div>
                            <!-- Video Button -->
                            <a href="https://www.youtube.com/watch?v=IhnqEwFSJRg" class="video-btn"><i class="fa fa-play"></i></a>
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <a href="#" class="headline">
                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                            </a>
                            <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Single Blog Post -->
                    <div class="single-blog-post">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <img src="img/blog-img/b1.jpg" alt="">
                            <!-- Catagory -->
                            <div class="post-cta"><a href="catagory.php">travel</a></div>
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <a href="single-post.php" class="headline">
                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                            </a>
                            <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Single Blog Post -->
                    <div class="single-blog-post">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <img src="img/blog-img/b2.jpg" alt="">
                            <!-- Catagory -->
                            <div class="post-cta"><a href="#">travel</a></div>
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <a href="#" class="headline">
                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                            </a>
                            <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Single Blog Post -->
                    <div class="single-blog-post">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <img src="img/blog-img/b7.jpg" alt="">
                            <!-- Catagory -->
                            <div class="post-cta"><a href="#">travel</a></div>
                            <!-- Video Button -->
                            <a href="https://www.youtube.com/watch?v=IhnqEwFSJRg" class="video-btn"><i class="fa fa-play"></i></a>
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <a href="#" class="headline">
                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                            </a>
                            <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ============== Related Post ============== -->


        </div>
    </div>

    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <a href="./"><img src="image/logo1_200x70.png" alt=""></a>
                        <div class="copywrite-text mt-30">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="footer-single-widget">
                        <ul class="footer-menu d-flex justify-content-between">

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