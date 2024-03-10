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
    <!-- <style>
        
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
        </style> -->
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
        <!-- about Section -->
        <section class="saf_about_wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="saf_about_detail wow fadeInRight">
                            <h1 class="text-center mt-5 display-3 fw-bold"><span>Our Projects</span></h1>
                        </div>
                    </div>
                </div>
            </section>
                <section class="saf_services_wrapper">
                    <div class="container-fluid">
                    <div class="row mb-5">
                    <?php
                    $sqlselectproject = "SELECT * FROM `project`" ;
                    $result_project = mysqli_query($conn, $sqlselectproject);
                    if ($result_project->num_rows > 0) {
                        while($row_project = $result_project->fetch_assoc()) {
                    ?>

                    <ul class="project-list">
                        <li><?php echo $row_project["prodectname"];?></li>
                    </ul>
                    <!-- <div class="col-12 col-sm-6 col-md-3 m-auto">
                        <div class="saf_services_sectionBg projects" >
                            <a href='project-details.php?projectid=<?php echo $row_project["id"];?>'>
                                <div class="ser-card shadow">
                                    <div class="card-body">
                                        <h4 class="saf_service_title"><?php echo $row_project["prodectname"];?></h4>
                                        <span class="saf_icon_border">
                                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid" viewBox="0 0 151 19">
                                             <g>
                                                <path d="M150.274,10.490 L149.818,10.504 C149.398,10.518 149.050,10.076 149.039,9.517 C149.030,8.959 149.362,8.495 149.781,8.482 C149.793,8.481 149.807,8.481 149.818,8.482 L150.274,8.496 C150.688,8.509 151.015,8.966 151.005,9.517 C150.996,10.050 150.671,10.477 150.274,10.490 ZM143.887,10.645 C143.409,10.656 143.014,10.149 143.006,9.512 C142.997,8.876 143.379,8.351 143.857,8.340 C143.866,8.339 143.878,8.339 143.887,8.340 L144.343,8.351 C144.817,8.362 145.195,8.881 145.187,9.512 C145.179,10.130 144.803,10.624 144.343,10.635 L143.887,10.645 ZM137.957,10.776 C137.424,10.783 136.987,10.214 136.982,9.505 C136.976,8.797 137.404,8.216 137.936,8.208 C137.941,8.208 137.951,8.208 137.956,8.208 L138.413,8.215 C138.943,8.222 139.368,8.801 139.363,9.506 C139.358,10.202 138.933,10.762 138.413,10.769 L137.957,10.776 ZM132.026,10.857 C131.459,10.865 130.995,10.259 130.989,9.506 C130.983,8.752 131.438,8.134 132.005,8.126 C132.010,8.126 132.021,8.126 132.026,8.126 L132.482,8.133 C133.046,8.140 133.499,8.756 133.493,9.506 C133.487,10.247 133.036,10.843 132.482,10.851 L132.026,10.857 ZM126.095,10.938 C125.495,10.946 125.003,10.305 124.997,9.506 C124.990,8.708 125.472,8.053 126.073,8.045 C126.079,8.045 126.090,8.045 126.095,8.045 L126.552,8.051 C127.149,8.060 127.629,8.712 127.623,9.506 C127.617,10.291 127.139,10.924 126.552,10.932 L126.095,10.938 ZM120.621,10.964 L120.165,10.966 C119.552,10.969 119.054,10.310 119.052,9.496 C119.050,8.681 119.545,8.019 120.157,8.015 L120.165,8.015 L120.621,8.018 C121.232,8.021 121.727,8.683 121.725,9.496 C121.722,10.306 121.229,10.961 120.621,10.964 ZM114.899,10.932 L114.443,10.925 C113.846,10.917 113.368,10.267 113.374,9.474 C113.380,8.691 113.857,8.062 114.442,8.053 L114.899,8.046 C115.497,8.038 115.988,8.677 115.994,9.474 C116.000,10.271 115.520,10.924 114.921,10.932 C114.915,10.932 114.904,10.932 114.899,10.932 ZM108.968,10.850 L108.512,10.843 C107.949,10.836 107.498,10.222 107.504,9.474 C107.509,8.736 107.959,8.141 108.512,8.133 L108.968,8.127 C109.533,8.119 109.996,8.723 110.002,9.474 C110.008,10.227 109.554,10.842 108.989,10.850 C108.984,10.850 108.974,10.850 108.968,10.850 ZM103.038,10.768 L102.581,10.760 C102.053,10.751 101.631,10.173 101.638,9.470 C101.645,8.780 102.066,8.225 102.581,8.216 L103.037,8.207 C103.569,8.198 104.006,8.763 104.013,9.471 C104.020,10.177 103.595,10.759 103.064,10.768 C103.057,10.768 103.045,10.768 103.038,10.768 ZM97.107,10.636 L96.651,10.625 C96.178,10.614 95.802,10.097 95.810,9.468 C95.818,8.853 96.192,8.360 96.651,8.350 L97.107,8.339 C97.584,8.328 97.977,8.834 97.985,9.468 C97.993,10.102 97.613,10.625 97.136,10.636 C97.128,10.636 97.116,10.636 97.107,10.636 ZM91.176,10.493 L90.720,10.479 C90.308,10.466 89.982,10.011 89.992,9.463 C90.001,8.933 90.325,8.508 90.720,8.494 L91.176,8.480 C91.594,8.468 91.941,8.908 91.951,9.463 C91.961,10.018 91.630,10.480 91.212,10.493 C91.201,10.493 91.187,10.493 91.176,10.493 Z" class="cls-1"/>
                                                <path d="M60.274,10.490 L59.818,10.504 C59.398,10.518 59.050,10.076 59.039,9.517 C59.030,8.959 59.362,8.495 59.781,8.482 C59.793,8.481 59.807,8.481 59.818,8.482 L60.274,8.496 C60.688,8.509 61.015,8.966 61.005,9.517 C60.996,10.050 60.671,10.477 60.274,10.490 ZM53.887,10.645 C53.409,10.656 53.014,10.149 53.006,9.512 C52.997,8.876 53.379,8.351 53.857,8.340 C53.866,8.339 53.878,8.339 53.887,8.340 L54.343,8.351 C54.817,8.362 55.195,8.881 55.187,9.512 C55.179,10.130 54.803,10.624 54.343,10.635 L53.887,10.645 ZM47.957,10.776 C47.424,10.783 46.987,10.214 46.982,9.505 C46.976,8.797 47.404,8.216 47.936,8.208 C47.941,8.208 47.951,8.208 47.956,8.208 L48.413,8.215 C48.943,8.222 49.368,8.801 49.363,9.506 C49.358,10.202 48.933,10.762 48.413,10.769 L47.957,10.776 ZM42.026,10.857 C41.459,10.865 40.995,10.259 40.989,9.506 C40.983,8.752 41.438,8.134 42.005,8.126 C42.010,8.126 42.021,8.126 42.026,8.126 L42.482,8.133 C43.046,8.140 43.499,8.756 43.493,9.506 C43.487,10.247 43.036,10.843 42.482,10.851 L42.026,10.857 ZM36.768,10.991 L36.760,10.991 L36.304,10.988 C35.682,10.986 35.179,10.311 35.181,9.485 C35.183,8.661 35.685,7.994 36.304,7.991 L36.760,7.989 C37.383,7.986 37.889,8.656 37.892,9.485 C37.894,10.314 37.391,10.988 36.768,10.991 ZM30.837,10.963 L30.829,10.963 L30.373,10.961 C29.762,10.958 29.269,10.296 29.271,9.484 C29.273,8.675 29.766,8.021 30.373,8.018 L30.829,8.016 C31.441,8.012 31.939,8.671 31.941,9.485 C31.943,10.298 31.449,10.960 30.837,10.963 ZM24.899,10.932 L24.443,10.925 C23.846,10.917 23.368,10.267 23.374,9.474 C23.380,8.691 23.857,8.062 24.442,8.053 L24.899,8.046 C25.497,8.038 25.988,8.677 25.994,9.474 C26.000,10.271 25.520,10.924 24.921,10.932 C24.915,10.932 24.904,10.932 24.899,10.932 ZM18.968,10.850 L18.512,10.843 C17.949,10.836 17.498,10.222 17.504,9.474 C17.509,8.736 17.959,8.141 18.512,8.133 L18.968,8.127 C19.533,8.119 19.996,8.723 20.002,9.474 C20.008,10.227 19.554,10.842 18.989,10.850 C18.984,10.850 18.974,10.850 18.968,10.850 ZM13.038,10.768 L12.581,10.760 C12.053,10.751 11.631,10.173 11.638,9.470 C11.645,8.780 12.066,8.225 12.581,8.216 L13.037,8.207 C13.569,8.198 14.006,8.763 14.013,9.471 C14.020,10.177 13.595,10.759 13.064,10.768 C13.057,10.768 13.045,10.768 13.038,10.768 ZM7.107,10.636 L6.651,10.625 C6.178,10.614 5.802,10.097 5.810,9.468 C5.818,8.853 6.192,8.360 6.651,8.350 L7.107,8.339 C7.584,8.328 7.977,8.834 7.985,9.468 C7.993,10.102 7.613,10.625 7.136,10.636 C7.128,10.636 7.116,10.636 7.107,10.636 ZM1.176,10.493 L0.720,10.479 C0.308,10.466 -0.018,10.011 -0.008,9.463 C0.001,8.933 0.325,8.508 0.720,8.494 L1.176,8.480 C1.594,8.468 1.941,8.908 1.951,9.463 C1.961,10.018 1.630,10.480 1.212,10.493 C1.201,10.493 1.187,10.493 1.176,10.493 Z" class="cls-1"/>
                                                <path d="M76.292,1.621 L76.292,-0.002 L74.708,-0.002 L74.708,1.621 C70.974,1.993 67.996,4.972 67.623,8.707 L66.000,8.707 L66.000,10.289 L67.623,10.289 C67.996,14.024 70.974,17.001 74.708,17.374 L74.708,18.998 L76.292,18.998 L76.292,17.374 C80.026,17.001 83.004,14.024 83.377,10.289 L85.000,10.289 L85.000,8.707 L83.377,8.707 C83.004,4.972 80.026,1.993 76.292,1.621 L76.292,1.621 ZM81.778,8.707 L80.178,8.707 C79.843,6.722 78.276,5.154 76.292,4.819 L76.292,3.219 C79.151,3.578 81.419,5.846 81.778,8.707 L81.778,8.707 ZM78.562,10.289 C78.275,11.399 77.402,12.273 76.292,12.560 L76.292,11.081 L74.708,11.081 L74.708,12.560 C73.598,12.273 72.725,11.399 72.437,10.289 L73.917,10.289 L73.917,8.707 L72.437,8.707 C72.725,7.596 73.598,6.723 74.708,6.435 L74.708,7.914 L76.292,7.914 L76.292,6.435 C77.402,6.723 78.275,7.596 78.562,8.707 L77.083,8.707 L77.083,10.289 L78.562,10.289 ZM74.708,3.219 L74.708,4.819 C72.724,5.154 71.156,6.722 70.822,8.707 L69.222,8.707 C69.581,5.846 71.849,3.578 74.708,3.219 L74.708,3.219 ZM69.222,10.289 L70.822,10.289 C71.157,12.274 72.724,13.841 74.708,14.176 L74.708,15.776 C71.849,15.417 69.581,13.149 69.222,10.289 L69.222,10.289 ZM76.292,15.776 L76.292,14.176 C78.276,13.841 79.843,12.274 80.178,10.289 L81.778,10.289 C81.419,13.149 79.151,15.417 76.292,15.776 L76.292,15.776 Z"/>
                                             </g>
                                          </svg>
                                       </span>
                                    </div>
                                    <p><?php echo $row_project["prodecttype"];?></p>
                                </div>
                            </a>
                        </div>
                    </div> -->
                    <?php
					}}?>
                    
                </div>
                    </div>
                </section>
            </div>

        <!-- Blog Start -->

        <div id="featured-projects" class="carousel">
            <?php
                                        $sqlselectproject = "SELECT * FROM `project`" ;
                                        $result_project = mysqli_query($conn, $sqlselectproject);
                                        if ($result_project->num_rows > 0) {
                                            while($row_project = $result_project->fetch_assoc()) {
                                        ?>
            <div class="carousel-inner">
            <a href='project-details.php?projectid=<?php echo $row_project["id"];?>' class="saf_blog_img">
                                                    <img src='<?php echo $row_project["productsimg1"];?>' alt="" />
                                                    
                                                </a>
                </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#featured-projects" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#featured-projects" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            <?php
            }}?>
            </div>
         <!-- <section class="saf_blog_wrapper saf_blog_page_wrapper">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="saf_blog_page_wrapper">
                            <div class="row">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
    </div>
    <!-- Partner Start -->
    <div class="saf_partner_wrapper">
            <div class="container">
            <div class="saf_heading">
                                <h4>Our Clients I Partners</h4>
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
    <script>
        // Assuming you have an array of project data (replace with your data source)
const projects = [
  {
    image: "project1.jpg",
    link: "project1.html",
    title: "Project 1 Title",
  },
  {
    image: "project2.jpg",
    link: "project2.html",
    title: "Project 2 Title",
  },
  // Add more project objects as needed
];

// Function to create a carousel item for a project
function createProjectSlide(project) {
  const slide = document.createElement("div");
  slide.classList.add("carousel-item");

  const image = document.createElement("img");
  image.src = project.image;
  image.alt = project.title;
  slide.appendChild(image);

  const link = document.createElement("a");
  link.href = project.link;
  link.classList.add("d-block", "w-100"); // Cover entire slide area
  link.style.cursor = "pointer"; // Set cursor to pointer on hover
  slide.appendChild(link);

  return slide;
}

// Create carousel slides based on project data
const carouselInner = document.querySelector(".carousel-inner");
projects.forEach((project) => {
  const slide = createProjectSlide(project);
  carouselInner.appendChild(slide);
});

// Initialize Bootstrap carousel (optional)
const carousel = new bootstrap.Carousel(document.getElementById("featured-projects"));

    </script>
    
</body>

</html>