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
    #more {display: none;}
    #more1 {display: none;}
    #more2 {display: none;}
    #more3 {display: none;}
    #more4 {display: none;}
    #more5 {display: none;}
   
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

        <!--========Header Banner End===============-->
        <!-- Blog Start -->
        <div class="container-fluid">
  <?PhP
                            $id = 'Asset Integrity & Mechanical Inspection';
                            $sqlproject = "SELECT * FROM `services` WHERE `servicesName` = '$id'";

                            $prodect_project=$conn->query($sqlproject);
                            $row_project = $prodect_project->fetch_assoc();
                            
                            ?>
        <h1 class="text-center mt-5 display-3 fw-bold" style="margin:15px;"><span class="theme-text">Asset Integrity </span><br>
         & Mechanical Inspection</h1>
        <hr class="mx-auto mb-5 w-25">
        <p class="text-center mb-5"><?php echo $row_project["servicedet"];?></p>
        <div class="row mb-5">
            <div class="col-12 col-sm-6 col-md-3 m-auto">
                <!-- card starts here -->
                <div class="ser-card shadow">
                    <img src="./assets/images/index/monitor.svg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="text-center">Assessment and Evaluation</h3>
                        <hr class="mx-auto w-75">
                        <p><?php echo $row_project["servicedet2"];?></p>
                    </div>
                </div>
                <!-- card ends here -->
            </div>
            <!-- col ends here -->
            <div class="col-12 col-sm-6 col-md-3 m-auto">
                <!-- card starts here -->
                <div class="ser-card shadow">
                <img src="./assets/images/index/problem_solving.svg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="text-center">Risk-Based Inspection (RBI)</h3>
                        <hr class="mx-auto w-75">
                        <p><?php echo $row_project["servicedet3"];?></p>
                    </div>
                </div>
                <!-- card ends here -->
            </div>
            <!-- col ends here -->
            <div class="col-12 col-sm-6 col-md-3 m-auto">
                <!-- card starts here -->
                <div class="ser-card shadow">
                    <img src="./assets/images/index/fitting_pie.svg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="text-center">Fitness-for-Service Assessment</h3>
                        <hr class="mx-auto w-75">
                        <p> <?php echo $row_project["servicedet4"];?></p>
                    </div>
                </div>
                <!-- card ends here -->
            </div>
            <!-- col ends here -->
            
        </div>
        <div class="row mb-5">
            <div class="col-12 col-sm-6 col-md-3 m-auto">
                <!-- card starts here -->
                <div class="ser-card shadow">
                    <img src="./assets/images/index/financial_data.svg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="text-center">Pipeline Integrity Management</h3>
                        <hr class="mx-auto w-75">
                        <p><?php echo $row_project["servicedet5"];?></p>
                    </div>
                </div>
                <!-- card ends here -->
            </div>
            <!-- col ends here -->
            <div class="col-12 col-sm-6 col-md-3 m-auto">
                <!-- card starts here -->
                <div class="ser-card shadow">
                <img src="./assets/images/index/repair.svg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="text-center">Mechanical Inspection Services</h3>
                        <hr class="mx-auto w-75">
                        <ul>
                          <li><ion-icon name="disc-outline"></ion-icon>Advanced NDT Service: AE, PAUT, TOFD and Long Guided Waves.</li>
                          <li><ion-icon name="disc-outline"></ion-icon>Tanks and Vessels Inspections as per API 653 by API Certified Inspector.</li>
                          <li><ion-icon name="disc-outline"></ion-icon>Piping System Inspection as per API 507 by API Certified Inspector.</li>
                          <li><ion-icon name="disc-outline"></ion-icon>Developing WPS, WQT, PQR for New Construction and In-service Pipeline by Certified Welding Engineer. IWE and CSWIP 3.1</li>
                      </ul>
                    </div>
                </div>
                <!-- card ends here -->
            </div>
            <!-- col ends here -->
            
            
        </div>
</div>
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
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    // btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    // btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}</script>
<script>
function myFunctiont1() {
  var dots1 = document.getElementById("dots1");
  var moreText = document.getElementById("more1");
  var btnText = document.getElementById("myBtn1");

  if (dots1.style.display === "none") {
    dots1.style.display = "inline";
    // btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots1.style.display = "none";
    // btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script><script>
function myFunctiont2(){
  var dots2 = document.getElementById("dots2");
  var moreText = document.getElementById("more2");
  var btnText = document.getElementById("myBtn2");

  if (dots2.style.display === "none") {
    dots2.style.display = "inline";
    // btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots2.style.display = "none";
    // btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}</script><script>
function myFunctiont3(){
  var dots3 = document.getElementById("dots3");
  var moreText = document.getElementById("more3");
  var btnText = document.getElementById("myBtn3");

  if (dots3.style.display === "none") {
    dots3.style.display = "inline";
    // btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots3.style.display = "none";
    // btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}</script><script>
function myFunctiont4(){
  var dots4 = document.getElementById("dots4");
  var moreText = document.getElementById("more4");
  var btnText = document.getElementById("myBtn4");

  if (dots4.style.display === "none") {
    dots4.style.display = "inline";
    // btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots4.style.display = "none";
    // btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}</script><script>
function myFunctiont5(){
  var dots5 = document.getElementById("dots5");
  var moreText = document.getElementById("more5");
  var btnText = document.getElementById("myBtn5");

  if (dots5.style.display === "none") {
    dots5.style.display = "inline";
    // btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots5.style.display = "none";
    // btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}</script>
</body>

</html>