<section class="section-white clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12 square-service">
                        <div class="widget">
                        <span class="icon-container border-radius color-gray wow fadeIn"><i class="fa fa-map-marker"></i></span>
                        <h3>Address</h3>
                        <p><?php echo $address; ?></p>
                        </div>
                    </div><!-- end col -->

                    <div class="col-md-4 col-sm-4 col-xs-12 square-service">
                        <div class="widget">
                        <span class="icon-container border-radius color-gray wow fadeIn"><i class="fa fa-phone"></i></span>
                        <h3>Phone Number</h3>
                        <p>Phone: <?php echo $phone; ?><br>Fax: <?php echo $fax; ?></p>
                        </div>
                    </div><!-- end col -->

                    <div class="col-md-4 col-sm-4 col-xs-12 square-service">
                        <div class="widget">
                        <span class="icon-container border-radius color-gray wow fadeIn"><i class="fa fa-envelope-o"></i></span>
                        <h3>E-Mail</h3>
                        <p><?php 
                        echo $email;
                        echo "<br>".$email_t;
                        echo "<br>".$email_m; ?> </p>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
                </div>
                </section>