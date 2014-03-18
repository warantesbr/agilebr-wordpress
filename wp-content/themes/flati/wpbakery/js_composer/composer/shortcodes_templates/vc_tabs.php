<?php
$output = $title = $interval = $el_class = '';
extract(shortcode_atts(array(
    'title' => '',
    'interval' => 0,
	'tabtype' => '',
    'el_class' => ''
), $atts));

if($tabtype == 'normal'){
	$newtabtype = 'tabs-top';
} else {
	$newtabtype = 'tabs-left';
}

wp_enqueue_script('jquery-ui-tabs');

$el_class = $this->getExtraClass($el_class);

$element = 'wpb_tabs';
if ( 'vc_tour' == $this->shortcode) $element = 'wpb_tour';

// Extract tab titles
preg_match_all( '/vc_tab title="([^\"]+)"(\stab_id\=\"([^\"]+)\"){0,1}/i', $content, $matches, PREG_OFFSET_CAPTURE );
$tab_titles = array();

/**
 * vc_tabs
 *
 */
if ( isset($matches[0]) ) { $tab_titles = $matches[0]; }
$tabs_nav = '';
$tabs_nav .= '<ul id="myTab" class="nav nav-tabs clearfix">';
foreach ( $tab_titles as $tab ) {
    preg_match('/title="([^\"]+)"(\stab_id\=\"([^\"]+)\"){0,1}/i', $tab[0], $tab_matches, PREG_OFFSET_CAPTURE );
    if(isset($tab_matches[1][0])) {
        $tabs_nav .= '<li><a href="#tab-'. (isset($tab_matches[3][0]) ? $tab_matches[3][0] : sanitize_title( $tab_matches[1][0] ) ) .'" data-toggle="tab">' . $tab_matches[1][0] . '</a></li>';

    }
}
$tabs_nav .= '</ul>'."\n";

$randnumid = 'myTabContent' . rand(1,97682634);

$css_class =  apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, trim($element.' wpb_content_element '.$el_class), $this->settings['base']);

$output .= "\n\t\t".'<div class="tabbable '.$newtabtype.' clearfix">';
$output .= wpb_widget_title(array('title' => $title, 'extraclass' => $element.'_heading'));
$output .= "\n\t\t\t".$tabs_nav;
$output .= '<div id="'.$randnumid.'" class="tab-content">';
$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
if ( 'vc_tour' == $this->shortcode) {
    $output .= "\n\t\t\t" . '<div class="wpb_tour_next_prev_nav clearfix"> <span class="wpb_prev_slide"><a href="#prev" title="'.__('Previous slide', 'ublflati').'">'.__('Previous slide', 'ublflati').'</a></span> <span class="wpb_next_slide"><a href="#next" title="'.__('Next slide', 'ublflati').'">'.__('Next slide', 'ublflati').'</a></span></div>';
}
$output .= "\n\t\t".'</div> ';
$output .= "\n\t\t".'</div> ';

$output .= '<script>' . "\n";
$output .= '//<![CDATA[' . "\n";
$output .= 'jQuery(document).ready(function(){' . "\n";
$output .= 'jQuery("#'.$randnumid.' > div.tab-pane:first-child").addClass("in active");' . "\n";
$output .= '});' . "\n";
$output .= '//]]>' . "\n";
$output .= '</script>' . "\n";

echo $output;