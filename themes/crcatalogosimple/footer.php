<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CRCatalogoSimple
 */

?>

	</div><!-- #content -->

	<div class="container">
		<footer id="colophon" class="site-footer" role="contentinfo">
			<p class="footer-links">
										<?php 
												wp_nav_menu( array(

													'theme_location' => 'footer-menu',
												) );
										?>
										</p>

										<p class="footer-company-name">Financoop &copy; <?php echo date('Y'); ?></p>
	</footer><!-- #colophon -->
	</div><!-- #page -->
	</div><!-- container -->

<?php wp_footer(); ?>

</body>
</html>
