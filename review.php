<?php $pgname="reviews"; ?>
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
               <h2>Review</h2>
               <ul class="breadcumb">
                  <li><a href="index.html">Home</a></li>
                  <li><span>Review</span></li>
               </ul>
            </div>
         </div>
      </section>
      <section class="clients-says sec-padding">
         <div class="zt-container">
            <div class="sec-title text-center sec-title-padding">
               <h2>what our clients says</h2>
               <span class="tagline">Here are some reviews from the users who have visited the destinations with expedition.</span>
               <span class="img-border"></span>
            </div>
            <div class="clients-says-content position-relative">
               <ul class="clients-slider">
                <?php 
                  $q=mysql_query("select * from reviews");
                  $n=mysql_num_rows($q);
                  for ($i=1; $i <=$n ; $i++) 
                  { 
                    $row=mysql_fetch_row($q);
                ?>
                  <li class="item">
                     <p><?php echo $row[3]; ?></p>
                     <div class="meta-profile"><span class="color-primary">- <?php echo $row[1]; ?>,</span> U.S.A </div>
                  </li>
                  <?php
                      }
                  ?>
                  <!--<li class="item">
                     <p>“ Consectetur adipiscing elit. Etiam eu gravida risus. Aenean lacinia lacus ac nibh bibendum,<br/> non mollis urna pellentesque. Maecenas suscipit justo elit."</p>
                     <div class="meta-profile"><span class="color-primary">- Emily Henderson,</span> U.S.A </div>
                  </li>
                  <li class="item">
                     <p>“ Consectetur adipiscing elit. Etiam eu gravida risus. Aenean lacinia lacus ac nibh bibendum,<br/> non mollis urna pellentesque. Maecenas suscipit justo elit."</p>
                     <div class="meta-profile"><span class="color-primary">- Emily Henderson,</span> U.S.A </div>
                  </li>-->
               </ul>
             </div>
               <!--<?php 
                  $q=mysql_query("select * from signup");
                  $n=mysql_num_rows($q);
                  for ($i=1; $i <=$n ; $i++) 
                  { 
                    $row=mysql_fetch_row($q)
                ?>
               <div class="slider-thumbnail-item">
                     <a data-slide-index="2" href="#" class="zt-overlay">
                        <div class="zt-overlay-background zt-overlay-panel zt-overlay-circular zt-overlay-opacity"></div>
                        <img class="img circular" src="images/profile/" alt=""/>
                     </a>
                  </div>
                <?php
                    }
                  ?>-->
         </div>
      </section>
      <section class="contact-page gallery-masonry sec-padding">
         <div class="zt-container">
            <div class="sec-title text-center sec-title-padding">
               <h2>Send Us Feefback</h2>
               <span class="tagline">Customers can share their good or bad experiences here.</span>
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
