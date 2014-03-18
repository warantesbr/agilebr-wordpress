<?php

vc_remove_element("vc_wp_recentcomments");
vc_remove_element("vc_wp_posts");
vc_remove_element("vc_wp_search");
vc_remove_element("vc_wp_meta");
vc_remove_element("vc_wp_calendar");
vc_remove_element("vc_wp_text");
vc_remove_element("vc_wp_pages");
vc_remove_element("vc_wp_links");
vc_remove_element("vc_wp_tagcloud");
vc_remove_element("vc_wp_categories");
vc_remove_element("vc_wp_custommenu");
vc_remove_element("vc_wp_archives");
vc_remove_element("vc_wp_rss");
vc_remove_element("vc_posts_slider");
vc_remove_element("vc_cta_button");
vc_remove_element("vc_progress_bar");
vc_remove_element("vc_tour");
vc_remove_element("vc_teaser_grid");

/*
 *
 * TITLES
 *
*/
vc_map( array(
   "name" => __("H1 Title","ublflati"),
   "base" => "h1",
   "class" => "",
   "icon" => "icon-font",
   "category" => __('Titles','ublflati'),
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Class","ublflati"),
         "param_name" => "class",
         "value" => "",
         "description" => __("Enter Extra Class If Needed","ublflati")
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title","ublflati"),
         "param_name" => "content",
         "value" => "",
         "description" => __("Enter Your Title","ublflati")
      )
   )
) );

vc_map( array(
   "name" => __("H2 Title","ublflati"),
   "base" => "h2",
   "class" => "",
   "category" => __('Titles','ublflati'),
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Class","ublflati"),
         "param_name" => "class",
         "value" => "",
         "description" => __("Enter Extra Class If Needed","ublflati")
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title","ublflati"),
         "param_name" => "content",
         "value" => "",
         "description" => __("Enter Your Title","ublflati")
      )
   )
) );

vc_map( array(
   "name" => __("H3 Title","ublflati"),
   "base" => "h3",
   "class" => "",
   "category" => __('Titles','ublflati'),
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Class","ublflati"),
         "param_name" => "class",
         "value" => "",
         "description" => __("Enter Extra Class If Needed","ublflati")
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title","ublflati"),
         "param_name" => "content",
         "value" => "",
         "description" => __("Enter Your Title","ublflati")
      )
   )
) );

vc_map( array(
   "name" => __("H4 Title","ublflati"),
   "base" => "h4",
   "class" => "",
   "category" => __('Titles','ublflati'),
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Class","ublflati"),
         "param_name" => "class",
         "value" => "",
         "description" => __("Enter Extra Class If Needed","ublflati")
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title","ublflati","ublflati"),
         "param_name" => "content",
         "value" => "",
         "description" => __("Enter Your Title","ublflati")
      )
   )
) );

vc_map( array(
   "name" => __("H5 Title","ublflati"),
   "base" => "h5",
   "class" => "",
   "category" => __('Titles','ublflati'),
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Class","ublflati"),
         "param_name" => "class",
         "value" => "",
         "description" => __("Enter Extra Class If Needed","ublflati")
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title","ublflati"),
         "param_name" => "content",
         "value" => "",
         "description" => __("Enter Your Title","ublflati")
      )
   )
) );

vc_map( array(
   "name" => __("H6 Title","ublflati"),
   "base" => "h6",
   "class" => "",
   "category" => __('Titles','ublflati'),
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Class","ublflati"),
         "param_name" => "class",
         "value" => "",
         "description" => __("Enter Extra Class If Needed","ublflati")
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title","ublflati"),
         "param_name" => "content",
         "value" => "",
         "description" => __("Enter Your Title","ublflati")
      )
   )
) );
/*
 *
 * TITLES
 *
*/

/*
 *
 * ICON BLOCKS
 *
*/

vc_map( array(
   "name" => __("Icon Block","ublflati"),
   "base" => "icon_block",
   "class" => "",
   "category" => __('Content','ublflati'),
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Icon Code","ublflati"),
         "param_name" => "icon",
         "value" => "",
         "description" => __("You can find all icon codes at <a href='http://fontawesome.io/3.2.1/icons/' target='_blank'>Fontawesome</a>","ublflati")
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Link Url","ublflati"),
         "param_name" => "link",
         "value" => "",
         "description" => __("Must start with a http://","ublflati")
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Singular Word","ublflati"),
         "param_name" => "word",
         "value" => "",
         "description" => __("Pick a word that best describes the category, (EXAMPLE: design)","ublflati")
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title","ublflati"),
         "param_name" => "title",
         "value" => "",
         "description" => __("A couple of word title!","ublflati")
      ),
	  array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Icon Block Content","ublflati"),
         "param_name" => "description",
         "value" => "",
         "description" => __("Content for the icon block","ublflati")
      ),
	  array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Make this a popular block?","ublflati"),
         "param_name" => "popular",
         "value" => array('yes','no'),
         "description" => __("Select yes to make this a popular block","ublflati")
      )
   )
) );

vc_map( array(
   "name" => __("Icon Block 2","ublflati"),
   "base" => "icon_block2",
   "class" => "",
   "category" => __('Content','ublflati'),
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Icon Code","ublflati"),
         "param_name" => "icon",
         "value" => "",
         "description" => __("You can find all icon codes at <a href='http://fontawesome.io/3.2.1/icons/' target='_blank'>Fontawesome</a>","ublflati")
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title","ublflati"),
         "param_name" => "title",
         "value" => "",
         "description" => __("A couple of word title!","ublflati")
      ),
	  array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => __("Icon Block Content","ublflati"),
         "param_name" => "content",
         "value" => "",
         "description" => __("Content for the icon block","ublflati")
      ),
	  array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Animation","ublflati"),
         "param_name" => "animation",
         "value" => array('Bounce Left','Bounce Right','Bounce Down'),
         "description" => __("Select which animation you want it to load in with!","ublflati")
      )
   )
) );

vc_map( array(
   "name" => __("Icon Block 3","ublflati"),
   "base" => "icon_block3",
   "class" => "",
   "category" => __('Content','ublflati'),
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Categories","ublflati"),
         "param_name" => "categories",
         "value" => "",
         "description" => __("Seperate with a comma... EXAMPLE: cat 1,cat 2,cat 3,cat 4","ublflati")
      ),
	  array(
         "type" => "attach_images",
         "holder" => "div",
         "class" => "",
         "heading" => __("Attach Icon","ublflati"),
         "param_name" => "icon",
         "value" => '',
         "description" => __("Use image title to add your Icon title","ublflati")
      )
   )
) );

vc_map( array(
   "name" => __("Icon Block 4","ublflati"),
   "base" => "icon_block4",
   "class" => "",
   "category" => __('Content','ublflati'),
   "params" => array(
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => __("Image","ublflati"),
         "param_name" => "image",
         "value" => "",
         "description" => __("Upload your image icon","ublflati")
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Link Url","ublflati"),
         "param_name" => "link",
         "value" => "",
         "description" => __("Must start with a http://","ublflati")
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Button Text","ublflati"),
         "param_name" => "buttonname",
         "value" => "read more",
         "description" => __("Text for the button","ublflati")
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title","ublflati"),
         "param_name" => "title",
         "value" => "",
         "description" => __("A couple of word title!","ublflati")
      ),
	  array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Icon Block Content","ublflati"),
         "param_name" => "description",
         "value" => "",
         "description" => __("Content for the icon block","ublflati")
      ),
	  array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Make this a popular block?","ublflati"),
         "param_name" => "popular",
         "value" => array('yes','no'),
         "description" => __("Select yes to make this a popular block","ublflati")
      )
   )
) );

/*
 *
 * ICON BLOCKS
 *
*/

/*
 *
 * TEAM MEMBER
 *
*/

vc_map( array(
   "name" => __("Team Member","ublflati"),
   "base" => "team_member",
   "class" => "",
   "category" => __('Content','ublflati'),
   "params" => array(
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Slide Effect","ublflati"),
         "param_name" => "fadein",
         "value" => array('Fade Up','Fade Down'),
         "description" => __("Choose which slide effect you would like to use","ublflati")
      ),
	  array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => __("Attach Image","ublflati"),
         "param_name" => "teamimage",
         "value" => '',
         "description" => __("Choose your team members image","ublflati")
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Team Members Name?","ublflati"),
         "param_name" => "teamname",
         "value" => ""
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Team Members Posotion?","ublflati"),
         "param_name" => "teamposition",
         "value" => ""
      ),
	  array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Member Description","ublflati"),
         "param_name" => "teamdescription",
         "value" => "",
         "description" => __("Small description for the team member goes here","ublflati")
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Twitter Url","ublflati"),
         "param_name" => "twitter",
         "value" => "",
         "description" => __("Must start with a http://","ublflati")
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Facebook Url","ublflati"),
         "param_name" => "facebook",
         "value" => "",
         "description" => __("Must start with a http://","ublflati")
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Dribbble Url","ublflati"),
         "param_name" => "dribbble",
         "value" => "",
         "description" => __("Must start with a http://","ublflati")
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Forrst Url","ublflati"),
         "param_name" => "forrst",
         "value" => "",
         "description" => __("Must start with a http://","ublflati")
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Vimeo Url","ublflati"),
         "param_name" => "vimeo",
         "value" => "",
         "description" => __("Must start with a http://","ublflati")
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Google Plus Url","ublflati"),
         "param_name" => "googleplus",
         "value" => "",
         "description" => __("Must start with a http://","ublflati")
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Linked In Url","ublflati"),
         "param_name" => "linkedin",
         "value" => "",
         "description" => __("Must start with a http://","ublflati")
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("GitHub Url","ublflati"),
         "param_name" => "github",
         "value" => "",
         "description" => __("Must start with a http://","ublflati")
      )
   )
) );

/*
 *
 * TEAM MEMBER
 *
*/

/*
 *
 * PROGRESSION BARS
 *
*/

vc_map( array(
   "name" => __("Progression Bars","ublflati"),
   "base" => "progression_bars",
   "class" => "",
   "category" => __('Content','ublflati'),
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Percentage","ublflati"),
         "param_name" => "percentage",
         "value" => "",
         "description" => __("Give the bar percentage","ublflati")
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title","ublflati"),
         "param_name" => "title",
         "value" => ""
      )
   )
) );

/*
 *
 * PROGRESSION BARS
 *
*/

/*
 *
 * CLIENT LIST
 *
*/

vc_map( array(
   "name" => __("Client List","ublflati"),
   "base" => "client_list",
   "class" => "",
   "category" => __('Content','ublflati'),
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title","ublflati"),
         "param_name" => "title",
         "value" => "",
         "description" => __("Client List Title","ublflati")
      ),
	  array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Client Description Title","ublflati"),
         "param_name" => "description",
         "value" => ""
      ),
	  array(
         "type" => "attach_images",
         "holder" => "div",
         "class" => "",
         "heading" => __("Attach Logo","ublflati"),
         "param_name" => "client",
         "value" => '',
         "description" => __("Upload your clients logo","ublflati")
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Client Link","ublflati"),
         "param_name" => "link",
         "value" => '',
         "description" => __("Use http://","ublflati")
      )
   )
) );

/*
 *
 * CLIENT LIST
 *
*/

/*
 *
 * TESTIMONIAL
 *
*/

vc_map( array(
   "name" => __("Testimonial Blocks","ublflati"),
   "base" => "testimonial",
   "class" => "",
   "category" => __('Content','ublflati'),
   "params" => array(
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Testimonial Version","ublflati"),
         "param_name" => "version",
         "value" => array('Version 1','Version 2','Version 3','Version 4','Version 5','Version 6','Version 7','Version 8','Version 9'),
         "description" => __("Choose which version of the testimonial block you would like?","ublflati")
      ),
	  array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Fade In Effect","ublflati"),
         "param_name" => "fade",
         "value" => array('Fade In Up','Fade In Down'),
         "description" => __("Choose which slide effect you would like to use","ublflati")
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Persons Name","ublflati"),
         "param_name" => "name",
         "value" => ""
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Persons Company","ublflati"),
         "param_name" => "company",
         "value" => ""
      ),
	  array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Testimonial","ublflati"),
         "param_name" => "testimonial",
         "value" => ""
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Icon Code","ublflati"),
         "param_name" => "icon",
         "value" => "",
		  "description" => __("You can find all icon codes at <a href='http://fontawesome.io/3.2.1/icons/' target='_blank'>Fontawesome</a>","ublflati")
      ),
	  array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => __("Authors Image","ublflati"),
         "param_name" => "image",
         "value" => '',
         "description" => __("Upload your testimonial authors image","ublflati")
      )
   )
) );

/*
 *
 * TESTIMONIAL
 *
*/

/*
 *
 * SLIDERS
 *
*/

vc_map( array(
   "name" => __("Nivo Slider","ublflati"),
   "base" => "nivoslider",
   "class" => "",
   "category" => __('Sliders','ublflati'),
   "params" => array(
   	  array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Show Captions","ublflati"),
         "param_name" => "showcaptions",
         "value" => array('Yes','No'),
         "description" => __("Choose if you want captions on your slider","ublflati")
      ),
      array(
         "type" => "attach_images",
         "holder" => "div",
         "class" => "",
         "heading" => __("Slide Images","ublflati"),
         "param_name" => "images",
         "value" => "",
         "description" => __("Upload your images here","ublflati")
      ),
	  array(
         "type" => "exploded_textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Slide Captions","ublflati"),
         "param_name" => "captions",
         "value" => "",
		  "description" => __("New caption for each slide on different line","ublflati")
      )
   )
) );

vc_map( array(
   "name" => __("Nerve Slider","ublflati"),
   "base" => "nerveslider",
   "class" => "",
   "category" => __('Sliders','ublflati'),
   "params" => array(
      array(
         "type" => "attach_images",
         "holder" => "div",
         "class" => "",
         "heading" => __("Slide Images","ublflati"),
         "param_name" => "images",
         "value" => "",
         "description" => __("Upload your images here","ublflati")
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Image Height","ublflati"),
         "param_name" => "height",
         "value" => "422",
		  "description" => __("Setting the height of your images of the slider","ublflati")
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Image Width","ublflati"),
         "param_name" => "width",
         "value" => "1170",
		  "description" => __("YSetting the width of your images of the slider","ublflati")
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Slider Speed","ublflati"),
         "param_name" => "speed",
         "value" => "500",
		  "description" => __("for every second is 1000, so if you want 5 seconds it will be 5000","ublflati")
      )
   )
) );

vc_map( array(
   "name" => __("Small Slider","ublflati"),
   "base" => "smallslider",
   "class" => "",
   "category" => __('Sliders','ublflati'),
   "params" => array(
      array(
         "type" => "attach_images",
         "holder" => "div",
         "class" => "",
         "heading" => __("Slide Images","ublflati"),
         "param_name" => "images",
         "value" => "",
         "description" => __("Upload your images here","ublflati")
      )
   )
) );

/*
 *
 * SLIDERS
 *
*/

/*
 *
 * OTHER BITS
 *
*/

vc_map( array(
   "name" => __("Horizontal Line","ublflati"),
   "base" => "hr",
   "class" => "",
   "category" => __('Content','ublflati')
) );

/*
 *
 * OTHER BITS
 *
*/

/*
 *
 * TIMELINE SECTION
 *
*/

$timeline_date = 1900;
$this_year = date("Y");
$timelinedates = array();
for ($timeline_date = 1900; $timeline_date <= $this_year; $timeline_date++) {
    $timelinedates[] = $timeline_date;
}

vc_map( array(
  "name" => __("Timeline", "ublflati"),
  "base" => "vc_timeline",
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
    )
  ),
  "custom_markup" => '
  <div class="wpb_accordion_holder wpb_holder clearfix vc_container_for_children">
  %content%
  </div>
  <div class="tab_controls">
  <button class="add_tab" title="'.__("Add timeline section", "ublflati").'">'.__("Add timeline section", "ublflati").'</button>
  </div>
  ',
  'default_content' => '
  [vc_timeline_tab title="'.__('Timeline Title 1', "ublflati").'"][/vc_timeline_tab]
  [vc_timeline_tab title="'.__('Timeline Title 2', "ublflati").'"][/vc_timeline_tab]
  ',
  'js_view' => 'VcTimelineView'
) );
vc_map( array(
  "name" => __("Timeline Section", "ublflati"),
  "base" => "vc_timeline_tab",
  "allowed_container_element" => 'vc_row',
  "is_container" => true,
  "content_element" => false,
  "params" => array(
    array(
      "type" => "textfield",
      "heading" => __("Title", "ublflati"),
      "param_name" => "title",
      "description" => __("timeline section title.", "ublflati")
    ),
	array(
      "type" => "dropdown",
      "heading" => __("Icon Code", "ublflati"),
      "param_name" => "icon",
	  "value" => array('earth','mail','phone','screen'),
      "description" => __("Choose which icon you would like to display ", "ublflati")
    ),
	array(
      "type" => "dropdown",
      "heading" => __("Pick Your Year", "ublflati"),
      "param_name" => "timelinedate",
	  "value" => array_reverse($timelinedates),
      "description" => __("Date for your timeline item.", "ublflati")
    ),
  ),
  'js_view' => 'VcAccordionTabView'
) );

/*
 *
 * TIMELINE SECTION
 *
*/

/*
 *
 * PRICING TABLES SECTION
 *
*/

vc_map( array(
   "name" => __("Pricing Table","ublflati"),
   "base" => "pricing_table",
   "class" => "",
   "category" => __('Content','ublflati'),
   "params" => array(
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Make Featured","ublflati"),
         "param_name" => "featured",
         "value" => array('Make It Featured','Dont Make It Featured'),
         "description" => __("Choose To Make This Table Featured","ublflati")
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Table Title","ublflati"),
         "param_name" => "title",
         "value" => "",
		  "description" => __("Name Your Table","ublflati")
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("From Text","ublflati"),
         "param_name" => "title2",
         "value" => "From",
		  "description" => __("Your Language For The Text \"From\"!","ublflati")
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Table Price","ublflati"),
         "param_name" => "price",
         "value" => "$50",
		  "description" => __("Please use the currency symbol within this!","ublflati")
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Monthly/Weekly Text","ublflati"),
         "param_name" => "monthtext",
         "value" => "per month"
      ),
	  array(
         "type" => "exploded_textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Table List","ublflati"),
         "param_name" => "ullist",
         "value" => "",
		  "description" => __("Each List On A New Line","ublflati")
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Button Name","ublflati"),
         "param_name" => "buttonname",
         "value" => "SIGN UP",
		  "description" => __("Text For The Button Of The Table","ublflati")
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Button Link","ublflati"),
         "param_name" => "buttonlink",
         "value" => "",
		  "description" => __("Link For The Button Of The Table","ublflati")
      )
   )
) );

/*
 *
 * PRICING TABLES SECTION
 *
*/

/*
 *
 * DRIBBLE SECTION
 *
*/

vc_map( array(
   "name" => __("Dribbble Feed","ublflati"),
   "base" => "dribbble",
   "class" => "",
   "category" => __('Content','ublflati'),
   "params" => array(
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Dribble Username","ublflati"),
         "param_name" => "username",
         "value" => ""
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("How Many?","ublflati"),
         "param_name" => "howmany",
         "value" => 9,
		  "description" => __("Put The Maximum Number You Want To Show On Your Page","ublflati")
      )
   )
) );

/*
 *
 * DRIBBLE SECTION
 *
*/

/*
 *
 * RECENT PORTFOLIO SECTION
 *
*/

vc_map( array(
   "name" => __("Recent Portfolio Version 1","ublflati"),
   "base" => "latest_portfolio",
   "class" => "",
   "category" => __('Sliders','ublflati'),
   "params" => array(
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title","ublflati"),
         "param_name" => "title",
         "value" => ""
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Intro","ublflati"),
         "param_name" => "intro",
         "value" => ""
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Content","ublflati"),
         "param_name" => "recentcontent",
         "value" => ""
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Button Name","ublflati"),
         "param_name" => "buttonname",
         "value" => "View Portfolio"
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Button Link","ublflati"),
         "param_name" => "buttonlink",
         "value" => "#"
      )
   )
) );

vc_map( array(
   "name" => __("Recent Portfolio Version 2","ublflati"),
   "base" => "latest_portfolio2",
   "class" => "",
   "category" => __('Sliders','ublflati'),
   "params" => array(
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("How Many","ublflati"),
         "param_name" => "howmany",
         "value" => 12
      )
   )
) );

/*
 *
 * RECENT PORTFOLIO SECTION
 *
*/

/*
 *
 * MODELS SECTION
 *
*/

vc_map( array(
   "name" => __("Models","ublflati"),
   "base" => "ubl_models",
   "class" => "",
   "category" => __('Content','ublflati'),
   "params" => array(
		array(
		"type" => "dropdown",
		"holder" => "div",
		"class" => "",
		"heading" => __("Button Colour","ublgranite"),
		"param_name" => "color",
		"value" => array(
			__('Blue', 'ublgranite') => 'blue',
			__('Black', 'ublgranite') => 'black',
			__('Green', 'ublgranite') => 'green',
			__('Orange', 'ublgranite') => 'orange',
			__('Red', 'ublgranite') => 'red',
		)),
		array(
		"type" => "dropdown",
		"holder" => "div",
		"class" => "",
		"heading" => __("Button Size","ublgranite"),
		"param_name" => "size",
		"value" => array(
			__('Mini', 'ublgranite') => 'mini',
			__('Small', 'ublgranite') => 'small',
			__('Normal', 'ublgranite') => 'medium',
			__('Large', 'ublgranite') => 'large'
		)),
		array(
		"type" => "dropdown",
		"holder" => "div",
		"class" => "",
		"heading" => __("Rounded Or Square","ublgranite"),
		"param_name" => "rounded",
		"value" => array(
			__('Rounded', 'ublgranite') => '1',
			__('Square', 'ublgranite') => '2'
		)),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => __("Model Title","ublflati"),
			"param_name" => "title",
			"value" => ""
		),
		array(
			"type" => "textarea",
			"holder" => "div",
			"class" => "",
			"heading" => __("Model Content","ublflati"),
			"param_name" => "modelcontent",
			"value" => ""
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => __("Button Name","ublflati"),
			"param_name" => "buttonname",
			"value" => ""
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => __("Close Button Name","ublflati"),
			"param_name" => "closebutton",
			"value" => ""
		)
   )
) );

/*
 *
 * MODELS SECTION
 *
*/

/*
 *
 * POPOVERS SECTION
 *
*/

vc_map( array(
   "name" => __("button Popovers","ublflati"),
   "base" => "ublflati_popovers",
   "class" => "",
   "category" => __('Content','ublflati'),
   "params" => array(
		array(
		"type" => "dropdown",
		"holder" => "div",
		"class" => "",
		"heading" => __("Button Colour","ublgranite"),
		"param_name" => "color",
		"value" => array(
			__('Blue', 'ublgranite') => 'blue',
			__('Black', 'ublgranite') => 'black',
			__('Green', 'ublgranite') => 'green',
			__('Orange', 'ublgranite') => 'orange',
			__('Red', 'ublgranite') => 'red',
		)),
		array(
		"type" => "dropdown",
		"holder" => "div",
		"class" => "",
		"heading" => __("Button Size","ublgranite"),
		"param_name" => "size",
		"value" => array(
			__('Mini', 'ublgranite') => 'mini',
			__('Small', 'ublgranite') => 'small',
			__('Normal', 'ublgranite') => 'medium',
			__('Large', 'ublgranite') => 'large'
		)),
		array(
		"type" => "dropdown",
		"holder" => "div",
		"class" => "",
		"heading" => __("Rounded Or Square","ublgranite"),
		"param_name" => "rounded",
		"value" => array(
			__('Rounded', 'ublgranite') => '1',
			__('Square', 'ublgranite') => '2'
		)),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => __("Popover Title","ublflati"),
			"param_name" => "title",
			"value" => ""
		),
		array(
			"type" => "textarea",
			"holder" => "div",
			"class" => "",
			"heading" => __("Popover Content","ublflati"),
			"param_name" => "popovercontent",
			"value" => ""
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => __("Button Name","ublflati"),
			"param_name" => "buttonname",
			"value" => ""
		)
   )
) );

/*
 *
 * POPOVERS SECTION
 *
*/

/*
 *
 * V2.1.2 ADDED SHORTCODES
 *
*/

vc_map( array(
   "name" => __("iFrame Shortcode","ublflati"),
   "base" => "ublflati_iframe",
   "class" => "",
   "category" => __('Content','ublflati'),
   "params" => array(
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Iframe Url:","ublflati"),
         "param_name" => "url",
         "value" => ''
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Iframe Height","ublflati"),
         "param_name" => "height",
         "value" => '',
		  "description" => __("Use the px and % when inputting your height (EXAMPLE: 100px or 100%)", "ublflati")
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Iframe Width","ublflati"),
         "param_name" => "width",
         "value" => '',
		  "description" => __("Use the px and % when inputting your width (EXAMPLE: 100px or 100%)", "ublflati")
      )
   )
) );

vc_map( array(
   "name" => __("Latest Blog Posts","ublflati"),
   "base" => "ublflati_latest_blogs",
   "class" => "",
   "category" => __('Sliders','ublflati'),
   "params" => array(
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title","ublflati"),
         "param_name" => "title",
         "value" => ""
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Intro","ublflati"),
         "param_name" => "intro",
         "value" => ""
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Content","ublflati"),
         "param_name" => "recentcontent",
         "value" => ""
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Button Name","ublflati"),
         "param_name" => "buttonname",
         "value" => "View All Blog Posts"
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Button Link","ublflati"),
         "param_name" => "buttonlink",
         "value" => "#"
      )
   )
) );

/*
 *
 * V2.1.2 ADDED SHORTCODES
 *
*/