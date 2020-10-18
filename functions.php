<?php
/**
 * Custom blog navigation for Maxwell.
**/

function enqueue_parent_styles() {
    $parenthandle = 'maxwell-stylesheet';
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
        array(), 
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version')
    );
}

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function register_theme_support() {
    add_theme_support( 'themezee-related-posts');
}

add_action('after_setup_theme', 'register_theme_support');
