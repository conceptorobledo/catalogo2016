<?php
/**
 * CRCatalogoSimple functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package CRCatalogoSimple
 */

if ( ! function_exists( 'crcatalogosimple_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function crcatalogosimple_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on CRCatalogoSimple, use a find and replace
	 * to change 'crcatalogosimple' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'crcatalogosimple', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	/*
	 * Añade soporte Woocommerce
	 *
	 * 
	 */

	add_theme_support( 'woocommerce' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'crcatalogosimple' ),
		'footer-menu' => esc_html__( 'Footer Menu', 'crcatalogosimple' )
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'crcatalogosimple_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'crcatalogosimple_setup' );





/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function crcatalogosimple_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'crcatalogosimple_content_width', 640 );
}
add_action( 'after_setup_theme', 'crcatalogosimple_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function crcatalogosimple_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'crcatalogosimple' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'crcatalogosimple' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'crcatalogosimple_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function crcatalogosimple_scripts() {

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap.min.css','3.3.7');

	wp_enqueue_style( 'crcatalogosimple-style', get_stylesheet_uri() );

	wp_enqueue_script( 'crcatalogosimple-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '3.3.7', true );

	wp_enqueue_style('googlefont_css', 'https://fonts.googleapis.com/css?family=Lato:300,400,700,900');

	wp_enqueue_script( 'crcatalogosimple-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'crcatalogosimple_scripts' );



/*
* Añade get_skU() para extraer sku
*/


/* 
* Invierte orden de precios Woocommerce
*/
add_filter('woocommerce_sale_price_html', 'wdm_change_price_text', 10, 2);

function wdm_change_price_text( $price, $this_object ) {
    $display_price       = $this_object->get_display_price();
    $display_regular_price   = $this_object->get_display_price($this_object->get_regular_price());
    $price='<ins>' . wc_price($display_price) . '</ins>' . $this_object->get_price_suffix() . '<del>' . wc_price($display_regular_price) . '</del> ';
    return $price;
}

/*
* Remueve boton ADD TO CART 
*/
 remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


