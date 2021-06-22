<?php 
session_start();
$pgname="contact"; ?>
<!DOCTYPE html>
<html lang="en">
   
<!-- Mirrored from zone.qtcmedia.com/html/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Nov 2017 12:17:37 GMT -->
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
               <h2>Contact</h2>
               <ul class="breadcumb">
                  <li><a href="index.html">Home</a></li>
                  <li><span>Contact</span></li>
               </ul>
            </div>
         </div>
      </section>
      <section class="contact-page gallery-masonry sec-padding">
         <div class="zt-container">
            <div class="sec-title text-center sec-title-padding">
               <h2>Send Us a Message</h2>
               <span class="tagline">Send your reviews </span>
            </div>
            <div class="contact-info">
               <div class="row">
                  <div class="col-md-4 col-sm-6 col-xs-12">
                     <div class="box-awesome-service">
                        <div class="box-icon">
                           <span class="fa fa-phone"></span>
                        </div>
                        <div class="box-text">
                           <p>9998097164</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                     <div class="box-awesome-service">
                        <div class="box-icon">
                           <span class="fa fa-map-marker"></span>
                        </div>
                        <div class="box-text">
                           <p><strong>Jamnagar Gujarat ,</strong>361008 <br/>India</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                     <div class="box-awesome-service">
                        <div class="box-icon">
                           <span class="fa fa-envelope"></span>
                        </div>
                        <div class="box-text">
                           <p>expedition@gmail.com</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <form class="form contact-form" action="contact1.php" method="POST">
               <div class="row">
                  <div class="col-md-offset-1 col-md-5 col-sm-6 col-xs-12">
                     <div class="form-group">
                        <div class="input-icon left">
                           <input type="text" name="name" class="zt-control" placeholder="Your Name *">
                           <div class="input-addon"><span class="fa fa-user"></span></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-5 col-sm-6 col-xs-12">
                     <div class="form-group">
                        <div class="input-icon left">
                           <input type="text" name="email" class="zt-control" placeholder="Email *">
                           <div class="input-addon"><span class="fa fa-envelope"></span></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-offset-1 col-md-10 col-sm-12 col-xs-12">
                     <div class="form-group">
                        <div class="input-icon left">
                           <textarea name="message" class="zt-control" placeholder="Emter your message..." rows="10"></textarea>
                           <div class="input-addon"><span class="fa fa-pencil"></span></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-offset-1 col-md-10 col-sm-12 col-xs-12">
                     <div class="zt-flex zt-flex-center">
                        <input type="submit" class="btn zt-default btn-lg" value="submit">
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="response"></div>
                  </div>
               </div>
            </form>
         </div>
      </section>
      <div style="padding:0.6%">
      </div>
      <section class="about-info sec-padding">
         <div class="zt-container-min">
            <div class="sec-title text-center">
               <h2>About Expedition</h2>
               <span class="tagline">An adventure is an exciting experience that is typically a bold,sometimes riskybut due the 
                          perfect and proper guidelines as well as perfect follow ups of guides  this problem can be
                          solved.Adventure tourism is all about connecting with nature.So let us join the
                          us to explore the India.</span>
            </div>
            <div class="about-info-content">
               <p>The online camp booking is beign developed for the tourist so that they can book their camps from all over the world.This project takes the information from the tourist through feeling their details.A tourist beign registered in the website has the facility to book their own camps.The website would be save time .
</p>
            </div>
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
      <!-- owl carousel js -->
      <script src="plugins/owl.carousel-2/owl.carousel.min.js"></script>
      <!-- gallery js -->
      <script src="plugins/lightGallery/dist/js/lightgallery-all.min.js"></script>
      <script src="plugins/lightGallery/dist/js/jquery.mousewheel.min.js"></script>
      <!-- jQuery validation -->
      <script src="plugins/jquery-validation/dist/jquery.validate.min.js"></script>
      <!-- bxslider js -->
      <script src="plugins/bx-slider/jquery.bxslider.min.js"></script>
      <!-- masonry js -->
      <script src="plugins/masonry.pkgd.min.js"></script>
      <!-- google map js -->
      <script src="plugins/gmap3.min.js"></script>
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


<!-- Mirrored from zone.qtcmedia.com/html/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Nov 2017 12:17:38 GMT -->
</html>
