<?php
define( 'THEME_PATH' ,          get_template_directory()            );
define( 'THEME_URL' ,           get_template_directory_uri()        );
define( 'CSS_URL' ,             THEME_URL .    '/css'       );
define( 'JS_URL' ,              THEME_URL .    '/js'      );

function wpc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}

add_filter('upload_mimes', 'wpc_mime_types');

foreach ( glob( THEME_PATH . "/inc/*.php" ) as $file ) {
	include_once $file;
}

function ajout_scripts() {

// enregistrement d'un nouveau script
	wp_register_script('main_script', get_template_directory_uri() . '/scripts/main.js', array('jquery'),'1.1', true);
	wp_enqueue_script('main_script');

// enregistrement Foundation
	wp_register_style( 'foundation_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );
	wp_enqueue_style('foundation_css');

// enregistrement polices
	wp_register_style( 'style-font', 'https://fonts.googleapis.com/css?family=Roboto:400,400i,700' );
	wp_enqueue_style('style-font');

// enregistement Foundation script
	wp_register_style( 'foundation_script', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js' );
	wp_enqueue_script('foundation_script');

// enregistrement d'un nouveau style
	wp_register_style( 'main_style', get_template_directory_uri() . '/styles/main.css' );
	wp_enqueue_style( 'main_style' );

}

add_action( 'wp_enqueue_scripts', 'ajout_scripts' );

function wpdocs_custom_excerpt_length( $length ) {
	return 7;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
