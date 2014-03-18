<?php

define( 'TEMPPATH', get_stylesheet_directory_uri());
define( 'IMAGES', TEMPPATH. "/img");
define('UBLFRAMEWORK',content_url() . "/plugins/ubl-theme-framework/ThemeFunctions/shortcodes.php");

// Retrieve the directory for the localization files
add_action('after_setup_theme', 'ubllocal_theme_setup');
function ubllocal_theme_setup(){
    load_theme_textdomain('ublflati', get_template_directory() . '/languages');
}

//Visual Composer Section
if (!class_exists('WPBakeryVisualComposerAbstract')) {
  $dir = dirname(__FILE__) . '/wpbakery/';
  $composer_settings = Array(
      'APP_ROOT'      => $dir . '/js_composer',
      'WP_ROOT'       => dirname( dirname( dirname( dirname($dir ) ) ) ). '/',
      'APP_DIR'       => basename( $dir ) . '/js_composer/',
      'CONFIG'        => $dir . '/js_composer/config/',
      'ASSETS_DIR'    => 'assets/',
      'COMPOSER'      => $dir . '/js_composer/composer/',
      'COMPOSER_LIB'  => $dir . '/js_composer/composer/lib/',
      'SHORTCODES_LIB'  => $dir . '/js_composer/composer/lib/shortcodes/',
      'USER_DIR_NAME'  => UBLFRAMEWORK,
 
      //for which content types Visual Composer should be enabled by default
      'default_post_types' => Array('page','post')
  );
  require_once locate_template('wpbakery/js_composer/js_composer.php');
  $wpVC_setup->init($composer_settings);
}

if ( ! isset( $content_width ) ) $content_width = 1170;

// Adding thembnail support
add_theme_support( 'post-thumbnails' );

// Adding feed link support
add_theme_support( 'automatic-feed-links' );

// add support for shortcodes within text widget
add_filter('widget_text', 'do_shortcode');

//include custom walker for navigation
require_once('ThemeFunctions/customWalker.php');

//include customizer theme options
require_once('ThemeFunctions/customizer.php');

//include navigation
require_once('ThemeFunctions/navigation.php');

//include pagination
require_once('ThemeFunctions/pagination.php');

//include theme install files
require_once('ThemeFunctions/InstallTheme.php');

//include tineymce
require_once('ThemeFunctions/tineymce.php');

// Theme Comment Area
require('ThemeFunctions/commentArea.php');

// Theme Welcome Message
require('ThemeFunctions/welcome.php');

// Theme Page Builder Settings
require('ThemeFunctions/pagebuilder.php');