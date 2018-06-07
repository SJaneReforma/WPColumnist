<?php
function pwwp_enqueue_my_scripts() {

    wp_enqueue_script( 'bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'), true); 
}

add_action('wp_enqueue_scripts', 'pwwp_enqueue_my_scripts' , 'pwwp_enqueue_my_jquery');

function pwwp_enqueue_my_styles() {
    wp_enqueue_style( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );

    wp_enqueue_style( ‘style’, get_stylesheet_uri() );

	wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );    
}
add_action('wp_enqueue_scripts', 'pwwp_enqueue_my_styles' , 'pwwp_enqueue_my_jquery');


function pwwp_enqueue_my_jquery() {
    wp_enqueue_jquery( 'bootstrap', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js' );
}
add_action('wp_enqueue_scripts', 'pwwp_enqueue_my_styles' , 'pwwp_enqueue_my_jquery');


function pietergoosen_theme_setup() {
  register_nav_menus( array( 
    'header' => 'Header menu', 
    'footer' => 'Footer menu' 
  ) );
 }

add_action( 'after_setup_theme', 'pietergoosen_theme_setup' );
?>