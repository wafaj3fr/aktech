<!DOCTYPE html>
<html>
<head>
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
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Flot Charts</title>
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
  <style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}
</style>
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
        <a href="../../all.php" class="nav-link">Home</a>
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
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
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
      <span class="brand-text font-weight-light">BA Center</span>
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
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Main Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            
              <!-- <li class="nav-item">
                <a href="./index2.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li> -->
             
            </ul>
          </li>
          <li class="nav-item">
            <a href="http://localhost/bAC/admin/pages/tables/data.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                All USER
                <span class="right badge badge-danger">New User</span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
              Opportunities
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/addOpportunities.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Opportunities</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="pages/tables/AllOpportunities.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>all Opportunities</p>
                </a>
              </li>
            
             
            
            
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
              All Website Content
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">4</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/AboutUscontent.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About Us</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="pages/tables/Areascontent.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>AREAS</p>
                </a>
              </li>
            
              <li class="nav-item">
                <a href="pages/tables/Servisescontent.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SERVICES</p>
                </a>
              </li>
            
              <li class="nav-item">
                <a href="pages/tables/Clientcontent.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PARTNERS & CLIENTS</p>
                </a>
              </li> 
            
            </ul>
          </li>
          <li class="nav-item">
            <a href="pages/tables/contactmessage.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               User Send Message
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
            <h1>Flot Charts</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Flot</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- interactive chart -->
            <!-- <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  Interactive Area Chart
                </h3>

                <div class="card-tools">
                  Real time
                  <div class="btn-group" id="realtime" data-toggle="btn-toggle">
                    <button type="button" class="btn btn-default btn-sm active" data-toggle="on">On</button>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="off">Off</button>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div id="interactive" style="height: 300px;"></div>
              </div>
            </div> -->
            <!-- /.card -->

          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-md-6">
            <!-- Line chart -->
            <!-- <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  Line Chart
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div id="line-chart" style="height: 300px;"></div>
              </div>
              
            </div> -->
            <!-- /.card -->

            <!-- Area chart -->
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  Area Chart
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <?php
                  $q=0;
                  $JobOppertunities = 0; 
                  $CourseRegistration = 0;
                  $JobDatabase = 0;
                  $Project = 0;
                  $other = 0;
                  $sql = "SELECT * FROM  opportunities";
                  // $result = mysqli_query($conn, $sql);
                  echo '<table><tr>
                    <th>Opportunities Type</th>
                    <th>Opportunities Title</th>';
                    echo '<tr>';
                  $result = mysqli_query($conn, $sql);                                         
                    if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                        
                        echo "<td>"."<b><i>".$row['OpportunitiesName']."</i></b>"."</td>";
                        echo "<td>"."<b><i>".$row['OpportunitiesTitle']."</i></b>"."</td>";
                        // $row['OpportunitiesTitle'];
                        // if($row['typeapple'] == "Job Oppertunities")
                        // $JobOppertunities = $JobOppertunities + 1;
                        // elseif($row['typeapple'] == "Course Registration")
                        // $CourseRegistration = $CourseRegistration + 1;
                        // if($row['typeapple'] == "Job Database")
                        // $JobDatabase = $JobDatabase + 1;
                        // if($row['typeapple'] == "Project")
                        // $Project = $Project + 1;
                        // if($row['typeapple'] == "other")
                        // $other = $other + 1;
                       
              echo '</tr>';
            }
                    }
                    echo '</table>';
                    // echo '<table>  <tr>
                    // <!-- <th>Rendering engine</th> -->
                    // <th>AREAS</th>
                    // <th>No Of User</th>
                    // </tr><tr>';
                    // echo "<tr><td>"."<b><i>".'Job Oppertunities  &emsp;'."</td><td>".'No.'.$JobOppertunities."</i></b>"."</td></tr>";
                    // echo "<tr><td>"."<b><i>".'Course Registration  &emsp;'."</td><td>".'No.'.$CourseRegistration."</i></b>"."</td></tr>";
                    // echo "<tr><td>"."<b><i>".'Job Database  &emsp;'."</td><td>".'No.'.$JobDatabase."</i></b>"."</td></tr>";
                    // echo "<tr><td>"."<b><i>".'Project  &emsp;'."</td><td>".'No.'.$Project."</i></b>"."</td></tr>";
                    // echo "<tr><td>"."<b><i>".'other  &emsp;'."</td><td>".'No.'.$other."</i></b>"."</td></tr>";
                    // echo '</tr></table>';
                    // ?>
                <!-- <div id="area-chart" style="height: 338px;" class="full-width-chart"></div> -->
              </div>
              
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col -->

          <div class="col-md-6">
            <!-- Bar chart -->
            <!-- <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  Bar Chart
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div id="bar-chart" style="height: 300px;"></div>
              </div>
              
            </div> -->
            <!-- /.card -->

            <!-- Donut chart -->
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  Donut Chart
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div id="donut-chart" style="height: 300px;"></div>
              </div>
              <!-- /.card-body-->
              <?php
                  $q=0;
                  $DataVisualizationProjectBasedContract = 0; 
                  $BusinessAnalysisBootcamp = 0;
                  $StrategyBootcamp = 0;
                  $BusinessDevelopmentBootcamp = 0;
                  $sql = "SELECT * FROM  apply";
                  // $result = mysqli_query($conn, $sql);
                  $result = mysqli_query($conn, $sql);                                         
                    if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                        // echo "<td>"."<b><i>".$row['OpportunitiesName']."</i></b>"."</td>";
                        // echo "<td>"."<b><i>".$row['OpportunitiesTitle']."</i></b>"."</td>";
                        
                        if($row['OpportunitiesApply'] == "Data Visualization Project Based Contract")
                        $DataVisualizationProjectBasedContract = $DataVisualizationProjectBasedContract + 1;
                        elseif($row['OpportunitiesApply'] == "Business Analysis Bootcamp")
                        $BusinessAnalysisBootcamp = $BusinessAnalysisBootcamp + 1;
                        if($row['OpportunitiesApply'] == "Strategy Bootcamp")
                        $StrategyBootcamp = $StrategyBootcamp + 1;
                        if($row['OpportunitiesApply'] == "Business Development Bootcamp")
                        $BusinessDevelopmentBootcamp = $BusinessDevelopmentBootcamp + 1;
                       
                       
             
            }
                    }
                   
                    echo '<table>  <tr>
                    <!-- <th>Rendering engine</th> -->
                    <th>AREAS</th>
                    <th>No Of User</th>
                    </tr><tr>';
                    echo "<tr><td>"."<b><i>".'Data Visualization Project Based Contract  &emsp;'."</td><td>".'No.'.$DataVisualizationProjectBasedContract."</i></b>"."</td></tr>";
                    echo "<tr><td>"."<b><i>".'Business Analysis Bootcamp  &emsp;'."</td><td>".'No.'.$BusinessAnalysisBootcamp."</i></b>"."</td></tr>";
                    echo "<tr><td>"."<b><i>".'Strategy Bootcamp  &emsp;'."</td><td>".'No.'.$StrategyBootcamp."</i></b>"."</td></tr>";
                    echo "<tr><td>"."<b><i>".'Business Development Bootcamp  &emsp;'."</td><td>".'No.'.$BusinessDevelopmentBootcamp."</i></b>"."</td></tr>";
                    echo '</tr></table>';
                     ?>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.0-rc.1
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
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
<!-- jQuery UI -->
<script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- FLOT CHARTS -->
<script src="../../plugins/flot/jquery.flot.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="../../plugins/flot-old/jquery.flot.resize.min.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="../../plugins/flot-old/jquery.flot.pie.min.js"></script>
<!-- Page script -->
<script>
  $(function () {
    /*
     * Flot Interactive Chart
     * -----------------------
     */
    // We use an inline data source in the example, usually data would
    // be fetched from a server
    var data        = [],
        totalPoints = 100

    function getRandomData() {

      if (data.length > 0) {
        data = data.slice(1)
      }

      // Do a random walk
      while (data.length < totalPoints) {

        var prev = data.length > 0 ? data[data.length - 1] : 50,
            y    = prev + Math.random() * 10 - 5

        if (y < 0) {
          y = 0
        } else if (y > 100) {
          y = 100
        }

        data.push(y)
      }

      // Zip the generated y values with the x values
      var res = []
      for (var i = 0; i < data.length; ++i) {
        res.push([i, data[i]])
      }

      return res
    }


  

    //INITIALIZE REALTIME DATA FETCHING
  
    /*
     * END INTERACTIVE CHART
     */


    /*
     * LINE CHART
     * ----------
     */
    //LINE randomly generated data


    
    //Initialize tooltip on hover
   
    /* END LINE CHART */

    /*
     * FULL WIDTH STATIC AREA CHART
     * -----------------
     */
   

    /* END AREA CHART */

    /*
     * BAR CHART
     * ---------
     */

    /* END BAR CHART */

    /*
     * DONUT CHART
     * -----------
     */

    var donutData = [
      {
        label: 'Data Visualization Project Based Contract',
        data : '<?php echo $DataVisualizationProjectBasedContract; ?>',
        color: '#3c8dbc'
      },
      {
        label: 'Business Analysis Bootcamp',
        data : '<?php echo $BusinessAnalysisBootcamp;?>',
        color: '#0073b7'
      },
      {
        label: 'Strategy Bootcamp',
        data : '<?php  echo $StrategyBootcamp;?>',
        color: '#00c0ef'
      },
      {
        label: 'Business Development Bootcamp',
        data : '<?php  echo $BusinessDevelopmentBootcamp;?>',
        color: '#00c0ef'
      }
    ]
    $.plot('#donut-chart', donutData, {
      series: {
        pie: {
          show       : true,
          radius     : 1,
          innerRadius: 0.5,
          label      : {
            show     : true,
            radius   : 2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: false
      }
    })
    /*
     * END DONUT CHART
     */

  })

  /*
   * Custom Label formatter
   * ----------------------
   */
  function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
      + label
      + '<br>'
      + Math.round(series.percent) + '%</div>'
  }
</script>
</body>
</html>
