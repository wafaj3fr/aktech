<!DOCTYPE html>
<html lang="zxx">
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
    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
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


        <!-- Blog Start -->


  <div class="container-fluid">
        <?PhP
                            $id = 'Project Management';
                            $sqlproject = "SELECT * FROM `services` WHERE `servicesName` = '$id'";

                            $prodect_project=$conn->query($sqlproject);
                            $row_project = $prodect_project->fetch_assoc();
                            
                            ?>
        <h1 class="text-center mt-5 display-3 fw-bold" style="margin:15px;"><span class="theme-text">Project </span>Management</h1>
        <hr class="mx-auto mb-5 w-25">
        <p class="text-center mb-5"><?php echo $row_project["servicedet"];?> </p>
        <div class="row mb-5">
            <div class="col-12 col-sm-6 col-md-3 m-auto">
                <!-- card starts here -->
                <div class="ser-card shadow">
                <img src="./assets/images/index/cost1.png" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="text-center">Scope management</h3>
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
                <img src="./assets/images/index/Allura - Work From home.png" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="text-center">Schedule management</h3>
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
                    <img src="./assets/images/index/Allura - Exploring on Laptop.png" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="text-center">cost management</h3>
                        <hr class="mx-auto w-75">
                        <p> <?php echo $row_project["servicedet4"];?></p>
                    </div>
                </div>
                <!-- card ends here -->
            </div>
            <!-- col ends here -->
            <div class="col-12 col-sm-6 col-md-3 m-auto">
                <!-- card starts here -->
                <div class="ser-card shadow">
                <img src="./assets/images/index/Allura - Chilling.png" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="text-center">Risk Management</h3>
                        <hr class="mx-auto w-75">
                        <p><?php echo $row_project["servicedet5"];?></p>
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
                <img src="./assets/images/index/cost1.png" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="text-center">Quality Management</h3>
                        <hr class="mx-auto w-75">
                        <p> <?php echo $row_project["servicedet6"];?></p>
                    </div>
                </div>
                <!-- card ends here -->
            </div>
            <!-- col ends here -->
            <div class="col-12 col-sm-6 col-md-3 m-auto">
                <!-- card starts here -->
                <div class="ser-card shadow">
                <img src="./assets/images/index/scope.png" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="text-center">Procurement Management   </h3>
                        <hr class="mx-auto w-75">
                        <p> <?php echo $row_project["servicedet7"];?></p>
                    </div>
                </div>
                <!-- card ends here -->
            </div>
            <!-- col ends here -->
            <div class="col-12 col-sm-6 col-md-3 m-auto">
                <!-- card starts here -->
                <div class="ser-card shadow">
                    <img src="./assets/images/index/risk1.png" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="text-center">Stakeholder management</h3>
                        <hr class="mx-auto w-75">
                        <p> <?php echo $row_project["servicedet8"];?></p>
                    </div>
                </div>
                <!-- card ends here -->
            </div>

        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>


    
    <!-- Partner Start -->
    <div class="saf_partner_wrapper">
            <div class="container">
            <div class="saf_heading">
                                <h4>Our Clients | Partners</h4>
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