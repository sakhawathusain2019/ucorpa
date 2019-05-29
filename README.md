# ucorpa
This is a Wordpress Multipurpus Theme.
<h2 style='color:red;'>Overview</h2>
<p>Ucorpa is a Online corporet Multipurpus Wordpress Theme. There are theme a Very Funcality . One click Demo Install. Revulution Slider. Portfolio,Service,Team,etc</p>
<h3>Developer Documents</h3>
1. header code preview
<pre>
<code>
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
                                    <?php ucorpa_nav_menu();?>
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


</code>
</pre>
<h3>Wordpress Menu Function</h3>
<pre>
<code>
register_nav_menus( array(
	'main-menu' => esc_html__( 'Primary', 'ucorpa' ),
) );

function ucorpa_nav_menu(){
    wp_nav_menu(array(
          'theme_location' => 'main-menu',
          'container' => 'ul',
          'menu_class' => 'nav mobile-menu navbar-nav',
          'menu_id' => 'nav',
    ));
}
</code>
</pre>

<h3>Wordpress Default Menu Class Change Or Any Class Change</h3>
<pre>
<code>
function change_submenu_class($menu) {  
  $menu = preg_replace('/ class="sub-menu"/','/ class="myclass" /',$menu);  
  return $menu;  
}  
add_filter('wp_nav_menu','change_submenu_class');  
</code>
</pre>
