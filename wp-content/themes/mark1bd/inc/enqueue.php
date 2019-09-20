<?php
/**
 * Understrap enqueue scripts
 *
 * @package understrap
 */


if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function understrap_scripts() {


		$min_extention_text = "";
		// $min_extention_text = ".min";

		// Get the theme data.
		$the_theme = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );
		

		$css_version = $theme_version . '.' . filemtime(get_template_directory() . '/css/theme' . $min_extention_text . '.css');


		wp_enqueue_style( 'understrap-styles', get_stylesheet_directory_uri() . '/css/theme' . $min_extention_text . '.css', array(), $css_version );

		wp_enqueue_style( 'bootstrap.min', get_stylesheet_directory_uri() . '/css/bootstrap.min' . $min_extention_text . '.css', array(), $css_version );

		wp_enqueue_style( 'client-c', get_stylesheet_directory_uri() . '/css/theme-c' . $min_extention_text . '.css', array(), $css_version );

		wp_enqueue_style( 'theme-element-c', get_stylesheet_directory_uri() . '/css/theme-elements' . $min_extention_text . '.css', array(), $css_version );

		wp_enqueue_style( 'default', get_stylesheet_directory_uri() . '/css/default' . $min_extention_text . '.css', array(), $css_version );

		wp_enqueue_style( 'simple-line-icons', get_stylesheet_directory_uri() . '/css/font-awesome/css/font-awesome.min' . $min_extention_text . '.css', array(), $css_version );

		wp_enqueue_style( 'owl-carousel', get_stylesheet_directory_uri() . '/css/owl.carousel' . $min_extention_text . '.css', array(), $css_version );

		wp_enqueue_style( 'owl-theme', get_stylesheet_directory_uri() . '/css/owl.theme' . $min_extention_text . '.css', array(), $css_version );

		wp_enqueue_style( 'theme-animate', get_stylesheet_directory_uri() . '/css/theme-animate' . $min_extention_text . '.css', array(), $css_version );

		wp_enqueue_style( 'googlefont-styles', 'https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,600,700,800%7CShadows+Into+Light:200,300,400,600,700,800', array(), $css_version );

		wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/css/style' . $min_extention_text . '.css', array(), $css_version );

		wp_enqueue_style( 'respon', get_stylesheet_directory_uri() . '/css/responsive' . $min_extention_text . '.css', array(), $css_version);

		wp_enqueue_script( 'jquery');

		wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper' . $min_extention_text . '.js', array(), $theme_version, true);
		
		$js_version = $theme_version . '.' . filemtime(get_template_directory() . '/js/theme' . $min_extention_text . '.js');

		wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme' . $min_extention_text . '.js', array(), $js_version, true );

		wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min' . $min_extention_text . '.js', array(), $js_version, true );

		wp_enqueue_script( 'isotop', get_template_directory_uri() . '/js/jquery.isotope.min' . $min_extention_text . '.js', array(), $js_version, true );


		wp_enqueue_script( 'owl-js', get_template_directory_uri() . '/js/owl.carousel' . $min_extention_text . '.js', array(), $js_version, true );

		wp_enqueue_script( 'owl-main-js', get_template_directory_uri() . '/js/main' . $min_extention_text . '.js', array(), $js_version, true );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // endif function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );