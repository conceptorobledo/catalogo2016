<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CRCatalogoSimple
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
	<div class="container">
		<nav id="site-navigation" class="main-navigation" role="navigation">
		
			<!-- NAVBAR
			==================================================-->
			
			<div class="navbar-wrapper" >
				<div class="navbar navbar-inverse navbar-default" role="navigation">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle Navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Catalogo Financoop"></a>
						</div><!--navbar header-->

						<?php 
							wp_nav_menu( array(

								'theme_location' => 'primary',
								'container' => 'nav',
								'container_Class' => 'navbar-collapse collapse',
								'menu_class' => 'nav navbar-nav navbar-right'

							) );
						?>

	

					</div><!-- container-->

				</div> <!-- navbar nav-->
			</div><!-- navbar-wrapper -->
		</nav><!-- #site-navigation -->
		</div><!--#container -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
