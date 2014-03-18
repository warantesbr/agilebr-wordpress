<?php

wp_enqueue_style( 'timeline', get_template_directory_uri() . '/css/timeline.css' );
wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.custom.js');

$list = '<div class="pad15"></div>'. "\n";
$list .= '<div class="main fadeinup">'. "\n";
$list .= '<ul class="cbp_tmtimeline">'. "\n";
$list .= do_shortcode($content);
$list .= '</ul>'. "\n";
$list .= '</div>'. "\n";

echo $list;