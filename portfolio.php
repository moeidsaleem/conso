<?php 
$page = 'Portfolio';
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

    <title>Conso IT | Building Digital Enterprises </title>

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


        <section class="page-white bgpatttern clearfix">
            <div class="section-title">
                
                <h3>ConsoIT Portfolio</h3>
                <p>A creative agency that builds awesome stuff all day, every day</p>
            </div><!-- end section title -->
        </section><!-- end section white -->

        <!-- page builer -->

        <section class="section-white clearfix">
            <div class="container">
            <nav class="portfolio-filter text-center">
                <ul>
                    <li><a class="active" href="#" data-filter="*"><span></span> All</a></li>
                    <li><a href="#" data-filter=".cat1">Web Design</a></li>
                    <li><a href="#" data-filter=".cat2">Graphic Design</a></li>
                    <li><a href="#" data-filter=".cat3">Photography</a></li>
                </ul>
            </nav>

            <div class="mixed-container masonry_wrapper row wow fadeInUp">

                <div class="item cat2">
                    <figure class="effect-chico">
                        <img src="images/portfolio/1.jpg" alt="" class="img-responsive">
                        <figcaption>
                            <h3><i class="fa fa-link"></i></h3>
                            <p>Graphic Design, Logos</p>
                            <a href="portfolio-single-one.html">View more</a>
                        </figcaption>           
                    </figure>
                </div>

                <div class="item cat3">
                    <figure class="effect-chico">
                        <img src="images/portfolio/2.jpg" alt="" class="img-responsive">
                        <figcaption>
                            <h3><i class="fa fa-link"></i></h3>
                            <p>Graphic Design, Logos</p>
                            <a href="#">View more</a>
                        </figcaption>           
                    </figure>
                </div>

                <div class="item cat1">
                    <figure class="effect-chico">
                        <img src="images/portfolio/3.png" alt="" class="img-responsive">
                        <figcaption>
                            <h3><i class="fa fa-link"></i></h3>
                            <p>Graphic Design, Logos</p>
                            <a href="#">View more</a>
                        </figcaption>           
                    </figure>
                </div>

                <div class="item cat3">
                    <figure class="effect-chico">
                        <img src="images/portfolio/4.jpg" alt="" class="img-responsive">
                        <figcaption>
                            <h3><i class="fa fa-link"></i></h3>
                            <p>Graphic Design, Logos</p>
                            <a href="#">View more</a>
                        </figcaption>           
                    </figure>
                </div>

                <div class="item cat1">
                    <figure class="effect-chico">
                        <img src="images/portfolio/5.jpg" alt="" class="img-responsive">
                        <figcaption>
                            <h3><i class="fa fa-link"></i></h3>
                            <p>Graphic Design, Logos</p>
                            <a href="#">View more</a>
                        </figcaption>           
                    </figure>
                </div>

                <div class="item cat2">
                    <figure class="effect-chico">
                        <img src="images/portfolio/6.jpg" alt="" class="img-responsive">
                        <figcaption>
                            <h3><i class="fa fa-link"></i></h3>
                            <p>Graphic Design, Logos</p>
                            <a href="#">View more</a>
                        </figcaption>           
                    </figure>
                </div>

                <div class="item cat3">
                    <figure class="effect-chico">
                        <img src="images/portfolio/7.png" alt="" class="img-responsive">
                        <figcaption>
                            <h3><i class="fa fa-link"></i></h3>
                            <p>Graphic Design, Logos</p>
                            <a href="#">View more</a>
                        </figcaption>           
                    </figure>
                </div>

                <div class="item cat1">
                    <figure class="effect-chico">
                        <img src="images/portfolio/8.png" alt="" class="img-responsive">
                        <figcaption>
                            <h3><i class="fa fa-link"></i></h3>
                            <p>Graphic Design, Logos</p>
                            <a href="#">View more</a>
                        </figcaption>           
                    </figure>
                </div>

                <div class="item cat3">
                    <figure class="effect-chico">
                        <img src="images/portfolio/9.jpg" alt="" class="img-responsive">
                        <figcaption>
                            <h3><i class="fa fa-link"></i></h3>
                            <p>Graphic Design, Logos</p>
                            <a href="#">View more</a>
                        </figcaption>           
                    </figure>
                </div>

            </div><!-- end masonry_wrapper -->

            <div class="clearfix portfolio-button text-center">
                <a href="contact.php" title="" class="btn btn-primary border-radius btn-lg">Hire Us</a>
            </div>
            </div>

        </section><!-- end section -->
 
        <!-- page builer -->

          
        <section class="social-section nopadding clearfix">
            <div class="row-fluid ">
                <div class="social col-md-3 col-sm-6 col-xs-6 social-facebook-bg ">
                    <a href="www.facebook.com/consoIT"><i class="fa fa-facebook fa-2x"></i></a>
                </div>
                <div class="social col-md-3 col-sm-6 col-xs-6 social-google-plus-bg">
                    <a href="www.plus.google.com/consoIT"><i class="fa fa-google-plus fa-2x"></i></a>
                </div>
                <div class="social col-md-3 col-sm-6 col-xs-6 social-dribbble-bg">
                    <a href="www.Dribbble.com/consoIT"><i class="fa fa-dribbble fa-2x"></i></a>
                </div>
                <div class="social col-md-3 col-sm-6 col-xs-6 social-twitter-bg">
                    <a href="www.twitter.com/consoIT"><i class="fa fa-twitter fa-2x"></i></a>
                </div>
            </div>
        </section><!-- end logos-section --> 

        <footer class="footer clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="widget wow fadeIn">
                            <div class="about-widget">
                                <img src="images/white-logo.png" alt="">
                                <p>Hello. We are a multi-disciplinary team working together to create awesome websites, realise brand identities, design for print and capture visual imagery through photography.</p>
                                <div class="social-icons">
                                    <span><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Facebook" href="#"><i class="fa fa-facebook"></i></a></span>
                                    <span><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Google Plus" href="#"><i class="fa fa-google-plus"></i></a></span>
                                    <span><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Twitter" href="#"><i class="fa fa-twitter"></i></a></span>
                                    <span><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Dribbble" href="#"><i class="fa fa-dribbble"></i></a></span>
                                    <span><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Pinterest" href="#"><i class="fa fa-pinterest"></i></a></span>
                                </div><!-- end social icons -->
                            </div><!-- end about-widget -->
                        </div><!-- end widget -->
                    </div><!-- end col-lg-3 -->

                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="widget wow fadeIn">
                            <div class="widget-title">
                                <h3>Our Links</h3>
                            </div><!-- end widget title -->
                            <div class="featured-widget">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <h3>Shan-e-Pakistan</h3>
                                            <span>Political Party</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <h3>Conso Building</h3>
                                            <span>A Construction Company</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tanga/index.html">
                                            <h3>Tanga Grill</h3>
                                            <span>Food Agency</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <h3>  Donate us</h3>
                                            <span>Click here to donate</span>
                                        </a>
                                    </li>
                                </ul>
                            </div><!-- end featured-widget -->
                        </div><!-- end widget -->
                    </div><!-- end col-lg-3 -->

                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="widget wow fadeIn">
                            <div class="widget-title">
                                <h3>Services</h3>
                            </div><!-- end widget title -->
                            <div class="featured-widget">
                                <ul>
                                    <li>
                                        <a href="service-webdevelopment.html">
                                            <h3>Web Development</h3>
                                            <span> Pixel perfect websites</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="servcice-mobiledevelopment.html">
                                            <h3>Mobile Development</h3>
                                            <span>Android / iOS / Windows</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="service-branding.html">
                                            <h3>Company Branding</h3>
                                            <span>Complete Package</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="service-graphicdesign.html">
                                            <h3>Graphic Desigining</h3>
                                            <span>logos / Packaging / Banners</span>
                                        </a>
                                    </li>
                                </ul>
                            </div><!-- end featured-widget -->
                        </div><!-- end widget -->
                    </div><!-- end col-lg-3 -->

                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="widget wow fadeIn">
                            <div class="widget-title">
                                <h3>Contact Info</h3>
                            </div><!-- end widget title -->
                            <div class="contact-widget">
                                <div class="map-bg"></div>
                                <ul>
                                    <li>
                                    <i class="fa fa-map-marker"></i>
                                    121 King Street, Melbourne Victoria United States of America
                                    </li>
                                    <li>
                                    <i class="fa fa-envelope-o"></i>
                                    info@consoIT.com
                                    </li>
                                    <li>
                                    <i class="fa fa-mobile-phone"></i>
                                    Phone: (1005) 5999 4446
                                    </li>
                                </ul>

                                <div class="subscribe-form">
                                   <form id="subscribe" name="subscribeform" method="post">
                                        <h4>Subscribe to our newsletter to receive Offers, We don't do spam</h4>
                                        <input type="text" name="comments_form_name" id="name_subscribe" class="form-control" placeholder="Enter your email address">
                                        <div class="clearfix button-wrapper pull-right">
                                            <a class="btn btn-primary border-radius" href="#">Subscribe</a>
                                        </div>
                                    </form>
                                </div><!-- end form -->
                            </div><!-- end contact-widget -->
                        </div><!-- end widget -->
                    </div><!-- end col-lg-3 -->

                </div><!-- end row -->
            </div><!-- end container -->
        </footer><!-- end footer -->

        <section class="copyrights text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h4>Copyrights © 2016 All Rights Reserved by ConsoIT LTD.</h4>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end conpyrights -->

       

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/retina.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.stellar.js"></script>
    <script src="js/home-scripts.js"></script>
    <!-- Portfolio -->
    <script src="js/jquery.isotope.min.js"></script>
    <!-- Carousel -->
    <script src="js/owl.carousel.js"></script>
    <script src="js/owl-scripts.js"></script>
    <!-- Bfassets Portfolio and Lightbox -->
    <script src="bfassets/js/jquery.bootFolio.js"></script>
    <script src="bfassets/js/jquery.prettyPhoto.js"></script>

    <script>
        (function ($) {
            var $container = $('.masonry_wrapper'),
                colWidth = function () {
                    var w = $container.width(), 
                        columnNum = 1,
                        columnWidth = 0;
                    if (w > 1200) {
                        columnNum  = 3;
                    } else if (w > 900) {
                        columnNum  = 3;
                    } else if (w > 600) {
                        columnNum  = 2;
                    } else if (w > 300) {
                        columnNum  = 1;
                    }
                    columnWidth = Math.floor(w/columnNum);
                    $container.find('.item').each(function() {
                        var $item = $(this),
                            multiplier_w = $item.attr('class').match(/item-w(\d)/),
                            multiplier_h = $item.attr('class').match(/item-h(\d)/),
                            width = multiplier_w ? columnWidth*multiplier_w[1]-4 : columnWidth-4,
                            height = multiplier_h ? columnWidth*multiplier_h[1]*0.5-4 : columnWidth*0.5-4;
                        $item.css({
                            width: width,
                            height: height
                        });
                    });
                    return columnWidth;
                }
                            
                function refreshWaypoints() {
                    setTimeout(function() {
                    }, 1000);   
                }
                            
                $('nav.portfolio-filter ul a').on('click', function() {
                    var selector = $(this).attr('data-filter');
                    $container.isotope({ filter: selector }, refreshWaypoints());
                    $('nav.portfolio-filter ul a').removeClass('active');
                    $(this).addClass('active');
                    return false;
                });
                    
                function setPortfolio() { 
                    setColumns();
                    $container.isotope('reLayout');
                }
        
                isotope = function () {
                    $container.isotope({
                        resizable: true,
                        itemSelector: '.item',
                        masonry: {
                            columnWidth: colWidth(),
                            gutterWidth: 0
                        }
                    });
                };
            isotope();
            $(window).smartresize(isotope);
        }(jQuery));
    </script>
    
    

</body>
</html>