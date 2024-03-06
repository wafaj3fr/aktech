<!DOCTYPE html>
<!-- 
   Template Name: Multifarious - Responsive HTML Template 
   Version: 1.0.0
   Author: Kamleshyadav
   Website: 
   Purchase: 
   -->
<!--[if IE 8]> 
<html lang="en" class="ie8 no-js">
   <![endif]-->
<!--[if IE 9]> 
   <html lang="en" class="ie9 no-js">
      <![endif]-->
<!--[if !IE]><!-->
<html lang="zxx">
<!--<![endif]-->
<!-- Begin Head -->
<?php 
  include("admin/conn.php");
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/animate.css">
    <link rel="stylesheet" href="../assets/css/swiper.min.css">
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../assets/css/font.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/nice-select.css">
    <link rel="stylesheet" href="../assets/css/comman.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" type="image/ico" href="assets/images/index/favicon.png" />
    <title>aktech</title>
    <style>
        
.saf_blog_date {
    background: var(--main-orange-version1);
    color: var(--main-bg-color);
    width: 62px;
    display: inline-block;
    text-align: center;
    padding: 0px 0;
    position: absolute;
    right: 24px;
    top: -10px;
    height: 50px;
    line-height: 10px;
    font-size: 14px;
    padding-bottom: 6px;
}

.saf_blog_date:before {
    content: "";
    position: absolute;
    top: 0;
    border-right: 0 solid transparent;
    border-bottom: 10px solid var(--main-orange-version1);
    border-left: 8px solid transparent;
    left: -8px;
}

.saf_blog_date:after {
    content: "";
    position: absolute;
    top: 0;
    border-left: 0 solid transparent;
    border-bottom: 10px solid var(--main-orange-version1);
    border-right: 8px solid transparent;
    right: -8px;
}

.saf_blog_date b {
    font-size: 28px;
    display: inline-block;
    width: 100%;
    line-height: 26px;
    margin-top: 6px;
    margin-bottom: 1px;
}
        </style>
</head>

<body>
    <!-- Preloader Box -->
    <div class="preloader_wrapper preloader_active preloader_open">
        <div class="preloader_holder">
            <div class="preloader d-flex justify-content-center align-items-center h-100">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- Search Box -->
    <div class="searchBox">
        <div class="searchBoxContainer">
            <a href="javascript:void(0);" class="closeBtn">
                <svg id="Capa_1" viewBox="0 0 413.348 413.348" xmlns="http://www.w3.org/2000/svg">
                        <path d="m413.348 24.354-24.354-24.354-182.32 182.32-182.32-182.32-24.354 24.354 182.32 182.32-182.32 182.32 24.354 24.354 182.32-182.32 182.32 182.32 24.354-24.354-182.32-182.32z"/>
                     </svg>
            </a>
            <div class="search_bar_inner">
                <input type="text" placeholder="Search here..." />
                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
        </div>
    </div>
        <!-- Header Start -->
        <?php
      include("header.php");
      ?>
        <!--==========Header Banner Start==============-->
        <div class="saf_pagetitle">
            <div class="saf_img_overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="page_title">
                            <h2>Projects</h2>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <ul class="breadcrumb">
                            <li><a href="index.php">home</a></li>
                            <li>//</li>
                            <li><a href="about.php">Project</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--========Header Banner End===============-->
        <!-- Blog Start -->
        <section class="saf_blog_wrapper saf_blog_page_wrapper">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="saf_blog_page_wrapper">
                            <div class="row">
                                <!-- <div class="col-lg-8 col-md-12 col-sm-12 col-12"> -->
                                    <div class="row">
                                      <?php
                                        $sqlselectproject = "SELECT * FROM `project`" ;
                                        $result_project = mysqli_query($conn, $sqlselectproject);
                                        if ($result_project->num_rows > 0) {
                                            while($row_project = $result_project->fetch_assoc()) {
                                        ?>
                                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                            <div class="saf_blog_thumb wow fadeInUp" data-wow-duration="1s">
                                                <a href='project-details.php?projectid=<?php echo $row_project["id"];?>' class="saf_blog_img">
                                                    <img src='<?php echo $row_project["productsimg1"];?>' alt="" />
                                                    <!-- <span class="saf_blog_date"><?php echo $row_project["Date"];?></span> -->
                                                    <!-- <span class="saf_blog_date"><b>29</b>July</span> -->
                                                </a>
                                                <div class="blog_text">
                                                    <a href='project-details.php?projectid=<?php echo $row_project["id"];?>'>
                                                        <h4 class="saf_blog_title"><?php echo $row_project["prodectname"];?></h4>
                                                    </a>
                                                    <a class="saf_readMore" href='project-details.php?projectid=<?php echo $row_project["id"];?>'>
                                                    Read More Project Details
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid" viewBox="0 0 10 10">
                                                        <path d="M9.897,5.229 L5.073,9.898 C5.004,9.965 4.924,9.998 4.834,9.998 C4.745,9.998 4.666,9.965 4.597,9.898 L4.079,9.398 C4.010,9.330 3.976,9.253 3.976,9.167 C3.976,9.080 4.010,9.003 4.079,8.936 L8.147,4.998 L4.079,1.060 C4.010,0.993 3.976,0.916 3.976,0.829 C3.976,0.742 4.010,0.665 4.079,0.599 L4.597,0.099 C4.666,0.031 4.745,-0.003 4.834,-0.003 C4.924,-0.003 5.004,0.031 5.073,0.099 L9.897,4.767 C9.966,4.834 10.000,4.911 10.000,4.998 C10.000,5.085 9.966,5.161 9.897,5.229 ZM6.025,4.998 C6.025,5.085 5.991,5.161 5.921,5.229 L1.097,9.898 C1.028,9.965 0.949,9.998 0.859,9.998 C0.769,9.998 0.690,9.965 0.621,9.898 L0.104,9.398 C0.035,9.330 -0.000,9.253 -0.000,9.167 C-0.000,9.080 0.035,9.003 0.104,8.936 L4.172,4.998 L0.104,1.060 C0.035,0.993 -0.000,0.916 -0.000,0.829 C-0.000,0.742 0.035,0.665 0.104,0.599 L0.621,0.099 C0.690,0.031 0.769,-0.003 0.859,-0.003 C0.949,-0.003 1.028,0.031 1.097,0.099 L5.921,4.767 C5.991,4.834 6.025,4.911 6.025,4.998 Z"/>
                                                    </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
							                }}?>
                                        <!-- <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                            <div class="saf_blog_thumb wow fadeInUp" data-wow-duration="1s">
                                                <a href="javascript:void(0);" class="saf_blog_img">
                                                    <img src="https://via.placeholder.com/370x236" alt="" />
                                                    <span class="saf_blog_date"><b>29</b>July</span>
                                                </a>
                                                <div class="blog_text">
                                                   
                                                    <a href="javascript:void(0);">
                                                        <h4 class="saf_blog_title">Project Title</h4>
                                                    </a>
                                                    <a class="saf_readMore" href="#">
                                                   Read More Project Details
                                                   <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid" viewBox="0 0 10 10">
                                                      <path d="M9.897,5.229 L5.073,9.898 C5.004,9.965 4.924,9.998 4.834,9.998 C4.745,9.998 4.666,9.965 4.597,9.898 L4.079,9.398 C4.010,9.330 3.976,9.253 3.976,9.167 C3.976,9.080 4.010,9.003 4.079,8.936 L8.147,4.998 L4.079,1.060 C4.010,0.993 3.976,0.916 3.976,0.829 C3.976,0.742 4.010,0.665 4.079,0.599 L4.597,0.099 C4.666,0.031 4.745,-0.003 4.834,-0.003 C4.924,-0.003 5.004,0.031 5.073,0.099 L9.897,4.767 C9.966,4.834 10.000,4.911 10.000,4.998 C10.000,5.085 9.966,5.161 9.897,5.229 ZM6.025,4.998 C6.025,5.085 5.991,5.161 5.921,5.229 L1.097,9.898 C1.028,9.965 0.949,9.998 0.859,9.998 C0.769,9.998 0.690,9.965 0.621,9.898 L0.104,9.398 C0.035,9.330 -0.000,9.253 -0.000,9.167 C-0.000,9.080 0.035,9.003 0.104,8.936 L4.172,4.998 L0.104,1.060 C0.035,0.993 -0.000,0.916 -0.000,0.829 C-0.000,0.742 0.035,0.665 0.104,0.599 L0.621,0.099 C0.690,0.031 0.769,-0.003 0.859,-0.003 C0.949,-0.003 1.028,0.031 1.097,0.099 L5.921,4.767 C5.991,4.834 6.025,4.911 6.025,4.998 Z"/>
                                                   </svg>
                                                </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                            <div class="saf_blog_thumb wow fadeInUp" data-wow-duration="1s">
                                                <a href="javascript:void(0);" class="saf_blog_img">
                                                    <img src="https://via.placeholder.com/370x236" alt="" />
                                                    <span class="saf_blog_date"><b>29</b>July</span>
                                                </a>
                                                <div class="blog_text">
                                                   
                                                    <a href="javascript:void(0);">
                                                        <h4 class="saf_blog_title">Project Title</h4>
                                                    </a>
                                                    <a class="saf_readMore" href="#">
                                                   Read More Project Details
                                                   <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid" viewBox="0 0 10 10">
                                                      <path d="M9.897,5.229 L5.073,9.898 C5.004,9.965 4.924,9.998 4.834,9.998 C4.745,9.998 4.666,9.965 4.597,9.898 L4.079,9.398 C4.010,9.330 3.976,9.253 3.976,9.167 C3.976,9.080 4.010,9.003 4.079,8.936 L8.147,4.998 L4.079,1.060 C4.010,0.993 3.976,0.916 3.976,0.829 C3.976,0.742 4.010,0.665 4.079,0.599 L4.597,0.099 C4.666,0.031 4.745,-0.003 4.834,-0.003 C4.924,-0.003 5.004,0.031 5.073,0.099 L9.897,4.767 C9.966,4.834 10.000,4.911 10.000,4.998 C10.000,5.085 9.966,5.161 9.897,5.229 ZM6.025,4.998 C6.025,5.085 5.991,5.161 5.921,5.229 L1.097,9.898 C1.028,9.965 0.949,9.998 0.859,9.998 C0.769,9.998 0.690,9.965 0.621,9.898 L0.104,9.398 C0.035,9.330 -0.000,9.253 -0.000,9.167 C-0.000,9.080 0.035,9.003 0.104,8.936 L4.172,4.998 L0.104,1.060 C0.035,0.993 -0.000,0.916 -0.000,0.829 C-0.000,0.742 0.035,0.665 0.104,0.599 L0.621,0.099 C0.690,0.031 0.769,-0.003 0.859,-0.003 C0.949,-0.003 1.028,0.031 1.097,0.099 L5.921,4.767 C5.991,4.834 6.025,4.911 6.025,4.998 Z"/>
                                                   </svg>
                                                </a>
                                                </div>
                                            </div> -->
                                        <!-- </div>  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Partner Start -->
    <div class="saf_partner_wrapper">
            <div class="container">
            <div class="saf_heading">
                                <h4>Our Clients I Partners</h4>
                                <!-- <img clas="move" src="assets/images/index/heading_border_half.png" alt="" /> -->
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor inciunt ut labore et dolore magna aliqua ipsum dolor sit amet, consectetur adipisicing eliteised do eiusmod tempor incididunt ut labore et dolore.</p> -->
                            </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="partner_slider swiper-container">
                            <div class="swiper-wrapper">
                            <?php
                     $sqlselectservice = "SELECT * FROM `clients`" ;
                     $result_service = mysqli_query($conn, $sqlselectservice);
                     if ($result_service->num_rows > 0) {
                        while($row_service = $result_service->fetch_assoc()) {
                     
                    ?>
                                 <div class="swiper-slide">
                                    <div class="saf_partners_container text-center">
                                       <a href="javascript:void(0);"><img src='<?php echo $row_service["img"];?>' alt="partner" /></a>
                                    </div>
                                 </div>
                                 <?php
							}}?>
                                 <!-- <div class="swiper-slide">
                                    <div class="saf_partners_container text-center">
                                       <a href="javascript:void(0);"><img src="http://via.placeholder.com/170x90" alt="partner" /></a>
                                    </div>
                                 </div>
                                 <div class="swiper-slide">
                                    <div class="saf_partners_container text-center">
                                       <a href="javascript:void(0);"><img src="http://via.placeholder.com/170x90" alt="partner" /></a>
                                    </div>
                                 </div>
                                 <div class="swiper-slide">
                                    <div class="saf_partners_container text-center">
                                       <a href="javascript:void(0);"><img src="http://via.placeholder.com/170x90" alt="partner" /></a>
                                    </div>
                                 </div>
                                 <div class="swiper-slide">
                                    <div class="saf_partners_container text-center">
                                       <a href="javascript:void(0);"><img src="http://via.placeholder.com/170x90" alt="partner" /></a>
                                    </div>
                                 </div>
                                 <div class="swiper-slide">
                                    <div class="saf_partners_container text-center">
                                       <a href="javascript:void(0);"><img src="http://via.placeholder.com/170x90" alt="partner" /></a>
                                    </div>
                                 </div>
                                 <div class="swiper-slide">
                                    <div class="saf_partners_container text-center">
                                       <a href="javascript:void(0);"><img src="http://via.placeholder.com/170x90" alt="partner" /></a>
                                    </div>
                                 </div>
                                 <div class="swiper-slide">
                                    <div class="saf_partners_container text-center">
                                       <a href="javascript:void(0);"><img src="http://via.placeholder.com/170x90" alt="partner" /></a>
                                    </div>
                                 </div>
                                 <div class="swiper-slide">
                                    <div class="saf_partners_container text-center">
                                       <a href="javascript:void(0);"><img src="http://via.placeholder.com/170x90" alt="partner" /></a>
                                    </div>
                                 </div>
                                 <div class="swiper-slide">
                                    <div class="saf_partners_container text-center">
                                       <a href="javascript:void(0);"><img src="http://via.placeholder.com/170x90" alt="partner" /></a>
                                    </div>
                                 </div>
                                 <div class="swiper-slide">
                                    <div class="saf_partners_container text-center">
                                       <a href="javascript:void(0);"><img src="http://via.placeholder.com/170x90" alt="partner" /></a>
                                    </div>
                                 </div> -->
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Footer Start -->
    <?php
   include("footer.php");
   ?>
    <!-- GO To Top -->
    <a href="javascript:void(0);" id="scroll"><span class="fa fa-angle-double-up"></span></a>
    <!-- Script Start -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/SmoothScroll.min.js"></script>
    <script src="../assets/js/nice-select.min.js"></script>
    <script src="../assets/js/swiper.min.js"></script>
    <script src="../assets/js/wow.min.js"></script>
    <script src="../assets/js/tilt.js"></script>
    <script src="../assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>