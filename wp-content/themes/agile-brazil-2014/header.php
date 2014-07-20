<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"/>
    <?php wp_head(); ?>
</head>

<body class="home">

    <!-- MENU AREA -->
    <div id="header">
        <div class="container">
            <div class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="<?php echo pll_home_url();?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/ab-logo.png"></a>
                </div>

                <nav class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'items_wrap' => '%3$s', 'container' => '')); ?>
                    </ul>

                </nav>
            </div>
        </div>
    </div>