<?php
function theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function infinite_enqueue_scripts() {
  wp_enqueue_script( 'smooth-scroll', get_stylesheet_directory_uri() . '/js/jquery-smooth-scroll/jquery.smooth-scroll.min.js', array( 'jquery' ) );
  wp_enqueue_script( 'infinite', get_stylesheet_directory_uri() . '/js/infinite.js', array( 'smooth-scroll' ) );
}
add_action( 'wp_enqueue_scripts', 'infinite_enqueue_scripts' );
?>
