<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package landscape
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> ng-app="alice-landscape">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" conlandscapet="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_directory'); ?>/css/theme.css" rel="stylesheet" type="text/css" />
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<nav class="navbar main-navigation">
         <div class="navbar-header">
              <button type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" class="navbar-toggle collapsed">
                   <span class="sr-only">Toggle navigation</span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
              </button>
              <!--  <div class="navbar-brand">Brand</div> -->
         </div>
         <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
             <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>    
         </div>
    </nav>
	<div class="main-area">
	<div id="masthead" class="site-header" role="banner">
		<div id="logo" class="logo">
		    <div class="logo-child" >
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			</div>
			<div class="logo-child" >
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</div>
		</div>
	</div><!-- #masthead .site-header -->

<div id="main" class="site-main">
