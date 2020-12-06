<?php
/**
 * Customizations atop the maxwell theme.
**/

/* register our styles. */

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

/* We're not using excerpts now, but just in case we go back, some adjustments */
function my_excerpt_length($length) {
    return 1000;
}

add_filter(‘excerpt_length’, ‘my_excerpt_length’, 999);

function wpdocs_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more', 999);


/* Teach mailpoet to default to logged-in user. */

// function gsdoc_get_user_email( $form ) {
//     if( is_user_logged_in() ){
//         global $wpdb;
//         $current_user2 = wp_get_current_user();
//         $pol1 = ‘title=”Email” value=””‘;
//         $pol2 = ‘title=”Email” value=”‘ . $current_user2->user_email . ‘”‘;
//         $form = str_replace($pol1, $pol2, $form);
//         return $form;
//     }
// }
