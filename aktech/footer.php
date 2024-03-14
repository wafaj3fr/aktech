 <footer>
        <div class="saf_footer_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12 mb_30">
                        <div class="saf_widgets saf_footer_about">
                            <img class="footer_logo" src="assets/images/index/footer_logo.png" alt="" />
                            <p>With a proven track record of delivering successful EPC projects, we are your trusted partner in navigating the complexities of the oil and gas sector, from concept to completion.</p>
                            <div class="saf_address_wrap">
                                <h4>Get Jobs Notifications</h4>
                                <div class="saf_newsLetter_wrap">
                                <form action=""  method="post" enctype="multipart/form-data">
                                    <input type="text" name="subemail" id="subemail" placeholder="Enter Your Email Here...">
                                    <button type="submit" name="subscribe" id="subscribe"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                                if(isset($_POST['subscribe']))
                                {
                                $namef = $_POST['subemail'];
                                // $datenew = date("Y-m-d");
                                // id	useremail	subdate	
                                $queryopp1="INSERT INTO subscribe (useremail)
                                VALUES ('".$namef."')";     
                                if ($conn->query($queryopp1)) {
                                echo "<script type= 'text/javascript'>alert('Thank You...');</script>";
                                }
                                else{
                                echo "Error updating record: " . $conn->error;
                                // echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
                                }
                                }
                                ?>
                    <!-- <div class="col-xl-2 col-lg-4 col-md-6 col-sm-12 col-12 mb_30">
                        <div class="saf_widgets saf_footer_menu">
                            <div class="saf_footer_title">
                                <h4 class="saf_footer_heading">Company</h4>
                                <img src="assets/images/index/heading_border_half.png" alt="" />
                            </div>
                            <ul>
                                <li><a href="javascript:void(0)">About Refubsy</a></li>
                                <li><a href="javascript:void(0)">Privacy Policy</a></li>
                                <li><a href="javascript:void(0)">Get In Touch</a></li>
                                <li><a href="javascript:void(0)">Our Clients</a></li>
                                <li><a href="javascript:void(0)">Event & News</a></li>
                                <li><a href="javascript:void(0)">Download Broucher</a></li>
                            </ul>
                        </div>
                    </div> -->
                    <!-- <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12 mb_30">
                        <div class="saf_widgets saf_footer_menu">
                            <div class="saf_footer_title">
                                <h4 class="saf_footer_heading">Learn More</h4>
                                <img src="assets/images/index/heading_border_half.png" alt="" />
                            </div>
                            <ul>
                                <li><a href="javascript:void(0)">Our Customer</a></li>
                                <li><a href="javascript:void(0)">Take a Tour</a></li>
                                <li><a href="javascript:void(0)">Pricing Table</a></li>
                                <li><a href="javascript:void(0)">Sort Code</a></li>
                                <li><a href="javascript:void(0)">More Features</a></li>
                                <li><a href="javascript:void(0)">Traing Video</a></li>
                            </ul>
                        </div>
                    </div> -->
                    <div class="col-xl-2 col-lg-4 col-md-6 col-sm-12 col-12 mb_30">
                        <div class="saf_widgets saf_footer_menu">
                            <div class="saf_footer_title">
                                <h4 class="saf_footer_heading">Quick link</h4>
                                <img src="assets/images/index/heading_border_half.png" alt="" />
                            </div>
                            <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">Company</a></li>
                            <li><a href="service.php">Services</a></li>
                            <li><a href="project.php">Projects</a></li>
                            <li><a href="job.php">Career</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-6 col-sm-12 col-12 mb_30">
                    
                      <div class="saf_widgets saf_footer_menu">
                            <div class="saf_footer_title">
                                <h4 class="saf_footer_heading">Contact Us</h4>
                                <img src="assets/images/index/heading_border_half.png" alt="" />
                            </div>
                            <ul>
                                <li>
                                    <a href="Dubai.php">Dubai</a>
                                    <!-- <div class="saf_footer_info">
                                    </div> -->
                                </li>
                                <li>
                                    <span><a href="Khartoum.php">Khartoum</a></span>
                                    <!-- <div class="saf_footer_info">
                                        <a href="javascript:void(0)"> +971 54 424 0860,</a>
                                        <a href="javascript:void(0)"> +249 9 12499671 </a>
                                    </div>
                                </li> -->
                                <li>
                                    <span><a href="Cairo.php">Cairo</a></span>
                                    <!-- <div class="saf_footer_info">
                                        <a href="javascript:void(0)">mudathir@aktech-eng.com</a>
                                        <a href="javascript:void(0)">khalid@aktech-eng.com</a>
                                    </div> -->
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-4 col-md-6 col-sm-12 col-12 mb_30">

                    <img src="assets/images/index/map1.png" alt="logo"  width="3000" heigh="2000"/>
                    </div>

                </div>
            </div>
        </div>
        <div class="saf_copyright_wrapper white">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                <p>Copyright &copy; 2024 <a class="white" href="javascript:void(0);">aktech</a>. All Right Reserved.</p>
            </div>
        </div>
    </footer>