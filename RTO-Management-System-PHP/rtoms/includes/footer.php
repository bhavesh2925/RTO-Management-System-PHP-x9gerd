<div class="footer">
              <div class="container">
                     <div class="col-md-4 w3agile_footer_grid">
                             <?php

$ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                            <h3><?php  echo $row['PageTitle'];?></h3>
                            <p>Mobile Number: <?php  echo $row['MobileNumber'];?>.</p>
                            <p>Email: <?php  echo $row['Email'];?>.</p>

                     <?php } ?>
                            <h2><a href="index.php">RTO<span>Management</span>System</a></h2>
                     </div>
                     <div class="col-md-4 w3agile_footer_grid">       
                            <h3>Links</h3>
                            <ul>
                                   <li><a href="index.php">Home</a></li>
                                   <li><a href="about.php">About</a></li>
                                   <li><a href="contact.php">Mail Us</a></li>
                                   <li><a href="admin/index.php">Admin</a></li>
                                   <li><a href="rto/index.php">RTO</a></li>
                            </ul>
                     </div>
                     
                     <div class="col-md-4 w3agile_footer_grid">
                            <h3>Instagram</h3>
                            <div class="w3agile_footer_grid_left">
                                   <img src="images/9.jpg" alt=" " class="img-responsive" />
                            </div>
                            <div class="w3agile_footer_grid_left">
                                   <img src="images/10.jpg" alt=" " class="img-responsive" />
                            </div>
                            <div class="w3agile_footer_grid_left">
                                   <img src="images/11.jpg" alt=" " class="img-responsive" />
                            </div>
                            <div class="w3agile_footer_grid_left">
                                   <img src="images/8.jpg" alt=" " class="img-responsive" />
                            </div>
                            <div class="w3agile_footer_grid_left">
                                   <img src="images/7.jpg" alt=" " class="img-responsive" />
                            </div>
                            <div class="w3agile_footer_grid_left">
                                   <img src="images/6.jpg" alt=" " class="img-responsive" />
                            </div>
                            <div class="clearfix"> </div>
                     </div>
                     <div class="clearfix"> </div>
              </div>
       </div>
       <div class="agileinfo_copy_right">
              <div class="container">
                     <div class="agileinfo_copy_right_left">
                            <p> RTO Management System. All rights reserved</p>
                     </div>
                     <div class="agileinfo_copy_right_right">
                            <ul class="social">
                                   <li><a class="social-linkedin" href="#">
                                          <i></i>
                                          <div class="tooltip"><span>Facebook</span></div>
                                          </a></li>
                                   <li><a class="social-twitter" href="#">
                                          <i></i>
                                          <div class="tooltip"><span>Twitter</span></div>
                                          </a></li>
                                   <li><a class="social-google" href="#">
                                          <i></i>
                                          <div class="tooltip"><span>Google+</span></div>
                                          </a></li>
                                   <li><a class="social-facebook" href="#">
                                          <i></i>
                                          <div class="tooltip"><span>Pinterest</span></div>
                                          </a></li>
                                   <li><a class="social-instagram" href="#">
                                          <i></i>
                                          <div class="tooltip"><span>Instagram</span></div>
                                          </a></li>
                            </ul>
                     </div>
                     <div class="clearfix"> </div>
              </div>
       </div>
       <!-- / footer -->