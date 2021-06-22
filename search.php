<?php
session_start();
 $pgname="destination"; ?>
<!DOCTYPE html>
<html lang="en">
   
<!-- Mirrored from zone.qtcmedia.com/html/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Nov 2017 12:07:47 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
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
	  <!-- Facebook Pixel Code -->
        <script>
            !function (f, b, e, v, n, t, s)
            {
                if (f.fbq)
                    return;
                n = f.fbq = function () {
                    n.callMethod ?
                            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq)
                    f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window, document, 'script', '../../connect.facebook.net/en_US/fbevents.js');
            fbq('init', '348669228917290');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=348669228917290&amp;ev=PageView&amp;noscript=1"/></noscript>
        <!-- End Facebook Pixel Code -->
   </head>
   <body>
    <?php
      include 'header.php';
    ?>
        <section class="inner-banner">
         <div class="zt-container">
            <div class="box clearfix">
               <h2>Destinations</h2>
               <ul class="breadcumb">
                  <li><a href="index.html">Home</a></li>
                  <li><span>Destination</span></li>
               </ul>
            </div>
         </div>
      </section>
      <section class="popular-services sec-padding sec-bg-default home-two">
         <div class="zt-container">
            <div class="sec-title text-center sec-title-padding">
               <h2>DESTINATIONS</h2>
               <span class="tagline">Here are the Incrdible Cmaps Available for next 3 months. Click on book now for detailed information. </span>
               <span class="img-border"></span>
            </div>
            <div class="row">
              <?php
              $camp=$_GET['camp'];
        $q=mysql_query("select * from camps where name like '%$camp%' order by id DESC");
          $n=mysql_num_rows($q);
            for ($i=0; $i <$n; $i++) 
              { 
                $row=mysql_fetch_row($q);
        ?>
               <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="tour-list-box text-center">
                     <div class="img-box zt-overlay">
                         <div class="zt-overlay-panel zt-flex zt-flex-right text-center">
                           <div class="box-wrap-img zt-overlay-background zt-flex zt-flex-middle">
                              <div class="box-padding">
                                 <div class="box-item font-bold">
                                    <span class="color-primary">duration:</span>
                                    <?php echo $row[2];?> dys & <?php echo $row[5];?> nyts 
                                 </div>
                                 <div class="driver"></div>
                                 <div class="box-item font-bold">
                                    <span class="color-primary">Cost</span>
                                    <?php echo $row[3];?>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <img src="images/camps/<?php echo $row[4];?>" alt="" />
                     </div>
                     <div class="box-content">
                        <h3><?php echo $row[1];?></h3>
                        <!--<div class="rating">
                           <span class="fa fa-star color-primary"></span>
                           <span class="fa fa-star color-primary"></span>
                           <span class="fa fa-star color-primary"></span>
                           <span class="fa fa-star color-primary"></span>
                           <span class="fa fa-star"></span>
                        </div>-->
                        <a href="destination-detail.php?id=<?php echo $row[0]; ?>" class="btn zt-default btn-lg">Book Now</a>
                     </div>
                  </div>
               </div>
               <?php
        }
      ?>
            </div>
         </div>
      </section>       
      <div style="padding:1%">
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


<!-- Mirrored from zone.qtcmedia.com/html/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Nov 2017 12:10:23 GMT -->
</html>
