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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>aktech</title>
</head>

<body>
    <!-- Preloader Box -->
    <div class="preloader_wrapper preloader_active preloader_open">
        <div class="preloader_holder">
            <div class="preloader d-flex justify-content-center align-items-center h-100">
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
        <!-- Blog Start -->
        <section class="saf_blog_wrapper">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="saf_blog_page_wrapper">
                        <?PhP
                            $id = $_GET['projectid'];
                            $sqlproject = "SELECT * FROM `project` WHERE `id` = '$id'";

                            $prodect_project=$conn->query($sqlproject);
                            $row_project = $prodect_project->fetch_assoc();
                            
                        ?>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="saf_blog_thumb text-center">
                                            <a href="#">
                                                <h4 class="saf_blog_title saf_S_blog_title"><?php echo $row_project["prodecttype"];?></h4>
                                            </a>
                                            <ul class="saf_blog_info">
                                                <li>
                                                    <a href=""><img src="assets/images/index/location.png" alt="" width="40" height="40"/><?php echo $row_project["Location"]; ?></a>
                                                </li>
                                                <li>
                                                    <a href=""><img src="assets/images/index/date.png" alt="" width="35" height="35"/><?php echo $row_project["Date"]; ?></a>
                                                </li>
                                            </ul>
                                            <div class="blog_text wow fadeInLeft" data-wow-duration="1s">
                                                <b>Scope of Work</b>
                                                <p><?php echo $row_project["scope"];?></p>
                                                <br>
                                                <div class="w3-content">
                                                    <img class="mySlides" src='<?php echo $row_project["productsimg1"]; ?>' style="max-width: 100%; height: auto;">
                                                    <img class="mySlides" src='<?php echo $row_project["productsimg2"]; ?>' style="max-width: 100%; height: auto;">
                                                    <img class="mySlides" src='<?php echo $row_project["productsimg3"]; ?>' style="max-width: 100%; height: auto;">
                                                    <img class="mySlides" src='<?php echo $row_project["productsimg4"]; ?>' style="max-width: 100%; height: auto;">
                                                
                                                    <button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                                                    <button class="w3-button w3-display-right" onclick="plusDivs(1)">&#10095;</button>
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
                    <h4>Our Clients |Partners</h4>
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
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
    showDivs(slideIndex += n);
    }

    function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    }
    x[slideIndex-1].style.display = "block";  
    }
    </script>
</body>

</html>