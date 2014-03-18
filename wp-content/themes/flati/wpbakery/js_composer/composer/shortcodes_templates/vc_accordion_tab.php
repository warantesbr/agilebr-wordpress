<?php
$output = $title = '';

extract(shortcode_atts(array(
	'title' => __("Section", "ublflati")
), $atts));

$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'accordion-group', $this->settings['base']);
$output .= "\n\t\t\t" . '<div class="'.$css_class.'">';
$output .= "\n\t\t\t\t" . '<div class="accordion-heading"><a href="#'.sanitize_title($title).'" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle">'.$title.'</a></div>';
$output .= "\n\t\t\t\t" . '<div class="accordion-body collapse" id="'.sanitize_title($title).'"><div class="accordion-inner">';
$output .= ($content=='' || $content==' ') ? __("Empty section. Edit page to add content here.", "ublflati") : "\n\t\t\t\t" . wpb_js_remove_wpautop($content);
$output .= "\n\t\t\t\t" . '</div>';
$output .= "\n\t\t\t" . '</div></div>' . "\n";

echo $output;