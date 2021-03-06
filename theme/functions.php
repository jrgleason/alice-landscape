<?php
/**
 * landscape functions and definitions
 *
 * @package landscape
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 */
if ( ! isset( $content_width ) )
	$content_width = 1000; /* pixels */

/*
 * Load Jetpack compatibility file.
 */
require( get_template_directory() . '/inc/jetpack.php' );


if ( ! function_exists( 'landscape_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 */
function landscape_setup() {

	/**
	 * Custom template tags for this theme.
	 */
	require( get_template_directory() . '/inc/template-tags.php' );

	/**
	 * Custom functions that act independently of the theme templates
	 */
	require( get_template_directory() . '/inc/extras.php' );

	/**
	 * Customizer additions
	 */
	require( get_template_directory() . '/inc/customizer.php' );

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on landscape, use a find and replace
	 * to change 'landscape' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'landscape', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'featured-thumbnail', 1440, 500, true );
	add_image_size( 'index-thumbnail', 1000, 200, true );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'landscape' ),
	) );
	
	add_editor_style();

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside' ) );
}
endif; // landscape_setup
add_action( 'after_setup_theme', 'landscape_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 *
 */
function landscape_widgets_init() {
}
add_action( 'widgets_init', 'landscape_widgets_init' );


/**
 * if lt IE 9
 */
function landscape_head(){
?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
}
add_action( 'wp_head', 'landscape_head');

/**
 * Enqueue scripts and styles
 */
function landscape_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_script( 'small-menu', get_template_directory_uri() . '/js/small-menu.js', array( 'jquery' ), '20120206', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'landscape_scripts' );

/**
 * Adds custom background support
 * This is essentially allowing a color to be picked from the menu
 */
$args = array(
	'default-color' => 'ffffff',
);
add_theme_support( 'custom-background', $args );


/**
 * Implement the Custom Header feature
 */
require( get_template_directory() . '/inc/custom-header.php' );


/**
 * Adding WooCommerce Support
 */
 add_theme_support( 'woocommerce' );
 remove_action( 'woocommerce_before_shop_loop', 'woocommerce_output_content_wrapper', 10);
 remove_action( 'woocommerce_after_shop_loop', 'woocommerce_output_content_wrapper_end', 10);
 add_action('woocommerce_before_shop_loop', 'my_theme_wrapper_start', 10);
 add_action('woocommerce_after_shop_loop', 'my_theme_wrapper_end', 10);
 
 function my_theme_wrapper_start() {
 	echo '<div id="shop-main" class="shop">';
 }
 
 function my_theme_wrapper_end() {
 	echo '</div>';
 }