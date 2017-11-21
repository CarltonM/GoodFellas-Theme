
<?php

function my_theme_scripts() {
	wp_enqueue_style( 'barbershop-styles', get_stylesheet_uri(), array('bootstrap-styles') );

	wp_enqueue_style( 'bootstrap-styles', get_template_directory_uri() . '/css/bootstrap.min.css' );

	wp_enqueue_script( 'bootstrap-scripts', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );


function my_theme_support(){
	add_theme_support( 'post-formats', array('image') );
	
    add_theme_support( 'post-thumbnails' );
    
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme','my_theme_support' );

function add_google_font(){
	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Cabin+Sketch', false );
	
	wp_enqueue_style('google-fonts2', 'https://fonts.googleapis.com/css?family=Roboto', false );
	
	wp_enqueue_style('google-fonts3', 'https://fonts.googleapis.com/css?family=Lobster|Pacifico' , false );
}
add_action('wp_enqueue_scripts', 'add_google_font');