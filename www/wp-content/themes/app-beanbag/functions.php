<?php
/**
 * app-beanbag functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package app-beanbag
 */

if ( ! function_exists( 'app_beanbag_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function app_beanbag_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on app-beanbag, use a find and replace
		 * to change 'app-beanbag' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'app-beanbag', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'app-beanbag' ),
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

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
		
		// Remove WP emoji
		remove_action('wp_head', 'print_emoji_detection_script', 7);
		remove_action('wp_print_styles', 'print_emoji_styles');
		remove_action('admin_print_scripts', 'print_emoji_detection_script' );
		remove_action('admin_print_styles', 'print_emoji_styles' );
		
		// Remove unnecessary meta
		remove_action('wp_head', 'rsd_link');	
		remove_action('wp_head', 'wlwmanifest_link');		
		remove_action('wp_head','rest_output_link_wp_head');
		remove_action('wp_head', 'wp_oembed_add_host_js');		
	}
endif;
add_action( 'after_setup_theme', 'app_beanbag_setup' );



/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function app_beanbag_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'app_beanbag_content_width', 640 );
}
add_action( 'after_setup_theme', 'app_beanbag_content_width', 0 );



/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function app_beanbag_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'app-beanbag' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'app-beanbag' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'app_beanbag_widgets_init' );



/**
 * Remove recent comments inline styles
 */
function remove_recent_comments_style() {  
        global $wp_widget_factory;  
        remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );  
    }  
add_action( 'widgets_init', 'remove_recent_comments_style' );



/**
 * Enqueue scripts and styles.
 */
function app_beanbag_scripts() {
	wp_enqueue_style( 'app-beanbag-style', get_template_directory_uri() . '/_/css/app.min.css' );
	
	wp_enqueue_script( 'app-beanbag-navigation', get_template_directory_uri() . '/_/js/app.min.js', array(), '20180801', true );

}
add_action( 'wp_enqueue_scripts', 'app_beanbag_scripts' );



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

