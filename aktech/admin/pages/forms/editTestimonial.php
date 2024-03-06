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
session_unset();     // unset $_SESSION variable for the run-time 
session_destroy();   // destroy session data in storage
  header("Location: ../../index.php");


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
  <title> Cotrade</title>
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
          <li class="nav-item has-treeview ">
            <a href="../../all.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Main Dashboard
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
            </li>
            <ul class="nav nav-treeview">
            
              <!-- <li class="nav-item">
                <a href="./index2.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li> -->
             
            </ul>
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
            <h1>WebSite Main Content</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">WebSite Main Content</li>
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
                <h3 class="card-title">Edit About Content</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" enctype="multipart/form-data" >
                <div class="card-body">
                <div class="form-group">
                  <div class="form-group">
                  <?php
                  //  idcontent	name	detiles	user
                  // echo $_SESSION["user_login"]."<br>".$_GET['id_AboutUSEdite'];
                  $U_info = $_GET['id_areaEdit'];
                  
                    // AREASid	areaname	areacontent	 areauser	
                  $sql_area = "SELECT * FROM testimonial WHERE id ='$U_info'";
                  $resultarea = mysqli_query($conn, $sql_area);
                  $rowarea = mysqli_fetch_assoc($resultarea);
                  ?>
                  <!-- <?php echo "<b>".$rowarea["newstitle"]."</b>";?> -->
                  <div class="form-group">
                  <label for="exampleInputEmail1">Testimonial Name</label>
                    <input type="text" class="form-control" name="testname" id="testname" placeholder="Title" value=" <?php echo $rowarea["Testimonialname"];?>">
                  </div>
                  <div class="form-group">
                  <label for="exampleInputEmail1">Testimonial Job Title</label>
                    <input type="text" class="form-control" name="testpostion" id="testpostion" placeholder="Title" value=" <?php echo $rowarea["Testimoniatestpostion"];?>">
                  </div>
                  <div class="form-group">
                  <label for="exampleInputEmail1">Content Testimonial </label>
                <textarea  name="testcontent" id="testcontent" class="form-control" rows="8" 
                placeholder="" value=""><?php echo $rowarea["Testimonialcontent"];?></textarea>
                </div>
              
                <!-- <div class="form-group">
                <label for="exampleInputEmail1">Content Section 2 </label>
                <textarea  name="newscont2" id="newscont2" class="form-control" rows="8" 
                placeholder="" value=""><?php echo $rowarea["newscontent1"];?></textarea> -->
                </div>
              </div>
                </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
              <input type="submit"  name="editTestimonial" id="editTestimonial" value="EDIT" class="btn btn-primary">
              <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
              </div>
              </form>
              <?php
              if(isset($_POST['editTestimonial'])){
                // if (isset($_POST["interest"] ) && $_POST["resume"] &&  $_POST["color"] && $_POST["size"] && $_POST['quantity'] != "") {
                // $U_info = $_SESSION["user_login"];
                $test_name = $_POST['testname'];
                $test_postion = $_POST['testpostion'];
                $test_content = $_POST['testcontent'];
                // id	Testimonialname	Testimoniatestpostion	Testimonialcontent	
                $sql_update_Area = "UPDATE testimonial SET Testimonialname='$test_name',Testimoniatestpostion='$test_postion' WHERE id=".$U_info;
                if ($conn->query($sql_update_Area) == TRUE) {
                  // echo "Record updated successfully";
                  echo "<script type= 'text/javascript'>alert('updated successfully');</script>";
  
                  echo '<script>window.location.href = "../tables/Testimonialreports.php";</script>';
            
                } else {
                  echo "Error updating record: " . $conn->error;
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
  <footer class="main-footer">
    <!-- <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.0-rc.1
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved. -->
  </footer>

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
