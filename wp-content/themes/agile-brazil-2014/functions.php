<?php
/**
 * Created by PhpStorm.
 * User: gabrielvieira
 * Date: 15/07/14
 * Time: 23:05
 */


function get_include_contents($filename) {
    if (is_file($filename)) {
        ob_start();
        include $filename;
        $contents = ob_get_contents();
        ob_end_clean();
        return $contents;
    }
    return false;
}

function create_posttype() {
  register_post_type( 'ab_sponsors',
    array(
      'labels' => array(
        'name' => 'Sponsors',
        'singular_name' => 'Sponsor',
        'all_items' => 'All Sponsors',
        'edit_item' => 'Edit Sponsor',
        'view_item' => 'View Sponsor',
        'update_item' => 'Update Sponsor',
        'add_new_item' => 'Add New Sponsor',
        'new_item_name' => 'New Sponsor',
        'parent_item' => 'Parent',
        'parent_item_colon' => 'Parent',
        'search_items' => 'Search Sponsors',
        'popular_items' => 'Popular Sponsors',
        'separate_items_with_commas' => '',
        'add_or_remove_items' => 'Add or Remove Sponsors',
        'choose_from_most_used' => 'Most Used Sponsors',
        'not_found' => 'No Sponsors'
      ),
      'public' => true,
      'has_archive' => true,
      'show_ui' => true,
      'query_var' => false,
      'exclude_from_search' => true,
      'menu_icon' => 'dashicons-awards',
      'rewrite' => array('slug' => 'sponsors'),
      'capability_type' => 'post',
      'hierarchical' => false,
      'menu_position' => null,
      'supports' => array('title')
    )
  );
}
add_action( 'init', 'create_posttype' );

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

function apply_sponsors_list( $content ) {
  $markup = '<!--sponsors-list-->';
  if ( strpos( $content, $markup ) >= 0 ) {
    $sponsors_list = get_include_contents(ABSPATH . 'wp-content/themes/agile-brazil-2014/sponsors.php');
    return str_replace($markup, $sponsors_list, $content);
  }
  return $content;
}
add_filter( 'the_content', 'apply_sponsors_list' );
?>