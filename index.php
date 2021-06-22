<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("expedition",$con);
$pgname="index"; 
$d = date("y-m-d");
$query = "select cmp_id from dates where dates <= '$d'";
$q = mysql_query($query);

if($q)
  {
    $temp = mysql_fetch_row($q);
    $query = "delete from dates where dates <='$d' ";
    $res1 = mysql_query($query);

    
    $query = "select * from dates where cmp_id = $temp[0]";
    $res = mysql_query($query);
    if($res)
      {
        $n=mysql_num_rows($res);
        if($n==0)
          {
            $query = "delete from pkg where cmp_id = $temp[0]";
            $res = mysql_query($query);
            $query = "delete from camps where id = $temp[0]";
            $res = mysql_query($query);
            $query = "delete from gallery where id = $temp[0]";
            $res = mysql_query($query);
          }
     }
    else
      {
        
      }
  }
  else 
  {
  }

?>
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
                s.parentNode.insertBefo
                re(t, s)
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
      <section class="rev_slider_wrapper slider1">
         <div id="slider3" class="rev_slider"  data-version="5.0">
            <ul>
              <?php
      $q=mysql_query("select * from slider");
      $n=mysql_num_rows($q);
      for ($i=1; $i <=$n ; $i++)
      { 
          $row=mysql_fetch_row($q);    
      
    ?>
    
               <li data-transition="slotfade-vertical" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" >
                  <img src="images/slider/<?php echo $row[1] ?>"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina/>
                  <div class="tp-caption tp-resizeme banner-caption-h1 color-primary text-center"
                       data-x="right" data-hoffset="0"
                       data-y="center" data-voffset="-50"
                       data-whitespace="nowrap"
                       data-transform_idle="o:1;"

                       data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                       data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                       data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                       data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                       data-start="1000"
                       data-splitin="chars"
                       data-splitout="none"
                       data-responsive_offset="on"

                       data-elementdelay="0.05" >
                     explore.
                  </div>
                  <div class="tp-caption tp-resizeme banner-caption-p text-center"
                       data-x="right" data-hoffset="0"
                       data-y="center" data-voffset="20"
                       data-whitespace="nowrap"
                       data-transform_idle="o:1;"

                       data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                       data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                       data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                       data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                       data-start="1500"
                       data-splitin="chars"
                       data-splitout="none"
                       data-responsive_offset="on"

                       data-elementdelay="0.05" >
                     new lands with us
                  </div>
                  
               </li>
               <?php
          }
      ?>
           
            </ul>
         </div>
      </section>
          <section class="choose-tour sec-padding sec-padding-top-large">
         <div class="zt-container">
            <div class="sec-title text-center sec-title-padding">
               <h2>Why choose us</h2>
               <span class="tagline">Here is some description about us from that u can decide why to choose us</span>
               <span class="img-border"></span>
            </div>
            <div class="row">
               <div class="col-md-4 col-sm-12 col-xs-12">
                  <div class="box-awesome-service">
                     <div class="box-icon">
                        <span class="flaticon-big-compass"></span>
                     </div>
                     <div class="box-text">
                        <h3>ADVENTURE</h3>
                        <p>An adventure is an exciting experience that is typically a bold,sometimes riskybut due the 
                          perfect and proper guidelines as well as perfect follow ups of guides  this problem can be
                          solved.Adventure tourism is all about connecting with nature.So let us join the
                          us to explore the India. </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-12 col-xs-12">
                  <div class="box-awesome-service">
                     <div class="box-icon">
                        <span class="flaticon-save"></span>
                     </div>
                     <div class="box-text">
                        <h3>FUN & SAFETY</h3>
                        <p>As to explore the places it will be lot of fun but along with fun there should be saftey also 
                          so safety is the highest priority. So all the guides will be valid first aid kit. Here all the staff has given special trainning for the saftey.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-12 col-xs-12">
                  <div class="box-awesome-service">
                     <div class="box-icon">
                        <span class="flaticon-big-flag-waving"></span>
                     </div>
                     <div class="box-text">
                        <h3>SERVICES</h3>
                        <p>Expedition provides all the servies to the visitors.Best food services , good Journey, To meet with incredible nature, good place to stay, Good hygine facilitis, first aid facilities.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="popular-services sec-padding">
         <div class="zt-container">
            <div class="sec-title text-center sec-title-padding">
               <h2>POPULAR DESTINATIONS</h2>
               <span class="tagline">Below displayed destinations are mostly visited places by our uses.</span>
               <span class="img-border"></span>
            </div>
            <div class="row">
              <?php
                $q=mysql_query("select * from camps order by id DESC limit 6");
                for ($i=0; $i <6 ; $i++) 
                { 
                      $row=mysql_fetch_row($q);
                ?>
               <div class="col-md-4 col-sm-6 col-xs-6">
                  <div class="tour-list-box text-center zt-overlay zt-overlay-hover">
                     <div class="img-box position-relative">
                        <div class="zt-overlay-panel zt-overlay-backgrounu,d zt-overlay-slide-top zt-flex zt-flex-center zt-flex-middle text-center">
                           <a href="destination-detail.php?id=<?php echo $row[0];?>" class="btn zt-default btn-lg">Book Now</a>
                        </div>
                        <img src="images/camps/<?php echo $row[4]; ?>" alt=""/>
                     </div>
                     <div class="box-content">
                        <h4><?php echo $row[1]; ?></h4>
                        <div class="driver"></div>
                        <span class="duration">Duration: <?php echo $row[2]; ?> dys & <?php echo $row[5]; ?> nyts<br/> Cost: <?php echo $row[3]; ?></span>
                     </div>
                  </div>
               </div>
               
               <?php
              }
               ?>
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