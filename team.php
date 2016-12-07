<?php 
$page = 'Team';
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

    <title>Conso IT | Team </title>

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
                <div class="breadcrumb-container">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Team Members</li>
                    </ul>
                </div>
                <h3>Team 1</h3>
                <p>A creative agency that builds awesome stuff all day, every day</p>
            </div><!-- end section title -->
        </section><!-- end section white -->

        <!-- page builer -->

        <section class="section-white clearfix">
            <div class="section-title">
                <h3>Team Members</h3>
                <div class="divider"></div>
                <p>Curabitur eu adipiscing lacus, a iaculis diam. Nullam placerat blandit auctor. Nulla accumsan ipsum et nibh rhoncus, eget tempus sapien<br> ultricies. Donec mollis lorem vehicula.</p>
            </div><!-- end section title -->
            <!-- bootFolio content  --> 
            <div id="second" class="container bf">
                <!-- bootFolio category filter -->
                <ul class="filter">
                    <li><a data-cat="all" href="#" class="active">All</a></li>
                    <li><a class="yellow-color" data-cat="cat1" href="#">Photographers</a></li>
                    <li><a class="purple-color" data-cat="cat2" href="#">PSD Designer</a></li>
                    <li><a class="green-color" data-cat="cat3" href="#">Graphic Design</a></li>
                </ul>
                <!-- bootFolio category filter -->

                <!-- bootFolio Items -->
                <ul id="team-portfolio" class="items row-fluid">
                    <!-- single item -->
                    <li class="cat1">
                        <div class="bf-single-item">
                            <img src="demos/team_01.jpg" alt="">
                            <div class="caption yellow-bg">
                                <div class="cap-in">
                                    <a href="#" title=""><span class="bubble border-radius"><i class="fa fa-facebook"></i></span></a>
                                    <a href="#" title=""><span class="bubble border-radius"><i class="fa fa-twitter"></i></span></a>
                                    <a href="#" title=""><span class="bubble border-radius"><i class="fa fa-google-plus"></i></span></a>
                                    <div class="caps-desc">
                                        <h3><a href="#" title="">John DOE</a></h3>
                                        <p>Photographers</p>
                                    </div><!-- end caps -->
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- single item -->  
                    <li class="cat2">
                        <div class="bf-single-item">
                            <img src="demos/team_02.jpg" alt="">
                            <div class="caption purple-bg">
                                <div class="cap-in">
                                    <a href="#" title=""><span class="bubble border-radius"><i class="fa fa-facebook"></i></span></a>
                                    <a href="#" title=""><span class="bubble border-radius"><i class="fa fa-twitter"></i></span></a>
                                    <a href="#" title=""><span class="bubble border-radius"><i class="fa fa-google-plus"></i></span></a>
                                    <div class="caps-desc">
                                        <h3><a href="#" title="">Jenny DOE</a></h3>
                                        <p>PSD Designer</p>
                                    </div><!-- end caps -->
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- single item -->  
                    <li class="cat3">
                        <div class="bf-single-item">
                            <img src="demos/team_03.jpg" alt="">
                            <div class="caption green-bg">
                                <div class="cap-in">
                                    <a href="#" title=""><span class="bubble border-radius"><i class="fa fa-facebook"></i></span></a>
                                    <a href="#" title=""><span class="bubble border-radius"><i class="fa fa-twitter"></i></span></a>
                                    <a href="#" title=""><span class="bubble border-radius"><i class="fa fa-google-plus"></i></span></a>
                                    <div class="caps-desc">
                                        <h3><a href="#" title="">John DOE</a></h3>
                                        <p>PSD Designer</p>
                                    </div><!-- end caps -->
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- single item -->
                    <li class="cat1">
                        <div class="bf-single-item">
                            <img src="demos/team_04.jpg" alt="">
                            <div class="caption yellow-bg">
                                <div class="cap-in">
                                    <a href="#" title=""><span class="bubble border-radius"><i class="fa fa-facebook"></i></span></a>
                                    <a href="#" title=""><span class="bubble border-radius"><i class="fa fa-twitter"></i></span></a>
                                    <a href="#" title=""><span class="bubble border-radius"><i class="fa fa-google-plus"></i></span></a>
                                    <div class="caps-desc">
                                        <h3><a href="#" title="">John DOE</a></h3>
                                        <p>Photographers</p>
                                    </div><!-- end caps -->
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- single item -->  
                    <li class="cat2">
                        <div class="bf-single-item">
                            <img src="demos/team_05.jpg" alt="">
                            <div class="caption purple-bg">
                                <div class="cap-in">
                                    <a href="#" title=""><span class="bubble border-radius"><i class="fa fa-facebook"></i></span></a>
                                    <a href="#" title=""><span class="bubble border-radius"><i class="fa fa-twitter"></i></span></a>
                                    <a href="#" title=""><span class="bubble border-radius"><i class="fa fa-google-plus"></i></span></a>
                                    <div class="caps-desc">
                                        <h3><a href="#" title="">Jenny DOE</a></h3>
                                        <p>PSD Designer</p>
                                    </div><!-- end caps -->
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- single item -->  
                    <li class="cat3">
                        <div class="bf-single-item">
                            <img src="demos/team_06.jpg" alt="">
                            <div class="caption green-bg">
                                <div class="cap-in">
                                    <a href="#" title=""><span class="bubble border-radius"><i class="fa fa-facebook"></i></span></a>
                                    <a href="#" title=""><span class="bubble border-radius"><i class="fa fa-twitter"></i></span></a>
                                    <a href="#" title=""><span class="bubble border-radius"><i class="fa fa-google-plus"></i></span></a>
                                    <div class="caps-desc">
                                        <h3><a href="#" title="">John DOE</a></h3>
                                        <p>PSD Designer</p>
                                    </div><!-- end caps -->
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- single item -->
                    <li class="cat1">
                        <div class="bf-single-item">
                            <img src="demos/team_07.jpg" alt="">
                            <div class="caption yellow-bg">
                                <div class="cap-in">
                                    <a href="#" title=""><span class="bubble border-radius"><i class="fa fa-facebook"></i></span></a>
                                    <a href="#" title=""><span class="bubble border-radius"><i class="fa fa-twitter"></i></span></a>
                                    <a href="#" title=""><span class="bubble border-radius"><i class="fa fa-google-plus"></i></span></a>
                                    <div class="caps-desc">
                                        <h3><a href="#" title="">John DOE</a></h3>
                                        <p>Photographers</p>
                                    </div><!-- end caps -->
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- single item -->  
                    <li class="cat2">
                        <div class="bf-single-item">
                            <img src="demos/team_08.jpg" alt="">
                            <div class="caption purple-bg">
                                <div class="cap-in">
                                    <a href="#" title=""><span class="bubble border-radius"><i class="fa fa-facebook"></i></span></a>
                                    <a href="#" title=""><span class="bubble border-radius"><i class="fa fa-twitter"></i></span></a>
                                    <a href="#" title=""><span class="bubble border-radius"><i class="fa fa-google-plus"></i></span></a>
                                    <div class="caps-desc">
                                        <h3><a href="#" title="">Jenny DOE</a></h3>
                                        <p>PSD Designer</p>
                                    </div><!-- end caps -->
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- single item -->  
                    <li class="cat3">
                        <div class="bf-single-item">
                            <img src="demos/team_09.jpg" alt="">
                            <div class="caption green-bg">
                                <div class="cap-in">
                                    <a href="#" title=""><span class="bubble border-radius"><i class="fa fa-facebook"></i></span></a>
                                    <a href="#" title=""><span class="bubble border-radius"><i class="fa fa-twitter"></i></span></a>
                                    <a href="#" title=""><span class="bubble border-radius"><i class="fa fa-google-plus"></i></span></a>
                                    <div class="caps-desc">
                                        <h3><a href="#" title="">John DOE</a></h3>
                                        <p>PSD Designer</p>
                                    </div><!-- end caps -->
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- single item -->  
                    <li class="cat1">
                        <div class="bf-single-item">
                            <img src="demos/team_10.jpg" alt="">
                            <div class="caption yellow-bg">
                                <div class="cap-in">
                                    <a href="#" title=""><span class="bubble border-radius"><i class="fa fa-facebook"></i></span></a>
                                    <a href="#" title=""><span class="bubble border-radius"><i class="fa fa-twitter"></i></span></a>
                                    <a href="#" title=""><span class="bubble border-radius"><i class="fa fa-google-plus"></i></span></a>
                                    <div class="caps-desc">
                                        <h3><a href="#" title="">John DOE</a></h3>
                                        <p>PSD Designer</p>
                                    </div><!-- end caps -->
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- single item -->  
                    <li class="cat1">
                        <div class="bf-single-item">
                            <img src="demos/team_11.jpg" alt="">
                            <div class="caption yellow-bg">
                                <div class="cap-in">
                                    <a href="#" title=""><span class="bubble border-radius"><i class="fa fa-facebook"></i></span></a>
                                    <a href="#" title=""><span class="bubble border-radius"><i class="fa fa-twitter"></i></span></a>
                                    <a href="#" title=""><span class="bubble border-radius"><i class="fa fa-google-plus"></i></span></a>
                                    <div class="caps-desc">
                                        <h3><a href="#" title="">John DOE</a></h3>
                                        <p>PSD Designer</p>
                                    </div><!-- end caps -->
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- single item -->  
                    <li class="cat2">
                        <div class="bf-single-item">
                            <img src="demos/team_12.jpg" alt="">
                            <div class="caption purple-bg">
                                <div class="cap-in">
                                    <a href="#" title=""><span class="bubble border-radius"><i class="fa fa-facebook"></i></span></a>
                                    <a href="#" title=""><span class="bubble border-radius"><i class="fa fa-twitter"></i></span></a>
                                    <a href="#" title=""><span class="bubble border-radius"><i class="fa fa-google-plus"></i></span></a>
                                    <div class="caps-desc">
                                        <h3><a href="#" title="">John DOE</a></h3>
                                        <p>PSD Designer</p>
                                    </div><!-- end caps -->
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- single item -->  
                </ul>
            </div>
            <!-- //bootFolio content -->
            <div class="clearfix portfolio-button text-center">
                <a href="portfolio-classic-with-two-rs.html" title="" class="btn btn-primary border-radius btn-lg">View all Items</a>
            </div>

        </section><!-- end section white -->

        <section id="parallax-three" class="section-parallax" data-stellar-background-ratio="0.1" data-stellar-vertical-offset="">
            <div class="container">
                <div class="row">      
                    <div class="col-md-3 col-sm-6 col-xs-12">     
                        <div class="milestone">
                            <span class="stat-count">1876</span>
                            <div class="milestone-details"><h4>Clients Working</h4></div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-md-3 col-sm-6 col-xs-12">     
                        <div class="milestone">
                            <span class="stat-count">176</span>
                            <div class="milestone-details"><h4>Cups of Coffee</h4></div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-md-3 col-sm-6 col-xs-12">     
                        <div class="milestone">
                            <span class="stat-count">2000</span>
                            <div class="milestone-details"><h4>Projects Completed</h4></div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-md-3 col-sm-6 col-xs-12">     
                        <div class="milestone">
                            <span class="stat-count">176</span>
                            <div class="milestone-details"><h4>Photos Taken</h4></div>
                        </div>
                    </div><!-- end col -->
                </div>
            </div>
        </section><!-- end section white -->

<?php include 'partials/footer.php';  ?>

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
    <script src="js/portfolio_01.js"></script>
    <!-- Carousel -->
    <script src="js/owl.carousel.js"></script>
    <script src="js/owl-scripts.js"></script>
    <!-- Bfassets Portfolio and Lightbox -->
    <script src="bfassets/js/jquery.bootFolio.js"></script>
    <script src="bfassets/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript">
    $(document) .ready(function () {
        $("#second").bootFolio({
            bfLayout: "bflayhover",
            bfFullWidth:"box", 
            bfHover: "bfhover2",
            bfAnimation: "scale",
            bfSpace: "space",
            bfAniDuration: 500,
            bfCaptioncolor: "#03acdc",
            bfTextcolor:"#ffffff",
            bfTextalign:"center",
            bfNavalign:"center"
        });
        $("a[rel^='prettyPhoto']").prettyPhoto();
        });
    </script>    <!-- Carousel -->
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

    

</body>
</html>