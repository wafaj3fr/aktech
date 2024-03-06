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
  header('Location:  ../../index.php');
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
  <title>Cotrade</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <script src="https://kit.fontawesome.com/482f6b0385.js" crossorigin="anonymous"></script>
  
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
                <a href="../../pages/forms/addNewTestimonial.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Testimonial</p>
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
                <a href="../../pages/tables/Testimonialreports.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Testimonial</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../pages/forms/addNewNews.php" class="nav-link">
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
            <a href="#" class="nav-link active">
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
            <h1>All User Message</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Message</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
         
<!-- 




 -->
          <div class="card">
            <!-- <div class="card-header">
              <h3 class="card-title">User Message</h3>
            </div> -->
           
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped" id="tblCustomers" cellspacing="0" cellpadding="0">
                <thead>
                <tr>
                  <th>NAME</th>
                  <th>EMAIL</th>
                  <th>Location</th>
                  <th>subject</th>
                  <th>Details</th>
                  <th>DATE</th>
                </tr>
                </thead>
                <tbody>
                <?php

// $U_info = $_SESSION["user_login"];

// if(isset($_POST['addExpe'])){
    // idOpportunities    OpportunitiesName      OpportunitiesTitle       OpportunitiesDetails
     $sql_Opportunities = "SELECT * FROM contactfrom";
  $resultOpportunities = mysqli_query($conn, $sql_Opportunities);
//   $rowuser = mysqli_fetch_assoc($resultbacuser);
if ($resultOpportunities->num_rows > 0) {
  // output data of each row
 
  while($rowOppor = $resultOpportunities->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$rowOppor["mesname"]."</td>";
    echo "<td>".$rowOppor["mseemail"]."</td>";
    echo "<td>".$rowOppor["location"]."</td>";
    echo "<td>".$rowOppor["messubject"]."</td>";
    echo "<td>".$rowOppor["mescontent"]."</td>";
    echo "<td>".$rowOppor["mesdate"]."</td>";
    // echo "<td>".$rowOppor["OpportunitiesTitle"]."</td>";
// echo "<td>"."<a href =\"export-data/index222.php?id_alluserOpp=".$rowOppor['OpportunitiesTitle']."\" target='_blank'>".$rowOppor["OpportunitiesTitle"]."</a>".

// '<br>'.$rowOppor['dateOpp']."</td>";

    // echo "<td>".$rowOppor["OpportunitiesDetails"]."</td>";
    // echo "<td>".'<label><button name="submit" value="true" class="btn btn-default">SUBMIT</button>'."</td>";
// echo "<td>"."<a href =\"editstatus.php?id_OppStutas=".$rowOppor['idOpportunities']."\">".'<img src="../../../assets/img/open.png" alt="" width="100" height="30" >'."</a>";
// echo "<br><br>"."<a href =\"editstatusclose.php?id_OppStutas=
// ".$rowOppor['idOpportunities']."\">".'<img src="../../../assets/img/close.png" alt="" width="100" height="30" >'."</a>".

"</td>";

// if(!empty($_GET['submit'])) {
//   $var = isset($_GET['option1']);
//   $var2 = isset($_GET['option2']);

//   if(isset($var) ){
//       echo "Option 1 submitted successfully";
//       $sql_opp1 = "UPDATE opportunities SET statusopportunities='$var' WHERE idOpportunities=".$rowOppor["idOpportunities"];
// if ($conn->query($sql_opp1) === TRUE){
// echo "Done1";
// } else {
// echo "Error updating record: " . $conn->error;
// }
//   } elseif (isset($var2)) {
//     echo "Option 2 submitted successfully";
//     $sql_opp2 = "UPDATE opportunities SET statusopportunities='$var2' WHERE idOpportunities=".$rowOppor["idOpportunities"];
//     if ($conn->query($sql_opp2) === TRUE){
//       echo "Done1";

//     } else {
//       echo "Error updating record: " . $conn->error;
//     }
//   }
// }
    // echo "<td>".'<input id="checkbox" name="click" type="checkbox" onclick="check(this)"/>'."</td>";
    // echo "<td>".'<input type="checkbox" onclick="check(this);" ></inp>'."</td>";
    // echo "<td>"."<a href =\"deleteOpportunities.php?id_OppDel=".$rowOppor['idOpportunities']."\">".'DELETE<i class="fa-sharp fa-solid fa-trash"></i>'."</a>"."</td>";
    // echo "<td>"."<a href =\"userdeta.php?id_UserReport=".$rowOppor['useremail']."\">"."Experience"."</a>"."</td>";
    // echo "<td>"."<a href =\"userdeta.php?id_UserReport=".$rowOppor['useremail']."\">"."Interestareas"."</a>"."</td>";

    // echo "<td>"."<a href =\"../../editExperience.php?op_id=".$row2['idCertificate']."\">".'<i class="bx bx-pencil"></i>'."</a>"."</td>";
    // echo "<td>"."<a href =\"../../editExperience.php?op_id=".$row2['idCertificate']."\">".'<i class="bx bxs-trash"></i>'."</a>"."</td>";
    echo "</tr>";

}
} else {
  echo "0 results";
}
// }
// $option1;
// $option2;

  ?>
  <script>
    function check(cb)
{
    if($(cb).is(":checked"))
    {
        $.getScript("clickCheckbox.php");
    }
}
  </script>
                <!-- <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                </tr> -->
          
             
                </tbody>
                <tfoot>
                <tr>
                  <th>Types</th>
                  <th>Title</th>
                  <th>Details</th>
                  <th>Stutas</th>
                  <th>DELETE</th>

                  <!-- <th>CSS grade</th> -->
                </tr>
                </tfoot>
              </table>
              <input type="button" id="btnExport" value="Export" onclick="Export()" />
    <!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> -->
    <script type="text/javascript" src="jquery.min.js"></script>
    <script src="table2excel.js" type="text/javascript"></script>
    <script type="text/javascript">
        function Export() {
            $("#tblCustomers").table2excel({
                filename: "ReportNO.xls"
            });
        }
    </script>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
        
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.0-rc.1
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
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
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>
