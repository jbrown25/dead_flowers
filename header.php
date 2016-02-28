<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dead_flowers
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dead_flowers' ); ?></a>
	<header id="masthead" class="site-header" role="banner">
		<nav class="navbar navbar-default">
      		<div class="container-fluid">
      			<div class="col-sm-10">
        		<!-- Brand and toggle get grouped for better mobile display -->
			        <div class="navbar-header">
			          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse" aria-expanded="false">
			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			          </button>
			        </div>

			        <?php 
			        	wp_nav_menu(array(
			        		'menu' => 'primary',
			        		'menu_class' => 'nav navbar-nav',
			        		'container_class' => 'collapse navbar-collapse',
			        		'container_id' => 'main-navbar-collapse'
			        	)); 
			        ?>
			    </div><!-- col-sm-8 -->
			    <div class="col-sm-2 search-container">
       				<a href="#" id="search-button"><i class="fa fa-search fa-2x"></i></a>

        			<?php get_search_form(); ?>
        		</div>
      		</div><!-- /.container-fluid -->
    	</nav><!-- end nav -->
		
			

		<!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
