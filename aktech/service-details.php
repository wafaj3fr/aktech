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
                            <h2>Project Management</h2>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <ul class="breadcrumb">
                            <li><a href="index.php">home</a></li>
                            <li>//</li>
                            <li><a href="about.php">Service Details</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--========Header Banner End===============-->
        <!-- Blog Start -->
        <section class="saf_blog_wrapper">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="saf_blog_page_wrapper">
                        <?PhP
                            $id = 'Project Management';
                            $sqlproject = "SELECT * FROM `services` WHERE `servicesName` = '$id'";

                            $prodect_project=$conn->query($sqlproject);
                            $row_project = $prodect_project->fetch_assoc();
                            
                        ?>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="saf_blog_thumb">
                                            <a href="#">
                                                <!-- <h4 class="saf_blog_title saf_S_blog_title"><?php echo $row_project["servicesName"];?></h4> -->
                                            </a>
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                Scope Management   
                                                </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                <p><?php echo $row_project["servicedet2"];?></p>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Schedule Management
                                                </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p><?php echo $row_project["servicedet3"];?></p>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Cost Management
                                                </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                <img src="assets/images/index/pm.png" alt="security">
                                                    <p> <?php echo $row_project["servicedet4"];?>
                                                    </p>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                    Risk Management
                                                </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                         <?php echo $row_project["servicedet5"];?>
                                                         
                                                    </p>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                Quality Management   
                                                </button>
                                                </h2>
                                                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                <p> <?php echo $row_project["servicedet6"];?></p>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                Procurement Management   
                                                </button>
                                                </h2>
                                                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                <p> <?php echo $row_project["servicedet7"];?></p>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                Stakeholder Management   
                                                </button>
                                                </h2>
                                                <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                <p> <?php echo $row_project["servicedet8"];?></p>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion wow fadeInLeft" data-wow-duration="1s">
                                            
                                            
                                            
                                            
                                                
                                            </div>
                                            <div class="saf_author_message_box wow fadeInLeft" data-wow-duration="1s">
                                                <div class="saf_author_content">
                                                    <p><?php echo $row_project["servicedet9"];?> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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