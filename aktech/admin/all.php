<?php
  include("conn.php");

session_start();

// session info
if (!isset($_SESSION['user_login'])) {
  header("Location: index.php");
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
  header("Location: index.php");


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
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Cotrade | Dashboard 2</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <script src="https://kit.fontawesome.com/482f6b0385.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
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
   <?php include("nav-item.php"); ?>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Cotrade Dashboard v1</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
      
          <!-- /.col -->
        <div class="row">

          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fa fa-archive"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">PROJECT</span>
                <span class="info-box-number">
                <?php
                      $q=0;
                        $sql = "SELECT  * FROM project";
                        // $result = mysqli_query($conn, $sql);
                        $result = mysqli_query($conn, $sql);
                                                                        
                                                        if (mysqli_num_rows($result) > 0) {
                                                            // output data of each row
                                                            while($row = mysqli_fetch_assoc($result)) {
                                                              //  echo $row["Incoming_Quantity"],"%" ;
                                                              $q = $q +  1;
                                                            }
                                                          }
                                          // echo $q; 
                                          echo "<b><i>".$q."</i></b>";

                        ?>
                    <!-- <div style=" float: right;"><a href="pages/charts/oppflot.php">MORE<i class="fa-solid fa-angles-right"></i></a></div> -->

                  <!-- <small>%</small> -->
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-info elevation-1"><i class="fa fa-newspaper-o"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">SERVICES</span>
                <span class="info-box-number">
                <?php
                        $q=0;
                          $sql = "SELECT  * FROM services";
                          // $result = mysqli_query($conn, $sql);
                          $result = mysqli_query($conn, $sql);
                                                                          
                                                            if (mysqli_num_rows($result) > 0) {
                                                              // output data of each row
                                                              while($row = mysqli_fetch_assoc($result)) {
                                                                //  echo $row["Incoming_Quantity"],"%" ;
                                                                $q = $q +  1;
                                                              }
                                                            }
                                            // echo $q;
                                          echo "<b><i>".$q."</i></b>";

                          ?> 
                    <!-- <div style=" float: right;"><a href="pages/charts/appleflot.php">MORE<i class="fa-solid fa-angles-right"></i></a></div> -->

                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comment-alt"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">CONTACT US MESSAGE </span>
                <span class="info-box-number">
                <?php
                        $q=0;
                          $sql = "SELECT  * FROM contactfrom";
                          // $result = mysqli_query($conn, $sql);
                          $result = mysqli_query($conn, $sql);
                                                                          
                                                            if (mysqli_num_rows($result) > 0) {
                                                              // output data of each row
                                                              while($row = mysqli_fetch_assoc($result)) {
                                                                //  echo $row["Incoming_Quantity"],"%" ;
                                                                $q = $q +  1;
                                                              }
                                                            }
                                          echo "<b><i>".$q."</i></b>";
                                          // echo $q;
                          ?>
                    <!-- <div style=" float: right;"><a href="pages/charts/db.php">MORE<i class="fa-solid fa-angles-right"></i></a></div> -->
                    </span>

                <!-- <span class="info-box-number">760</span> -->
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
         
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-info elevation-1"><i class="far fa-id-badge"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">SUBSCRIBE USER SEND EMAIL</span>
                <span class="info-box-number">
                <?php
                        $q=0;
                          $sql = "SELECT  * FROM subscribe";
                          // $result = mysqli_query($conn, $sql);
                          $result = mysqli_query($conn, $sql);
                                                                          
                                                            if (mysqli_num_rows($result) > 0) {
                                                              // output data of each row
                                                              while($row = mysqli_fetch_assoc($result)) {
                                                                //  echo $row["Incoming_Quantity"],"%" ;
                                                                $q = $q +  1;
                                                              }
                                                            }
                                          echo "<b><i>".$q."</i></b>";
                                          // echo $q;
                          ?>
                    <!-- <div style=" float: right;"><a href="pages/charts/db.php">MORE<i class="fa-solid fa-angles-right"></i></a></div> -->
                    </span>

                <!-- <span class="info-box-number">760</span> -->
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-quote-left"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">TESTIMONIAL</span>
                <span class="info-box-number">
                <?php
                        $q=0;
                          $sql = "SELECT  * FROM testimonial";
                          // $result = mysqli_query($conn, $sql);
                          $result = mysqli_query($conn, $sql);
                                                                          
                                                            if (mysqli_num_rows($result) > 0) {
                                                              // output data of each row
                                                              while($row = mysqli_fetch_assoc($result)) {
                                                                //  echo $row["Incoming_Quantity"],"%" ;
                                                                $q = $q +  1;
                                                              }
                                                            }
                                          echo "<b><i>".$q."</i></b>";
                                          // echo $q;
                          ?>
                    <!-- <div style=" float: right;"><a href="pages/charts/db.php">MORE<i class="fa-solid fa-angles-right"></i></a></div> -->
                    </span>

                <!-- <span class="info-box-number">760</span> -->
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
        <!-- Main row -->
        
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  <!-- Main Footer -->
  <!-- <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.0-rc.1
    </div>
  </footer> -->
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/world_countries.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="dist/js/pages/dashboard2.js"></script>


<script>
function myFunction1() {
  // Get the text field
  var copyText = document.getElementById("myInput1");

  // Select the text field
  copyText.select();
  copyText.setSelectionRange(0, 99999); // For mobile devices

  // Copy the text inside the text field
  navigator.clipboard.writeText(copyText.value);
  
  // Alert the copied text
  alert("Copied the text: " + copyText.value);
}

function myFunction2() {
  // Get the text field
  var copyText = document.getElementById("myInput2");

  // Select the text field
  copyText.select();
  copyText.setSelectionRange(0, 99999); // For mobile devices

  // Copy the text inside the text field
  navigator.clipboard.writeText(copyText.value);
  
  // Alert the copied text
  alert("Copied the text: " + copyText.value);
}
</script>
</body>
</html>
