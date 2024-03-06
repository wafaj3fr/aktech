<!DOCTYPE html>
<html lang="en">

<head>
<?php 
     session_start();
     ?>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Business Analysis Centre Bootstrap Template - Index</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Krub:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Business Analysis Centre - v2.1.0
  * Template URL: https://bootstrapmade.com/Business Analysis Centre-free-simple-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
 <style>
  div,p {
    text-align: justify;
    text-justify: inter-word;
  }
  /* Rounded border */
hr.rounded {
  border-top: 8px solid #bbb;
  border-radius: 5px;
}
th, td {
  border: 1px solid black;
  border-radius: 10px;
  border-color: #96D4D4;

}
    </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <!-- <h1 class="logo mr-auto"><a href="index.html">Business Analysis Centre</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.html" class="logo mr-auto"><img src="../assets/img/logo.png" alt="" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#">Course Schedule</a></li>
          <li><a href="#services">Our Service</a></li>
          <!-- <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li> -->
          <!-- <li><a href="#pricing">Pricing</a></li> -->
          <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <!-- <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Job Application</a></li>
                  <li><a href="#">junior apprentice</a></li>
                  <li><a href="#">assistant consultant</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li> -->
                  <li><a href="#">Job Application</a></li>
                  <li><a href="#">junior apprentice</a></li>
                  <li><a href="#">assistant consultant</a></li>
                  <!-- <li><a href="/bAC/login.php">Login</a></li> -->
                  
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="./ar/" class="get-started-btn scrollto">عـربـي</a>
      <!-- <a href="./ar/" class="get-started-btn scrollto">تسجيل -->
      </a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->

  <main id="main">

 <br>
 <br>
 <br>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Experience</h2>
          <br>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>
        <?php
          echo $_SESSION["user_login"];
         
          echo $_GET['id_UserReport'];
      
          ?>
        <div class="row">
          <div class="col-lg-10 mt-4 mt-md-0">
            <form method="post" enctype="multipart/form-data">
              <!-- <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text"  class="form-control" name="U_Employer" id="U_Employer" placeholder="Employer" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <br>
                <div class="col-md-6 form-group">
                  <input type="tel" class="form-control" name="U_Job" id="U_Job" placeholder="Job" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-5 form-group">
                  <input type="date" class="form-control" name="U_Start" id="U_Start" placeholder="Start" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-5 form-group">
                  <input type="date" class="form-control" name="U_End" id="U_End" placeholder="Eed" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div> -->
              <!-- <div style="text-align: right;"><a href=""><img src="../assets/img/plus.png" alt="" width="50" height="50" ></a></div>
              <div class="text-center"><button type="submit">Send Message</button></div> -->
              <!-- <div style=" text-align: right;">
              <input type="submit"  name="addExpe" id="addExpe" value="" 
              style="background-image: url('../assets/img/plus.png'); 
              border:none; background-repeat:no-repeat;background-size:100% 100%; height: 35px;width: 5%;"> 
              </div> -->
              <div style=" text-align: center;">
              <!-- <input  type="submit"  name="next" id="next" value="Next"  class="btn btn-primary"> -->
              </div>
            </form>
            <?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "bac";
 // Create connection
 $conn = new mysqli($servername, $username, $password ,$dbname );
 
 // Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
 else 
 {
        // echo "Connected successfully";   

$U_info = $_SESSION["user_login"];
if(isset($_POST['next'])){
  echo ("<script language='JavaScript'>window.location.href='http://localhost/BAC/check.php';</script>");

}
if(isset($_POST['next'])){
  echo ("<script language='JavaScript'>window.location.href='http://localhost/BAC/Experience.php';</script>");

}
// if(isset($_POST['addExpe'])){
	// idExperience	UserExperience	PlaceExperience	StartExperience	EndExperience	
  $sql_bacuser = "SELECT * FROM bacuser WHERE useremail = '$U_info' ";
  $resultbacuser = mysqli_query($conn, $sql_bacuser);
  $row1 = mysqli_fetch_assoc($resultbacuser);

  $sql_certificate = "SELECT * FROM certificate WHERE CertificateUser = '$U_info' ";
  $resultcertificate = mysqli_query($conn, $sql_certificate);
  $row2 = mysqli_fetch_assoc($resultcertificate);
//   if ( $conn->query($sql_certificate) == TRUE){
    echo "<br>"."certificate";
echo "<table '>";
if ($resultcertificate->num_rows > 0) {
  // output data of each row
  echo '   <thead>
  <tr>
      <th scope="col">CertificateName</th>
      <th scope="col">CertificateInstitute</th>
      <th scope="col">CertificateType</th>
      <th scope="col">CertificateYear</th>
  </tr>
</thead>';
  while($row2 = $resultcertificate->fetch_assoc()) {

    // idCertificate	CertificateUser	CertificateName	CertificateInstitute	CertificateType	CertificateYear	
    echo "<tr >";
    
    echo "<td>".$row2["CertificateName"]."</td>";
    echo "<td>".$row2["CertificateInstitute"]."</td>";
    echo "<td>".$row2["CertificateType"]."</td>";
    echo "<td>".$row2["CertificateYear"]."</td>";
   echo "</tr>";

}
} else {
  echo "0 results";
}
  echo "</table>";

  $sql_experience = "SELECT * FROM experience WHERE UserExperience = '$U_info' ";
  $resultexperience = mysqli_query($conn, $sql_experience);
  $row3 = mysqli_fetch_assoc($resultexperience);
  echo "<br>"."experience";

echo "<table '>";

  if ($resultexperience->num_rows > 0) {
    // output data of each row
    echo '   <thead>
    <tr>
        <th scope="col">PlaceExperience</th>
        <th scope="col">JopExperience</th>
        <th scope="col">StartExperience</th>
        <th scope="col">EndExperience</th>
    </tr>
</thead>';
    while($row3 = $resultexperience->fetch_assoc()) {
    echo "<tr>";
     // idExperience	UserExperience	PlaceExperience	JopExperience	StartExperience	EndExperience	
     echo "<td>".$row3["PlaceExperience"]."</td>";
     echo "<td>".$row3["JopExperience"]."</td>";
     echo "<td>".$row3["StartExperience"]."</td>";
     echo "<td>".$row3["EndExperience"]."</td>";   
 

    //   echo  ' "  class="none-backgroud-border" > 
    //  <i class="bx bx-pencil">  
    //  </i></td>' ;
    //  echo '  <td> <button type="submit"  id="'.$row3['idExperience'].'" 
    //  name="edit'.$row3['idExperience'].'" ';
    //   echo  ' "  class="none-backgroud-border" > 
    //  <i class="bx bxs-trash">  
    //  </i></td>' ;
    // echo "</tr>";
     }
  } else {
    echo "0 results";
  }
  echo "</table>";



  $sql_interestareas = "SELECT * FROM interestareas WHERE userInterestAreas = '$U_info' ";
  
  $resultinterestareas = mysqli_query($conn, $sql_interestareas);
  // $result_select_doors = mysqli_query($conn, $sql_select_doors);
  $row4 = mysqli_fetch_assoc($resultinterestareas);
  echo "<br>"."interestareas";
//   echo  "interestareas";
echo "<table '>";
  if ($resultinterestareas->num_rows > 0) {
    echo '   <thead>
    <tr>
        <th scope="col">userInterestAreas</th>
        <th scope="col">InterestAreas</th>
        <th scope="col">UserCV</th>
        <th scope="col">Notes</th>
    </tr>
</thead>';
    // output data of each row
    while($row = $resultinterestareas->fetch_assoc()) {
    echo "<tr>";
        echo "<td>".$row4["userInterestAreas"]."</td>";
        echo "<td>".$row4["InterestAreas"]."</td>";
        echo "<td>".$row4["UserCV"]."</td>";
        echo "<td>".$row4["Notes"]."</td>";
   echo "</tr>";
      }
  } else {
    echo "0 results";
  }
  echo "</table>";
 

//   if (($conn->query($sql_bacuser) && $conn->query($sql_certificate) && $conn->query($sql_experience) && $conn->query($sql_interestareas)) == TRUE)
//   {
    // echo $row1["username"].":::::::::::::";
    // echo $row1["username"].":::::::::::::";
    // echo $row1["username"].":::::::::::::";
    // echo $row1["username"].":::::::::::::";

    
 
          // InterestAreasid	userInterestAreas	InterestAreas	UserCV	Notes	

    

    // echo $row1["username"].":::::::::::::";
    // if(isset($_POST['adduser'])){
      if (isset($_POST["U_Employer"]) && $_POST["U_Job"] && $_POST["U_Start"] &&  $_POST["U_End"] != "") {
        // echo "Cool";
      $UEmployer = $_POST["U_Employer"];
      $UJob = $_POST["U_Job"];
      $UStart = $_POST["U_Start"];
      $UEnd = $_POST["U_End"];
      // idExperience	UserExperience	PlaceExperience	JopExperience	StartExperience	EndExperience	
      $sql = "INSERT INTO experience (UserExperience,PlaceExperience,JopExperience,StartExperience,EndExperience)
      VALUES ('".$U_info."','".$UEmployer."', '".$UJob."','".$UStart."','".$UEnd."')";
      if ($conn->query($sql)) {
        echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
//  $_SESSION["user_login"] =  $User_email  ;
// echo ("<script language='JavaScript'>window.location.href='http://localhost/BAC/Certificate.php';</script>");
//  header('Location: http://localhost/BAC/Certificate.php');
//  exit(header("Location: http://localhost/BAC/Certificate.php"));
 
}
else{
echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
}
      }}

//   }

// }
// }
?>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->
  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Business Analysis Centre</span></strong>. All Rights Reserved
        </div>
        
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>