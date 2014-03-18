<?php

// create theme admin menu
add_action('admin_menu', 'ublflati_create_menu');

function ublflati_create_menu() {
	add_theme_page(__('Flati Help Documents','ublflati'), __('Flati Support','ublflati'), 'manage_options', 'ubl-ublflati-theme',  'ubl_ublflati_theme_welcome', IMAGES . '/favicon.png', 101);
}

//adding theme scripts and styles
function ublflati_all_header_scripts(){
	
$options = get_option('ublflati');

wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css' );

if(isset($options['frontpageslider']) && $options['frontpageslider'] == 'nerve'){
wp_enqueue_style( 'nerveslider', get_template_directory_uri() . '/css/nerveslider.css' );
}

if(isset($options['ublnavigationchoice']) && $options['ublnavigationchoice'] == 0){
wp_enqueue_style( 'themecss', get_template_directory_uri() . '/css/flatitheme.css' );
} else {
wp_enqueue_style( 'themecss', get_template_directory_uri() . '/css/theme.css' );
}

wp_enqueue_style( 'prettyPhoto', get_template_directory_uri() . '/css/prettyPhoto.css' );
wp_enqueue_style( 'zocial', get_template_directory_uri() . '/css/zocial.css' );
wp_enqueue_style( 'bootstrapdocs', get_template_directory_uri() . '/css/docs.css' );

wp_enqueue_script( 'jquery' );

wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0', true);
wp_enqueue_script( 'touchswipe', get_template_directory_uri() . '/js/jquery.touchSwipe.min.js', array(), '1.0', true);
wp_enqueue_script( 'mousewheel', get_template_directory_uri() . '/js/jquery.mousewheel.min.js', array(), '1.0', true);

wp_enqueue_script( 'prettyphoto', get_template_directory_uri() . '/js/jquery.prettyPhoto.js', array(), '1.0', true);
wp_enqueue_script( 'jqueryui', get_template_directory_uri() . '/js/jquery-ui.min.js', array(), '1.0', true);

if(is_front_page()){
	
	if(isset($options['frontpageslider'])){
		
		wp_enqueue_script( 'nerveSliderjs', get_template_directory_uri() . '/js/jquery.nerveSlider.min.js', array(), '1.0', true);
	
		if(isset($options['frontpageslider']) && $options['frontpageslider'] == 'nerve'){
			wp_enqueue_script( 'nerveSlidercustom', get_template_directory_uri() . '/js/nerveSlidercustom.js', array(), '1.0', true);
		}
	
	}
	
	if(isset($options['frontpageslider']) && $options['frontpageslider'] == 'nivo'){
	wp_enqueue_script( 'nivo', get_template_directory_uri() . '/js/jquery.nivo.slider.pack.js', array(), '1.0', false);
	}
	
}

if(is_page_template('page-contact.php')){
wp_enqueue_script( 'gmap3', get_template_directory_uri() . '/js/gmap3.min.js', array(), '1.0', true);
wp_enqueue_script( 'googlemaps', 'http://maps.google.com/maps/api/js?sensor=false&amp;language=en', array(), '1.0', true);
}

if(isset($options['ublnavigationchoice']) && $options['ublnavigationchoice'] == 0){
wp_enqueue_script( 'customscripts', get_template_directory_uri() . '/js/flatiscripts.js', array(), '1.0', true);
} else {
wp_enqueue_script( 'superfish', get_template_directory_uri() . '/js/superfish.js', array(), '1.0', true);
wp_enqueue_script( 'customscripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0', true);
}

if(is_page_template('page-portfolio.php') || is_page_template('page-portfolio3.php') || is_page_template('page-portfolio4.php')|| is_page_template('page-sponsorship.php')){
wp_enqueue_script( 'flatiisotopejs', get_template_directory_uri() . '/js/jquery.isotope.min.js', array(), '1.0', true);
}

if(is_page_template('page-portfolio-paginated.php')){
wp_enqueue_script( 'jpages', get_template_directory_uri() . '/js/jPages.js', array(), '1.0', true);
}

if(isset($options['ublstickyheader']) && $options['ublstickyheader'] == 1){
wp_enqueue_script( 'stickyheader', get_template_directory_uri() . '/js/stickyheader.js', array(), '1.0', true);
}

if ( is_single() && comments_open() && get_option( 'thread_comments' ) ) {wp_enqueue_script( 'comment-reply' );}

}

add_action('wp_enqueue_scripts', 'ublflati_all_header_scripts');

function ubl_googlefonts() {
	
	$options = get_option('ublflati');
	$protocol = is_ssl() ? 'https' : 'http';
	
	wp_enqueue_style( 'googlefonts-lato', "$protocol://fonts.googleapis.com/css?family=Lato" );
	wp_enqueue_style( 'googlefonts-lato2', "$protocol://fonts.googleapis.com/css?family=Lato:300" );
	wp_enqueue_style( 'googlefonts-lato3', "$protocol://fonts.googleapis.com/css?family=Lato:400" );
	wp_enqueue_style( 'googlefonts-lato4', "$protocol://fonts.googleapis.com/css?family=Lato:700" );
	
	// TITLE GOOGLE INPUT
	if(isset($options['maintitletypographyinsert']) && $options['maintitletypographyinsert'] != ''){
	$stripurl = str_replace("<link href='http://","",$options['maintitletypographyinsert']);
	$stripurl = str_replace("' rel='stylesheet' type='text/css'>","",$stripurl);
	$newtitlename = strtolower(str_replace(' ', '-', $options['maintitletypographyname']));
	wp_enqueue_style( $newtitlename, "$protocol://" . $stripurl );
	}
	
	// NORMAL TEXT GOOGLE INPUT
	if(isset($options['generaltypographyinsert']) && $options['generaltypographyinsert'] != ''){
	$newtextname = strtolower(str_replace(' ', '-', $options['generaltypographyname']));
	$stripurlfromp = str_replace("<link href='http://","",$options['generaltypographyinsert']);
	$stripurlfromp = str_replace("' rel='stylesheet' type='text/css'>","",$stripurlfromp);
	wp_enqueue_style( $newtextname, "$protocol://" . $stripurlfromp );
	}
	
}
	
add_action( 'wp_enqueue_scripts', 'ubl_googlefonts' );

// setting magic box for admin side
// setting magic box for admin side
function ubl_ublflati_adminjs() {

wp_enqueue_script('media-upload');
wp_enqueue_script('thickbox');
wp_register_script('my-upload', TEMPPATH .'/ThemeFunctions/adminjs.js', array('jquery','media-upload','thickbox'));
wp_enqueue_script('my-upload');

}

function ubl_ublflati_styles() {wp_enqueue_style('thickbox');}

add_action('admin_print_scripts', 'ubl_ublflati_adminjs');
add_action('admin_print_styles', 'ubl_ublflati_styles');


// Setting the plugin activation
define( 'THEMENAME', 'Flati' );

require_once('class-tgm-plugin-activation.php');

add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );

function my_theme_register_required_plugins() {
 
    $plugins = array(
 
        // This is an example of how to include a plugin pre-packaged with a theme
        array(
            'name'                  => 'Flati Framework', 
            'slug'                  => 'ubl-theme-framework', 
            'source'                => get_stylesheet_directory() . '/ThemeFunctions/plugins/ubl-theme-framework.zip', 
            'required'              => true, 
            'version'               => '2.2.1', 
            'force_activation'      => true, 
            'force_deactivation'    => false, 
            'external_url'          => ''
        ),
 
 		array(
            'name'                  => 'Revolution Slider',
            'slug'                  => 'revslider', 
            'source'                => get_stylesheet_directory() . '/ThemeFunctions/plugins/revslider.zip', 
            'required'              => true, 
            'version'               => '4.1.4', 
            'force_activation'      => true, 
            'force_deactivation'    => false, 
            'external_url'          => ''
        ),
		
		array(
            'name'                  => 'Layer Slider',
            'slug'                  => 'LayerSlider', 
            'source'                => get_stylesheet_directory() . '/ThemeFunctions/plugins/LayerSlider.zip', 
            'required'              => true, 
            'version'               => '5.0.2', 
            'force_activation'      => true, 
            'force_deactivation'    => false, 
            'external_url'          => ''
        ),
		
		array(
            'name'                  => 'Unlimited Sidebars',
            'slug'                  => 'smk-sidebar-generator', 
            'source'                => get_stylesheet_directory() . '/ThemeFunctions/plugins/smk-sidebar-generator.zip', 
            'required'              => true, 
            'version'               => '2.0', 
            'force_activation'      => true, 
            'force_deactivation'    => false, 
            'external_url'          => ''
        )
		
    );

    $theme_text_domain = 'ublflati';
	
	$config = array(
        'domain'            => $theme_text_domain,           // Text domain - likely want to be the same as your theme.
        'default_path'      => '',                           // Default absolute path to pre-packaged plugins
        'parent_menu_slug'  => 'themes.php',         // Default parent menu slug
        'parent_url_slug'   => 'themes.php',         // Default parent URL slug
        'menu'              => 'install-required-plugins',   // Menu slug
        'has_notices'       => true,                         // Show admin notices or not
        'is_automatic'      => false,            // Automatically activate plugins after installation or not
        'message'           => '',               // Message to output right before the plugins table
        'strings'           => array(
            'page_title'                                => __( 'Install Required Plugins', $theme_text_domain ),
            'menu_title'                                => __( 'Install Plugins', $theme_text_domain ),
            'installing'                                => __( 'Installing Plugin: %s', $theme_text_domain ), // %1$s = plugin name
            'oops'                                      => __( 'Something went wrong with the plugin API.', $theme_text_domain ),
            'notice_can_install_required'               => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ), // %1$s = plugin name(s)
            'notice_can_install_recommended'            => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ), // %1$s = plugin name(s)
            'notice_cannot_install'                     => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s)
            'notice_can_activate_required'              => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
            'notice_can_activate_recommended'           => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
            'notice_cannot_activate'                    => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s)
            'notice_ask_to_update'                      => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s)
            'notice_cannot_update'                      => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s)
            'install_link'                              => _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
            'activate_link'                             => _n_noop( 'Activate installed plugin', 'Activate installed plugins' ),
            'return'                                    => __( 'Return to Required Plugins Installer', $theme_text_domain ),
            'plugin_activated'                          => __( 'Plugin activated successfully.', $theme_text_domain ),
            'complete'                                  => __( 'All plugins installed and activated successfully. %s', $theme_text_domain ) // %1$s = dashboard link
        )
    );
 
    tgmpa( $plugins, $config );
 
}

//setting inline css.

function flati_custom_styles() {
	
	$options = get_option('ublflati');
	
	if(isset($options['sitecolour'])){$sitecolour = $options['sitecolour'];}
	if(isset($options['sitecolour2'])){$sitecolour2 = $options['sitecolour2'];}
	if(isset($options['maintitlecolours'])){$maintitlecolours = $options['maintitlecolours'];}
	if(isset($options['generaltextcolours'])){$generaltextcolours = $options['generaltextcolours'];}
	if(isset($options['ublheadercolour'])){$ublheadercolour = $options['ublheadercolour'];}
	if(isset($options['ublheadertextcolour'])){$ublheadertextcolour = $options['ublheadertextcolour'];}
	
	$cssname = 'testname';
	$cssarea = '/css/customcss.css';
	
	wp_enqueue_style(
		$cssname,
		get_template_directory_uri() . $cssarea
	);
        
		$custom_css = "";
		
		if(isset($options['ublbackgroundimage']) && $options['ublbackgroundimage'] != ''){
			$custom_css .= "
			body{
				background-image:url({$options['ublbackgroundimage']}) !important;";
			if(isset($options['ublbackgroundimageposition']) && $options['ublbackgroundimageposition'] != ''){
					
				if($options['ublbackgroundimageposition'] == 'left'){
				$custom_css .= "background-position: left top;";		
				} elseif($options['ublbackgroundimageposition'] == 'right'){
				$custom_css .= "background-position: right top;";		
				} else {
				$custom_css .= "background-position: center top;";		
				}
		
			}
			
			if(isset($options['ublbackgroundimagerepeatx']) && $options['ublbackgroundimagerepeatx'] != ''){
				
				$custom_css .= "background-repeat:{$options['ublbackgroundimagerepeatx']};";
				
			}
		
			$custom_css .= "}";
		}

		if(isset($options['ublbodycolour']) && $options['ublbodycolour'] != '' && $options['ublbodycolour'] != '#f0f0f0'){
			$custom_css .= "
			body{background-color:{$options['ublbodycolour']};}
			";
		}
		
		if(isset($options['topbannerbackground']) && $options['topbannerbackground'] != '' && $options['topbannerbackground'] != '#e9e6e1'){
			$custom_css .= "
			#banner{background-color:{$options['topbannerbackground']};}
			";
		}
		
		if(isset($options['topbannertext']) && $options['topbannertext'] != '' && $options['topbannertext'] != '#69767F'){
			$custom_css .= "
			.welcome_index{color:{$options['topbannertext']};}
			";
		}
		
		if(isset($options['ublheadercolour']) && $options['ublheadercolour'] != '' && $options['ublheadercolour'] != '#323a45'){
			$custom_css .= "
			.header{background-color:{$ublheadercolour};}
			";
		}
		
		if(isset($options['ublheadertextcolour']) && $options['ublheadertextcolour'] != '' && $options['ublheadertextcolour'] != '#bbb'){
			$custom_css .= "
			.nav-pills > li > a,
			.menu_wrap .nav li a{color:{$ublheadertextcolour};}
			";
		}
		
		 if(isset($options['sitecolour']) && $options['sitecolour'] != '' && $options['sitecolour'] != '#2980b9'){
			 $custom_css .= "

			 .menu_wrap .nav > li.active > a, 
			 .menu_wrap .nav > li.active,
			 .nav-pills > li.current-menu-item, 
			 .nav-pills > li.current-menu-ancestor,
			 .hue_block,
			 .btn-custom,
			 .themecolorbutton,
			 #footer,
			 #filters li a.selected, 
			 #filters2 li a.selected,
			 .th,
			 .zocial, 
			 a.zocial,
			 .progress .bar,
			 .testimonial3,
			 .quote_sections_hue,
			 .cbp_tmtimeline > li .cbp_tmicon,
			 .cbp_tmtimeline > li:nth-child(odd) .cbp_tmlabel,
			 .tabbable.tabs-left .nav-tabs .active a, 
			 .tabbable.tabs-left .nav-tabs a:hover,
			 .form-submit > #submit,
			 .holder a.jp-current,
			 .ublnoimages,
			 .btn-navbar:hover{
				 background-color:{$sitecolour};
			 }
			 
			 .cbp_tmtimeline > li:nth-child(odd) .cbp_tmlabel,
			 .cbp_tmtimeline:before{
				 background-color:{$sitecolour} !important;
			 }
			 
			 .cbp_tmtimeline > li:nth-child(odd) .cbp_tmlabel:after {
				border-right-color: {$sitecolour} !important;
			 }
			 
			 .cbp_tmtimeline > li .cbp_tmicon {
				 box-shadow: 0 0 0 8px {$sitecolour} !important;
			 }
			 
			 .menu_wrap .nav > li > a:hover, 
			 .menu_wrap .nav > li > a:focus,
			 .hue,
			 .intro-icon-large:before,
			 a,
			 .cbp_tmtimeline > li:nth-child(odd) .cbp_tmtime span:last-child,
			 .dropcap2,
			 .post_link a:hover,
			 .btn-navbar{
				 color:{$sitecolour};
			 }
			 
			 .blockquote{
				 border-color:{$sitecolour};
			 }
 
			 .testimonial3{
				 color:#f0f0f0 !important;
			 }
			 
			 .testimonial3:after {
				border-top-color: {$sitecolour};
			}
			 
			 ";
		 } else {
			 $custom_css .= "";
		 }
		 
		 if(isset($options['sitecolour2']) && $options['sitecolour2'] != '' && $options['sitecolour2'] != '#2980b9'){
			 $custom_css .= "

			 .cbp_tmtimeline > li .cbp_tmlabel,
			 .tabbable.tabs-left .nav-tabs a,
			 .pricing-header-row-1,
			 .pricing-footer,
			 .screen-bg,
			 .btn-blog1,
			 .btn-blog,
			 .pager li > a, .pager li > span,
			 .pagination ul > .active > a, 
			 .pagination ul > .active > span,
			 .pagination ul > li > a:hover, 
			 .pagination ul > li > a:focus, 
			 .pagination ul > .active > a, 
			 .pagination ul > .active > span,
			 .menu_wrap .nav > li.active > a:hover{
				 background-color:{$sitecolour2};
			 }
			 .cbp_tmtimeline > li .cbp_tmtime span:last-child,
			 .colour,
			 .pricing-table h3,
			 .required{
				 color:{$sitecolour2};
			 }
			 
			 .cbp_tmtimeline > li .cbp_tmlabel,
			 .cbp_tmtimeline > li .cbp_tmicon{
				 background-color:{$sitecolour2} !important;
			 }

			.cbp_tmtimeline > li .cbp_tmlabel:after {
				border-right-color: {$sitecolour2} !important;
			}
			 
			 ";
		 } else {
			 $custom_css .= "";
		 }
		 
		 if(isset($options['maintitlecolours']) && $options['maintitlecolours'] != ''){
			 $custom_css .= "
			 
			 h1, 
			 h2, 
			 h3, 
			 h4, 
			 h5, 
			 h6{
				 color: {$maintitlecolours};
			 }
			 
			 ";
		 } else {
			 $custom_css .= "";
		 }
		 
		 if(isset($options['generaltextcolours']) && $options['generaltextcolours'] != ''){
			 $custom_css .= "
			 
			 body{
				 color: {$generaltextcolours};
			 }
			 
			 ";
		 } else {
			 $custom_css .= "";
		 }
		 
		 if(isset($options['generaltypographycss']) && $options['generaltypographycss'] != ''){
			 $custom_css .= "
			 
			 body,
			 .intro_sections p{
				 {$options['generaltypographycss']}
			 }
			 
			 ";
		 } else {
			 $custom_css .= "";
		 }
		 
		 if(isset($options['maintitletypographycss']) && $options['maintitletypographycss'] != ''){
			 $custom_css .= "
			 
			 h1,h2,h3,h4,h5,h6,.welcome{
				 {$options['maintitletypographycss']}
			 }
			 
			 ";
		 } else {
			 $custom_css .= "";
		 }

        wp_add_inline_style( $cssname, $custom_css );
}

add_action( 'wp_enqueue_scripts', 'flati_custom_styles' );