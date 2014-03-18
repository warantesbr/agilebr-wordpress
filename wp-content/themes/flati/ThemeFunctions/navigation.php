<?php

// ADD MENU SUPPORT
register_nav_menus(array('primary' => __( 'Primary Navigation', 'ublflati' )));  

// ADD SIDEBAR SUPPORT
if ( function_exists( 'register_sidebar' ) ) {
      register_sidebar( array (
        'name' => __( 'Blog Sidebar', 'ublflati' ),
        'id' => 'blog-sidebar',
		'before_widget' => '',
		'after_widget' => '<div class="pad15"></div><div class="clear"></div>',
        'description' => __( 'Blog Widget Area', 'ublflati' ),
        'before_title' => '<h3>',
        'after_title' => '</h3><div class="clear"></div>',
      ) );
}

if ( function_exists( 'register_sidebar' ) ) {
      register_sidebar( array (
        'name' => __( 'Footer Sidebar', 'ublflati' ),
        'id' => 'footer-sidebar',
		'before_widget' => '<div class="span3 footerwidgetarea">',
		'after_widget' => '</div>',
        'description' => __( 'Footer Widget Area', 'ublflati' ),
        'before_title' => '<h6>',
        'after_title' => '</h6>',
      ) );
}