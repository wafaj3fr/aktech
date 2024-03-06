 <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="../assets/images/index/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Cotrade</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
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
              <i class="fa fa-home"></i>
              <p>
              Main Dashboard
                <!-- <i class="right fas fa-angle-left"></i> -->
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
                <a href="pages/tables/AboutUscontent.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Home Content</p>
                </a>
              </li>
              <li class="nav-item">
            <a href="pages/tables/editproducts.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
               All Products
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
              <li class="nav-item">
                <a href="pages/forms/addNewTestimonial.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Testimonial</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/Testimonialreports.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Testimonial</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="pages/forms/addNewNews.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New News</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="pages/tables/newsreports.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All News</p>
                </a>
              </li>

              <li class="nav-item">
            <a href="pages/tables/contactmessage.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
               User Send Message
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="pages/tables/subscribereports.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
               All User Send Subscribe
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          
          <!-- subscribereports.php -->
        

       
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->