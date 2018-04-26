<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lapizzeria
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    
<!--    Bootstrap CSS-->
    <link href="<?php  bloginfo('stylesheet_directory'); ?>/assets/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
<!--    FONT AWESOME CSS-->
    <link href="<?php  bloginfo('stylesheet_directory'); ?>/assets/fontawesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!--    Fluidbox CSS-->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/fluidbox/css/fluidbox.min.css" rel="stylesheet" type="text/css">
<!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lapizzeria' ); ?></a>
    <div id="upper-header">
        <img src="<?php echo bloginfo('stylesheet_directory'); ?>/assets/img/logo.svg" class="header-logo">
        <div id="header-contacts">
            <div class="social-buttons">
                <ul class="list-unstyled clearfix">
                    <li><a href="www.facebook.com/christiandyc"><i class='fa fa-facebook'></i></a></li>
                    <li><a href="www.gmail.com"><i class='fa fa-envelope'></i></a></li>
                    <li><a href="www.twitter.com/@cmddyc"><i class='fa fa-twitter'></i></a></li>
                    <li><a href="plus.google.com"><i class='fa fa-google-plus'></i></a></li>
                </ul>
            </div>
            <div class="addresses">
                <p>Blk7 Lot 13 Somewhere St.Diamond Heights, Lipa City</p>
                <p>Contact Number: 09281239999</p>
            </div>
        </div>
    </div>
	<header class="site-header" role="banner">
        <nav class="navbar navbar-default">
          <div class="container main-toggle-nav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span id="toggle-menu">Menu</span>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <?php
                 wp_nav_menu(array(
                    'theme_location'	=> 'primary',
                    'container'		    => 'nav',
                    'container_class'	=> 'navbar-collapse collapse',
                    'container_id'	    => 'navbar-menu',
                    'menu_class'		=> 'nav navbar-nav'
                  ));
            ?>

          </div><!-- /.container -->
        </nav>
    </header>

	<div id="content" class="site-content">
        
        
