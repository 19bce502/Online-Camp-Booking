<?php
   session_start();
   if(!isset($_SESSION['login']))
      {
         header("location:login.php");
      }
 $pgname="team"; 
?>
<!DOCTYPE html>
<html lang="en">
   
<!-- Mirrored from zone.qtcmedia.com/html/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Nov 2017 12:16:20 GMT -->
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
               <h2>Team</h2>
               <ul class="breadcumb">
                  <li><a href="index.html">Home</a></li>
                  <li><span>Aboutt</span></li>
               </ul>
            </div>
         </div>
      </section>
      <!--<section class="about-info sec-padding">
         <div class="zt-container-min">
            <div class="sec-title text-center">
               <h2>Zone Tour amazing story</h2>
               <span class="tagline">Quisque et est ornare, luctus nunc non, vestibulum lacus. Fusce ultrices molestie elit, sit amet finibus enim finibus ac. Fusce ultrices molestie elit, sit amet finibus enim finibus ac.</span>
            </div>
            <div class="about-info-content">
               <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc ultrices magna et lobortis imperdiet. Etiam nulla lacus, sodales non nulla id, fermentum auctor tortor. Vestibulum a orci at nisi egestas semper. Proin commodo dolor vitae enim rhoncus, ut hendrerit arcu interdum.</p>
            </div>
         </div>
      </section>-->
      
        <section class="gallery-member gallery-masonry sec-padding">
         <div class="zt-container">
            <ul class="list-unstyled row grid">
               <?php
                  $q=mysql_query("select * from team");
                  $n=mysql_num_rows($q);
                  for ($i=1; $i <= $n ; $i++)
                  { 
                        $row=mysql_fetch_row($q);
               ?>

               <li class="grid-item col-md-4 col-sm-6 col-xs-6">
                  
                     <div class="img-box zt-overlay zt-overlay-hover">
                        <div class="zt-overlay-panel zt-overlay-background zt-flex zt-flex-center zt-flex-middle zt-overlay-scale">
                           <div class="box-gallery">
                              <h3 class="color-primary"><?php echo $row[1];?></h3>
                              
                           </div>
                        </div>
                        <img src="images/team/<?php echo $row[9];?>" alt=""/>
                     </div>
                  
               </li>
               <?php
                  }
               ?>
            </ul>
            
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


<!-- Mirrored from zone.qtcmedia.com/html/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Nov 2017 12:17:37 GMT -->
</html>
