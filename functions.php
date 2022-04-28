<?php

/**
 * Setup theme
 */
function diglp_theme_setup() {

	register_nav_menus(
		array(
			'primary'   => __( 'Primary Menu', 'digid-lp' ),
		)
	);

	add_theme_support( 'menus' );

	add_theme_support( 'custom-logo' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

	add_image_size( 'event-gallery-full', 1920, 900, array( 'center', 'center' ) );

}

add_action( 'after_setup_theme', 'diglp_theme_setup' );


/**
 * Enqueue styles and scripts
 */
function diglp_theme_enqueue_styles() {
	$the_theme     = wp_get_theme();
	$theme_version = $the_theme->get( 'Version' );
	wp_enqueue_style( 'theme-styles', get_stylesheet_directory_uri() . '/dist/main.css', array(), $theme_version );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'theme-scripts', get_stylesheet_directory_uri() . '/dist/main.js', array( 'jquery' ), $theme_version, false );
}

add_action( 'wp_enqueue_scripts', 'diglp_theme_enqueue_styles' );


// Theme otimizations.
//require get_template_directory() . '/inc/theme-optimizations.php';

// Theme custom template tags.
//require get_template_directory() . '/inc/theme-template-tags.php';

// Theme customizer options.
//require get_template_directory() . '/inc/customizer.php';
