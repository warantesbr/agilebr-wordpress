<?php
$output = $el_class = $css_animation = '';

extract(shortcode_atts(array(
    'el_class' => '',
    'css_animation' => ''
), $atts));

$el_class = $this->getExtraClass($el_class);

$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG,$el_class, $this->settings['base']);
$css_class .= $this->getCSSAnimation($css_animation);
$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);

echo $output;