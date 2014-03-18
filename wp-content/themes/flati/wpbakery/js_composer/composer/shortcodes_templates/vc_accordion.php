<?php
wp_enqueue_script('jquery-ui-accordion');
$output = $title = $interval = $el_class = $collapsible = $active_tab = '';
//
extract(shortcode_atts(array(
    'title' => '',
    'interval' => 0,
    'el_class' => ''
), $atts));

$randclass = 'ubl_' . rand(1,99);

$el_class = $this->getExtraClass($el_class);
$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'accordion ' . $randclass . ' '.$el_class, $this->settings['base']);

$output .= "\n\t".'<div id="accordion" class="'.$css_class.'" >';
$output .= wpb_widget_title(array('title' => $title, 'extraclass' => 'wpb_accordion_heading'));
$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".'</div> ';

$output .= '

<script>
jQuery(document).ready(function(){
	
	jQuery(".'.$randclass.'").find(".accordion-group:first-child > .accordion-body").addClass("in");
	
});
</script>

';

echo $output;