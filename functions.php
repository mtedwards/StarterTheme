<?php
/**
 * at functions and definitions
 *
 * @package at
 */
 
 require_once('inc/clean.php'); // do all the cleaning and enqueue here
 require_once('inc/foundation.php'); // load Foundation specific functions like top-bar
/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'at_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function at_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on at, use a find and replace
	 * to change 'at' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'at', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'at' ),
	) );


	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'at_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array( 'comment-list', 'search-form', 'comment-form', ) );
}
endif; // at_setup
add_action( 'after_setup_theme', 'at_setup' );


/**
 * Enqueue secondary scripts 
 */
function at_scripts() {
	wp_enqueue_script( 'at-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'at_scripts' );



/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
