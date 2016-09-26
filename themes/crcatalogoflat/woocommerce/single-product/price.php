<?php
/**
 * Single Product Price, including microdata for SEO
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.9
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

?>
<div itemprop="offers" itemscope itemtype="http://schema.org/Offer">

	<p class="price"><?php echo $product->get_price_html(); ?></p>

	<!-- Precio de Ahorro-->

					<?php
					/**Establece variables con los precios **/
					 $precioofe = $product->get_sale_price();
					 $precioreg = $product->get_regular_price();
					 $ahorro = ($precioofe - $precioreg)/$precioreg;
					 ?>
	<?php if ( $product->is_on_sale() ) : ?>

	<p class="ahorro">
		<?php 
		/**  Calcula el % de Ahorro entre precio de oferta y regular   **/
		echo ROUND($ahorro*100).'%' . ' ahorro' ?>
	</p>
	<?php endif; ?>
	<p class="referencial">Precio Referencial</p>
	
	

	<meta itemprop="price" content="<?php echo esc_attr( $product->get_display_price() ); ?>" />
	<meta itemprop="priceCurrency" content="<?php echo esc_attr( get_woocommerce_currency() ); ?>" />
	<link itemprop="availability" href="http://schema.org/<?php echo $product->is_in_stock() ? 'InStock' : 'OutOfStock'; ?>" />

</div>
