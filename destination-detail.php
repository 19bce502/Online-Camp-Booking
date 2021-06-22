<?php
session_start();
 $pgname="destination"; ?>
<!DOCTYPE html>
<html lang="en">
   
<!-- Mirrored from zone.qtcmedia.com/html/destination-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Nov 2017 12:14:01 GMT -->
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
      <?php
         $id=$_GET['id'];      
         $q=mysql_query("select * from camps where id=$id");
         $row=mysql_fetch_row($q);
      ?>
      <section class="inner-banner">
         <div class="zt-container">
            <div class="box clearfix">
               <h2><?php echo $row[1]; ?></h2>
               <ul class="breadcumb">
                  <li><a href="index.html">Home</a></li>
                  <li><span>Destinations</span></li>
               </ul>
            </div>
         </div>
      </section>
      <section class="destinations sec-padding">
         <div class="zt-container">
            <div class="row">
               <div class="col-md-12 col-sm-12cgp col-xs-12">
                  <div class="destination-content-wrap">
                     <ul class="nav nav-tabs tab" role="tablist">
                        <li class="active"><a href="#location" data-toggle="tab"><span class="fa fa-map-marker "></span> Location</a> </li>
                        <li><a href="#checkin" class="zt-flex zt-flex-center zt-flex-middle" data-toggle="tab"><span class="fa fa-clock-o"></span> Check In </a></li>
                        <li><a href="#viewonmap" data-toggle="tab"><span class="fa fa-map"></span> View On Map</a></li>
                        <li><a href="#details" data-toggle="tab"><span class="fa fa-info-circle"></span> Details</a></li>
                        <li><a href="#gallery" data-toggle="tab"><span class="fa fa-repeat"></span> Gallery</a></li>
                     </ul>
                     <div class="tab-content destination-content">
                        <div class="tab-pane active" id="location">
                           <div class="tab-details panel panel-default ">
                              <p> <?php echo $row[6]; ?></p>
                           </div>
                           <div class="thumbnail ">
                           <img src="images/camps/<?php echo $row[4]; ?>" alt=""/>
                        </div>
                        <h1><strong><?php echo $row[1]; ?></strong> </h1>
                        <blockquote>
                           Small glance of the place
                        </blockquote>
                        <div class="destination-content">
                           <p><?php echo $row[8]; ?></p>
                        
                        </div>   
                        </div>
                        <div class="tab-pane" id="checkin">
                           
                           <LABEL style="padding-top: 20px;">Available Packages:</LABEL>
                           <?php
                                 $q=mysql_query("select * from pkg where cmp_id=$id");
                                    $n=mysql_num_rows($q);
                                    for ($i=0; $i <$n ; $i++)
                                    {  
                                       echo"<br><br>";  
                                       $row=mysql_fetch_row($q);
                                    
                              ?>
                              <button class="btn zt-primary btn-lg btn-book"><a href="<?php if(isset($_SESSION['login'])){ echo "dates2.php?p_id=$row[0]&c_id=$id";  } else { echo "login.php"; } ?>"><div class="zt-overlay-hover"style="background-color: orange;
                                 width: 500px;
                                 height: 30px;
                                 text-align: center;
                                 border-width: 1px; 
                                 border-color: black; 
                                 border-style: outset;
                                 color: white;
                                 font-size: 110%;
                                 font-weight: bold;
                                 border-radius: 15px;">

                              <?php echo $row[2];?> For <?php echo $row[3];?> Rupees
                              </div> </a></button>
                              <?php
                                 }
                              ?>
                        </div>
                        <div class="tab-pane" id="viewonmap">
                           <div class="tab-details">
                              <iframe src="<?php echo $row[7]; ?>" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                           </div>
                        </div>
                        
                        
                        <div class="tab-pane" id="details">
                           <div class="tab-details">
                              <ul>
                                 <?php
                                    $q=mysql_query("select * from camps where id=$id");
                                    $row=mysql_fetch_row($q);
                                 ?>
                                 <p><?php echo $row[9] ;?></p>
                                 <?php
                                    
                                 ?>
                              </ul>
                           </div>
                        </div>
                        <div class="tab-pane" id="gallery">
                           <div class="destination-content">
                              <?php
                                 $q=mysql_query("select * from gallery where cmp_id=$id");
                                 $n=mysql_num_rows($q);
                                 for ($i=1; $i <$n ; $i++) 
                                 { 
                                    $row=mysql_fetch_row($q);
                              ?>
                              <img src="images/gallery/<?php echo $row[1];?>" height="225" width="360" alt=""/>
                              <?php
                                 }
                              ?>
                        
                           </div>
                        </div>
                     </div>
                     <!--<div class="destination-content">
                        
                        <img src="images/thumbnails/zone-tour-image-califa.png" height="225" width="360" alt=""/>
                        <img src="images/thumbnails/night-traffic.png" height="225" width="360" alt=""/>
                        <p>Praesent viverra consectetur elit vitae lacinia. Curabitur vitae consectetur turpis, sed tincidunt nibh. Nullam eget consequat magna. Suspendisse id laoreet felis, at consequat tortor. Nulla suscipit leo non egestas placerat. Etiam a sagittis erat. Morbi id commodo tellus. Praesent id risus arcu. Integer facilisis, erat nec facilisis pulvinar, magna risus pulvinar arcu, ut lobortis est massa et dolor. Morbi quis neque et justo malesuada laoreet. In turpis mi, cursus sed sodales nec, efficitur ut nulla. Sed faucibus ante ac elit faucibus finibus. Proin cursus ligula in erat interdum placerat. Etiam sodales nisi ut porta posuere. Aenean vehicula tellus sed molestie venenatis.</p>
                     </div>-->
                  </div>
               </div>
               
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
      ``
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
      <script src="plugins/gmap3.min.js"></script>
      <!-- theme custom js  -->
      <script src="js/main.js"></script>

   </body>
<!-- Mirrored from zone.qtcmedia.com/html/destination-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Nov 2017 12:14:25 GMT -->
</html>