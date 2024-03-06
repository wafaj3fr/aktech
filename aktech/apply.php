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
        <!-- Banner Wraapper -->
        <!--==========Header Banner Start==============-->
        <div class="saf_pagetitle">
            <div class="saf_img_overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="page_title">
                            <h2>Apply Job</h2>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <ul class="breadcrumb">
                            <li><a href="index.html">home</a></li>
                            <li>//</li>
                            <li><a href="about.html">Apply</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--========Header Banner End===============-->
        <!--========Contact Start===============-->
        <div class="saf_contact_wrapper">
            <div class="container">
                <div class="row">
                <?PhP
                            $id = $_GET["applyid"];
                            $sqlproject = "SELECT * FROM `job` WHERE `id` = '$id'";

                            $prodect_project=$conn->query($sqlproject);
                            $row_project = $prodect_project->fetch_assoc();
                        ?>
                    <div class="col-lg-12 col-md-6 col-sm-12 col-12">
                        <div class="saf_contact_form wow fadeInRight" data-wow-duration="1s">
                            <h4 class="saf_sub_heading relative">Application Form</h4>
                            <form action=""  method="post" enctype="multipart/form-data">
                                <b><?php echo $row_project["name"];?></b> &nbsp;&nbsp;&nbsp;&nbsp; / &nbsp;&nbsp;&nbsp;&nbsp;
                                <b></span> <?php echo $row_project["experience"];?> Years Experience </b>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                        <div class="saf_field_holder">
                                            <input type="text" class="saf_form_field require" placeholder="Enter Your Name" name="full_name" id="full_name">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                        <div class="saf_field_holder">
                                            <input type="text" class="saf_form_field require" placeholder="Enter Your Email" name="email" id="email" data-valid="email" data-error="Email should be valid.">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                        <div class="saf_field_holder">
                                            <input type="text" class="saf_form_field " placeholder="Enter Your Phone" name="phone" id="email" data-valid="email" data-error="Email should be valid.">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-sm-12 col-12">
                                        <div class="cs_field_holder">
                                            <label for="fileToUpload">Upload your CV</label>
                                            <input type="file" class="saf_form_field require"  name="fileToUpload" id="fileToUpload" accept="application/pdf,application/vnd.ms-excel" />
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <br>
                                    <!-- <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="saf_field_holder">
                                            <input type="text" class="saf_form_field" placeholder="Enter Your Phone">
                                        </div>
                                    </div> -->
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="saf_field_holder">
                                            <label for="message">Write a cover letter</label>
                                            <textarea placeholder="Enter Your Message..." class="saf_form_field require" name="message" id="message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <button type="submit" class="saf_btn submitForm" name="applyjob" id="applyjob">Apply</button>

                                        <!-- <a href="javascript:void(0);" class="saf_btn submitForm">Apply</a> -->
                                        <div class="response"></div>
                                    </div>
                                </div>
                            </form>
                            <?php
                            if(isset($_POST['applyjob']))
                            {
                                // $target_dir = "uploadsCV/";
                                // $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                                // $uploadOk = 1;
                                // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                                // // Check if image file is a actual image or fake image
                                // if(isset($_POST["submit"])) {
                                // $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                                // if($check !== false) {
                                //     echo "File is an image - " . $check["mime"] . ".";
                                //     $uploadOk = 1;
                                // } else {
                                //     echo "File is not an image.";
                                //     $uploadOk = 0;
                                // }
                                // }
                                $target_dir = "uploadsCV/";
                                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                                $uploadOk = 1;
                                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                                
                                // Check if image file is a actual image or fake image
                                if(isset($_POST["submit"])) {
                                  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                                  if($check !== false) {
                                    echo "File is an image - " . $check["mime"] . ".";
                                    $uploadOk = 1;
                                  } else {
                                    echo "File is not an image.";
                                    $uploadOk = 0;
                                  }
                                }
                                
                                // Check if file already exists
                                if (file_exists($target_file)) {
                                  echo "Sorry, file already exists.";
                                  $uploadOk = 0;
                                }
                                
                                // Check file size
                                if ($_FILES["fileToUpload"]["size"] > 500000) {
                                  echo "Sorry, your file is too large.";
                                  $uploadOk = 0;
                                }
                                
                                // Allow certain file formats
                                if($imageFileType != "pdf" ) {
                                  echo "Sorry, only PDF files are allowed.";
                                  $uploadOk = 0;
                                }
                                
                                // Check if $uploadOk is set to 0 by an error
                                if ($uploadOk == 0) {
                                  echo "Sorry, your file was not uploaded.";
                                // if everything is ok, try to upload file
                                } else {
                                  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                                    $name = $_POST['full_name'];
                                    $email = $_POST['email'];
                                    $phone = $_POST['phone'];
                                    // $subject = $_POST['subject'];
                                    $message = $_POST['message'];
                                    $cv = $target_file; 
                                    $j = $row_project["name"];
        
                                    // echo $name;
                                    // id	name	email	phone	details	cv	
                                    // $date = date('d-m-y h:i:s');
                                    //   -- echo $date;
                                    $queryopp="INSERT INTO applyjob (job,name,email,phone,details,cv) 
                                                    VALUES ('".$j."','".$name."','".$email."','".$phone."','".$message."','".$cv."')";     
                                    if ($conn->query($queryopp)) {
                                        echo "<script type= 'text/javascript'>alert('Thank You...');</script>";
                                    }
                                    else{
                                    echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
                                    }
                                } else {
                                    echo "Sorry, there was an error uploading your file.";
                                  }
                                }
                           
                            
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--===================Map Section==================-->
      
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