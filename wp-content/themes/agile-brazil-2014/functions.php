<?php
/**
 * Created by PhpStorm.
 * User: gabrielvieira
 * Date: 15/07/14
 * Time: 23:05
 */



function ab2014_register_menus() {
    register_nav_menus(
        array(
            'primary' => __( 'Main Menu' )
        )
    );
}
add_action( 'init', 'ab2014_register_menus' );


function new_excerpt_more( $more ) {
    return ' <a href="'. get_permalink( get_the_ID() ) .'">[Leia mais...]</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

function custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
?>