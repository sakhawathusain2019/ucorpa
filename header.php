<!doctype html>
    <html class="no-js" <?php language_attributes(); ?>>
    <head>
            <!-- meta tags -->
            <meta charset="<?php bloginfo('charset');?>">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="keywords" content="site keywords here"/>
            <meta name="description" content="">
            <meta name='copyright' content='ucorpa'>


            <!-- favicon -->
            <link rel="icon" type="image/png" href="img/favicon.png">

            <!-- web font -->
            <link href="https://fonts.googleapis.com/css?family=poppins:300,400,500,600,700,800,900" rel="stylesheet">
            <?php wp_head();?>
        </head>
        <body <?php body_class();?>>

        <!-- preloader -->
        <div class="preeloader">
            <div class="preloader-spinner"></div>
        </div>
        <!-- end preloader -->

        <!-- header area -->
        <header class="header">
            <!-- topbar -->
            <div class="topbar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-top">
                                <p><i class="fab fa-bandcamp"></i>welcome to ucorpa company!</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-top text-center">
                                <p><a href="mailto:info@yourwebsite.com"><i class="far fa-envelope-open"></i>info@yourwebsite.com</a></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-top text-right">
                                <p><i class="fas fa-map-marker-alt"></i>ka-62/1, duck, united states</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end topbar -->
            <!-- middle header -->
            <div class="middle-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <!-- logo -->
                            <div class="logo">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="img/logo.png" alt="logo.png"></a>
                            </div>
                            <!--/ end logo -->
                            <div class="mobile-nav"></div>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="widget-main">
                                <!-- single widget -->
                                <div class="single-widget">
                                    <i class="fas fa-headphones"></i>
                                    <p>call us anytime</p>
                                    <h4>+880123-467-789</h4>
                                </div>
                                <!--/ end single widget -->
                                <!-- single widget -->
                                <div class="single-widget">
                                    <i class="fas fa-stopwatch"></i>
                                    <p>opeening time</p>
                                    <h4>mon-sat: 9.00-18.00</h4>
                                </div>
                                <!--/ end single widget -->
                                <!-- single widget -->
                                <div class="single-widget button">
                                    <a href="#" class="btn">get a quote</a>
                                </div>
                                <!--/ end single widget -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end middle header -->
            <!-- header inner -->
            <div class="main-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <nav class="navbar navbar-default">
                                <div class="collapse navbar-collapse">
                                    <ul id="nav" class="nav mobile-menu navbar-nav">
                                        <li class="current"><a href="index-2.html">home</a>
                                            <ul class="dropdown">
                                                <li><a href="index-2.html">homepage default</a></li>
                                                <li><a href="index2.html">homepage animation</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">pages</a>
                                            <ul class="dropdown">
                                                <li><a href="pricing.html">our pricing</a></li>
                                                <li><a href="testimonials.html">testimonials</a></li>
                                                <li><a href="team.html">our team</a></li>
                                                <li><a href="mail-success.html">email success</a></li>
                                                <li><a href="404.html">error page</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about.html">about us</a></li>
                                        <li><a href="services.html">services</a></li>
                                        <li><a href="#">portfolio</a>
                                            <ul class="dropdown">
                                                <li><a href="portfolio.html">portfolio</a></li>
                                                <li><a href="portfolio-single.html">portfolio single</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">blog & news</a>
                                            <ul class="dropdown">
                                                <li><a href="blog-grid.html">blog grid</a></li>
                                                <li><a href="blog.html">blog grid sidebar</a></li>
                                                <li><a href="blog-list.html">blog list</a></li>
                                                <li><a href="blog-list-sidebar.html">blog list sidebar</a></li>
                                                <li><a href="blog-single-full.html">blog single</a></li>
                                                <li><a href="blog-single.html">blog single sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">contact us</a></li>
                                    </ul>
                                    <div class="right-bar">
                                        <!-- search form -->
                                        <div class="search-top">
                                            <div class="search"><a href="#"><i class="fa fa-search"></i></a></div>
                                            <form class="search-form">
                                                <input type="text" placeholder="search" name="search">
                                                <button value="search" type="submit"><i class="fas fa-search"></i></button>
                                            </form>
                                        </div>
                                        <!--/ end search form -->
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ end header inner -->
        </header>
        <!-- end header area -->

