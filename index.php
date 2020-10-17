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
                        <a class="navbar-brand" href="index.php"><img class="pageLogo" src="image/logo1_200x70.png" alt="Logo"></a>
                        <!-- Navbar Toggler -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav" aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button> 
                        <!-- Navbar -->
                        <div class="collapse navbar-collapse" id="worldNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Trang Chủ<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="catagory.php">Thời Sự</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="catagory.php">Thể Thao</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="catagory.php">Giải Trí</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="catagory.php">Sức Khỏe</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="catagory.php">Du Lịch</a>
                                </li>
                            </ul>
                            <div id="search-wrapper" class="">
                                <form action="#">
                                    <input type="text" id="search" placeholder="Search something...">
                                    <div id="close-icon" style="display: none;" class=""></div>
                                    <input class="d-none" type="submit" value="">
                                </form>
                            </div>
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
                                                <a href="single-blog.php" class="thumb thumb-5x3">
                                                    <img src="image/headline_2.jpg">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-12">
                                            <div class="headline-text">
                                                <p>
                                                    <h2>Máy bay trực thăng được điều động cứu người bị nạn</h2>
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
                            <h5 class="title">Tin tức mới nhất</h5>
                            <div class="widget-content">
                                <!-- Single Blog Post -->
                                <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <a href="single-blog.php"><img src="img/blog-img/b11.jpg" alt=""></a>
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="single-blog.php" class="headline">
                                            <h5 class="mb-0">How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                        </a>
                                    </div>
                                </div>
                                <!-- Single Blog Post -->
                                <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <a href="single-blog.php"><img src="img/blog-img/b13.jpg" alt=""></a>
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="single-blog.php" class="headline">
                                            <h5 class="mb-0">How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                        </a>
                                    </div>
                                </div>
                                <!-- Single Blog Post -->
                                <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <a href="single-blog.php"><img src="img/blog-img/b14.jpg" alt=""></a>
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="single-blog.php" class="headline">
                                            <h5 class="mb-0">How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                        </a>
                                    </div>
                                </div>
                                <!-- Single Blog Post -->
                                <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <a href="single-blog.php"><img src="img/blog-img/b10.jpg" alt=""></a>
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="single-blog.php" class="headline">
                                            <h5 class="mb-0">How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                        </a>
                                    </div>
                                </div>
                                <!-- Single Blog Post -->
                                <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <a href="single-blog.php"><img src="img/blog-img/b12.jpg" alt=""></a>
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="single-blog.php" class="headline">
                                            <h5 class="mb-0">How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Widget Area -->
                        
                        <!-- Widget Area -->
                        
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- ========== Single Blog Post ========== -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-post post-style-3 mt-50 wow fadeInUpBig" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUpBig;">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <a href="single-blog.php"><img src="img/blog-img/b4.jpg" alt=""></a>
                            <!-- Post Content -->
                            <div class="post-content d-flex align-items-center justify-content-between">
                                <!-- Catagory -->
                                <div class="post-tag"><a href="catagory.php">Thời Sự</a></div>
                                <!-- Headline -->
                                <a href="single-blog.php" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                </a>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ========== Single Blog Post ========== -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-post post-style-3 mt-50 wow fadeInUpBig" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUpBig;">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <a href="single-blog.php"><img src="img/blog-img/b5.jpg" alt=""></a>
                            <!-- Post Content -->
                            <div class="post-content d-flex align-items-center justify-content-between">
                                <!-- Catagory -->
                                <div class="post-tag"><a href="catagory.php">Thể Thao</a></div>
                                <!-- Headline -->
                                <a href="single-blog.php" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                </a>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ========== Single Blog Post ========== -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-post post-style-3 mt-50 wow fadeInUpBig" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUpBig;">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <a href="single-blog.php"><img src="img/blog-img/b6.jpg" alt=""></a>
                            <!-- Post Content -->
                            <div class="post-content d-flex align-items-center justify-content-between">
                                <!-- Catagory -->
                                <div class="post-tag"><a href="catagory.php">Giải Trí</a></div>
                                <!-- Headline -->
                                <a href="single-blog.php" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                </a>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="world-latest-articles">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="title">
                            <a href="catagory.php"><h5>Thời Sự</h5></a>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUpBig;">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="img/blog-img/b18.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="single-blog.php" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                </a>
                                <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUpBig;">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="img/blog-img/b19.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="single-blog.php" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                </a>
                                <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUpBig;">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="img/blog-img/b20.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="single-blog.php" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                </a>
                                <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUpBig;">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="img/blog-img/b21.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="single-blog.php" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                </a>
                                <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>
                    </div>                   
                </div>
            </div>

            <div class="world-latest-articles">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="title">
                            <a href="catagory.php"><h5>Thể Thao</h5></a>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUpBig;">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="img/blog-img/b18.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="single-blog.php" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                </a>
                                <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUpBig;">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="img/blog-img/b19.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="single-blog.php" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                </a>
                                <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUpBig;">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="img/blog-img/b20.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="single-blog.php" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                </a>
                                <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUpBig;">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="img/blog-img/b21.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="single-blog.php" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                </a>
                                <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>

            <div class="world-latest-articles">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="title">
                            <a href="catagory.php"><h5>Giải Trí</h5></a>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUpBig;">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="img/blog-img/b18.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="single-blog.php" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                </a>
                                <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUpBig;">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="img/blog-img/b19.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="single-blog.php" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                </a>
                                <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUpBig;">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="img/blog-img/b20.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="single-blog.php" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                </a>
                                <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUpBig;">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="img/blog-img/b21.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="single-blog.php" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                </a>
                                <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>

            <div class="world-latest-articles">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="title">
                            <a href="catagory.php"><h5>Sức Khỏe</h5></a>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUpBig;">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="img/blog-img/b18.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="single-blog.php" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                </a>
                                <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUpBig;">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="img/blog-img/b19.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="single-blog.php" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                </a>
                                <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUpBig;">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="img/blog-img/b20.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="single-blog.php" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                </a>
                                <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUpBig;">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="img/blog-img/b21.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="single-blog.php" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                </a>
                                <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>

            <div class="world-latest-articles">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="title">
                            <a href="catagory.php"><h5>Du Lịch</h5></a>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUpBig;">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="img/blog-img/b18.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="single-blog.php" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                </a>
                                <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUpBig;">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="img/blog-img/b19.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="single-blog.php" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                </a>
                                <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUpBig;">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="img/blog-img/b20.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="single-blog.php" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                </a>
                                <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUpBig;">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="img/blog-img/b21.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="single-blog.php" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                </a>
                                <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        

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
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="footer-single-widget">
                        <ul class="footer-menu d-flex justify-content-between">
                            <li class="nav-item active"><a href="index.php">Trang Chủ</a></li>
                            <li class="nav-item active"><a href="catagory.php">Thời Sự</a></li>
                            <li class="nav-item active"><a href="catagory.php">Thể Thao</a></li>
                            <li class="nav-item active"><a href="catagory.php">Giải Trí</a></li>
                            <li class="nav-item active"><a href="catagory.php">Sức Khỏe</a></li>
                            <li class="nav-item active"><a href="catagory.php">Du Lịch</a></li>
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
</body></html>