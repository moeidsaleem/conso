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
                                    <span><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Facebook" href="https://facebook.com/consoIT"><i class="fa fa-facebook"></i></a></span>
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
                                        <a href="about.php">
                                            <h3>About us</h3>
                                            <span>ConsoIT</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="team.php">
                                            <h3>Team</h3>
                                            <span>meet the team</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Portfolio.php">
                                            <h3>Portfolio</h3>
                                            <span>See our work!</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="contact.php">
                                            <h3>Contact us</h3>
                                            <span>Get a free Quote</span>
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
                                        <a href="service-webdevelopment.php">
                                            <h3>Web Development</h3>
                                            <span> Pixel perfect websites</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="servcice-mobiledevelopment.php">
                                            <h3>Mobile Development</h3>
                                            <span>Android / iOS / Windows</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="service-branding.php">
                                            <h3>Company Branding</h3>
                                            <span>Complete Package</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="service-graphicdesign.php">
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
                                    <li style="color:white;">
                                    <i class="fa fa-map-marker"></i>
                                    <?php echo $address; ?>
                                    </li>
                                    <li style="color:white;">
                                    <i class="fa fa-envelope-o"></i>
                                    Email:  <?php echo $email; ?>

                                    </li>
                                    <li style="color:white;">
                                    <i class="fa fa-mobile-phone"></i>
                                    Phone: <?php echo $phone; ?>
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
                        <h4>Copyright©  CONSO Pvt Ltd 2016 . Powered by 
                        <span style="font-family: steinerlight">Atrix Digital Solutions©</span></h4>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end conpyrights -->
