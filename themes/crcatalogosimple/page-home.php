<?php
/** 
 	Template Name: Página Inicio

 */
 	


get_header(); ?>

		
<section id="destacados" class="product-grid">
	<div class="container">
		<div class="row">
		<h1> Catalogo </h1>
			<h2 class="text-center"> Lo más destacado </h2>
				

			<!-- Loop de productos Destacados -->
			<?php

		   $meta_query   = WC()->query->get_meta_query();
			$meta_query[] = array(
			    'key'   => '_featured',
			    'value' => 'yes'
			);
			$args = array(
			    'post_type'   =>  'product',
			    'stock'       =>  1,
			    'showposts'   =>  6,
			    'orderby'     =>  'date',
			    'order'       =>  'DESC',
			    'meta_query'  =>  $meta_query
			);

		    $loop = new WP_Query( $args );
		    while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

		        <div class="col-md-3 col-sm-6 item">  

		       		<div class="wrapper">

		       			<a href="<?php echo get_the_permalink(); ?>" class="to-product">

				       		<?php if ( $product->is_on_sale() ) : ?>

								<?php echo apply_filters( 'woocommerce_sale_flash', '<span class="convenio-financoop">' . __( 'Precio Convenio', 'woocommerce' ) . '</span>', $post, $product ); ?>

							<?php endif; ?>
		 
				             <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
				                             else 
				                             	echo '<img src="'. woocommerce_placeholder_img_src() .'" alt="Placeholder" width="265px" height="300px" />'; ?>
				                             
				            <h3><?php the_title(); ?></h3>

				             <p class="price"><?php echo $product->get_price_html(); ?>  </br> <span class="referencial">Precio Referencial</span> </p>
	          			</a>

		            </div><!--#wrapper-->

		             <a href="<?php echo  get_the_permalink(); ?>" class="btn btn-primary to-product">Más Información</a>

		 
		        </div>


			<?php 
			    endwhile;
			    wp_reset_query(); 
			?>
		</div><!--row-->

		<!-- ###Loop de productos Destacados -->
		</div><!--container-->
	</section>

		<!-- Loop de productos más Nuevos -->
	<section id="productos-nuevos" class="product-grid">
		<div class="container">
			<div class="row">
				<h2 class="text-center"> Lo más nuevo </h2>

				  <?php
		            $args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => 8, 'orderby' =>'date','order' => 'DESC' );
		            $loop = new WP_Query( $args );
		            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

		                    <div class="col-md-3 col-sm-6 item">   
 
									<div class="wrapper">

										<a href="<?php echo get_the_permalink(); ?>" class="to-product">

											<?php if ( $product->is_on_sale() ) : ?>

												<?php echo apply_filters( 'woocommerce_sale_flash', '<span class="convenio-financoop">' . __( 'Precio Convenio', 'woocommerce' ) . '</span>', $post, $product ); ?>

											<?php endif; ?>



					                             <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
					                             else 
					                             	echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="265px" height="300px" />'; ?>


			                            <h3><?php the_title(); ?></h3>

			                        	   <p class="price"><?php echo $product->get_price_html(); ?> </br> <span class="referencial">Precio Referencial</span></p>
										</a>
			                       	</div><!--#wrapper-->


			            		 <a href="<?php echo get_the_permalink(); ?>" class="btn btn-primary to-product">Más Información</a>
		                    </div><!-- #col -->

		        <?php endwhile; ?>
		        <?php wp_reset_query(); ?>
	        </div><!--#row-->
	        <!-- ##Loop de productos más Nuevos -->
		</div><!--#container-->

	</section>

<?php
get_footer();
