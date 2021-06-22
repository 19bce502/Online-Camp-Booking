<?php 
session_start();
      if(!isset($_SESSION['login']))
      {
         header("location:login.php");
      }
      

$pgname="destination"; ?>
<!DOCTYPE html>
<html lang="en">
   

<!-- Mirrored from zone.qtcmedia.com/html/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Nov 2017 12:14:25 GMT -->
<head>
      <title>Expedition</title>
      <!-- viewport meta -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- styles -->
      <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
      <!-- fontawesome css -->
      <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
      <!-- flaticon css -->
      <link rel="stylesheet" href="plugins/flaticon/flaticon.css">
      <!-- revolution slider css -->
      <link rel="stylesheet" href="plugins/revolution/css/settings.css">
      <link rel="stylesheet" href="plugins/revolution/css/layers.css">
      <link rel="stylesheet" href="plugins/revolution/css/navigation.css">
      <!-- jQuery ui css -->
      <link href="plugins/jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet">
      <!-- owl carousel css -->
      <link rel="stylesheet" href="plugins/owl.carousel-2/assets/owl.carousel.css">
      <link rel="stylesheet" href="plugins/owl.carousel-2/assets/owl.theme.default.min.css">
      <!-- gallery -->
      <link rel="stylesheet" href="plugins/lightGallery/dist/css/lightgallery.min.css">
      <!-- animate css -->
      <link rel="stylesheet" href="plugins/animate.min.css">
      <!-- bxslider -->
      <link rel="stylesheet" href="plugins/bx-slider/jquery.bxslider.css">
      <!-- datetimepicker css -->
      <link rel="stylesheet" href="plugins/datetimepicker/jquery.datetimepicker.min.css">
      <!-- master stylesheet -->
      <link rel="stylesheet" href="css/style.css">
      <!-- responsive stylesheet -->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- skin stylesheet -->
      <link rel="stylesheet" href="css/skin/skin-default.css">
      <!-- favicon -->
      <link rel="shortcut icon" href="images/favicon.ico" />
   </head>
   <body>
      <?php
      include 'header.php';
      ?>
      <section class="inner-banner">
         <div class="zt-container">
            <div class="box clearfix">
               <h2>Check Out</h2>
               <ul class="breadcumb">
                  <li><a href="index.html">Home</a></li>
                  <li><span>Check Out</span></li>
               </ul>
            </div>
         </div>
      </section>
      <section class="checkout sec-padding">
         <div class="zt-container">
            <div class="row">
               <div class="col-md-8 col-sm-7 col-xs-12">
                  <form class="form" action="billing_process.php" method="POST">
                     <div class="checkout-content-wrap">
                        <div class="box box-details">
                           <div class="box-title">
                              <h2><span class="sort">1</span> Your Details</h2>
                           </div>
                           <div class="box-content">
                              <div class="row">
                                 <?php
                                    $con=mysql_connect("localhost","root","");
                                    $db=mysql_select_db("expedition",$con);
                                    $u_id=$_SESSION['u_id'];
                                    $q=mysql_query("SELECT * from signup where id=$u_id");
                                    $row=mysql_fetch_row($q);
                                 ?>
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                       <label class="control-label" >Name <span class="text-danger"></span></label>
                                       <input name="first-name" class="zt-control" placeholder="<?php echo $row[1];?>" disabled/>
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                       <label class="control-label">Age<span class="text-danger"></span></label>
                                       <input name="Age" class="zt-control" placeholder="<?php echo $row[6];?>" disabled/>
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                       <label class="control-label">Phone Number <span class="text-danger"></span></label>
                                       <input name="phone-number" class="zt-control" placeholder="<?php echo $row[2];?>" disabled />
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                       <label class="control-label">Email <span class="text-danger"></span></label>
                                       <input name="email" class="zt-control" placeholder="<?php echo $row[3];?>" disabled />
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="control-label">Your Address <span class="text-danger"></span></label>
                                 <textarea class="zt-control" name="your-comment" placeholder="<?php echo $row[4];?>" disabled></textarea>
                              </div>
                           </div>
                        </div>
                        <div class="box box-billing">
                           <div class="box-title">
                              <h2><span class="sort">2</span> Billing Information</h2>
                           </div>
                           <div class="box-content">
                              <div class="row">
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                       <label class="control-label" >Payment Type <span class="text-danger"></span></label>
                                       <input name="type" class="zt-control" placeholder="Pay @ Office" disabled/>
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                       <label class="control-label">City <span class="text-danger">*</span></label>
                                       <input name="state" class="zt-control" placeholder="city" />
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                       <label class="control-label">State <span class="text-danger">*</span></label>
                                       <input name="state" class="zt-control" placeholder="State" />
                                    </div>
                                 </div>
                                 
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                       <label class="control-label">Postal Code <span class="text-danger">*</span></label>
                                       <input name="postalcode" class="zt-control" placeholder="Postal Code" />
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                     
                  <?php 
                        $u_id=$_SESSION['u_id'];
                        $q=mysql_query("select * from booking where user_id=$u_id");
                        $n=mysql_num_rows($q);
                        $row=mysql_fetch_row($q);
                        ?>
                        
                  <button type="submit" class="btn zt-primary btn-lg btn-book">Confirm</button>  

                   </div> 
                  </form>
                  <a href="delete_pro.php?id=<?php echo $row[0] ?>"><button style="margin-top: 30px; margin-left: 50px;"class="btn zt-primary btn-lg btn-book"> Delete  </button></a> 
               </div>
               <div class="col-md-4 col-sm-5 col-xs-12">
                  <div class="checkout-sidebar-wrap sidebar-box" >
                     <div class="sidebar-header">
                        <?php 
                        $u_id=$_SESSION['u_id'];
                        $q=mysql_query("select * from booking where user_id=$u_id");
                        $n=mysql_num_rows($q);
                        $row=mysql_fetch_row($q);
                        ?>
                        <h3 class="title">CAMP INFORMATION</h3>
                     </div>
                     <div class="sidebar-content">
                        <ul>
                           <li>
                              <div class="title">
                                 <span class="fa fa-map-marker"></span> Location
                              </div>
                              <div class="details">
                                 <span class="color-primary"><?php
                                  $q1=mysql_query("select * from camps where id=$row[1]");
                                  $row1=mysql_fetch_row($q1);
                                  echo $row1[1];
                                   ?></span>
                              </div>
                           </li>
                           <li>
                              <div class="title">
                                 <span class="fa fa-calendar"></span> Tour Date
                              </div>
                              <div class="details">
                                 <span class="color-primary">
                                 <?php
                                  $q1=mysql_query("select * from dates where id=$row[3]");
                                  $row1=mysql_fetch_row($q1);
                                  echo $row1[2];
                                   ?></span>
                              </div>
                           </li>
                           <li>
                              <div class="title">
                                 <span class="fa fa-calendar"></span> Package
                              </div>
                              <div class="details">
                                 <span class="color-primary">
                                 <?php
                                  $q1=mysql_query("select * from pkg where id=$row[4]");
                                  $row1=mysql_fetch_row($q1);
                                  echo $row1[2];
                                   ?></span>
                              </div>
                           </li>
                           
                           <li>
                              <div class="title">
                                 <span class="fa fa-user"></span> Guests
                              </div>
                              <div class="details color-primary">
                                 01 Adult
                              </div>
                           </li>
                           <li>
                              <div class="title">
                                 <span class="fa fa-ticket"></span> Coupon code
                              </div>
                              <div class="details color-primary">
                                 <?php
                                  echo $row[0];
                                   ?>
                              </div>
                           </li>
                        </ul>
                     </div>
                     <div class="sidebar-footer">
                        Total Price: <span class="blod"><?php
                                  $q1=mysql_query("select * from pkg where id=$row[1]");
                                  $row1=mysql_fetch_row($q1);
                                  echo $row1[3];
                                   ?></span>
                     </div>
                  </div>
               </div>                     
            </div>
            <div class="scroll-checkout"></div>
         </div>
      </section>
         <?php
         include 'footer.php';
         ?>
      <!-- JS -->
      <!-- jQuery js -->
      <script src="plugins/jquery/jquery-1.12.4.min.js"></script>
      <!-- bootstrap js -->
      <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
      <!-- jQuery ui js -->
      <script src="plugins/jquery-ui-1.12.1/jquery-ui.js"></script>
      <!-- jQuery sticky js -->
      <script src="plugins/jquery.sticky-kit.min.js"></script>
      <!-- owl carousel js -->
      <script src="plugins/owl.carousel-2/owl.carousel.min.js"></script>
      <!-- gallery js -->
      <script src="plugins/lightGallery/dist/js/lightgallery-all.min.js"></script>
      <script src="plugins/lightGallery/dist/js/jquery.mousewheel.min.js"></script>
      <!-- jQuery validation -->
      <script src="plugins/jquery-validation/dist/jquery.validate.min.js"></script>
      <!-- bxslider js -->
      <script src="plugins/bx-slider/jquery.bxslider.min.js"></script>
      <!-- datetimepicker js -->
      <script src="plugins/datetimepicker/jquery.datetimepicker.full.min.js"></script>
      <!-- revolution slider js -->
      <script src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
      <script src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
      <script src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
      <script src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
      <script src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
      <script src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
      <script src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
      <script src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
      <script src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
      <script src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
      <script src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>

      <!-- theme custom js  -->
      <script src="js/main.js"></script>
   </body>


<!-- Mirrored from zone.qtcmedia.com/html/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Nov 2017 12:14:26 GMT -->
</html>
