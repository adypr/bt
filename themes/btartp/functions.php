<?php
/**
 * art-project functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package art-project
 */

require_once get_template_directory(  ). '/inc/woocommerce-hooks.php';

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

// Menu settings

require_once __DIR__ . '/inc/Btartp_Menu.php';
require_once __DIR__ . '/inc/Categories_Menu.php';

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function btartp_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on art-project, use a find and replace
		* to change 'btartp' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'btartp', get_template_directory() . '/languages' );

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'header_menu' => esc_html__( 'Header Menu', 'btartp' ),
			'art_categories' => esc_html__( 'Arts Menu', 'btartp' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'btartp_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'btartp_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function btartp_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'btartp_content_width', 640 );
}
add_action( 'after_setup_theme', 'btartp_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function btartp_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'News and articles', 'btartp' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'btartp' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'btartp_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function btartp_resource_hints_filter( $urls, $relation_type ) {
	if ( 'preconnect' === $relation_type ) {
		$urls[] = 'https://fonts.googleapis.com';
		$urls[] = array(
			'href'        => 'https://fonts.gstatic.com',
			'crossorigin' => '',
		);
	}
	return $urls;
}
add_filter( 'wp_resource_hints', 'btartp_resource_hints_filter', 10, 2 );

function btartp_scripts() {
	wp_enqueue_style( 'btartp-google-fonts', 'https://fonts.googleapis.com/css2?family=Lobster&family=Cormorant+Garamond&family=Poppins:wght@400;600&display=swap', array(), null );
	wp_enqueue_style( 'btartp-main', get_template_directory_uri() . '/assets/main.css' );

	wp_enqueue_script( 'btartp-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'btartp-', get_template_directory_uri() . '/assets/main.js', array(), false, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'btartp_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/** 
 * Add Woocommerce support
**/
function artproject_setup() {
    add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );	
}

add_action( 'after_setup_theme', 'artproject_setup' );

function btartp_thumb() {
    $html ='';
    if (has_post_thumbnail()) {
		global $product;
		
		$terms = get_the_terms( $product->ID, 'product_tag' );
		$alt_text = 'Thumbnail picture';
		if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
			$alt_text = $terms[0]->name;
		}

        $html .= the_post_thumbnail('large', array(
			'alt' => $alt_text,
			'class' => 'work__img attachment-woocommerce_thumbnail size-woocommerce_thumbnail'
		));

    } else {
        $html .= '<img src="https://imgholder.ru/220x150/8493a8/adb9ca&text=no+image&font=kelson">';
    }
    return $html;
}

function new_excerpt_more(){
	global $post;
	return '<a class="read-more" href="'. get_permalink($post) . '"> Read more...</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

add_filter( 'get_the_archive_title', function( $title ){
	return preg_replace('~^[^:]+: ~', '', $title );
});


// Metaboxes

require_once __DIR__ . '/inc/admin-functions.php';


// Utilites

function print_data($data) {
    echo '<pre>' .print_r($data, 1). '</pre>'; 
}