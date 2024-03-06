<?php
  include("../../conn.php");

session_start();

// session info
if (!isset($_SESSION['user_login'])) {
  // header("Location: index.php");
  // die();
}
  if(isset($_POST['sing_out'])){
  // Finally, destroy the session.
  session_unset();
  session_destroy();
  header('Location:  index.php');
  // echo "OOOOO";
 }
                    
//session time info 
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 500)) {
// last request was more than 30 minutes ago
// session_unset();     // unset $_SESSION variable for the run-time 
// session_destroy();   // destroy session data in storage
//   header("Location: ../../index.php");


}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp

if (!isset($_SESSION['CREATED'])) {
$_SESSION['CREATED'] = time();
} else if (time() - $_SESSION['CREATED'] > 500) {
// session started more than 30 minutes ago
session_regenerate_id(true);    // change session ID for the current session and invalidate old session ID
$_SESSION['CREATED'] = time();  // update creation time
}
//End session time info
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Cotrade</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>
    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
     
      <li>
      <form action="" method="post" enctype="multipart/form-data" >
                <input style="align:center" type="submit" name="sing_out" id="sing_out" value="Sing Out" class="btn btn-primary">
                </form>
     </li>
    </ul>
  </nav>
  <!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Cotrade</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">User Login / <?php echo $_SESSION["user_login"];?></a>
        </div>
      </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <!-- <a href="../../all.php" class="nav-link">
              <i class="fa fa-home"></i>
              <p>
              Main Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a> -->
            <ul class="nav nav-treeview">
            
              <li class="nav-item has-treeview menu-open">
                <a href="../../all.php" class="nav-link ">
                <i class="fa fa-home"></i>
                  <p>Main Dashboard</p>
                </a>
              </li>
             
            </ul>
          </li>
          <li class="nav-item">
                <a href="../../pages/tables/AboutUscontent.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Home Content</p>
                </a>
              </li>
              <li class="nav-item">
            <a href="../../pages/tables/editproducts.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
               All Products
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>

              <li class="nav-item">
                <a href="../../pages/forms/addNewTestimonial.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Testimonial</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../pages/tables/Testimonialreports.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Testimonial</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/addNewNews.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New News</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="../../pages/tables/newsreports.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All News</p>
                </a>
              </li>

              <li class="nav-item">
            <a href="../../pages/tables/contactmessage.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
               User Send Message
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
        
     
          <li class="nav-item">
            <a href="../../pages/tables/subscribereports.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
               All User Send Subscribe
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
       
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>New News</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">New News</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add New News</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" enctype="multipart/form-data" >
                <div class="card-body">

                <div class="form-group">
                  <!-- <div class="col-sm-6">
                      <div class="form-group">
                        <label>Select</label>
                        <select class="form-control"  id="type" name="type">
                        <option selected>Open to select Type</option>
                        <option value="Course Registration">Course Registration</option>
                        <option value="Job Oppertunities">Job Oppertunities</option>
                        <option value="Job Database">Job Database</option>
                        <option value="Project">Project</option>
                        <option value="other">other</option>
                        </select>
                      </div>
                    </div> -->

                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" name="newstitle" id="newstitle" placeholder="Title">
                  </div>
                  
                  <!-- <div class="form-group">
                    <label for="exampleInputEmail1">Conte</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                  </div> -->
                  <input type="file" class="form-control" name="fileToUpload" id="fileToUpload">
                <br>
                  <div class="form-group">
                  <label for="exampleInputEmail1">Content Section 1 </label>

                <textarea  name="contentcec1" id="contentcec1" class="form-control" rows="3" placeholder="Course Details"></textarea>
                </div>  
                <div class="form-group">
                <label for="exampleInputEmail1">Content Section 2</label>

                <textarea  name="contentcec2" id="contentcec2" class="form-control" rows="3" placeholder="Course Details"></textarea>
                </div>  
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                 <input type="submit"  name="addNewsNew" id="addNewsNew" value="Add" class="btn btn-primary">

                  <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                </div>
              </form>
              <?php
              if(isset($_POST['addNewsNew']))
              {

                        // if (isset($_POST["interest"] ) && $_POST["resume"] &&  $_POST["color"] && $_POST["size"] && $_POST['quantity'] != "") {
                      // $U_info = $_SESSION["user_login"];
                      $target_dir = "../../../assets/img/news/";
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
                      // if (file_exists($target_file)) {
                      //   echo "Sorry, file already exists.";
                      //   $uploadOk = 0;
                      // }
                      
                      // Check file size
                      if ($_FILES["fileToUpload"]["size"] > 500000) {
                        echo "Sorry, your file is too large.";
                        $uploadOk = 0;
                      }
                      
                      // Allow certain file formats
                      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                      && $imageFileType != "gif" ) {
                        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                        $uploadOk = 0;
                      }
                      
                      // Check if $uploadOk is set to 0 by an error
                      if ($uploadOk == 0) {
                        echo "Sorry, your file was not uploaded.";
                      // if everything is ok, try to upload file
                      } else {
                        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                          // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                        } else {
                          echo "Sorry, there was an error uploading your file.";
                        }
                      }
                      if($uploadOk == 1)
                      {
                          $newstitle = $_POST['newstitle'];
                          $contentcec1 = $_POST['contentcec1'];
                          $contentcec2 = $_POST['contentcec2'];
                          // $st = "Open";

                          // id	newstitle	newscontent1	newscontent2	newsdate	newsimg   
                          $queryopp="INSERT INTO news (newstitle,newscontent1,newscontent2,newsimg)
                           VALUES ('".$newstitle."','".$contentcec1."','".$contentcec2."','".$target_file."')";     
                            if ($conn->query($queryopp)) {
                              echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
                          }
                          else{
                          echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
                          }
                      }  else {
                          echo "<script type= 'text/javascript'>alert('Data not upload successfully .');</script>";
                      
                      }
              }
   


?>
            </div>
            <!-- /.card -->

            <!-- Form Element sizes -->
        
       
            <!-- /.card -->

            <!-- Input addon -->
           


          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">
            <!-- general form elements disabled -->
     

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.0-rc.1
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://Amartco.com" target="_blank">Amart</a>.</strong> All rights
    reserved.
  </footer> -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
