
        <header id="header-one" class="header border-bg">
            <div class="container-fluid sticky">
                <div class="menu-wrapper">
                    <nav id="navigation" class="navbar yamm" role="navigation">
                        <div class="navbar-inner">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <i class="fa fa-bars fa-2x"></i>
                                </button>
                                <a id="brand" class="clearfix navbar-brand" href="index.php"><img src="demos/logo-1.png" width="280px" height="60px" alt="Creativ"></a>
                            </div><!-- end navbar-header -->
                            <div id="navbar-collapse" class="navbar-right navbar-collapse collapse clearfix">
                                <ul class="nav navbar-nav">
                                    <li class="dropdown wps-half"><a href="index.php" 
                                    <?php echo ($page == 'Home') ? "class='active'" : ""    ; ?>  >Home</a></li>
                                        <li class="dropdown wps-ful l">
                                        <a href="services.php" 
                                         <?php echo ($page == 'Services') ? "class='active'" : ""; ?> >Services</a></li><!-- end mega menu --> 
                                        <li class="dropdown"><a href="portfolio.php" 
                                        <?php echo ($page == 'Portfolio') ? "class='active'" : ""; ?> >Portfolio</a>  </li>
                                        <li ><a href="career.php"  
                                        <?php echo ($page == 'Career') ?"class='active'" : ""; ?> >Career</a></li>  
                                        <li class="dropdown wps-full"><a href="about.php"  
                                         <?php echo ($page == 'About us') ? "class='active'" : ""; ?> >About us</a></li>

                                      
                                    <li><a href="contact.php"  
                                    <?php echo ($page == 'Contact us') ? "class='active'" : ""; ?> >Contact us</a></li>
                                   
                                </ul><!-- end navbar-right -->
                                <div class="pull-right clearfix">
                                    <div class="right-menu">
                                        <span><a title="Search" href="#" id="filter-menu" class="nav-toggle" data-toggle="collapse" data-target="#collapse1"><i class="fa fa-search"></i></a></span>
                                    </div><!-- end custom-menu --> 
                                </div><!-- end widget -->
                            </div><!-- end navbar-callopse -->
                        </div><!-- end navbar-inner -->
                    </nav><!-- end navigation -->
                </div><!-- menu wrapper -->
                <div class="shadow"></div>
            </div>
        </header><!-- end header -->