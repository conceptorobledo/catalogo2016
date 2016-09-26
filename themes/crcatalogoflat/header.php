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

<script>
	
	dataLayer = [];

	<?php if ( is_product_category() ) : ?>
		dataLayer.push( {'categoria-pagina': '<?php single_term_title(); ?>'});
	<?php endif; ?>

	<?php if ( is_home()) : ?>
				dataLayer.push( {'categoria-pagina': 'home'});
	<?php endif;?>

	<?php if ( is_product() ) : ?>
		dataLayer.push( {
			'nombre-producto':'<?php the_title();?>',
			'categoria-pagina': 'single-product'
		});
	<?php endif; ?>

</script>



</head>

<body <?php body_class(); ?>>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-5CKBJN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5CKBJN');</script>
<!-- End Google Tag Manager -->

<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
	<div class="top">
		<div class="container">
			<div class="row">
					<div class="col-md-6">
						<p>envio gratuito en <b>todos</b> nuestros productos</p>
					</div><!--#col-->
					<div class="col-md-6">
						<p class="pull-right">Contáctanos: <a href="tel:+56228975400">(+562) 2 897 5400</a></p>
					</div><!--#col-->
				</div><!-- #row-->
		</div><!--#container-->
	</div><!--#top-->
	
		<nav id="site-navigation" class="main-navigation" role="navigation">
		
			<!-- NAVBAR
			==================================================-->
			
			<div class="navbar-wrapper" >
				<div class="navbar navbar-inverse navbar-default" role="navigation">
					<div class="container">
						<div class="row">
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

	
						</div><!--#row-->
					</div><!-- container-->

				</div> <!-- navbar nav-->
			</div><!-- navbar-wrapper -->
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
