<?php
   $con=mysql_connect("localhost","root","");
   $db=mysql_select_db("expedition",$con);
?>

      <div id="top-bar" class="hidden-sm hidden-xs home">
         <div class="zt-container">
            <div class="social-top pull-left">
               <ul>
                  <li><a href="#" target="_blank"><span class="fa fa-facebook"></span></a></li>
                  <li><a href="#" target="_blank"><span class="fa fa-twitter"></span></a></li>
                  <li><a href="#" target="_blank"><span class="fa fa-instagram"></span></a></li>
                  <li><a href="#" target="_blank"><span class="fa fa-vimeo"></span></a></li>
                  <li><a href="#" target="_blank"><span class="fa fa-google-plus"></span></a></li>
               </ul>
            </div>
            <div class="login pull-right">
               <ul>
                  <?php 

                  if(!isset($_SESSION['login']))
                  { ?>
                     
                  
                  <li><a href="login.php">Login</a></li>
                  <li><a href="register.php">Register</a></li>
                  <?php 
                  }
                  else
                  {

                  ?>
                  <li><a href="logout.php">Logout</a></li>
                  <?php
                  } ?>
                  <li><a href="#" id="search" ><span class="fa fa-search"></span></a></li>
               </ul>
            </div>
            <div class="form-search-wrap">
               <div class="zt-container">
                  <a href="#" class="close-search"><span class="fa fa-remove"></span></a>
                  <div class="form-search-box zt-flex zt-flex-center zt-flex-middle">
                     <form class="form" action="search.php">
                        <div class="form-group">
                           <div class="input-icon">
                              <input type="text" class="zt-control"  placeholder="Search..." name="camp">
                              <div class="input-addon"><span class="fa fa-search"></span></div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <header id="header" class="stricky home">
         <div class="zt-container clearfix">
            <div class="logo pull-left">
               <a href="index.php">
                  <strong><h1 style="margin-left: -50px; color: gray; margin-top: 20px; ">Expedition</h1></strong>
               </a>
            </div>
            <nav class="nav-holder pull-right" style="margin-right: -100px;">
               <div class="nav-footer">
                  <ul class="nav">
                     <li class="has-submenu <?php if($pgname == "index") echo "active"; ?>">
                        <a href="index.php">Home </a>
                        
                     </li>
                     <li class="has-submenu <?php if($pgname == "destination") echo "active"; ?> ">
                        <a href="destination1.php">Destinations</a>
                                             </li>
                     <li class="<?php if($pgname == "gallery") echo "active"; ?>"><a href="gallery.php">Gallery</a>
                     </li>
                     <li class="has-submenu <?php if($pgname == "brochure") echo "active"; ?> ">
                        <a href="brochure.php">Brouchers</a>
                        
                     </li>
                     <li class="<?php if($pgname=="team") echo "active"; ?>"><a href="team.php">Team</a></li>
                     <li class="<?php if($pgname=="contact") echo "active"; ?>"><a href="contact.php">Contact</a></li>
                     <li class="<?php if($pgname == "reviews") echo "active"; ?>"><a href="review.php">Reviews</a>
                     </li>
                     
                  </ul>
               </div>
               <div class="nav-header">
                  
                  <!--   <li>
                        <a href="#"><span class="icon icon-phone"></span></a>
                        <ul class="submenu phone-box">
                           <li>
                              <div class="text-phone-number">
                                 <div class="phone-number"><a href="tel:0123456789">012.345.6789</a></div>
                                 <div class="time-wrap">
                                    <span class="now-is">Now is:</span>
                                    <span class="time-open">OPEN</span>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </li>-->
                     <button class="hidden-lg hidden-md menu-expander"><i class="fa fa-bars"></i></button>
                  
               </div>
            </nav>
         </div>
      </header>      