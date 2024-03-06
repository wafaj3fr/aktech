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
    #more {display: none;}
    #more1 {display: none;}
    #more2 {display: none;}
    #more3 {display: none;}
    #more4 {display: none;}
    #more5 {display: none;}
    #more6 {display: none;}
    #more7 {display: none;}
    #more8 {display: none;}
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
                            <h2>Services Detail</h2>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <ul class="breadcrumb">
                            <li><a href="index.php">home</a></li>
                            <li>//</li>
                            <li><a href="about.php">Services Detail</a></li>
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
                            $id = 'Engineering Services';
                            $sqlproject = "SELECT * FROM `services` WHERE `servicesName` = '$id'";

                            $prodect_project=$conn->query($sqlproject);
                            $row_project = $prodect_project->fetch_assoc();
                        ?>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="saf_blog_thumb">
                                            <a href="#">
                                                <h4 class="saf_blog_title saf_S_blog_title"><?php echo $row_project["servicesName"];?></h4>
                                            </a>
                                            <!-- <ul class="saf_blog_info">
                                                <li>
                                                    <a href="javascript:void(0);"><img src="assets/images/index/location.png" alt="" width="40" height="40"/><?php echo $row_project["Location"]; ?></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);"><img src="assets/images/index/date.png" alt="" width="35" height="35"/><?php echo $row_project["Date"]; ?></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);"><img src="assets/images/index/cmnt.png" alt="" />52</a>
                                                </li>
                                            </ul> -->
                                        <!-- <a href="javascript:void(0);" class="saf_blog_img wow fadeInDown" data-wow-duration="1s">
                                            <img src="http://via.placeholder.com/870x580" alt="" />
                                        </a> -->
                                        <div class="saf_single_blog_text2">
                                                <?php echo $row_project["servicedet2"];?>  </div>
                                        <div class="blog_text wow fadeInLeft" data-wow-duration="1s">
                                            
                                        <!-- style=" text-align: center;" -->
                                        <!-- <b><?php echo $row_project["servicedettitel"];?></b> -->
                                        <a class=""  onclick="myFunction()" id="myBtn"><div class="saf_author_message_box wow fadeInLeft" data-wow-duration="1s"><?php echo $row_project["servicedettitel"];?></div></a>

                                        <span id="dots"></span>
                                        <span id="more">
                                        <p><?php echo $row_project["servicedet"];?></p>
                                            <ul style="padding: 20px;">
                                            <li class="me"> Conceptual Design.</li>
                                            <li class="me"> Feasibility Study.</li>
                                            <li class="me"> Process Design.</li>
                                            <li class="me"> Basic Engineering.</li>
                                            <li class="me"> PFD & P&ID Development.</li>
                                            <li class="me"> Heat and Material Balance “HMB”.</li>
                                            <li class="me"> Conceptual Layouts.</li>
                                            <li class="me"> Operation and Control Philosophy</li>
                                            <!-- <li>Milk</li> -->
                                             </ul>
                                             </span></p>
                                                <!-- <button onclick="myFunction()" id="myBtn">Read more</button> -->
                                          
                                            <!-- <div class="saf_single_blog_text wow fadeInLeft" data-wow-duration="1s"> -->
                                            <a class=""  onclick="myFunctiont1()" id="myBtn1"><div class="saf_author_message_box wow fadeInLeft" data-wow-duration="1s"><?php echo$row_project["servicedettitel2"];?></div></a>
                                            <span id="dots1"></span><span id="more1">
                                                <p><?php echo $row_project["servicedet4"];?></p>
                                                <!-- <p> <?php echo $row_project["servicedet3"];?></p> -->
                                                <!-- <p><?php echo $row_project["servicedet"];?></p> -->
                                            <ul style="padding: 20px;">
                                            <li class="me">   Definition, selection and sizing of main equipment.</li>
                                            <li class="me">   Producing main equipment data sheets and specifications.</li>
                                            <li class="me">   Development of process piping and instrumentation diagrams “P&IDs”.</li>
                                            <li class="me">   Development of utilities piping and instrumentation diagrams “P&IDs”.</li>
                                            <li class="me">   Development of detailed plot plans.</li>
                                            <li class="me">   Elaboration of the main piping, instrumentation, electrical and civil works layouts.</li>
                                            <!-- <li>Milk</li> -->
                                             </ul></span></p>
                                             <a class=""  onclick="myFunctiont2()" id="myBtn2"><b><div class="saf_author_message_box wow fadeInLeft" data-wow-duration="1s"><?php echo $row_project["servicedettitel4"];?></b></div></a>
                                            <span id="dots2"></span><span id="more2">
                                                <div class="saf_img_text_container">
                                                    <img src="assets/images/index/se.png" alt="security">
                                               
                                                    
                                            <p>
                                            
                                            <?php echo $row_project["servicedet4"];?>
                                                <br>
                                                    <!-- <?php echo $row_project["servicedet5"];?> -->
                                                    
                                            </p>
                                                </div></span></p>
                                                <a class=""  onclick="myFunctiont3()" id="myBtn3"><div class="saf_author_message_box wow fadeInLeft" data-wow-duration="1s"><b><?php echo $row_project["servicedettitel5"];?></b></div></a> 
                                                <span id="dots3"></span><span id="more3">
                                                <p> <?php echo $row_project["servicedet5"];?></p>
                                                <ul style="padding: 20px;">
                                                <li class="me"> Process Design Basis</li>
                                                <li class="me"> Process flow diagrams</li>
                                                <li class="me"> Piping and instrumentation diagrams</li>
                                                <li class="me"> Process design calculations and equipment sizing</li>
                                                <li class="me"> Operation and control philosophy</li>
                                                <li class="me"> Commissioning Manuals</li>
                                                <!-- <li>Milk</li> -->
                                                </ul></span></p>
                                                <a class=""  onclick="myFunctiont4()" id="myBtn4"><div class="saf_author_message_box wow fadeInLeft" data-wow-duration="1s"><b><?php echo $row_project["servicedettitel6"];?></b></div></a>  
                                                <span id="dots4"></span><span id="more4">
                                                <p> <?php echo $row_project["servicedet6"];?></p>
                                                </span></p>
                                                <a class=""  onclick="myFunctiont5()" id="myBtn5"><div class="saf_author_message_box wow fadeInLeft" data-wow-duration="1s"><b><?php echo $row_project["servicedettitel7"];?></b></div></a> 
                                                <span id="dots5"></span><span id="more5">
                                                    <p> <?php echo $row_project["servicedet7"];?></p>
                                                    <ul style="padding: 20px;">
                                                <li class="me"> Authorization for Expenditure (AFE) & Total Installed Cost (TIC) Estimating.</li>
                                                <li class="me"> Preparation of equipment and piping layouts, general arrangements.</li>
                                                <li class="me"> Rotating Equipment Design /selection.</li>
                                                <li class="me"> Vessels & Tanks Design/Specifications (AME TANK. PV ELITE, etc.).</li>
                                               
                                                <!-- <li>Milk</li> -->
                                                </ul></span></p>

                                                <a class=""  onclick="myFunctiont6()" id="myBtn6"><div class="saf_author_message_box wow fadeInLeft" data-wow-duration="1s"><b><?php echo $row_project["servicedettitel8"];?></b></div></a> 
                                                <span id="dots6"></span><span id="more6">
                                                <p> <?php echo $row_project["servicedet8"];?></p>
                                                <ul style="padding: 20px;">
                                                <li class="me"> Hydraulic Analysis.</li>
                                                <li class="me"> Relief System Analysis</li>
                                                <li class="me"> Installed Cost (TIC) Estimating.</li>
                                                <li class="me"> Piping/Pipelines Design Calculations</li>
                                                <li class="me"> Authorization for Expenditure (AFE) & Total</li>
                                                <li class="me"> Specifications / Drawings/ Isometrics /MTOs.</li>
                                                <li class="me"> Piping Flexibility / Stress Analysis (Caesar II/AUTOPIPE)</li>
                                                <li class="me"> Including process & utilities piping, & firefighting ring design.</li>
                                                <li class="me"> Preparation of equipment and piping layouts, general arrangements.</li>
                                                
                                                

                                                <!-- <li>Milk</li> -->
                                                </ul></span></p>

                                                <a class=""  onclick="myFunctiont7()" id="myBtn7"><div class="saf_author_message_box wow fadeInLeft" data-wow-duration="1s"><b><?php echo $row_project["servicedettitel9"];?></b></div></a> 
                                                <span id="dots7"></span><span id="more7">
                                                <p> <?php echo $row_project["servicedet9"];?></p>
                                                <ul style="padding: 20px;">
                                                <li class="me"> Power System Modelling and Studies “ETAP”.</li>
                                                <li class="me"> Medium and Low Voltage power distribution system design</li>
                                                <li class="me"> Single line/schematic diagrams</li>
                                                <li class="me"> Grounding & Lightning protection system design.</li>
                                                <li class="me"> Cabling system design, sizing and layout.</li>
                                                <li class="me"> Lighting System design.</li>
                                                <li class="me"> Heat tracing systems</li>
                                                <li class="me"> Protection coordination study.</li>
                                                <li class="me"> Motor Control and Switchgear Design.</li>
                                                <li class="me"> Overhead transmission lines design</li>
                                                <li class="me"> Uninterruptible Power Supply (UPS) design.</li>
                                                <li class="me"> Electrical Equipment specifications & datasheets</li>
                                                <!-- <li class="me">Hydrauli</li> -->
                                                <!-- <li>Milk</li> -->
                                                </ul></span></p>

                                                <a class=""  onclick="myFunctiont8()" id="myBtn8"><div class="saf_author_message_box wow fadeInLeft" data-wow-duration="1s"><b><?php echo $row_project["servicedettitel10"];?></b></div></a> 
                                                <span id="dots8"></span><span id="more8">
                                                <p> <?php echo $row_project["servicedet10"];?></p>
                                                <ul style="padding: 20px;">
                                                <li class="me"> Operation and control philosophies, </li>
                                                <li class="me"> Block diagrams, </li>
                                                <li class="me"> Wiring schematics & </li>
                                                <li class="me"> Hook-up drawings, </li>
                                                <li class="me"> Instrumentations specifications, </li>
                                                <li class="me"> Loop diagrams, </li>
                                                <li class="me"> Instrument’s locations layout.</li>
                                                <li class="me"> PLC programming, SCADA integration.</li>
                                                <li class="me"> Interface development</li>
                                                <li class="me"> Instrument cabling design</li>
                                                <!-- <li>Milk</li> -->
                                                </ul></span></p>
                                                <!-- <p> <?php echo $row_project["servicedet7"];?></p> -->
                                                <br>
                                                <!-- <p> <?php echo $row_project["servicedet8"];?></p> -->
                                                <!-- <br> -->
                                                <!-- <p> <?php echo $row_project["servicedet9"];?></p> -->
                                            </div>
                                            <!-- <div class="saf_author_message_box wow fadeInLeft" data-wow-duration="1s"> -->
                                                <!-- <div class="saf_author_image">
                                                    <img src="http://via.placeholder.com/110x110" alt="image">
                                                </div> -->
                                                <!-- <div class="saf_author_content">
                                                    <h5>Admin - <span>David Parker</span></h5>
                                                    <p><?php echo $row_project["servicedet9"];?> </p>
                                                </div> -->
                                            <!-- </div> -->


                                            <!-- <div class="saf_comment_box">
                                                <h4 class="saf_section_heading">Comments</h4>
                                                <div class="saf_comment_holder wow fadeInLeft" data-wow-duration="1s">
                                                    <div class="saf_comment_user">
                                                        <a href="javascript:void(0);"><img src="http://via.placeholder.com/110x110" alt="image"></a>
                                                    </div>
                                                    <div class="saf_comment_detail">
                                                        <h5 class="saf_user_name">Koyica Doe</h5>
                                                        <p class="saf_comment_date">September 21, 2020<a class="saf_reply_btn" href="javascript:void(0);"><span>
                                                      </span>
                                                      <i class="fa fa-long-arrow-left"></i> Reply</a>
                                                        </p>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididuut labore et dolore mereagna aliqua. Ut enim ad minim veniam, quis nos ex ea commodo conresequat Duis aute
                                                            irure dolor veniam, quis nostrud exercitation.</p>
                                                    </div>
                                                </div>
                                                <div class="saf_comment_holder saf_comment_holder2 wow fadeInLeft" data-wow-duration="1s">
                                                    <div class="saf_comment_user">
                                                        <a href="javascript:void(0);"><img src="http://via.placeholder.com/110x110" alt="image"></a>
                                                    </div>
                                                    <div class="saf_comment_detail">
                                                        <h5 class="saf_user_name">Koyica Doe</h5>
                                                        <p class="saf_comment_date">September 21, 2020<a class="saf_reply_btn" href="javascript:void(0);"><span>
                                                      </span>
                                                      <i class="fa fa-long-arrow-left"></i> Reply</a>
                                                        </p>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididuut labore et dolore mereagna aliqua. Ut enim ad minim veniam, quis nos ex ea commodo conresequat Duis aute
                                                            irure dolor veniam, quis nostrud exercitation.</p>
                                                    </div>
                                                </div>
                                                <div class="saf_comment_holder wow fadeInLeft" data-wow-duration="1s">
                                                    <div class="saf_comment_user">
                                                        <a href="javascript:void(0);"><img src="http://via.placeholder.com/110x110" alt="image"></a>
                                                    </div>
                                                    <div class="saf_comment_detail">
                                                        <h5 class="saf_user_name">Koyica Doe</h5>
                                                        <p class="saf_comment_date">September 21, 2020<a class="saf_reply_btn" href="javascript:void(0);"><span>
                                                      </span>
                                                      <i class="fa fa-long-arrow-left"></i> Reply</a>
                                                        </p>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididuut labore et dolore mereagna aliqua. Ut enim ad minim veniam, quis nos ex ea commodo conresequat Duis aute
                                                            irure dolor veniam, quis nostrud exercitation.</p>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <!-- <div class="saf_comment_form wow fadeInLeft" data-wow-duration="1s">
                                                <div class="saf_comment_form_heading">
                                                    <h3>Leave A Comment</h3>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="saf_field_holder">
                                                            <input type="text" class="saf_form_field" placeholder="Enter Your Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="saf_field_holder">
                                                            <input type="text" class="saf_form_field" placeholder="Enter Your Email">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="saf_field_holder">
                                                            <textarea placeholder="Enter Your Message..." class="saf_form_field"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="saf_blog_btn saf_main_btn">
                                                            <a href="javascript:void(0);" class="saf_btn">Submit</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
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
}</script><script>
function myFunctiont6(){
  var dots6 = document.getElementById("dots6");
  var moreText = document.getElementById("more6");
  var btnText = document.getElementById("myBtn6");

  if (dots6.style.display === "none") {
    dots6.style.display = "inline";
    // btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots6.style.display = "none";
    // btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}

function myFunctiont7(){
  var dots7 = document.getElementById("dots7");
  var moreText = document.getElementById("more7");
  var btnText = document.getElementById("myBtn7");

  if (dots7.style.display === "none") {
    dots7.style.display = "inline";
    // btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots7.style.display = "none";
    // btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}

function myFunctiont8(){
  var dots8 = document.getElementById("dots8");
  var moreText = document.getElementById("more8");
  var btnText = document.getElementById("myBtn8");

  if (dots8.style.display === "none") {
    dots8.style.display = "inline";
    // btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots8.style.display = "none";
    // btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
</body>

</html>