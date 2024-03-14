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
                                        <div class="saf_blog_thumb">
                                            
                                            <div class="headlines">
                                               
                                                    <h4 class=" saf_S_blog_title"><?php echo $row_project["prodectname"];?></h4>
                                                    <h5><?php echo $row_project["prodecttype"];?></h5>
                                    
                                                <ul class="saf_blog_info">
                                                    <li class="info_item">
                                                        <i class="fa fa-location-arrow" aria-hidden="true"></i><p><?php echo $row_project["Location"]; ?></p>
                                                    </li>
                                                    <li class="info_item">
                                                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i><p><?php echo $row_project["Date"]; ?></p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="d-flex align-items-center" style="max-width: 100%;">
                                                <div class="blog_text wow fadeInLeft" data-wow-duration="1s" style="flex: 1;">
                                                    <b>Project Description</b>
                                                    <br><br>
                                                    <p><?php echo $row_project["prodectdetails"];?></p>
                                                    <br>
                                                    <p><?php echo $row_project["prodectdetails1"];?></p>
                                                    <b>Aktech Scope</b>
                                                    <p><?php echo $row_project["scope"];?></p>
                                                    <br>
                                                </div>
                                                <div class="image-holder" style="flex: 1; border-radius:20%; margin-left:50px">
                                                    <img src="<?php echo $row_project["productsimg1"]; ?>" alt="" style="max-width: 100%; height: auto; max-height: 100%;">
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
    
    <?php
    include("featured-projects.php");
    ?>
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
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusDivs(n) {
        showSlides(slideIndex += n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        
        if (slides.length < 2) { // Disable buttons if there's only one slide
            document.getElementsByClassName("w3-button")[0].style.display = "none";
            document.getElementsByClassName("w3-button")[1].style.display = "none";
            return;
        } else {
            document.getElementsByClassName("w3-button")[0].style.display = "block";
            document.getElementsByClassName("w3-button")[1].style.display = "block";
        }

        if (n > slides.length) { slideIndex = 1; }  // Reset to the beginning
        if (n < 1) { slideIndex = slides.length; } // Move to the last slide if going back from the first

        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex - 1].style.display = "block";
    }
</script>

    </script>
</body>

</html>