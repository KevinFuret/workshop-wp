<?php
register_nav_menus( array(
	'header' => __( 'Header main menu','firstPixel' ),
	'footer' => __('Footer menu','firstPixel')
) );
function firstPixel_theme_support() {
	/**
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 */
	load_theme_textdomain( 'firstPixel', THEME_PATH . '/languages' );
	/**
	 *  Set up the WordPress core custom background feature.
	 */
	add_theme_support( 'custom-background', apply_filters( 'test_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
	/**
	 * Let WordPress manage the document title.
	 */
	add_theme_support( 'title-tag' );
	/**
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );
	/**
	 * Enable support for woocommerce on posts and pages.
	 */
	add_theme_support( 'wooocommerce' );
	/**
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
}
add_action( 'after_setup_theme', 'firstPixel_theme_support' );