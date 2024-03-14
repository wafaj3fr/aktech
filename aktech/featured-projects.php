<link rel="stylesheet" href="../assets/css/swiper.min.css">
<section class="featured-projects">
  <div class="container">
    <div class="row">
    <h1 class="text-center mt-5 display-3 fw-bold" style="margin:40px;"><span class="theme-text">Featured </span>Projecs</h1>
      
    </div>
  </div>
  <div class="col-lg-13 col-md-11 col-sm-12 col-12">
    <div class="partner_slider swiper-container">
      <div class="swiper-wrapper">
        <?php
            $sqlselectproject = "SELECT * FROM `project`";
            $result_project = mysqli_query($conn, $sqlselectproject);
            
            // Check if there are projects
            if ($result_project->num_rows > 0) {
              // Counter to set active class for the first slide
              $counter = 0;
              while ($row_project = $result_project->fetch_assoc()) {
                // Check if it's the first slide to add active class
                $active_class = ($counter == 0) ? 'active' : '';
                ?>
                                 <div class="swiper-slide">
                                   <div class="saf_partners_container-d text-center">
                                       <a href="project-details.php?projectid=<?php echo $row_project["id"];?>"><img src='<?php echo $row_project["productsimg1"];?>' alt="partner" />
                                      </a>
                                      <h5 style="margin-top:15px;"><?php echo $row_project["prodectname"]; ?></h5>
                                    </div>
                                 </div>
                                 <?php
							              }}?>
                                 
                                </div>
                                
                              </div>
                            </section>
                </div>
