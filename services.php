<?php 
$page = 'Services';
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

    <title>Conso IT | <?php echo $title;?> </title>

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

        <section class="section-white clearfix" style="background-color: rgba(92,201,232,0.10);">
            <div class="section-title">
                <h3>Our Matchless Services</h3>
                <div class="divider"></div>
                <div class="container">
                <p>Our services are helmed by notable industry masters, that's why each service justifies itself with real evidence. We feel pleased that our workers appreciate every moment of their work in giving front line services to the local and foreign clients.</p>
                </div>
            </div><!-- end section title -->

            <div class="container" >
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12 border-boxed wow fadeIn">
                        <div class="service-hover">
                            <div class="front">
                                <i class="myicon-laptop"></i>
                                <h3>Web Design & Development</h3>
                            </div><!-- end front -->
                            <div class="back">
                                <i class="myicon-laptop"></i>
                                <h3>Web Designing</h3>
                                <p class="small" > Interactive Pixel Perfect Web Designs.</p>
                                <a href="service-webdesign.php" title="Web Design" class="btn btn-primary border-radius">Read More</a>
                            </div><!-- end back -->
                        </div><!-- end service-hover -->
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 border-boxed wow fadeIn">
                        <div class="service-hover">
                            <div class="front">
                                <i class="myicon-paintbrush"></i>
                                <h3>Printing & Publishing</h3>
                            </div><!-- end front -->
                            <div class="back">
                                <i class="myicon-strategy"></i>
                                <h3>Printing & Publishing</h3>
                                <p>Complete Product/Brand Promotion.</p>
                                <a href="service-branding.html" title="" class="btn btn-primary border-radius">Read More</a>
                            </div><!-- end back -->
                        </div><!-- end service-hover -->
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 border-boxed wow fadeIn">
                        <div class="service-hover">
                            <div class="front">
                                <i class="myicon-pencil"></i>
                                <h3>Graphic Designing</h3>
                            </div><!-- end front -->
                            <div class="back">
                                <i class="myicon-pencil"></i>
                                <h3>Graphic Designing</h3>
                                <p>design solution that really meet your expectations..</p>
                                <a href="service-graphicdesign.html" title="" class="btn btn-primary border-radius">Read More</a>
                            </div><!-- end back -->
                        </div><!-- end service-hover -->
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 border-boxed wow fadeIn">
                        <div class="service-hover">
                            <div class="front">
                                <i class="myicon-browser"></i>
                                <h3>Enterprise Development</h3>
                            </div><!-- end front -->
                            <div class="back">
                                <i class="myicon-browser"></i>
                                <h3>Web Development</h3>
                                <p>Business applications to meet Enterprise demand.</p>
                                <a href="service-webdevelopment.html" title="" class="btn btn-primary border-radius">Read More</a>
                            </div><!-- end back -->
                        </div><!-- end service-hover -->
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 border-boxed wow fadeIn">
                        <div class="service-hover">
                            <div class="front">
                                <i class="myicon-mobile"></i>
                                <h3>Mobile Development</h3>
                            </div><!-- end front -->
                            <div class="back">
                                <i class="myicon-mobile"></i>
                                <h3>Mobile App Development</h3>
                                <p>From Android to iOS and Windows including Hybrid app development.</p>
                                <a href="service-mobiledevelopment.html" title="" class="btn btn-primary border-radius">Read More</a>
                            </div><!-- end back -->
                        </div><!-- end service-hover -->
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 border-boxed wow fadeIn">
                        <div class="service-hover">
                            <div class="front">
                                <i class="myicon-chat"></i>
                                <h3>Support</h3>
                            </div><!-- end front -->
                            <div class="back">
                                <i class="myicon-chat"></i>
                                <h3>Help & Desk</h3>
                                <p>24 / 7 lifetime support for all our service and products.</p>
                                <a href="service-helpdesk.html" title="" class="btn btn-primary border-radius">Read More</a>
                            </div><!-- end back -->
                        </div><!-- end service-hover -->
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section white -->

        <section class="section-white nopadding clearfix">
            <div class="row-fluid">
                <div class="col-md-4 col-sm-4 col-xs-12 color-purple boxed">
                    <div class="widget">
                    <span class="icon-container border-radius wow fadeIn">1</span>
                    <h3>PLAN</h3>
                    <p>We spend a great deal of time considering organizational solutions for every piece of information learned.      </p>
                    </div>
                </div><!-- end col -->

                <div class="col-md-4 col-sm-4 col-xs-12 color-blue boxed">
                    <div class="widget">
                    <span class="icon-container border-radius wow fadeIn">2</span>
                    <h3>EXCUTE</h3>
                    <p>Development cycle is executed under time frame and modules are developed, compiled and executed all together. </p>
                    </div>
                </div><!-- end col -->

                <div class="col-md-4 col-sm-4 col-xs-12 color-green boxed">
                    <div class="widget">
                    <span class="icon-container border-radius wow fadeIn">3</span>
                    <h3>DELIVER</h3>
                    <p>After complete unit-testing of the system, It is then deployed on tp the Client server and project is finally delivered. </p>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </section><!-- end section white -->


        <section class="full-image-section clearfix">
            <div class="row-fluid">
                <div class="pull-left image-container col-md-5 col-md-offset-0 col-sm-4 clearfix">
                    <div class="background-image-wrapper wow slideInUp section-padding">
                        <img class="background-image" alt="" src="demos/service-web.png">
                    </div><br><br>
                </div>
                <div class="container">
                    <div class="row-fluid">
                        <div id="first-slider" class="carousel-right-side">
                            <div class="owl-item">
                                <div class="section-content text-wrapper col-md-6 col-md-offset-6 col-sm-12 col-sm-offset-0 clearfix">
                                    <div class="section-title text-left">
                                        <h3>Your sucess is in our hand!</h3>
                                        <p>We develop solutions that meet the most challenging business related problem statement of our clients. We ensure that we develop the right software application results and desired outcomes by comprehending your needs and then aligning those needs with the relevant outcomes; we then guarantee that we deliver these outcomes.
                                        Our software development consists of four steps </p>

                                         <p>We proud to have skillful team of developers in Magento eCommerce, OpenCart E-commerce, Prestashop WooCommerce development, installation and setup, training, theme development and implementation.
                                         We have expertise in developing economical e-commerce solutions, shopping cart for online e-commerce store smart, trendy and use friendly solutions and Custom e-commerce solutions based on your needs. 
                                        We design, develop maintain and host any website solutions for our clients.</p>

                             <p>You share your requirements with us.
                            Our business analyst will gather necessary & sufficient information which will be converted into organized technical documents.
                            Our developers will start working on the provided documents which will be based on your shared information.
                            The product is developed and deployed on your machine after which our testing process will be started.</p>
                                        <a href="contact.php" class="btn btn-primary border-radius btn-lg">Contact us</a> 
                                    </div><!-- end section title -->
                                </div><!-- end col -->
                            </div><!-- end owl-item -->
                            <div class="owl-item">
                                <div class="section-content text-wrapper col-md-6 col-md-offset-6 col-sm-12 col-sm-offset-0 clearfix">

                                   
                                </div><!-- end col -->
                            </div><!-- end owl-item -->
                        </div><!-- end owl -->
                    </div><!-- edn row -->
                </div><!-- end container -->
            </div><!-- end row -->
        </section><!-- end section white -->

        <section class="full-image-section clearfix">
            <div class="row-fluid">
                <div class="pull-left image-container col-md-5 col-md-offset-0 col-sm-4 clearfix">
                    <div class="background-image-wrapper wow slideInUp section-padding">
                        <img class="background-image" alt="" src="demos/about_05.jpg">
                    </div><br><br>
                </div>

       
            </div><!-- end row -->
        </section><!-- end section white -->
        
          
  <?php include 'partials/footer.php'; ?>


    
<!-- Atrix Footer -->
<section  class="clearfix">
<div  style="position: relative;bottom: 0px;" >
<div class="user-bar" id="user-bar">
          <span class="user-bar-text-right">All rights Reserved.</span>
           <span class="user-bar-text-left">Atrix Digital Solutions</span>
  
           </div>
    


</div>

    </section>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/retina.js"></script>
    <script src="js/text-rotate.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.stellar.js"></script>
    <script src="js/home-scripts.js"></script>
    <!-- Portfolio -->
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/portfolio_01.js"></script>
    <!-- Carousel -->
    <script src="js/owl.carousel.js"></script>
    <script src="js/owl-scripts.js"></script>
    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>   
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('.tp-banner').show().revolution({
                dottedOverlay:"none",
                delay:9000,
                startwidth:1170,
                startheight:700,
                hideThumbs:200,
                thumbWidth:100,
                thumbHeight:50,
                thumbAmount:4,
                simplifyAll:"off",
                navigationType:"bullet",
                navigationArrows:"solo",
                navigationStyle:"preview4",
                touchenabled:"on",
                onHoverStop:"off",
                nextSlideOnWindowFocus:"off",
                swipe_threshold: 0.7,
                swipe_min_touches: 1,
                drag_block_vertical: false,                        
                keyboardNavigation:"off",
                navigationHAlign:"center",
                navigationVAlign:"bottom",
                navigationHOffset:0,
                navigationVOffset:20,
                soloArrowLeftHalign:"left",
                soloArrowLeftValign:"center",
                soloArrowLeftHOffset:20,
                soloArrowLeftVOffset:0,
                soloArrowRightHalign:"right",
                soloArrowRightValign:"center",
                soloArrowRightHOffset:20,
                soloArrowRightVOffset:0,
                shadow:0,
                fullWidth:"off",
                fullScreen:"off",
                spinner:"spinner0",
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,
                shuffle:"off",
                forceFullWidth:"off",
                fullScreenAlignForce:"off",
                minFullScreenHeight:"400",
                hideThumbsOnMobile:"off",
                hideNavDelayOnMobile:1500,
                hideBulletsOnMobile:"off",
                hideArrowsOnMobile:"off",
                hideThumbsUnderResolution:0,
                fullScreenOffsetContainer: ".header",
                fullScreenOffset: "",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                startWithSlide:0
            });                                 
        }); /*ready*/
    </script>
<?php require 'partials/js.php'; ?>


    

    <br>
</body>
</html>