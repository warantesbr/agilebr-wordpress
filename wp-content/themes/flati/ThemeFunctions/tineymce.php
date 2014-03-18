<?php

function register_ublflati_shortcodes( $buttons ) {
   array_unshift( $buttons, "Shortcodes" );
   return $buttons;
}

function register_ublflati_ublfonts( $buttons ) {
   array_unshift( $buttons, "Fonts" );
   return $buttons;
}

function add_ublflati_shortcodes( $plugin_array ) {
   $plugin_array['Shortcodes'] = get_template_directory_uri() . '/js/Shortcodes_js.js';
   return $plugin_array;
}

function add_ublflati_ublfonts( $plugin_array ) {
   $plugin_array['Fonts'] = get_template_directory_uri() . '/js/fonts_js.js';
   return $plugin_array;
}

function ublflati_shortcodes() {

   if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') ) {
      return;
   }

   if ( get_user_option('rich_editing') == 'true' ) {
      add_filter( 'mce_external_plugins', 'add_ublflati_shortcodes' );
      add_filter( 'mce_buttons', 'register_ublflati_shortcodes' );
   }

}

function ublflati_ublfonts() {

   if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') ) {
      return;
   }

   if ( get_user_option('rich_editing') == 'true' ) {
      add_filter( 'mce_external_plugins', 'add_ublflati_ublfonts' );
      add_filter( 'mce_buttons', 'register_ublflati_ublfonts' );
   }

}

add_action('init', 'ublflati_shortcodes');
add_action('init', 'ublflati_ublfonts');


