<?php 
  include("admin/conn.php");
?>
  <header class="fixed_header">
            <div class="container-fluid">
                <div class="saf_header_wrapper">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="saf_logo">
                                <a href="index.php"><img src="assets/images/index/logo.png" alt="logo"  width="70" heigh="30"/></a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8 col-sm-6 col-12">
                            <div class="saf_main_menu main_menu_parent">
                                <!-- Header Menus -->
                                <div class="saf_nav_items main_menu_wrapper">
                                    <ul>
                                        <li class="active">
                                            <a href="index.php">Home</a>
                                        </li>
                                        <li class="has_submenu">
                                            <a href="about.php">Company</a>
                                            <ul class="sub_menu">
                                                <li><a href="about.php#About">About Us</a></li>
                                                <li><a href="about.php#Vision">Vision</a></li>
                                                <li><a href="about.php#serman">Management System</a></li>
                                            </ul>
                                        <li class="has_submenu">
                                        <a href="service.php">Services</a>
                                            <ul class="sub_menu">
                                                <li><a href="service-details.php">Project Managmenet</a></li>
                                                <li><a href="EngineeringServices.php">Engineering Services</a></li>
                                                <li><a href="TurnkeyEPCSolutions.php">Turn Key EPC solutions</a></li>
                                                <li><a href="MechanicalIntegrityServices.php">Asset Integrity and Mechanical Inspection</a></li>
                                                <li><a href="ElectricalServices.php">Electrical testing and commissioning services</a></li>
                                            </ul>

                                        <li class="has_submenu">
                                        <a href="project.php">Projects</a>
                                            <ul class="sub_menu">
                                        <?php
                                        $sqlselectproject = "SELECT * FROM `project`" ;
                                        $result_project = mysqli_query($conn, $sqlselectproject);
                                        if ($result_project->num_rows > 0) {
                                            while($row_project = $result_project->fetch_assoc()) {
                                        ?>
                                        <li><a href='project-details.php?projectid=<?php echo $row_project["id"];?>'><?php echo $row_project["prodectname"];?></a></li>
                                            <?php
							                }}?>
                                            </ul>

                                        <li><a href="job.php">Career</a></li>
                                        <li><a href="AKTECH Profile 2022.pdf" target="_blank">Company profile</a></li>
                                        <li class="has_submenu">
                                        <a href="contact.php">Contact Us</a>
                                            <ul class="sub_menu">
                                            <li><a href="Dubai.php">Dubai</a></li>
                                            <li><a href="Khartoum.php">Khartoum</a></li>
                                            <li><a href="Cairo.php">Cairo</a></li>
                                            </ul>
                                        
                                    </ul>
                                </div>
                                <div class="saf_search_wrap menu_btn_wrap">
                                    <ul class="display_flex align-items-center">
                                        <li><a href="javascript:void(0);" class="searchBtn"><i class="fa fa-search"></i></a></li>
                                        <li>
                                            <a href="javascript:void(0);" class="menu_btn">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>