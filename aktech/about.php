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
    <title>aktech</title>
    <style>
#more {display: none;}
#more2 {display: none;}
#moreQMS {display: none;}
#morePM {display: none;}
#moreQHSE {display: none;}
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
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

        </div>
        <section class="saf_about_wrapper" id="About">

            <div class="container"><br><br>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="saf_about_detail wow daeInRight">
                        <h1><span>About AKTECH</span></h1>
            <?php
                        $sqlprodect = "SELECT * FROM `content` WHERE `name` = 'about us'";
                        $prodect_result=$conn->query($sqlprodect);
                        $row_prodect = $prodect_result->fetch_assoc();
                        ?>
        <p><?php echo $row_prodect["detiles"];?></p><br> <p><?php echo $row_prodect["detiles2"];?></p><br> <p><?php echo $row_prodect["detiles3"];?></p><br><p><?php echo $row_prodect["detiles4"];?></p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    
    
        <!-- <section class="saf_about_wrapper" id="About">
            <div class="container"> <br><br>
        <br>
        <br> 

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="saf_about_detail wow fadeInRight" data-wow-duration="1s">
                            <h1><span>	About AKTECH</span></h1>

                            <p class="mb-4" class="saf_about_detail wow fadeInRight">
                            <?php
                            $sqlprodect = "SELECT * FROM `content` WHERE `name` = 'about us'";
                            $prodect_result=$conn->query($sqlprodect);
                            $row_prodect = $prodect_result->fetch_assoc();
                            echo $row_prodect["detiles"]."...";
                            ?>
                            </p>
                            <span id="dots"></span><span id="more">
                                 <p><?php
                            $sqlprodect = "SELECT * FROM `content` WHERE `name` = 'about us'";
                            $prodect_result=$conn->query($sqlprodect);
                            $row_prodect = $prodect_result->fetch_assoc();
                            echo $row_prodect["detiles2"];
                            ?>
                            </p><br>
                            <p><?php
                            $sqlprodect = "SELECT * FROM `content` WHERE `name` = 'about us'";
                            $prodect_result=$conn->query($sqlprodect);
                            $row_prodect = $prodect_result->fetch_assoc();
                            echo $row_prodect["detiles3"];
                            ?>
                            </p><br>
                            <p><?php
                            $sqlprodect = "SELECT * FROM `content` WHERE `name` = 'about us'";
                            $prodect_result=$conn->query($sqlprodect);
                            $row_prodect = $prodect_result->fetch_assoc();
                            echo $row_prodect["detiles4"];
                            ?></p>
                            </span></p>
                           <button onclick="myFunction()" id="myBtn" class="saf_btn" style="float: right;">Read more</button>
                           
                            
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <section class="saf_pricing_wrapper" id="Vision">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-md-4 col-sm-12 col-xs-12 text-center">
                        <div class="saf_price_box saf_price_center wow fadeInUp" data-wow-duration="1s">
                            <div class="saf_about_detail wow" style="font-size: 50px; text-align:left;
                                text-align-last: left;">
                                <h1>&nbsp;&nbsp;&nbsp; <span>Vision</span></h1>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <p class="mb-4" class="saf_about_detail wow fadeInRight">
                                            <?php
                                    $sqlprodect = "SELECT * FROM `content` WHERE `name` = 'Vision'";
                                    $prodect_result=$conn->query($sqlprodect);
                                    $row_prodect = $prodect_result->fetch_assoc();
                                    echo $row_prodect["detiles"]."...";
                                    ?>
                                    <?php
                                    echo "<li>".$row_prodect["detiles5"]."</li>";
                                    echo "<li>".$row_prodect["detiles4"]."</li>";
                                    echo "<li>".$row_prodect["detiles"]."</li>";
                                    echo "<li>".$row_prodect["detiles3"]."</li>";
                                    echo "<li>".$row_prodect["detiles6"]."</li>";
                                    echo "<li>".$row_prodect["detiles7"]."</li>";
                                    echo "<li>".$row_prodect["detiles8"]."</li>";
                                    echo "<li>".$row_prodect["detiles2"]."</li>".'';
                                    ?>
                                    </p>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            
                                    <div class="saf_about_img relative wow fadeInUp" data-wow-duration="1s">
                                    <!-- <img src="assets/images/index/connected.svg" alt="" /> -->
                                        <img src="assets/images/index/6137734.jpg" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //////////////////////////////////////////////////////////////////////////////// -->
        <div class="container-fluid">
        <h1 class="text-center mt-5 display-3 fw-bold" style="margin:15px;"><span class="theme-text">Management </span>System</h1>
        <hr class="mx-auto mb-5 w-25">
        <div class="row mb-5">
            <div class="col-12 col-sm-6 col-md-3 m-auto">
                <div class="ser-card shadow">
                <span class="saf_whyUs_info_icon">
                                    <img src="assets/images/index/icon2.png" alt="" width="80" height="80"/>
                                    </span>
                <div class="card-body">
                            <h3 class="text-center">Quality Management System</h3>
                            <hr class="mx-auto w-75">
                            <p>AKTECH adopts an integrated quality management system at all levels of business, operational and project activities 
                                                in order to assure and control the quality of service provided, maintain operational consistency, and ensure efficiency improvement.
                                                The main strategical objective that is driving the direction of AKTECH’s quality 
                                                management system is to achieve and improve the satisfaction of our prestigious clients</p>
                        </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 m-auto">
                <div class="ser-card shadow">
                    <span class="saf_whyUs_info_icon">
                        <img src="assets/images/index/icon1.png" alt="" width="80" height="80"/>
                    </span>
                <div class="card-body">
                            <h3 class="text-center">Project Management System</h3>
                            <hr class="mx-auto w-75">
                            <p> At AKTECH, we pride ourselves on delivering comprehensive project management solutions tailored to the unique demands of each endeavor. From inception to completion, our integrated approach ensures seamless coordination across all phases of project lifecycle – from engineering design to procurement, construction, commissioning services and beyond.
                                        Aligned with industry standards and guided by the PMI PMP framework, we adhere to best practices in project management, ensuring optimal outcomes for our clients. Our commitment to excellence extends beyond mere compliance; it's ingrained in our culture and drives every aspect of our operations. By leveraging the latest technologies and methodologies, we empower our teams to mitigate risks, enhance productivity, and deliver projects on time and within budget.
                                        At AKTECH, we recognize that success is measured not only by the completion of tasks but also by the satisfaction of our clients. That's why we prioritize clear communication, proactive problem-solving, and unwavering dedication to quality in everything we do. Whether you're embarking on a complex engineering project or seeking end-to-end EPC services, trust AKTECH to be your partner of choice, committed to turning your vision into reality with precision and professionalism.
                                        </p>
                        </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 m-auto">
                <div class="ser-card shadow">
                <span class="saf_whyUs_info_icon">
                                    <img src="assets/images/index/cu.png" alt="" width="80" height="80"/>
                                    </span>
                <div class="card-body">
                            <h3 class="text-center">Health Safety & Environmental</h3>
                            <hr class="mx-auto w-75">
                            <p>AKTECH adopts an integrated quality management system at all levels of business, operational and project activities 
                                                in order to assure and control the quality of service provided, maintain operational consistency, and ensure efficiency improvement.
                                                The main strategical objective that is driving the direction of AKTECH’s quality 
                                                management system is to achieve and improve the satisfaction of our prestigious clients</p>
                        </div>
                </div>
            </div>
        </div>
        </div>
        <!-- ////////////////////////////////////////////////////////////////////////// -->
        <!-- <section class="saf_whyUs_wrapper" id="serman">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="saf_whyUs_img relative wow fadeInUp" data-wow-duration="1s">
                            
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="saf_whyUs_detail wow fadeInRight" data-wow-duration="1s">
                            <div class="saf_heading text-center">
                                <h4>Management System</h4>
                                <img src="assets/images/index/heading_border_half.png" alt="" />
                            </div>
                            <ul>
                                <li>
                                    <span class="saf_whyUs_info_icon">
                                    <img src="assets/images/index/icon2.png" alt="" width="80" height="80"/>
                                    </span>
                                    <div class="saf_whyUs_info">
                                        <a class="saf_sub_heading" style="cursor:pointer"  onclick="myFunctionQMS()" id="myBtnQMS">Quality Management System</a>

                                        <span id="dotsQMS"></span><span id="moreQMS">
                                        <p>AKTECH adopts an integrated quality management system at all levels of business, operational and project activities 
                                            in order to assure and control the quality of service provided, maintain operational consistency, and ensure efficiency improvement.
                                             The main strategical objective that is driving the direction of AKTECH’s quality 
                                             management system is to achieve and improve the satisfaction of our prestigious clients</p>
                                             <div class="gallery">
                                                <a target="_blank" href="132.png">
                                                    <img src="132.png" alt="Cinque Terre" width="600" height="400">
                                                </a>
                                                </div>

                                                <div class="gallery">
                                                <a target="_blank" href="image.png">
                                                    <img src="image.png" alt="Forest" width="600" height="400">
                                                </a>
                                                </div>
                                        </span></p>
                                    </div>
                                </li>
                                <li>
                                    <span class="saf_whyUs_info_icon">
                                    <img src="assets/images/index/icon1.png" alt="" width="80" height="80"/>
                                    </span>
                                    <div class="saf_whyUs_info">
                                        <a class="saf_sub_heading" style="cursor:pointer" onclick="myFunctionPM()" id="myBtnPM">Project Management System</a>
                                    <span id="dotsPM"></span><span id="morePM">
                                       <p> At AKTECH, we pride ourselves on delivering comprehensive project management solutions tailored to the unique demands of each endeavor. From inception to completion, our integrated approach ensures seamless coordination across all phases of project lifecycle – from engineering design to procurement, construction, commissioning services and beyond.</p>
                                        <p>Aligned with industry standards and guided by the PMI PMP framework, we adhere to best practices in project management, ensuring optimal outcomes for our clients. Our commitment to excellence extends beyond mere compliance; it's ingrained in our culture and drives every aspect of our operations. By leveraging the latest technologies and methodologies, we empower our teams to mitigate risks, enhance productivity, and deliver projects on time and within budget.</p>
                                        <p>At AKTECH, we recognize that success is measured not only by the completion of tasks but also by the satisfaction of our clients. That's why we prioritize clear communication, proactive problem-solving, and unwavering dedication to quality in everything we do. Whether you're embarking on a complex engineering project or seeking end-to-end EPC services, trust AKTECH to be your partner of choice, committed to turning your vision into reality with precision and professionalism. </p>
                                        </span></p>
                                    </div>
                                </li>
                                <li>
                                    <span class="saf_whyUs_info_icon">
                                    <img src="assets/images/index/cu.png" alt="" width="80" height="80"/>
                                    </span>
                                    <div class="saf_whyUs_info">
                                        <a class="saf_sub_heading" style="cursor:pointer" onclick="myFunctionQHSE()" id="myBtnQHSE">Health Safety & Environmental </a>
                                        <span id="dotsQHSE"></span><span id="moreQHSE">
                                 
                                 <center>
                              <div >
                                             <a target="_blank" href="QHSE.png">
                                                 <img src="QHSE.png" alt="Forest" width="1000" height="400">
                                             </a>
                                             </div>
                              </span>
                                 </center>
                                    </div>
                                </li>
                            </ul>
                            <center>

                        </div>
                    </div>
                </div>
            </div>
        </section> -->

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
        <!-- <script>
        function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more"; 
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less"; 
            moreText.style.display = "inline";
        }
        }
        </script> -->
        <script>
        function myFunction2() {
        var dots2 = document.getElementById("dots2");
        var moreText = document.getElementById("more2");
        var btnText = document.getElementById("myBtn2");

        if (dots2.style.display === "none") {
            dots2.style.display = "inline";
            btnText.innerHTML = "Read more"; 
            moreText.style.display = "none";
        } else {
            dots2.style.display = "none";
            btnText.innerHTML = "Read less"; 
            moreText.style.display = "inline";
        }
        }
        </script>
         <script>
        function myFunctionQMS() {
        var dotsQMS = document.getElementById("dotsQMS");
        var moreText = document.getElementById("moreQMS");
        var btnText = document.getElementById("myBtnQMS");

        if (dotsQMS.style.display === "none") {
            dotsQMS.style.display = "inline";
            // btnText.innerHTML = "Read more"; 
            moreText.style.display = "none";
        } else {
            dotsQMS.style.display = "none";
            // btnText.innerHTML = "Read less"; 
            moreText.style.display = "inline";
        }
        }
        </script>
         <script>
        function myFunctionPM() {
        var dotsPM = document.getElementById("dotsPM");
        var moreText = document.getElementById("morePM");
        var btnText = document.getElementById("myBtnPM");

        if (dotsPM.style.display === "none") {
            dotsPM.style.display = "inline";
            // btnText.innerHTML = "Read more"; 
            moreText.style.display = "none";
        } else {
            dotsPM.style.display = "none";
            // btnText.innerHTML = "Read less"; 
            moreText.style.display = "inline";
        }
        }
        </script>

        <script>
        function myFunctionQHSE() {
        var dotsQHSE = document.getElementById("dotsQHSE");
        var moreText = document.getElementById("moreQHSE");
        var btnText = document.getElementById("myBtnQHSE");

        if (dotsQHSE.style.display === "none") {
            dotsQHSE.style.display = "inline";
            // btnText.innerHTML = "Read more"; 
            moreText.style.display = "none";
        } else {
            dotsQHSE.style.display = "none";
            // btnText.innerHTML = "Read less"; 
            moreText.style.display = "inline";
        }
        }
        </script>
        
</body>

</html>