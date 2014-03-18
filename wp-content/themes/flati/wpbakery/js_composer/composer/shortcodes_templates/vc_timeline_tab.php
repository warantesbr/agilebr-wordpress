<?php

	extract(shortcode_atts(array(
		'title'				=> '',
		'timelinedate' 	=> '',
		'icon' 				=> ''
    ), $atts));
	
	$list = '<li>'. "\n";
	$list .= "<time class=\"cbp_tmtime\"><span>".$timelinedate."</span></time>" . "\n";
	$list .= '<div class="cbp_tmicon cbp_tmicon-'.$icon.'"></div>'. "\n";
	$list .= '<div class="cbp_tmlabel">'. "\n";
	$list .= '<h2>'.$title.'</h2>'. "\n";
	$list .= do_shortcode($content);
	$list .= '</li>'. "\n";
	echo $list;