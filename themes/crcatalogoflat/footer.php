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

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="container">

				<div class="roW">
					<?php 
							wp_nav_menu( array(

								'theme_location' => 'footer-menu',
								'container' => 'nav',
								'container_Class' => 'navbar-collapse collapse',
								'menu_class' => 'nav navbar-nav'
							) );
					?>
					<div class="col-md-12">
						<p class="footer-company-name">Financoop &copy; <?php echo date('Y'); ?></p>
					</div>
				</div><!--#col-->
			
			</div><!-- #page -->
			</div><!-- container -->
		</footer><!-- #colophon -->


<?php wp_footer(); ?>

</body>
</html>
