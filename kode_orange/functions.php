<?php
/**
 * functions.php 
 * Updated by Karlina Beringer on 30 May 2015.
 *
 * kode_orange functions and definitions
 *
 * @package kode_orange
 * The kode_orange theme is customized specifically for the Karlina Bytes website.
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'kode_orange_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function kode_orange_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on kode_orange, use a find and replace
	 * to change 'kode_orange' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'kode_orange', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	/*add_theme_support( 'title-tag' );*/

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'kode_orange' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'kode_orange_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
	
	// Enable LESS support (a library that extends CSS and allows "mixins")
	add_theme_support( 'less', array( 'enable' => true ) );
}
endif; // kode_orange_setup
add_action( 'after_setup_theme', 'kode_orange_setup' );

/* Add Bootstrap to theme */
function theme_add_bootstrap() {
        wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . 'bootstrap/js/bootstrap.min.js', array(), '3.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );

/* Add Bootstrap JQuery to theme */
function wpbootstrap_scripts_with_jquery() {
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', 
	                     get_template_directory_uri() 
	                     .'/bootstrap/js/bootstrap.js', 
	                     array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

/* Add JQuery to the theme */
function wp_add_jquery() {
  wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/jquery.min.js');
}
add_action( 'wp_enqueue_scripts', 'wp_add_jquery' );

/* Customize the title displayed on the home page tab. */
add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );
function baw_hack_wp_title_for_home( $title ) {
    if( empty( $title ) && ( is_home() || is_front_page() ) ) {
      return __( 'Karlina Bytes', 'theme_domain' ) . ' | ' . get_bloginfo( 'description' );
    }
    return $title;
} 

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function kode_orange_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'kode_orange' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'kode_orange_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function kode_orange_scripts() {
	wp_enqueue_style( 'kode_orange-style', get_stylesheet_uri() );

	wp_enqueue_script( 'kode_orange-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'kode_orange-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'kode_orange_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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

/* Allow RSS feed links. */
add_theme_support( 'automatic-feed-links' );
  
/* Allow featured images (a.k.a. thumbnails) for blog posts and pages. */
add_theme_support( 'post-thumbnails' );
  
/* Allow a search functionality to the website. */
add_theme_support( 'html5', array( 'search-form' ) );
  
/* Add functionality for displaying post excerpts. */
function custom_excerpt_length( $length ) {
  return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length');

/* Get rid of (or change) the [...] at the end of blog post excerpts. */
function new_excerpt_more( $more ) {
	return '';
}
add_filter('excerpt_more', 'new_excerpt_more');
  
/* Add functionality for displaying "read more" links to posts. */
function excerpt_read_more_link($output) {
    global $post;
    return $output . '<a href="'. get_permalink($post->ID) . '"> [...] </a>';
}
add_filter('the_excerpt', 'excerpt_read_more_link');
  
/* Stop WordPress from adding those annoying closing paragraph tags */
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
  
/*
 * Switch default core markup for search form, comment form, and comments
 * to output valid HTML5.
 */
add_theme_support( 'html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
  
/*
 * Enable support for Post Formats.
 * See http://codex.wordpress.org/Post_Formats
 */
add_theme_support( 'post-formats', array('aside', 'image', 'video', 'quote', 'link'));
   
/* Set up the WordPress core custom background feature. */
add_theme_support( 'custom-background', apply_filters( '_s_custom_background_args', array(
'default-color' => 'ffffff',
'default-image' => '') ) );

/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );
add_filter( 'widget_text', 'shortcode_unautop');
add_filter( 'widget_text', 'do_shortcode');
?>