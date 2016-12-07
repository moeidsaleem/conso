<?php 
$page = 'Contact us';
$title = $page;
require 'config/config.php';

?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ConsoIT | <?php echo $title; ?></title>

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="css/extralayers.css" media="screen" /> 
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

    <!-- PORTFOLIO AND LIGHTBOX SETTINGS -->
    <link href="bfassets/css/bootFolio.css" rel="stylesheet">
    <link href="bfassets/css/prettyPhoto.css" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/et-icons.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl-carousel.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,400italic,600italic,700,700italic,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    

</head>
<body>

    <div id="loader">
        <div class="loader-container">
            <div id="preloader_1">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

 <?php
          include 'partials/top-header.php';
          include 'partials/header.php';
            ?>



        <!-- page builer -->

        <div class="map-wrapper">
            <div id="map"></div>
        </div><!-- end map -->

        <section class="section-white clearfix">
            <div class="container">
              <?php include 'partials/contact-link.php'; ?>
       
                <div class="clearfix"></div>
                <br><br><br>
                <div class="section-title">
                    <h3>Say Hello</h3>
                    <div class="divider"></div>
                    <p>Say hello to our team and ask anything you feel like. Our representative will call you in the moment time.</p>
                </div><!-- end section title -->

                <div class="general-form">
                <div id="message"></div>
                    <form id="contactform" action="contact.php" name="contactform" method="post">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <label>Enter your name <span>*</span></label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Name"> 
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <label>Enter your e-mail <span>*</span></label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="Email Address">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <label>Enter your website</label>
                            <input type="text" name="website" id="website" class="form-control" placeholder="Website"> 
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <label>Enter subject <span>*</span></label>
                            <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject">  
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <label>Message goes here <span>*</span></label>
                            <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Message"></textarea>
                            <button type="submit" value="SEND" id="submit" class="btn btn-lg btn-primary pull-right border-radius">GET A QUOTE</button>
                        </div>
                    </form>    
                </div><!-- end contact-form -->
            </div><!-- end container -->
        </section><!-- end section -->

  <?php include 'partials/footer.php'; ?>

       

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/retina.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.stellar.js"></script>
    <script src="js/home-scripts.js"></script>
    <!-- Map Scripts-->
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <!-- Google Map -->
    <script type="text/javascript">
        (function($) {
          "use strict";
            var locations = [
            ['<div class="infobox"><h3 class="title"><a href="about-1.html">OUR USA OFFICE</a></h3><span>NEW YORK CITY 2045 / 65</span><br>+90 555 666 77 88</p></div></div></div>', -37.801578, 145.060508, 2]
            ];
        
            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 15,
                scrollwheel: false,
                navigationControl: true,
                mapTypeControl: false,
                scaleControl: false,
                draggable: false,
                styles: [ { "stylers": [ { "hue": "#000" },  {saturation: -200},
                    {gamma: 0.50} ] } ],
                center: new google.maps.LatLng(-37.801578, 145.060508),
              mapTypeId: google.maps.MapTypeId.ROADMAP
            });
        
            var infowindow = new google.maps.InfoWindow();
        
            var marker, i;
        
            for (i = 0; i < locations.length; i++) {  
          
                marker = new google.maps.Marker({ 
                position: new google.maps.LatLng(locations[i][1], locations[i][2]), 
                map: map ,
                icon: 'images/marker.png'
                });
        
        
              google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                  infowindow.setContent(locations[i][0]);
                  infowindow.open(map, marker);
                }
              })(marker, i));
            }
        })(jQuery);
    </script>
    <script src="js/jigowatt.js"></script>

    

</body>
</html>