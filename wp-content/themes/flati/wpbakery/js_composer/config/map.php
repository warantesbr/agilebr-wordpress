<?php
/**
 * WPBakery Visual Composer Shortcodes settings
 *
 * @package VPBakeryVisualComposer
 *
 */
$vc_is_wp_version_3_6_more = version_compare(preg_replace('/^([\d\.]+)(\-.*$)/', '$1', get_bloginfo('version')), '3.6') >= 0;
// Used in "Button", "Call to Action", "Pie chart" blocks
$colors_arr = array(__("Grey", "ublflati") => "wpb_button", __("Blue", "ublflati") => "btn-primary", __("Turquoise", "ublflati") => "btn-info", __("Green", "ublflati") => "btn-success", __("Orange", "ublflati") => "btn-warning", __("Red", "ublflati") => "btn-danger", __("Black", "ublflati") => "btn-inverse");

// Used in "Button" and "Call to Action" blocks
$size_arr = array(__("Regular size", "ublflati") => "wpb_regularsize", __("Large", "ublflati") => "btn-large", __("Small", "ublflati") => "btn-small", __("Mini", "ublflati") => "btn-mini");

$target_arr = array(__("Same window", "ublflati") => "_self", __("New window", "ublflati") => "_blank");

$add_css_animation = array(
  "type" => "dropdown",
  "heading" => __("CSS Animation", "ublflati"),
  "param_name" => "css_animation",
  "admin_label" => true,
  "value" => array(__("No", "ublflati") => '', __("Top to bottom", "ublflati") => "top-to-bottom", __("Bottom to top", "ublflati") => "bottom-to-top", __("Left to right", "ublflati") => "left-to-right", __("Right to left", "ublflati") => "right-to-left", __("Appear from center", "ublflati") => "appear"),
  "description" => __("Select animation type if you want this element to be animated when it enters into the browsers viewport. Note: Works only in modern browsers.", "ublflati")
);

vc_map( array(
  "name" => __("Row", "ublflati"),
  "base" => "vc_row",
  "is_container" => true,
  "icon" => "",
  "show_settings_on_create" => false,
  "category" => __('Content', 'ublflati'),
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "ublflati"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "ublflati")
    )
  ),
  "js_view" => 'VcRowView'
) );
vc_map( array(
  "name" => __("Row", "ublflati"), //Inner Row
  "base" => "vc_row_inner",
  "content_element" => false,
  "is_container" => true,
  "icon" => "",
  "show_settings_on_create" => false,
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "ublflati"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "ublflati")
    )
  ),
  "js_view" => 'VcRowView'
) );
vc_map( array(
  "name" => __("Column", "ublflati"),
  "base" => "vc_column",
  "is_container" => true,
  "content_element" => false,
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "ublflati"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "ublflati")
    )
  ),
  "js_view" => 'VcColumnView'
) );

/* Text Block
---------------------------------------------------------- */
vc_map( array(
  "name" => __("Text Block", "ublflati"),
  "base" => "vc_column_text",
  "icon" => "",
  "wrapper_class" => "clearfix",
  "category" => __('Content', 'ublflati'),
  "params" => array(
    array(
      "type" => "textarea_html",
      "holder" => "div",
      "heading" => __("Text", "ublflati"),
      "param_name" => "content",
      "value" => __("<p>I am text block. Click edit button to change this text.</p>", "ublflati")
    ),
    $add_css_animation,
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "ublflati"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "ublflati")
    )
  )
) );

/* Separator (Divider)
---------------------------------------------------------- */
vc_map( array(
  "name"		=> __("Separator", "ublflati"),
  "base"		=> "vc_separator",
  'icon'		=> '',
  "show_settings_on_create" => false,
  "category"  => __('Content', 'ublflati'),
  "controls"	=> 'popup_delete'
) );

/* Textual block
---------------------------------------------------------- */
vc_map( array(
  "name" => __("Separator with Text", "ublflati"),
  "base" => "vc_text_separator",
  "icon" => "",
  "category" => __('Content', 'ublflati'),
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Title", "ublflati"),
      "param_name" => "title",
      "holder" => "div",
      "value" => __("Title", "ublflati"),
      "description" => __("Separator title.", "ublflati")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Title position", "ublflati"),
      "param_name" => "title_align",
      "value" => array(__('Align center', "ublflati") => "separator_align_center", __('Align left', "ublflati") => "separator_align_left", __('Align right', "ublflati") => "separator_align_right"),
      "description" => __("Select title location.", "ublflati")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "ublflati"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "ublflati")
    )
  ),
  "js_view" => 'VcTextSeparatorView'
) );

/* Message box
---------------------------------------------------------- */
vc_map( array(
  "name" => __("Message Box", "ublflati"),
  "base" => "vc_message",
  "icon" => "",
  "wrapper_class" => "alert",
  "category" => __('Content', 'ublflati'),
  "params" => array(
    array(
      "type" => "dropdown",
      "heading" => __("Message box type", "ublflati"),
      "param_name" => "color",
      "value" => array(__('Informational', "ublflati") => "alert-info", __('Warning', "ublflati") => "alert-block", __('Success', "ublflati") => "alert-success", __('Error', "ublflati") => "alert-error"),
      "description" => __("Select message type.", "ublflati")
    ),
    array(
      "type" => "textarea_html",
      "holder" => "div",
      "class" => "messagebox_text",
      "heading" => __("Message text", "ublflati"),
      "param_name" => "content",
      "value" => __("<p>I am message box. Click edit button to change this text.</p>", "ublflati")
    ),
    $add_css_animation,
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "ublflati"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "ublflati")
    )
  ),
  "js_view" => 'VcMessageView'
) );

/* Facebook like button
---------------------------------------------------------- */
vc_map( array(
  "name" => __("Facebook Like", "ublflati"),
  "base" => "vc_facebook",
  "icon" => "",
  "category" => __('Social', 'ublflati'),
  "params" => array(
    array(
      "type" => "dropdown",
      "heading" => __("Button type", "ublflati"),
      "param_name" => "type",
      "admin_label" => true,
      "value" => array(__("Standard", "ublflati") => "standard", __("Button count", "ublflati") => "button_count", __("Box count", "ublflati") => "box_count"),
      "description" => __("Select button type.", "ublflati")
    )
  )
) );

/* Tweetmeme button
---------------------------------------------------------- */
vc_map( array(
  "name" => __("Tweetmeme Button", "ublflati"),
  "base" => "vc_tweetmeme",
  "icon" => "",
  "category" => __('Social', 'ublflati'),
  "params" => array(
    array(
      "type" => "dropdown",
      "heading" => __("Button type", "ublflati"),
      "param_name" => "type",
      "admin_label" => true,
      "value" => array(__("Horizontal", "ublflati") => "horizontal", __("Vertical", "ublflati") => "vertical", __("None", "ublflati") => "none"),
      "description" => __("Select button type.", "ublflati")
    )
  )
) );

/* Google+ button
---------------------------------------------------------- */
vc_map( array(
  "name" => __("Google+ Button", "ublflati"),
  "base" => "vc_googleplus",
  "icon" => "",
  "category" => __('Social', 'ublflati'),
  "params" => array(
    array(
      "type" => "dropdown",
      "heading" => __("Button size", "ublflati"),
      "param_name" => "type",
      "admin_label" => true,
      "value" => array(__("Standard", "ublflati") => "", __("Small", "ublflati") => "small", __("Medium", "ublflati") => "medium", __("Tall", "ublflati") => "tall"),
      "description" => __("Select button size.", "ublflati")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Annotation", "ublflati"),
      "param_name" => "annotation",
      "admin_label" => true,
      "value" => array(__("Inline", "ublflati") => "inline", __("Bubble", "ublflati") => "", __("None", "ublflati") => "none"),
      "description" => __("Select annotation type.", "ublflati")
    )
  )
) );

/* Google+ button
---------------------------------------------------------- */
vc_map( array(
  "name" => __("Pinterest Button", "ublflati"),
  "base" => "vc_pinterest",
  "icon" => "",
  "category" => __('Social', 'ublflati'),
  "params"	=> array(
    array(
      "type" => "dropdown",
      "heading" => __("Button layout", "ublflati"),
      "param_name" => "type",
      "admin_label" => true,
      "value" => array(__("Horizontal", "ublflati") => "", __("Vertical", "ublflati") => "vertical", __("No count", "ublflati") => "none"),
      "description" => __("Select button layout.", "ublflati")
    )
  )
) );

/* Toggle (FAQ)
---------------------------------------------------------- */
vc_map( array(
  "name" => __("FAQ", "ublflati"),
  "base" => "vc_toggle",
  "icon" => "",
  "category" => __('Content', 'ublflati'),
  "params" => array(
    array(
      "type" => "textfield",
      "holder" => "h4",
      "class" => "toggle_title",
      "heading" => __("Toggle title", "ublflati"),
      "param_name" => "title",
      "value" => __("Toggle title", "ublflati"),
      "description" => __("Toggle block title.", "ublflati")
    ),
    array(
      "type" => "textarea_html",
      "holder" => "div",
      "class" => "toggle_content",
      "heading" => __("Toggle content", "ublflati"),
      "param_name" => "content",
      "value" => __("<p>Toggle content goes here, click edit button to change this text.</p>", "ublflati"),
      "description" => __("Toggle block content.", "ublflati")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Default state", "ublflati"),
      "param_name" => "open",
      "value" => array(__("Closed", "ublflati") => "false", __("Open", "ublflati") => "true"),
      "description" => __('Select "Open" if you want toggle to be open by default.', "ublflati")
    ),
    $add_css_animation,
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "ublflati"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "ublflati")
    )
  ),
  "js_view" => 'VcToggleView'
) );

/* Single image */
vc_map( array(
  "name" => __("Single Image", "ublflati"),
  "base" => "vc_single_image",
  "icon" => "",
  "category" => __('Content', 'ublflati'),
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Widget title", "ublflati"),
      "param_name" => "title",
      "description" => __("What text use as a widget title. Leave blank if no title is needed.", "ublflati")
    ),
    array(
      "type" => "attach_image",
      "heading" => __("Image", "ublflati"),
      "param_name" => "image",
      "value" => "",
      "description" => __("Select image from media library.", "ublflati")
    ),
    $add_css_animation,
    array(
      "type" => "textfield",
      "heading" => __("Image size", "ublflati"),
      "param_name" => "img_size",
      "description" => __("Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use 'thumbnail' size.", "ublflati")
    ),
    array(
      "type" => 'checkbox',
      "heading" => __("Link to large image?", "ublflati"),
      "param_name" => "img_link_large",
      "description" => __("If selected, image will be linked to the bigger image.", "ublflati"),
      "value" => Array(__("Yes, please", "ublflati") => 'yes')
    ),
    array(
      "type" => "textfield",
      "heading" => __("Image link", "ublflati"),
      "param_name" => "img_link",
      "description" => __("Enter url if you want this image to have link.", "ublflati"),
      "dependency" => Array('element' => "img_link_large", 'is_empty' => true, 'callback' => 'wpb_single_image_img_link_dependency_callback')
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Link Target", "ublflati"),
      "param_name" => "img_link_target",
      "value" => $target_arr,
      "dependency" => Array('element' => "img_link", 'not_empty' => true)
    ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "ublflati"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "ublflati")
    )
  )
));

/* Gallery/Slideshow
---------------------------------------------------------- */
vc_map( array(
  "name" => __("Image Gallery", "ublflati"),
  "base" => "vc_gallery",
  "icon" => "",
  "category" => __('Content', 'ublflati'),
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Widget title", "ublflati"),
      "param_name" => "title",
      "description" => __("What text use as a widget title. Leave blank if no title is needed.", "ublflati")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Gallery type", "ublflati"),
      "param_name" => "type",
      "value" => array(__("Flex slider fade", "ublflati") => "flexslider_fade", __("Flex slider slide", "ublflati") => "flexslider_slide", __("Nivo slider", "ublflati") => "nivo", __("Image grid", "ublflati") => "image_grid"),
      "description" => __("Select gallery type.", "ublflati")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Auto rotate slides", "ublflati"),
      "param_name" => "interval",
      "value" => array(3, 5, 10, 15, __("Disable", "ublflati") => 0),
      "description" => __("Auto rotate slides each X seconds.", "ublflati"),
      "dependency" => Array('element' => "type", 'value' => array('flexslider_fade', 'flexslider_slide', 'nivo'))
    ),
    array(
      "type" => "attach_images",
      "heading" => __("Images", "ublflati"),
      "param_name" => "images",
      "value" => "",
      "description" => __("Select images from media library.", "ublflati")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Image size", "ublflati"),
      "param_name" => "img_size",
      "description" => __("Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use 'thumbnail' size.", "ublflati")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("On click", "ublflati"),
      "param_name" => "onclick",
      "value" => array(__("Open prettyPhoto", "ublflati") => "link_image", __("Do nothing", "ublflati") => "link_no", __("Open custom link", "ublflati") => "custom_link"),
      "description" => __("What to do when slide is clicked?", "ublflati")
    ),
    array(
      "type" => "exploded_textarea",
      "heading" => __("Custom links", "ublflati"),
      "param_name" => "custom_links",
      "description" => __('Enter links for each slide here. Divide links with linebreaks (Enter).', 'ublflati'),
      "dependency" => Array('element' => "onclick", 'value' => array('custom_link'))
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Custom link target", "ublflati"),
      "param_name" => "custom_links_target",
      "description" => __('Select where to open  custom links.', 'ublflati'),
      "dependency" => Array('element' => "onclick", 'value' => array('custom_link')),
      'value' => $target_arr
    ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "ublflati"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "ublflati")
    )
  )
) );

/* Tabs
---------------------------------------------------------- */
$tab_id_1 = time().'-1-'.rand(0, 100);
$tab_id_2 = time().'-2-'.rand(0, 100);
vc_map( array(
  "name"  => __("Tabs", "ublflati"),
  "base" => "vc_tabs",
  "show_settings_on_create" => false,
  "is_container" => true,
  "icon" => "",
  "category" => __('Content', 'ublflati'),
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Widget title", "ublflati"),
      "param_name" => "title",
      "description" => __("What text use as a widget title. Leave blank if no title is needed.", "ublflati")
    ),
	array(
      "type" => "dropdown",
      "heading" => __("Tabs Type", "ublflati"),
      "param_name" => "tabtype",
      "value" => array(__("side tabs", "ublflati"),__("normal", "ublflati")),
      "description" => __("Choose From Normal Or Side Tabs", "ublflati")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "ublflati"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "ublflati")
    )
  ),
  "custom_markup" => '
  <div class="wpb_tabs_holder wpb_holder vc_container_for_children">
  <ul class="tabs_controls">
  </ul>
  %content%
  </div>'
  ,
  'default_content' => '
  [vc_tab title="'.__('Tab 1','ublflati').'" tab_id="'.$tab_id_1.'"][/vc_tab]
  [vc_tab title="'.__('Tab 2','ublflati').'" tab_id="'.$tab_id_2.'"][/vc_tab]
  ',
  "js_view" => ($vc_is_wp_version_3_6_more ? 'VcTabsView' : 'VcTabsView35')
) );

/* Tour section
---------------------------------------------------------- */
$tab_id_1 = time().'-1-'.rand(0, 100);
$tab_id_2 = time().'-2-'.rand(0, 100);
WPBMap::map( 'vc_tour', array(
  "name" => __("Tour Section", "ublflati"),
  "base" => "vc_tour",
  "show_settings_on_create" => false,
  "is_container" => true,
  "container_not_allowed" => true,
  "icon" => "",
  "category" => __('Content', 'ublflati'),
  "wrapper_class" => "clearfix",
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Widget title", "ublflati"),
      "param_name" => "title",
      "description" => __("What text use as a widget title. Leave blank if no title is needed.", "ublflati")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Auto rotate slides", "ublflati"),
      "param_name" => "interval",
      "value" => array(__("Disable", "ublflati") => 0, 3, 5, 10, 15),
      "description" => __("Auto rotate slides each X seconds.", "ublflati")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "ublflati"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "ublflati")
    )
  ),
  "custom_markup" => '  
  <div class="wpb_tabs_holder wpb_holder clearfix vc_container_for_children">
  <ul class="tabs_controls">
  </ul>
  %content%
  </div>'
  ,
  'default_content' => '
  [vc_tab title="'.__('Slide 1','ublflati').'" tab_id="'.$tab_id_1.'"][/vc_tab]
  [vc_tab title="'.__('Slide 2','ublflati').'" tab_id="'.$tab_id_2.'"][/vc_tab]
  ',
  "js_view" => ($vc_is_wp_version_3_6_more ? 'VcTabsView' : 'VcTabsView35')
) );

vc_map( array(
  "name" => __("Tab", "ublflati"),
  "base" => "vc_tab",
  "allowed_container_element" => 'vc_row',
  "is_container" => true,
  "content_element" => false,
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Title", "ublflati"),
      "param_name" => "title",
      "description" => __("Tab title.", "ublflati")
    ),
    array(
      "type" => "tab_id",
      "heading" => __("Tab ID", "ublflati"),
      "param_name" => "tab_id"
    )
  ),
  'js_view' => ($vc_is_wp_version_3_6_more ? 'VcTabView' : 'VcTabView35')
) );

/* Accordion block
---------------------------------------------------------- */
vc_map( array(
  "name" => __("Accordion", "ublflati"),
  "base" => "vc_accordion",
  "show_settings_on_create" => false,
  "is_container" => true,
  "icon" => "",
  "category" => __('Content', 'ublflati'),
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Widget title", "ublflati"),
      "param_name" => "title",
      "description" => __("What text use as a widget title. Leave blank if no title is needed.", "ublflati")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "ublflati"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "ublflati")
    )
  ),
  "custom_markup" => '
  <div class="wpb_accordion_holder wpb_holder clearfix vc_container_for_children">
  %content%
  </div>
  <div class="tab_controls">
  <button class="add_tab" title="'.__("Add accordion section", "ublflati").'">'.__("Add accordion section", "ublflati").'</button>
  </div>
  ',
  'default_content' => '
  [vc_accordion_tab title="'.__('Section 1', "ublflati").'"][/vc_accordion_tab]
  [vc_accordion_tab title="'.__('Section 2', "ublflati").'"][/vc_accordion_tab]
  ',
  'js_view' => 'VcAccordionView'
) );
vc_map( array(
  "name" => __("Accordion Section", "ublflati"),
  "base" => "vc_accordion_tab",
  "allowed_container_element" => 'vc_row',
  "is_container" => true,
  "content_element" => false,
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Title", "ublflati"),
      "param_name" => "title",
      "description" => __("Accordion section title.", "ublflati")
    ),
  ),
  'js_view' => 'VcAccordionTabView'
) );

/* Teaser grid
---------------------------------------------------------- */
vc_map( array(
  "name" => __("Teaser (posts) Grid", "ublflati"),
  "base" => "vc_teaser_grid",
  "icon" => "",
  "category" => __('Content', 'ublflati'),
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Widget title", "ublflati"),
      "param_name" => "title",
      "description" => __("What text use as a widget title. Leave blank if no title is needed.", "ublflati")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Columns count", "ublflati"),
      "param_name" => "grid_columns_count",
      "value" => array(4, 3, 2, 1),
      "admin_label" => true,
      "description" => __("Select columns count.", "ublflati")
    ),
    array(
      "type" => "posttypes",
      "heading" => __("Post types", "ublflati"),
      "param_name" => "grid_posttypes",
      "description" => __("Select post types to populate posts from.", "ublflati")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Teasers count", "ublflati"),
      "param_name" => "grid_teasers_count",
      "description" => __('How many teasers to show? Enter number or word "All".', "ublflati")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Content", "ublflati"),
      "param_name" => "grid_content",
      "value" => array(__("Teaser (Excerpt)", "ublflati") => "teaser", __("Full Content", "ublflati") => "content"),
      "description" => __("Teaser layout template.", "ublflati")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Layout", "ublflati"),
      "param_name" => "grid_layout",
      "value" => array(__("Title + Thumbnail + Text", "ublflati") => "title_thumbnail_text", __("Thumbnail + Title + Text", "ublflati") => "thumbnail_title_text", __("Thumbnail + Text", "ublflati") => "thumbnail_text", __("Thumbnail + Title", "ublflati") => "thumbnail_title", __("Thumbnail only", "ublflati") => "thumbnail", __("Title + Text", "ublflati") => "title_text"),
      "description" => __("Teaser layout.", "ublflati")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Link", "ublflati"),
      "param_name" => "grid_link",
      "value" => array(__("Link to post", "ublflati") => "link_post", __("Link to bigger image", "ublflati") => "link_image", __("Thumbnail to bigger image, title to post", "ublflati") => "link_image_post", __("No link", "ublflati") => "link_no"),
      "description" => __("Link type.", "ublflati")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Link target", "ublflati"),
      "param_name" => "grid_link_target",
      "value" => $target_arr,
      "dependency" => Array('element' => "grid_link", 'value' => array('link_post', 'link_image_post'))
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Teaser grid layout", "ublflati"),
      "param_name" => "grid_template",
      "value" => array(__("Grid", "ublflati") => "grid", __("Grid with filter", "ublflati") => "filtered_grid", __("Carousel", "ublflati") => "carousel"),
      "description" => __("Teaser layout template.", "ublflati")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Layout mode", "ublflati"),
      "param_name" => "grid_layout_mode",
      "value" => array(__("Fit rows", "ublflati") => "fitRows", __('Masonry', "ublflati") => 'masonry'),
      "dependency" => Array('element' => 'grid_template', 'value' => array('filtered_grid', 'grid')),
      "description" => __("Teaser layout template.", "ublflati")
    ),
    array(
      "type" => "taxonomies",
      "heading" => __("Taxonomies", "ublflati"),
      "param_name" => "grid_taxomonies",
      "dependency" => Array('element' => 'grid_template' /*, 'not_empty' => true*/, 'value' => array('filtered_grid'), 'callback' => 'wpb_grid_post_types_for_taxonomies_handler'),
      "description" => __("Select taxonomies from.", "ublflati") //TODO: Change description
    ),
    array(
      "type" => "textfield",
      "heading" => __("Thumbnail size", "ublflati"),
      "param_name" => "grid_thumb_size",
      "description" => __('Enter thumbnail size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height).', "ublflati")
    ),  
    array(
      "type" => "textfield",
      "heading" => __("Post/Page IDs", "ublflati"),
      "param_name" => "posts_in",
      "description" => __('Fill this field with page/posts IDs separated by commas (,) to retrieve only them. Use this in conjunction with "Post types" field.', "ublflati")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Exclude Post/Page IDs", "ublflati"),
      "param_name" => "posts_not_in",
      "description" => __('Fill this field with page/posts IDs separated by commas (,) to exclude them from query.', "ublflati")
    ),
    array(
      "type" => "exploded_textarea",
      "heading" => __("Categories", "ublflati"),
      "param_name" => "grid_categories",
      "description" => __("If you want to narrow output, enter category names here. Note: Only listed categories will be included. Divide categories with linebreaks (Enter).", "ublflati")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Order by", "ublflati"),
      "param_name" => "orderby",
      "value" => array( "", __("Date", "ublflati") => "date", __("ID", "ublflati") => "ID", __("Author", "ublflati") => "author", __("Title", "ublflati") => "title", __("Modified", "ublflati") => "modified", __("Random", "ublflati") => "rand", __("Comment count", "ublflati") => "comment_count", __("Menu order", "ublflati") => "menu_order" ),
      "description" => sprintf(__('Select how to sort retrieved posts. More at %s.', 'ublflati'), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>')
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Order way", "ublflati"),
      "param_name" => "order",
      "value" => array( __("Descending", "ublflati") => "DESC", __("Ascending", "ublflati") => "ASC" ),
      "description" => sprintf(__('Designates the ascending or descending order. More at %s.', 'ublflati'), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>')
    ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "ublflati"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "ublflati")
    )
  )
) );

/* Posts slider
---------------------------------------------------------- */
vc_map( array(
  "name" => __("Posts Slider", "ublflati"),
  "base" => "vc_posts_slider",
  "icon" => "",
  "category" => __('Content', 'ublflati'),
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Widget title", "ublflati"),
      "param_name" => "title",
      "description" => __("What text use as a widget title. Leave blank if no title is needed.", "ublflati")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Slider type", "ublflati"),
      "param_name" => "type",
      "admin_label" => true,
      "value" => array(__("Flex slider fade", "ublflati") => "flexslider_fade", __("Flex slider slide", "ublflati") => "flexslider_slide", __("Nivo slider", "ublflati") => "nivo"),
      "description" => __("Select slider type.", "ublflati")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Slides count", "ublflati"),
      "param_name" => "count",
      "description" => __('How many slides to show? Enter number or word "All".', "ublflati")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Auto rotate slides", "ublflati"),
      "param_name" => "interval",
      "value" => array(3, 5, 10, 15, __("Disable", "ublflati") => 0),
      "description" => __("Auto rotate slides each X seconds.", "ublflati")
    ),
    array(
      "type" => "posttypes",
      "heading" => __("Post types", "ublflati"),
      "param_name" => "posttypes",
      "description" => __("Select post types to populate posts from.", "ublflati")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Description", "ublflati"),
      "param_name" => "slides_content",
      "value" => array(__("No description", "ublflati") => "", __("Teaser (Excerpt)", "ublflati") => "teaser" ),
      "description" => __("Some sliders support description text, what content use for it?", "ublflati"),
      "dependency" => Array('element' => "type", 'value' => array('flexslider_fade', 'flexslider_slide')),
    ),
    array(
      "type" => 'checkbox',
      "heading" => __("Output post title?", "ublflati"),
      "param_name" => "slides_title",
      "description" => __("If selected, title will be printed before the teaser text.", "ublflati"),
      "value" => Array(__("Yes, please", "ublflati") => true),
      "dependency" => Array('element' => "slides_content", 'value' => array('teaser')),
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Link", "ublflati"),
      "param_name" => "link",
      "value" => array(__("Link to post", "ublflati") => "link_post", __("Link to bigger image", "ublflati") => "link_image", __("Open custom link", "ublflati") => "custom_link", __("No link", "ublflati") => "link_no"),
      "description" => __("Link type.", "ublflati")
    ),
    array(
      "type" => "exploded_textarea",
      "heading" => __("Custom links", "ublflati"),
      "param_name" => "custom_links",
      "dependency" => Array('element' => "link", 'value' => 'custom_link'),
      "description" => __('Enter links for each slide here. Divide links with linebreaks (Enter).', 'ublflati')
    ),
    array(
      "type" => "textfield",
      "heading" => __("Thumbnail size", "ublflati"),
      "param_name" => "thumb_size",
      "description" => __('Enter thumbnail size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height).', "ublflati")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Post/Page IDs", "ublflati"),
      "param_name" => "posts_in",
      "description" => __('Fill this field with page/posts IDs separated by commas (,), to retrieve only them. Use this in conjunction with "Post types" field.', "ublflati")
    ),
    array(
      "type" => "exploded_textarea",
      "heading" => __("Categories", "ublflati"),
      "param_name" => "categories",
      "description" => __("If you want to narrow output, enter category names here. Note: Only listed categories will be included. Divide categories with linebreaks (Enter).", "ublflati")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Order by", "ublflati"),
      "param_name" => "orderby",
      "value" => array( "", __("Date", "ublflati") => "date", __("ID", "ublflati") => "ID", __("Author", "ublflati") => "author", __("Title", "ublflati") => "title", __("Modified", "ublflati") => "modified", __("Random", "ublflati") => "rand", __("Comment count", "ublflati") => "comment_count", __("Menu order", "ublflati") => "menu_order" ),
      "description" => sprintf(__('Select how to sort retrieved posts. More at %s.', 'ublflati'), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>')
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Order by", "ublflati"),
      "param_name" => "order",
      "value" => array( __("Descending", "ublflati") => "DESC", __("Ascending", "ublflati") => "ASC" ),
      "description" => sprintf(__('Designates the ascending or descending order. More at %s.', 'ublflati'), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>')
    ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "ublflati"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "ublflati")
    )
  )
) );

/* Widgetised sidebar
---------------------------------------------------------- */
vc_map( array(
  "name" => __("Widgetised Sidebar", "ublflati"),
  "base" => "vc_widget_sidebar",
  "class" => "wpb_widget_sidebar_widget",
  "icon" => "",
  "category" => __('Structure', 'ublflati'),
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Widget title", "ublflati"),
      "param_name" => "title",
      "description" => __("What text use as a widget title. Leave blank if no title is needed.", "ublflati")
    ),
    array(
      "type" => "widgetised_sidebars",
      "heading" => __("Sidebar", "ublflati"),
      "param_name" => "sidebar_id",
      "description" => __("Select which widget area output.", "ublflati")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "ublflati"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "ublflati")
    )
  )
) );

/* Button
---------------------------------------------------------- */
$icons_arr = array(
    __("None", "ublflati") => "none",
    __("Address book icon", "ublflati") => "wpb_address_book",
    __("Alarm clock icon", "ublflati") => "wpb_alarm_clock",
    __("Anchor icon", "ublflati") => "wpb_anchor",
    __("Application Image icon", "ublflati") => "wpb_application_image",
    __("Arrow icon", "ublflati") => "wpb_arrow",
    __("Asterisk icon", "ublflati") => "wpb_asterisk",
    __("Hammer icon", "ublflati") => "wpb_hammer",
    __("Balloon icon", "ublflati") => "wpb_balloon",
    __("Balloon Buzz icon", "ublflati") => "wpb_balloon_buzz",
    __("Balloon Facebook icon", "ublflati") => "wpb_balloon_facebook",
    __("Balloon Twitter icon", "ublflati") => "wpb_balloon_twitter",
    __("Battery icon", "ublflati") => "wpb_battery",
    __("Binocular icon", "ublflati") => "wpb_binocular",
    __("Document Excel icon", "ublflati") => "wpb_document_excel",
    __("Document Image icon", "ublflati") => "wpb_document_image",
    __("Document Music icon", "ublflati") => "wpb_document_music",
    __("Document Office icon", "ublflati") => "wpb_document_office",
    __("Document PDF icon", "ublflati") => "wpb_document_pdf",
    __("Document Powerpoint icon", "ublflati") => "wpb_document_powerpoint",
    __("Document Word icon", "ublflati") => "wpb_document_word",
    __("Bookmark icon", "ublflati") => "wpb_bookmark",
    __("Camcorder icon", "ublflati") => "wpb_camcorder",
    __("Camera icon", "ublflati") => "wpb_camera",
    __("Chart icon", "ublflati") => "wpb_chart",
    __("Chart pie icon", "ublflati") => "wpb_chart_pie",
    __("Clock icon", "ublflati") => "wpb_clock",
    __("Fire icon", "ublflati") => "wpb_fire",
    __("Heart icon", "ublflati") => "wpb_heart",
    __("Mail icon", "ublflati") => "wpb_mail",
    __("Play icon", "ublflati") => "wpb_play",
    __("Shield icon", "ublflati") => "wpb_shield",
    __("Video icon", "ublflati") => "wpb_video"
);

vc_map( array(
  "name" => __("Button", "ublflati"),
  "base" => "vc_button",
  "icon" => "",
  "category" => __('Content', 'ublflati'),
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Text on the button", "ublflati"),
      "holder" => "button",
      "class" => "wpb_button",
      "param_name" => "title",
      "value" => __("Text on the button", "ublflati"),
      "description" => __("Text on the button.", "ublflati")
    ),
    array(
      "type" => "textfield",
      "heading" => __("URL (Link)", "ublflati"),
      "param_name" => "href",
      "description" => __("Button link.", "ublflati")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Target", "ublflati"),
      "param_name" => "target",
      "value" => $target_arr,
      "dependency" => Array('element' => "href", 'not_empty' => true)
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Color", "ublflati"),
      "param_name" => "color",
      "value" => $colors_arr,
      "description" => __("Button color.", "ublflati")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Icon", "ublflati"),
      "param_name" => "icon",
      "value" => $icons_arr,
      "description" => __("Button icon.", "ublflati")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Size", "ublflati"),
      "param_name" => "size",
      "value" => $size_arr,
      "description" => __("Button size.", "ublflati")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "ublflati"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "ublflati")
    )
  ),
  "js_view" => 'VcButtonView'
) );

/* Call to Action Button
---------------------------------------------------------- */
vc_map( array(
  "name" => __("Call to Action Button", "ublflati"),
  "base" => "vc_cta_button",
  "icon" => "",
  "category" => __('Content', 'ublflati'),
  "params" => array(
    array(
      "type" => "textarea",
      'admin_label' => true,
      "heading" => __("Text", "ublflati"),
      "param_name" => "call_text",
      "value" => __("Click edit button to change this text.", "ublflati"),
      "description" => __("Enter your content.", "ublflati")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Text on the button", "ublflati"),
      "param_name" => "title",
      "value" => __("Text on the button", "ublflati"),
      "description" => __("Text on the button.", "ublflati")
    ),
    array(
      "type" => "textfield",
      "heading" => __("URL (Link)", "ublflati"),
      "param_name" => "href",
      "description" => __("Button link.", "ublflati")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Target", "ublflati"),
      "param_name" => "target",
      "value" => $target_arr,
      "dependency" => Array('element' => "href", 'not_empty' => true)
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Color", "ublflati"),
      "param_name" => "color",
      "value" => $colors_arr,
      "description" => __("Button color.", "ublflati")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Icon", "ublflati"),
      "param_name" => "icon",
      "value" => $icons_arr,
      "description" => __("Button icon.", "ublflati")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Size", "ublflati"),
      "param_name" => "size",
      "value" => $size_arr,
      "description" => __("Button size.", "ublflati")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Button position", "ublflati"),
      "param_name" => "position",
      "value" => array(__("Align right", "ublflati") => "cta_align_right", __("Align left", "ublflati") => "cta_align_left", __("Align bottom", "ublflati") => "cta_align_bottom"),
      "description" => __("Select button alignment.", "ublflati")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "ublflati"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "ublflati")
    )
  ),
  "js_view" => 'VcCallToActionView'
) );

/* Video element
---------------------------------------------------------- */
vc_map( array(
  "name" => __("Video Player", "ublflati"),
  "base" => "vc_video",
  "icon" => "",
  "category" => __('Content', 'ublflati'),
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Widget title", "ublflati"),
      "param_name" => "title",
      "description" => __("What text use as a widget title. Leave blank if no title is needed.", "ublflati")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Video link", "ublflati"),
      "param_name" => "link",
      "admin_label" => true,
      "description" => sprintf(__('Link to the video. More about supported formats at %s.', "ublflati"), '<a href="http://codex.wordpress.org/Embeds#Okay.2C_So_What_Sites_Can_I_Embed_From.3F" target="_blank">WordPress codex page</a>')
    ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "ublflati"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "ublflati")
    )
  )
) );

/* Google maps element
---------------------------------------------------------- */
vc_map( array(
  "name" => __("Google Maps", "ublflati"),
  "base" => "vc_gmaps",
  "icon" => "",
  "category" => __('Content', 'ublflati'),
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Widget title", "ublflati"),
      "param_name" => "title",
      "description" => __("What text use as a widget title. Leave blank if no title is needed.", "ublflati")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Google map link", "ublflati"),
      "param_name" => "link",
      "admin_label" => true,
      "description" => sprintf(__('Link to your map. Visit %s find your address and then click "Link" button to obtain your map link.', "ublflati"), '<a href="http://maps.google.com" target="_blank">Google maps</a>')
    ),
    array(
      "type" => "textfield",
      "heading" => __("Map height", "ublflati"),
      "param_name" => "size",
      "description" => __('Enter map height in pixels. Example: 200.', "ublflati")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Map type", "ublflati"),
      "param_name" => "type",
      "value" => array(__("Map", "ublflati") => "m", __("Satellite", "ublflati") => "k", __("Map + Terrain", "ublflati") => "p"),
      "description" => __("Select map type.", "ublflati")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Map Zoom", "ublflati"),
      "param_name" => "zoom",
      "value" => array(__("14 - Default", "ublflati") => 14, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 15, 16, 17, 18, 19, 20)
    ),
    array(
      "type" => 'checkbox',
      "heading" => __("Remove info bubble", "ublflati"),
      "param_name" => "bubble",
      "description" => __("If selected, information bubble will be hidden.", "ublflati"),
      "value" => Array(__("Yes, please", "ublflati") => true),
    ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "ublflati"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "ublflati")
    )
  )
) );

/* Raw HTML
---------------------------------------------------------- */
vc_map( array(
  "name" => __("Raw HTML", "ublflati"),
	"base" => "vc_raw_html",
	"icon" => "",
	"category" => __('Structure', 'ublflati'),
	"wrapper_class" => "clearfix",
	"params" => array(
		array(
  		"type" => "textarea_raw_html",
			"holder" => "div",
			"heading" => __("Raw HTML", "ublflati"),
			"param_name" => "content",
			"value" => base64_encode("<p>I am raw html block.<br/>Click edit button to change this html</p>"),
			"description" => __("Enter your HTML content.", "ublflati")
		),
	)
) );

/* Raw JS
---------------------------------------------------------- */
vc_map( array(
	"name" => __("Raw JS", "ublflati"),
	"base" => "vc_raw_js",
	"icon" => "",
	"category" => __('Structure', 'ublflati'),
	"wrapper_class" => "clearfix",
	"params" => array(
  	array(
  		"type" => "textarea_raw_html",
			"holder" => "div",
			"heading" => __("Raw js", "ublflati"),
			"param_name" => "content",
			"value" => __(base64_encode("<script type='text/javascript'> alert('Enter your js here!'); </script>"), "ublflati"),
			"description" => __("Enter your JS code.", "ublflati")
		),
	)
) );

/* Flickr
---------------------------------------------------------- */
vc_map( array(
  "base" => "vc_flickr",
  "name" => __("Flickr Widget", "ublflati"),
  "icon" => "",
  "category" => __('Content', 'ublflati'),
  "params"	=> array(
    array(
      "type" => "textfield",
      "heading" => __("Widget title", "ublflati"),
      "param_name" => "title",
      "description" => __("What text use as a widget title. Leave blank if no title is needed.", "ublflati")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Flickr ID", "ublflati"),
      "param_name" => "flickr_id",
      'admin_label' => true,
      "description" => sprintf(__('To find your flickID visit %s.', "ublflati"), '<a href="http://idgettr.com/" target="_blank">idGettr</a>')
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Number of photos", "ublflati"),
      "param_name" => "count",
      "value" => array(9, 8, 7, 6, 5, 4, 3, 2, 1),
      "description" => __("Number of photos.", "ublflati")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Type", "ublflati"),
      "param_name" => "type",
      "value" => array(__("User", "ublflati") => "user", __("Group", "ublflati") => "group"),
      "description" => __("Photo stream type.", "ublflati")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Display", "ublflati"),
      "param_name" => "display",
      "value" => array(__("Latest", "ublflati") => "latest", __("Random", "ublflati") => "random"),
      "description" => __("Photo order.", "ublflati")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "ublflati"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "ublflati")
    )
  )
) );


/* Graph
---------------------------------------------------------- */
vc_map( array(
  "name" => __("Progress Bar", "ublflati"),
  "base" => "vc_progress_bar",
  "icon" => "",
  "category" => __('Content', 'ublflati'),
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Widget title", "ublflati"),
      "param_name" => "title",
      "description" => __("What text use as a widget title. Leave blank if no title is needed.", "ublflati")
    ),
    array(
      "type" => "exploded_textarea",
      "heading" => __("Graphic values", "ublflati"),
      "param_name" => "values",
      "description" => __('Input graph values here. Divide values with linebreaks (Enter). Example: 90|Development', 'ublflati'),
      "value" => "90|Development,80|Design,70|Marketing"
    ),
    array(
      "type" => "textfield",
      "heading" => __("Units", "ublflati"),
      "param_name" => "units",
      "description" => __("Enter measurement units (if needed) Eg. %, px, points, etc. Graph value and unit will be appended to the graph title.", "ublflati")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Bar color", "ublflati"),
      "param_name" => "bgcolor",
      "value" => array(__("Grey", "ublflati") => "bar_grey", __("Blue", "ublflati") => "bar_blue", __("Turquoise", "ublflati") => "bar_turquoise", __("Green", "ublflati") => "bar_green", __("Orange", "ublflati") => "bar_orange", __("Red", "ublflati") => "bar_red", __("Black", "ublflati") => "bar_black", __("Custom Color", "ublflati") => "custom"),
      "description" => __("Select bar background color.", "ublflati"),
      "admin_label" => true
    ),
    array(
      "type" => "colorpicker",
      "heading" => __("Bar custom color", "ublflati"),
      "param_name" => "custombgcolor",
      "description" => __("Select custom background color for bars.", "ublflati"),
      "dependency" => Array('element' => "bgcolor", 'value' => array('custom'))
    ),
    array(
      "type" => "checkbox",
      "heading" => __("Options", "ublflati"),
      "param_name" => "options",
      "value" => array(__("Add Stripes?", "ublflati") => "striped", __("Add animation? Will be visible with striped bars.", "ublflati") => "animated")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "ublflati"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "ublflati")
    )
  )
) );

/**
 * Pic chat
 */
vc_map( array(
    "name" => __("Pie chart", 'vc_extend'),
    "base" => "vc_pie",
    "class" => "",
    "icon" => "",
    "category" => __('Content', 'ublflati'),
    "params" => array(
        array(
            "type" => "textfield",
            "heading" => __("Widget title", "ublflati"),
            "param_name" => "title",
            "description" => __("What text use as a widget title. Leave blank if no title is needed.", "ublflati"),
            "admin_label" => true
        ),
        array(
            "type" => "textfield",
            "heading" => __("Pie value", "ublflati"),
            "param_name" => "value",
            "description" => __('Input graph value here. Witihn a range 0-100.', 'ublflati'),
            "value" => "50",
            "admin_label" => true
        ),
        array(
            "type" => "textfield",
            "heading" => __("Pie label value", "ublflati"),
            "param_name" => "label_value",
            "description" => __('Input integer value for label. If empty "Pie value" will be used.', 'ublflati'),
            "value" => ""
        ),
        array(
            "type" => "textfield",
            "heading" => __("Units", "ublflati"),
            "param_name" => "units",
            "description" => __("Enter measurement units (if needed) Eg. %, px, points, etc. Graph value and unit will be appended to the graph title.", "ublflati")
        ),
        array(
            "type" => "dropdown",
            "heading" => __("Bar color", "ublflati"),
            "param_name" => "color",
            "value" => $colors_arr,//$pie_colors,
            "description" => __("Select pie chart color.", "ublflati"),
            "admin_label" => true
        ),
        array(
            "type" => "textfield",
            "heading" => __("Extra class name", "ublflati"),
            "param_name" => "el_class",
            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "ublflati")
        ),

    )
) );


/* Support for 3rd Party plugins
---------------------------------------------------------- */
// Contact form 7 plugin
include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); // Require plugin.php to use is_plugin_active() below
if (is_plugin_active('contact-form-7/wp-contact-form-7.php')) {
  global $wpdb;
  $cf7 = $wpdb->get_results( 
  	"
  	SELECT ID, post_title 
  	FROM $wpdb->posts
  	WHERE post_type = 'wpcf7_contact_form' 
  	"
  );
  $contact_forms = array();
  if ($cf7) {
    foreach ( $cf7 as $cform ) {
      $contact_forms[$cform->post_title] = $cform->ID;
    }
  } else {
    $contact_forms["No contact forms found"] = 0;
  }
  vc_map( array(
    "base" => "contact-form-7",
    "name" => __("Contact Form 7", "ublflati"),
    "icon" => "",
    "category" => __('Content', 'ublflati'),
    "params" => array(
      array(
        "type" => "textfield",
        "heading" => __("Form title", "ublflati"),
        "param_name" => "title",
        "admin_label" => true,
        "description" => __("What text use as form title. Leave blank if no title is needed.", "ublflati")
      ),
      array(
        "type" => "dropdown",
        "heading" => __("Select contact form", "ublflati"),
        "param_name" => "id",
        "value" => $contact_forms,
        "description" => __("Choose previously created contact form from the drop down list.", "ublflati")
      )
    )
  ) );
} // if contact form7 plugin active

if (is_plugin_active('LayerSlider/layerslider.php')) {
  global $wpdb;
  $ls = $wpdb->get_results( 
  	"
  	SELECT id, name, date_c
  	FROM ".$wpdb->prefix."layerslider
  	WHERE flag_hidden = '0' AND flag_deleted = '0'
  	ORDER BY date_c ASC LIMIT 100
  	"
  );
  $layer_sliders = array();
  if ($ls) {
    foreach ( $ls as $slider ) {
      $layer_sliders[$slider->name] = $slider->id;
    }
  } else {
    $layer_sliders["No sliders found"] = 0;
  }
  vc_map( array(
    "base" => "layerslider_vc",
    "name" => __("Layer Slider", "ublflati"),
    "icon" => "",
    "category" => __('Content', 'ublflati'),
    "params" => array(
      array(
        "type" => "textfield",
        "heading" => __("Widget title", "ublflati"),
        "param_name" => "title",
        "description" => __("What text use as a widget title. Leave blank if no title is needed.", "ublflati")
      ),
      array(
        "type" => "dropdown",
        "heading" => __("LayerSlider ID", "ublflati"),
        "param_name" => "id",
        "admin_label" => true,
        "value" => $layer_sliders,
        "description" => __("Select your LayerSlider.", "ublflati")
      ),
      array(
        "type" => "textfield",
        "heading" => __("Extra class name", "ublflati"),
        "param_name" => "el_class",
        "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "ublflati")
      )
    )
  ) );
} // if layer slider plugin active

if (is_plugin_active('revslider/revslider.php')) {
  global $wpdb;
  $rs = $wpdb->get_results( 
  	"
  	SELECT id, title, alias
  	FROM ".$wpdb->prefix."revslider_sliders
  	ORDER BY id ASC LIMIT 100
  	"
  );
  $revsliders = array();
  if ($rs) {
    foreach ( $rs as $slider ) {
      $revsliders[$slider->title] = $slider->alias;
    }
  } else {
    $revsliders["No sliders found"] = 0;
  }
  vc_map( array(
    "base" => "rev_slider_vc",
    "name" => __("Revolution Slider", "ublflati"),
    "icon" => "",
    "category" => __('Sliders', 'ublflati'),
    "params"=> array(
      array(
        "type" => "textfield",
        "heading" => __("Widget title", "ublflati"),
        "param_name" => "title",
        "description" => __("What text use as a widget title. Leave blank if no title is needed.", "ublflati")
      ),
      array(
        "type" => "dropdown",
        "heading" => __("Revolution Slider", "ublflati"),
        "param_name" => "alias",
        "admin_label" => true,
        "value" => $revsliders,
        "description" => __("Select your Revolution Slider.", "ublflati")
      ),
      array(
        "type" => "textfield",
        "heading" => __("Extra class name", "ublflati"),
        "param_name" => "el_class",
        "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "ublflati")
      )
    )
  ) );
} // if revslider plugin active

if (is_plugin_active('gravityforms/gravityforms.php')) {
  $gravity_forms_array[__("No Gravity forms found.", "ublflati")] = '';
  if ( class_exists('RGFormsModel') ) {
    $gravity_forms = RGFormsModel::get_forms(1, "title");
    if ($gravity_forms) {
      $gravity_forms_array = array(__("Select a form to display.", "ublflati") => '');
      foreach ( $gravity_forms as $gravity_form ) {
        $gravity_forms_array[$gravity_form->title] = $gravity_form->id;
      }
    }
  }
  vc_map( array(
    "name" => __("Gravity Form", "ublflati"),
    "base" => "gravityform",
    "icon" => "",
    "category" => __("Content", "ublflati"),
    "params" => array(
      array(
        "type" => "dropdown",
        "heading" => __("Form", "ublflati"),
        "param_name" => "id",
        "value" => $gravity_forms_array,
        "description" => __("Select a form to add it to your post or page.", "ublflati"),
        "admin_label" => true
      ),
      array(
        "type" => "dropdown",
        "heading" => __("Display Form Title", "ublflati"),
        "param_name" => "title",
        "value" => array( __("No", "ublflati") => 'false', __("Yes", "ublflati") => 'true' ),
        "description" => __("Would you like to display the forms title?", "ublflati"),
        "dependency" => Array('element' => "id", 'not_empty' => true)
      ),
      array(
        "type" => "dropdown",
        "heading" => __("Display Form Description", "ublflati"),
        "param_name" => "description",
        "value" => array( __("No", "ublflati") => 'false', __("Yes", "ublflati") => 'true' ),
        "description" => __("Would you like to display the forms description?", "ublflati"),
        "dependency" => Array('element' => "id", 'not_empty' => true)
      ),
      array(
        "type" => "dropdown",
        "heading" => __("Enable AJAX?", "ublflati"),
        "param_name" => "ajax",
        "value" => array( __("No", "ublflati") => 'false', __("Yes", "ublflati") => 'true' ),
        "description" => __("Enable AJAX submission?", "ublflati"),
        "dependency" => Array('element' => "id", 'not_empty' => true)
      ),
      array(
        "type" => "textfield",
        "heading" => __("Tab Index", "ublflati"),
        "param_name" => "tabindex",
        "description" => __("(Optional) Specify the starting tab index for the fields of this form. Leave blank if you're not sure what this is.", "ublflati"),
        "dependency" => Array('element' => "id", 'not_empty' => true)
      )
    )
  ) );
} // if gravityforms active

/* WordPress default Widgets (Appearance->Widgets)
---------------------------------------------------------- */
vc_map( array(
  "name" => 'WP ' . __("Search", "ublflati"),
  "base" => "vc_wp_search",
  "icon" => "",
  "category" => __("WordPress Widgets", "ublflati"),
  "class" => "wpb_vc_wp_widget",
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Widget title", "ublflati"),
      "param_name" => "title",
      "description" => __("What text use as a widget title. Leave blank to use default widget title.", "ublflati")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "ublflati"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "ublflati")
    )
  )
) );

vc_map( array(
  "name" => 'WP ' . __("Meta", "ublflati"),
  "base" => "vc_wp_meta",
  "icon" => "",
  "category" => __("WordPress Widgets", "ublflati"),
  "class" => "wpb_vc_wp_widget",
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Widget title", "ublflati"),
      "param_name" => "title",
      "description" => __("What text use as a widget title. Leave blank to use default widget title.", "ublflati")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "ublflati"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "ublflati")
    )
  )
) );

vc_map( array(
  "name" => 'WP ' . __("Recent Comments", "ublflati"),
  "base" => "vc_wp_recentcomments",
  "icon" => "",
  "category" => __("WordPress Widgets", "ublflati"),
  "class" => "wpb_vc_wp_widget",
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Widget title", "ublflati"),
      "param_name" => "title",
      "description" => __("What text use as a widget title. Leave blank to use default widget title.", "ublflati")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Number of comments to show", "ublflati"),
      "param_name" => "number",
      "admin_label" => true
    ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "ublflati"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "ublflati")
    )
  )
) );

vc_map( array(
  "name" => 'WP ' . __("Calendar", "ublflati"),
  "base" => "vc_wp_calendar",
  "icon" => "",
  "category" => __("WordPress Widgets", "ublflati"),
  "class" => "wpb_vc_wp_widget",
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Widget title", "ublflati"),
      "param_name" => "title",
      "description" => __("What text use as a widget title. Leave blank to use default widget title.", "ublflati")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "ublflati"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "ublflati")
    )
  )
) );

vc_map( array(
  "name" => 'WP ' . __("Pages", "ublflati"),
  "base" => "vc_wp_pages",
  "icon" => "",
  "category" => __("WordPress Widgets", "ublflati"),
  "class" => "wpb_vc_wp_widget",
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Widget title", "ublflati"),
      "param_name" => "title",
      "description" => __("What text use as a widget title. Leave blank to use default widget title.", "ublflati")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Sort by", "ublflati"),
      "param_name" => "sortby",
      "value" => array(__("Page title", "ublflati") => "post_title", __("Page order", "ublflati") => "menu_order", __("Page ID", "ublflati") => "ID"),
      "admin_label" => true
    ),
    array(
      "type" => "textfield",
      "heading" => __("Exclude", "ublflati"),
      "param_name" => "exclude",
      "description" => __("Page IDs, separated by commas.", "ublflati"),
      "admin_label" => true
    ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "ublflati"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "ublflati")
    )
  )
) );

$tag_taxonomies = array();
foreach ( get_taxonomies() as $taxonomy ) :
  $tax = get_taxonomy($taxonomy);
	if ( !$tax->show_tagcloud || empty($tax->labels->name) )
  	continue;
	$tag_taxonomies[$tax->labels->name] = esc_attr($taxonomy);
endforeach;
vc_map( array(
  "name" => 'WP ' . __("Tag Cloud", "ublflati"),
  "base" => "vc_wp_tagcloud",
  "icon" => "",
  "category" => __("WordPress Widgets", "ublflati"),
  "class" => "wpb_vc_wp_widget",
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Widget title", "ublflati"),
      "param_name" => "title",
      "description" => __("What text use as a widget title. Leave blank to use default widget title.", "ublflati")
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Taxonomy", "ublflati"),
      "param_name" => "taxonomy",
      "value" => $tag_taxonomies,
      "admin_label" => true
    ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "ublflati"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "ublflati")
    )
  )
) );

$custom_menus = array();
$menus = get_terms( 'nav_menu', array( 'hide_empty' => false ) );
if ( is_array($menus) ) {
  foreach ( $menus as $single_menu ) {
    $custom_menus[$single_menu->name] = $single_menu->term_id;
  }
}
vc_map( array(
"name" => 'WP ' . __("Custom Menu", "ublflati"),
"base" => "vc_wp_custommenu",
"icon" => "",
"category" => __("WordPress Widgets", "ublflati"),
"class" => "wpb_vc_wp_widget",
"params" => array(
  array(
    "type" => "textfield",
    "heading" => __("Widget title", "ublflati"),
    "param_name" => "title",
    "description" => __("What text use as a widget title. Leave blank to use default widget title.", "ublflati")
  ),
  array(
    "type" => "dropdown",
    "heading" => __("Menu", "ublflati"),
    "param_name" => "nav_menu",
    "value" => $custom_menus,
    "description" => __(empty($custom_menus) ? "Custom menus not found. Please visit <b>Appearance > Menus</b> page to create new menu." : "Select menu", "ublflati"),
    "admin_label" => true
  ),
  array(
    "type" => "textfield",
    "heading" => __("Extra class name", "ublflati"),
    "param_name" => "el_class",
    "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "ublflati")
  )
)
) );

vc_map( array(
  "name" => 'WP ' . __("Text", "ublflati"),
  "base" => "vc_wp_text",
  "icon" => "",
  "category" => __("WordPress Widgets", "ublflati"),
  "class" => "wpb_vc_wp_widget",
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Widget title", "ublflati"),
      "param_name" => "title",
      "description" => __("What text use as a widget title. Leave blank to use default widget title.", "ublflati")
    ),
    array(
      "type" => "textarea",
      "heading" => __("Text", "ublflati"),
      "param_name" => "text",
      "admin_label" => true
    ),
    /*array(
      "type" => "checkbox",
      "heading" => __("Automatically add paragraphs", "ublflati"),
      "param_name" => "filter"
    ),*/
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "ublflati"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "ublflati")
    )
  )
) );


vc_map( array(
  "name" => 'WP ' . __("Recent Posts", "ublflati"),
  "base" => "vc_wp_posts",
  "icon" => "",
  "category" => __("WordPress Widgets", "ublflati"),
  "class" => "wpb_vc_wp_widget",
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Widget title", "ublflati"),
      "param_name" => "title",
      "description" => __("What text use as a widget title. Leave blank to use default widget title.", "ublflati")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Number of posts to show", "ublflati"),
      "param_name" => "number",
      "admin_label" => true
    ),
    array(
      "type" => "checkbox",
      "heading" => __("Display post date?", "ublflati"),
      "param_name" => "show_date",
      "value" => array(__("Display post date?", "ublflati") => true )
    ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "ublflati"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "ublflati")
    )
  )
) );


$link_category = array(__("All Links", "ublflati") => "");
$link_cats = get_terms( 'link_category' );
if ( is_array($link_cats) ) {
  foreach ( $link_cats as $link_cat ) {
    $link_category[$link_cat->name] = $link_cat->term_id;
  }
}
  vc_map( array(
    "name" => 'WP ' . __("Links", "ublflati"),
    "base" => "vc_wp_links",
    "icon" => "",
    "category" => __("WordPress Widgets", "ublflati"),
    "class" => "wpb_vc_wp_widget",
    "params" => array(
      array(
        "type" => "dropdown",
        "heading" => __("Link Category", "ublflati"),
        "param_name" => "category",
        "value" => $link_category,
        "admin_label" => true
      ),
      array(
        "type" => "dropdown",
        "heading" => __("Sort by", "ublflati"),
        "param_name" => "orderby",
        "value" => array(__("Link title", "ublflati") => "name", __("Link rating", "ublflati") => "rating", __("Link ID", "ublflati") => "id", __("Random", "ublflati") => "rand")
      ),
      array(
        "type" => "checkbox",
        "heading" => __("Options", "ublflati"),
        "param_name" => "options",
        "value" => array(__("Show Link Image", "ublflati") => "images", __("Show Link Name", "ublflati") => "name", __("Show Link Description", "ublflati") => "description", __("Show Link Rating", "ublflati") => "rating")
      ),
      array(
        "type" => "textfield",
        "heading" => __("Number of links to show", "ublflati"),
        "param_name" => "limit"
      ),
      array(
        "type" => "textfield",
        "heading" => __("Extra class name", "ublflati"),
        "param_name" => "el_class",
        "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "ublflati")
      )
    )
  ) );

vc_map( array(
  "name" => 'WP ' . __("Categories", "ublflati"),
  "base" => "vc_wp_categories",
  "icon" => "",
  "category" => __("WordPress Widgets", "ublflati"),
  "class" => "wpb_vc_wp_widget",
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Widget title", "ublflati"),
      "param_name" => "title",
      "description" => __("What text use as a widget title. Leave blank to use default widget title.", "ublflati")
    ),
    array(
      "type" => "checkbox",
      "heading" => __("Options", "ublflati"),
      "param_name" => "options",
      "value" => array(__("Display as dropdown", "ublflati") => "dropdown", __("Show post counts", "ublflati") => "count", __("Show hierarchy", "ublflati") => "hierarchical")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "ublflati"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "ublflati")
    )
  )
) );


vc_map( array(
  "name" => 'WP ' . __("Archives", "ublflati"),
  "base" => "vc_wp_archives",
  "icon" => "",
  "category" => __("WordPress Widgets", "ublflati"),
  "class" => "wpb_vc_wp_widget",
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Widget title", "ublflati"),
      "param_name" => "title",
      "description" => __("What text use as a widget title. Leave blank to use default widget title.", "ublflati")
    ),
    array(
      "type" => "checkbox",
      "heading" => __("Options", "ublflati"),
      "param_name" => "options",
      "value" => array(__("Display as dropdown", "ublflati") => "dropdown", __("Show post counts", "ublflati") => "count")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "ublflati"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "ublflati")
    )
  )
) );

vc_map( array(
  "name" => 'WP ' . __("RSS", "ublflati"),
  "base" => "vc_wp_rss",
  "icon" => "",
  "category" => __("WordPress Widgets", "ublflati"),
  "class" => "wpb_vc_wp_widget",
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Widget title", "ublflati"),
      "param_name" => "title",
      "description" => __("What text use as a widget title. Leave blank to use default widget title.", "ublflati")
    ),
    array(
      "type" => "textfield",
      "heading" => __("RSS feed URL", "ublflati"),
      "param_name" => "url",
      "description" => __("Enter the RSS feed URL.", "ublflati"),
      "admin_label" => true
    ),
    array(
      "type" => "dropdown",
      "heading" => __("Items", "ublflati"),
      "param_name" => "items",
      "value" => array(__("10 - Default", "ublflati") => '', 1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20),
      "description" => __("How many items would you like to display?", "ublflati"),
      "admin_label" => true
    ),
    array(
      "type" => "checkbox",
      "heading" => __("Options", "ublflati"),
      "param_name" => "options",
      "value" => array(__("Display item content?", "ublflati") => "show_summary", __("Display item author if available?", "ublflati") => "show_author", __("Display item date?", "ublflati") => "show_date")
    ),
    array(
      "type" => "textfield",
      "heading" => __("Extra class name", "ublflati"),
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "ublflati")
    )
  )
) );