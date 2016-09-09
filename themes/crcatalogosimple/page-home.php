<?php
/** 
 	Template Name: Página Inicio

 */
 	


get_header(); ?>

		<!-- <?php get_template_part('content','hero'); ?> -->
		
<section id="destacados" class="product-grid">
	<div class="container">
		<div class="row">
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

	        <div class="col-md-3 col-sm-6">   
	            <?php 
	                if ( has_post_thumbnail( $loop->post->ID ) ) 
	                    echo get_the_post_thumbnail( $loop->post->ID, 'shop_catalog' ); 
	                else 
	                    echo ' <a href="<?php echo  get_the_permalink(); ?>"><img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="65px" height="115px" /></a>'; 
	            ?>
	            <h3><?php the_title(); ?></h3>

	                     <p class="price"><?php echo $product->get_price_html(); ?></p>
          	
	            <?php 
	                //echo $product->get_price_html(); 
	                // woocommerce_template_loop_add_to_cart( $loop->post, $product );
	            ?>    
	             <a href="<?php echo  get_the_permalink(); ?>" class="btn btn-primary">Más Información</a>
	        </div>


		<?php 
		    endwhile;
		    wp_reset_query(); 
		?>
		</div><!--row-->

		<!-- ###Loop de productos Destacados -->

		<!-- Loop de productos más Nuevos -->

		<div class="row">
		<h2 class="text-center"> Lo más nuevo </h2>

		  <?php
            $args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => 4, 'orderby' =>'date','order' => 'DESC' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

                    <div class="col-md-3 col-sm-6">    


                            <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
                             else 
                             	echo ' <a href="<?php echo  get_the_permalink(); ?>"><img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="65px" height="115px" /></a>'; ?>

                            <h3><?php the_title(); ?></h3>

                        	   <p class="price"><?php echo $product->get_price_html(); ?></p>


	            		 <a href="<?php echo  get_the_permalink(); ?>" class="btn btn-primary">Más Información</a>
                    </div><!-- col -->
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
        </div><!--row-->
        <!-- ##Loop de productos más Nuevos -->


	</div><!--container-->

</section>

<?php
get_footer();
