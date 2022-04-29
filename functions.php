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
	$theme_version = wp_get_theme()->get( 'Version' );
	$version       = is_string( $theme_version ) ? $theme_version : false;
	wp_register_style(
		'theme-styles',
		get_stylesheet_directory_uri() . '/dist/main.css',
		array(),
		$version
	);
	wp_add_inline_style( 'theme-styles', diglp_get_font_face_styles() );
	wp_enqueue_style( 'theme-styles' );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'theme-scripts', get_stylesheet_directory_uri() . '/dist/main.js', array( 'jquery' ), $version, false );
	wp_enqueue_style( 'font-adobe', 'https://use.typekit.net/epd6aab.css', array(), $version );

}

add_action( 'wp_enqueue_scripts', 'diglp_theme_enqueue_styles' );



if ( ! function_exists( 'diglp_get_font_face_styles' ) ) :

	/**
	 * Get font face styles.
	 * Called by functions diglp_theme_enqueue_styles() and twentytwentytwo_editor_styles() above.
	 */
	function diglp_get_font_face_styles() {

		return "
		@font-face{
			font-family: 'Ridley Grotesk';
			font-weight: bold;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/RidleyGrotesk-Bold.woff2' ) . "') format('woff2'), url('" . get_theme_file_uri( 'assets/fonts/RidleyGrotesk-Bold.otf' ) . "') format('otf');
		}

		@font-face{
			font-family: 'Ridley Grotesk';
			font-weight: 300;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/RidleyGrotesk-Light.woff2' ) . "') format('woff2'), url('" . get_theme_file_uri( 'assets/fonts/RidleyGrotesk-Light.otf' ) . "') format('otf');
		}

		@font-face{
			font-family: 'Ridley Grotesk';
			font-weight: 500;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/RidleyGrotesk-Medium.woff2' ) . "') format('woff2'), url('" . get_theme_file_uri( 'assets/fonts/RidleyGrotesk-Medium.otf' ) . "') format('otf');
		}

		";

	}

endif;

if ( ! function_exists( 'diglp_preload_webfonts' ) ) :

	/**
	 * Preloads the main web font to improve performance.
	 */
	function diglp__preload_webfonts() {
		?>
		<link rel="preload" href="<?php echo esc_url( get_theme_file_uri( 'assets/fonts/RidleyGrotesk-Bold.woff2' ) ); ?>" as="font" type="font/woff2" crossorigin>
		<link rel="preload" href="<?php echo esc_url( get_theme_file_uri( 'assets/fonts/RidleyGrotesk-Bold.otf' ) ); ?>" as="font" type="font/otf" crossorigin>
		<link rel="preload" href="<?php echo esc_url( get_theme_file_uri( 'assets/fonts/RidleyGrotesk-Medium.woff2' ) ); ?>" as="font" type="font/woff2" crossorigin>
		<link rel="preload" href="<?php echo esc_url( get_theme_file_uri( 'assets/fonts/RidleyGrotesk-Medium.otf' ) ); ?>" as="font" type="font/otf" crossorigin>
		<link rel="preload" href="<?php echo esc_url( get_theme_file_uri( 'assets/fonts/RidleyGrotesk-Light.woff2' ) ); ?>" as="font" type="font/woff2" crossorigin>
		<link rel="preload" href="<?php echo esc_url( get_theme_file_uri( 'assets/fonts/RidleyGrotesk-Light.otf' ) ); ?>" as="font" type="font/otf" crossorigin>
		<?php
	}

endif;

add_action( 'wp_head', 'diglp__preload_webfonts' );


// Theme otimizations.
//require get_template_directory() . '/inc/theme-optimizations.php';

// Theme custom template tags.
//require get_template_directory() . '/inc/theme-template-tags.php';

// Theme customizer options.
//require get_template_directory() . '/inc/customizer.php';
