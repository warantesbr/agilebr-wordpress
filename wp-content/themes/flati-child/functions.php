<?php

//adding theme scripts and styles
function c_evolve_media() {
	wp_dequeue_style('themecss'); //remove the call of the parent's style.css// 

	wp_register_style('cmaincss', get_stylesheet_directory_uri() . '/style.css', false);
	if( !is_admin() ) wp_enqueue_style('cmaincss');
}

//add_action( 'init', 'c_evolve_media', 20 ); // c_evolve_media() loads child style.css

function register_my_menus() {
  register_nav_menus(
    array(
      'top-nav-2' => __( 'Top Nav 2' ),
      'footer-nav' => __( 'Footer Nav' )
    )
  );
}
add_action( 'init', 'register_my_menus' );