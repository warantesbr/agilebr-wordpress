<?php

function ublflati_customize_register($wp_customize){

class ublflati_textarea extends WP_Customize_Control {
	public $type = 'textarea';

	public function render_content() {
		?>
		<label>
		<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
		<textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
		</label>
		<?php
	}
}

	// Header Options
	$wp_customize->add_section('ublflati_stickyheader_section',array(
		'title' => __('Flati Header Option','ublflati'),
		'description' => __('A few options regarding the header and navigation','ublflati'),
		'priority' => '35'
	));
	
	$wp_customize->add_setting('ublflati[ublstickyheader]', array(
		'type' => 'option',
		'capability'     => 'edit_theme_options',
		'default' => 1
	));
	
	$wp_customize->add_setting('ublflati[ublnavigationchoice]', array(
		'type' => 'option',
		'capability'     => 'edit_theme_options',
		'default' => 1
	));
	
	$wp_customize->add_control('ublflati[ublstickyheader]', array(
		'label'      => __('Sticky Header Option','ublflati'),
		'section'    => 'ublflati_stickyheader_section',
		'settings'   => 'ublflati[ublstickyheader]',
		'type'       => 'radio',
		'choices'    => array(
			'1'   => __('Have Sticky Header','ublflati'),
			'0'  => __('No Sticky Header','ublflati')
		),
	));
	
	$wp_customize->add_control('ublflati[ublnavigationchoice]', array(
		'label'      => __('Choose which mobile version you would like to use for when in mobile view','ublflati'),
		'section'    => 'ublflati_stickyheader_section',
		'settings'   => 'ublflati[ublnavigationchoice]',
		'type'       => 'radio',
		'choices'    => array(
			'1'   => __('Fishy Style Navigation','ublflati'),
			'0'  => __('Bootstrap Navigation','ublflati')
		),
	));

	// Sites Main Colour
	$wp_customize->add_section('ublflati_theme_color_section',array(
		'title' => __('Theme Colours &amp; Layout','ublflati'),
		'description' => __('Change the theme general colours &amp; site layout','ublflati'),
		'priority' => '34'
	));

	$wp_customize->add_setting('ublflati[ublboxornot]', array(
			'default' => '',
			'type' => 'option', 
			'capability' => 'edit_theme_options',
		)
	);
	
	$wp_customize->add_setting('ublflati[ublbackgroundimage]', array(
			'default' => '',
			'type' => 'option', 
			'capability' => 'edit_theme_options',
		)
	);
	
	$wp_customize->add_setting('ublflati[ublbackgroundimageposition]', array(
			'default' => '',
			'type' => 'option', 
			'capability' => 'edit_theme_options',
		)
	);
	
	$wp_customize->add_setting('ublflati[ublbodycolour]', array(
			'default' => '#f0f0f0',
			'type' => 'option', 
			'capability' => 'edit_theme_options',
		)
	);
	
	$wp_customize->add_setting('ublflati[ublbackgroundimagerepeatx]', array(
			'default' => '',
			'type' => 'option', 
			'capability' => 'edit_theme_options',
		)
	);
	
	$wp_customize->add_setting('ublflati[ublheadercolour]', array(
			'default' => '#323a45',
			'type' => 'option', 
			'capability' => 'edit_theme_options',
		)
	);
	
	$wp_customize->add_setting('ublflati[ublheadertextcolour]', array(
			'default' => '#bbb',
			'type' => 'option', 
			'capability' => 'edit_theme_options',
		)
	);
	
	$wp_customize->add_setting('ublflati[topbannerbackground]', array(
			'default' => '#e9e6e1',
			'type' => 'option', 
			'capability' => 'edit_theme_options',
		)
	);
	
	$wp_customize->add_setting('ublflati[topbannertext]', array(
			'default' => '#69767F',
			'type' => 'option', 
			'capability' => 'edit_theme_options',
		)
	);
	
	$wp_customize->add_setting('ublflati[sitecolour]', array(
			'default' => '#2980b9',
			'type' => 'option', 
			'capability' => 'edit_theme_options',
		)
	);
	
	$wp_customize->add_setting('ublflati[sitecolour2]', array(
			'default' => '#2980b9',
			'type' => 'option', 
			'capability' => 'edit_theme_options',
		)
	);
	
	$wp_customize->add_control('ublflati[ublboxornot]', array(
		'label'      => __('Site layout Option','ublflati'),
		'section'    => 'ublflati_theme_color_section',
		'settings'   => 'ublflati[ublboxornot]',
		'type'       => 'radio',
		'choices'    => array(
			''   => __('Full Width Layout','ublflati'),
			'boxed'  => __('Boxed Layout','ublflati')
		),
		'priority' => '1'
	));
	
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ublflati[ublbackgroundimage]', array(
		'label' => __('Upload Your Theme Bodies Background Image','ublflati'),
		'section' => 'ublflati_theme_color_section',
		'setting' => 'ublflati[ublbackgroundimage]',
		'description' => 'Leave blank if you do not want an image',
		'priority' => '2'
	)));
	
	$wp_customize->add_control('ublflati[ublbackgroundimageposition]', array(
		'label'      => __('Image Position','ublflati'),
		'section'    => 'ublflati_theme_color_section',
		'settings'   => 'ublflati[ublbackgroundimageposition]',
		'type'       => 'radio',
		'choices'    => array(
			'left'   => __('Align From The Left','ublflati'),
			'center'  => __('Align From The Center','ublflati'),
			'right'  => __('Align From The Right','ublflati')
		),
		'priority' => '3'
	));
	
	$wp_customize->add_control('ublflati[ublbackgroundimagerepeatx]', array(
		'label'      => __('Image Repeat Option','ublflati'),
		'section'    => 'ublflati_theme_color_section',
		'settings'   => 'ublflati[ublbackgroundimagerepeatx]',
		'type'       => 'radio',
		'choices'    => array(
			'repeat-x'   => __('Repeat Left To Right','ublflati'),
			'repeat-y'  => __('Repeat Top To Bottom','ublflati'),
			'repeat'  => __('Repeat All','ublflati'),
			'no-repeat'  => __('Dont Repeat','ublflati')
		),
		'priority' => '4'
	));
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'ublflati[ublbodycolour]', 
			array(
			'label' => __('Body Background Colour','ublflati'), 
			'section' => 'ublflati_theme_color_section',
			'settings' => 'ublflati[ublbodycolour]',
			'priority' => '5'
			)
	));
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'ublflati[ublheadercolour]', 
			array(
			'label' => __('Header Colour','ublflati'), 
			'section' => 'ublflati_theme_color_section',
			'settings' => 'ublflati[ublheadercolour]',
			'priority' => '6'
			)
	));
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'ublflati[ublheadertextcolour]', 
			array(
			'label' => __('Header Text Colour','ublflati'), 
			'section' => 'ublflati_theme_color_section',
			'settings' => 'ublflati[ublheadertextcolour]',
			'priority' => '7'
			)
	));
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'ublflati[topbannerbackground]', 
			array(
			'label' => __('Page Title Area In The Header Background','ublflati'), 
			'section' => 'ublflati_theme_color_section',
			'settings' => 'ublflati[topbannerbackground]',
			'priority' => '8'
			)
	));
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'ublflati[topbannertext]', 
			array(
			'label' => __('Page Title Area In The Header Text','ublflati'), 
			'section' => 'ublflati_theme_color_section',
			'settings' => 'ublflati[topbannertext]',
			'priority' => '9'
			)
	));
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'ublflati[sitecolour]', 
			array(
			'label' => __('Theme Colours','ublflati'), 
			'section' => 'ublflati_theme_color_section',
			'settings' => 'ublflati[sitecolour]',
			'priority' => '10'
			)
	));
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'ublflati[sitecolour2]', 
			array(
			'label' => __('Theme Colours Shadow Effects','ublflati'), 
			'section' => 'ublflati_theme_color_section',
			'settings' => 'ublflati[sitecolour2]',
			'priority' => '11'
			)
	));

	// logo upload
	$wp_customize->add_section('ublflati_theme_branding_section',array(
		'title' => __('Theme Branding','ublflati'),
		'description' => __('Upload your logo and favicon here!','ublflati'),
		'priority' => '36'
	));
	
	$wp_customize->add_setting('ublflati[ubllogo]', array(
		'type' => 'option',
		'capability'     => 'edit_theme_options',
		'default' => ''
	));
	
	$wp_customize->add_setting('ublflati[ublfavicon]', array(
		'type' => 'option',
		'capability'     => 'edit_theme_options',
		'default' => ''
	));
	
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ublflati[ubllogo]', array(
		'label' => __('Upload Your Logo','ublflati'),
		'section' => 'ublflati_theme_branding_section',
		'setting' => 'ublflati[ubllogo]'
	)));
	
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ublflati[ublfavicon]', array(
		'label' => __('Upload Your Favicon','ublflati'),
		'section' => 'ublflati_theme_branding_section',
		'setting' => 'ublflati[ublfavicon]'
	)));
	
	//Frontpage Options
	$wp_customize->add_section('ublflati_slideroptions_section',array(
		'title' => __('Frontpage Slider Options','ublflati'),
		'description' => __('Frontpage Slider Options','ublflati'),
		'priority' => '37',
	));
	
	$wp_customize->add_setting('ublflati[frontpageslider]', array(
		'type' => 'option',
		'capability'     => 'edit_theme_options',
		'default' => "revolution"
	));
	
	$wp_customize->add_control('ublflati[frontpageslider]', array(
		'label'      => __('Slider Option','ublflati'),
		'section'    => 'ublflati_slideroptions_section',
		'settings'   => 'ublflati[frontpageslider]',
		'type'       => 'radio',
		'choices'    => array(
			'noslider'   => __('No Slider','ublflati'),
			'nivo'  => __('Nivo Slider','ublflati'),
			'nerve'  => __('Nerve Slider','ublflati'),
			'revolution'  => __('Revolution Slider','ublflati'),
			'layerslider'  => __('Layor Slider','ublflati')
		),
	));
	
	// Big Title Typography
	$wp_customize->add_section('ublflati_bigtitle_typography_section',array(
		'title' => __('Main Titles Typography Section','ublflati'),
		'description' => __('Change the typography of your theme','ublflati'),
		'priority' => '37'
	));
	
	$wp_customize->add_setting('ublflati[maintitlecolours]', array(
			'default' => '',
			'type' => 'option', 
			'capability' => 'edit_theme_options'
		)
	);
	
	$wp_customize->add_setting('ublflati[maintitletypographyname]', array(
		'type' => 'option',
		'capability'     => 'edit_theme_options',
		'default' => ""
	));
	
	$wp_customize->add_setting('ublflati[maintitletypographycss]', array(
		'type' => 'option',
		'capability'     => 'edit_theme_options',
		'default' => ""
	));
	
	$wp_customize->add_setting('ublflati[maintitletypographyinsert]', array(
		'type' => 'option',
		'capability'     => 'edit_theme_options',
		'default' => ''
	));
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'ublflati[maintitlecolours]', 
			array(
			'label' => __('Title Colours','ublflati'), 
			'section' => 'ublflati_bigtitle_typography_section',
			'settings' => 'ublflati[maintitlecolours]'
			)
	));
	
	$wp_customize->add_control( 'ublflati[maintitletypographyname]', array(
		'label'      => __('Titles Font Name','ublflati'),
        'section'    => 'ublflati_bigtitle_typography_section',
    ) );
	
	$wp_customize->add_control( 'ublflati[maintitletypographycss]', array(
		'label'      => __('Title Font Css Value','ublflati'),
        'section'    => 'ublflati_bigtitle_typography_section',
    ) );
	
	$wp_customize->add_control( new ublflati_textarea( $wp_customize, 'ublflati[maintitletypographyinsert]', array(
		'label'   => __('Titles Css Url Input','ublflati'),
		'section' => 'ublflati_bigtitle_typography_section',
		'settings'   => 'ublflati[maintitletypographyinsert]'
	) ) );
	
	// General Site Typography
	$wp_customize->add_section('ublflati_general_typography_section',array(
		'title' => __('General Text Typography Section','ublflati'),
		'description' => __('Change the typography of your theme','ublflati'),
		'priority' => '39'
	));
	
	$wp_customize->add_setting('ublflati[generaltextcolours]', array(
			'default' => '',
			'type' => 'option', 
			'capability' => 'edit_theme_options'
		)
	);
	
	$wp_customize->add_setting('ublflati[generaltypographyname]', array(
		'type' => 'option',
		'capability'     => 'edit_theme_options',
		'default' => ""
	));
	
	$wp_customize->add_setting('ublflati[generaltypographycss]', array(
		'type' => 'option',
		'capability'     => 'edit_theme_options',
		'default' => ""
	));
	
	$wp_customize->add_setting('ublflati[generaltypographyinsert]', array(
		'type' => 'option',
		'capability'     => 'edit_theme_options',
		'default' => ''
	));
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'ublflati[generaltextcolours]', 
			array(
			'label' => __('General Text Colours','ublflati'), 
			'section' => 'ublflati_general_typography_section',
			'settings' => 'ublflati[generaltextcolours]'
			)
	));
	
	$wp_customize->add_control( 'ublflati[generaltypographyname]', array(
		'label'      => __('General Text - Font Name','ublflati'),
        'section'    => 'ublflati_general_typography_section',
    ) );
	
	$wp_customize->add_control( 'ublflati[generaltypographycss]', array(
		'label'      => __('General Text - Font Css Value','ublflati'),
        'section'    => 'ublflati_general_typography_section',
    ) );
	
	$wp_customize->add_control( new ublflati_textarea( $wp_customize, 'ublflati[generaltypographyinsert]', array(
		'label'   => __('General Text Css Url Input','ublflati'),
		'section' => 'ublflati_general_typography_section',
		'settings'   => 'ublflati[generaltypographyinsert]'
	) ) );
	
	//blog section
	$wp_customize->add_section('ublflati_theme_blog_section',array(
		'title' => __('Blog Options','ublflati'),
		'description' => __('Themes Blog Options','ublflati'),
		'priority' => '42'
	));
	
	$wp_customize->add_setting('ublflati[blogmainlayout]', array(
		'type' => 'option',
		'capability'     => 'edit_theme_options',
		'default' => 1
	));
	
	$wp_customize->add_setting('ublflati[blogtitle]', array(
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'default' => "Online Journal"
	));
	
	$wp_customize->add_setting('ublflati[blogtitle2]', array(
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'default' => "Web design is the creation of digital environments, that facilitate and encourage human activity; reflect or adapt to individual voices and content."
	));
	
	$wp_customize->add_setting('ublflati[blogleftright]', array(
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'default' => 'right'
	));
	
	$wp_customize->add_setting('ublflati[paginationtype]', array(
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'default' => 1
	));
	
	$wp_customize->add_setting('ublflati[searchfooter]', array(
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'default' => 1
	));
	
	$wp_customize->add_control('ublflati[blogmainlayout]', array(
		'label'      => __('Choose Which Version Of The Blog You Would Like','ublflati'),
		'section'    => 'ublflati_theme_blog_section',
		'settings'   => 'ublflati[blogmainlayout]',
		'type'       => 'radio',
		'choices'    => array(
			'1'  => __('Version 1','ublflati'),
			'2'  => __('Version 2','ublflati')
		),
		'priority' => 1
	));
	
	$wp_customize->add_control( 'ublflati[blogtitle]', array(
		'label'      => __('Blog Title For Blog Detail Page, Search Page & Tag Pages','ublflati'),
        'section'    => 'ublflati_theme_blog_section',
		'priority' => 2
    ) );
	
	$wp_customize->add_control( 'ublflati[blogtitle2]', array(
		'label'      => __('Blog Excerpt For Search Page & Tag Pages','ublflati'),
        'section'    => 'ublflati_theme_blog_section',
		'priority' => 3
    ) );
	
	$wp_customize->add_control('ublflati[blogleftright]', array(
		'label'      => __('Column Positioning','ublflati'),
		'section'    => 'ublflati_theme_blog_section',
		'settings'   => 'ublflati[blogleftright]',
		'type'       => 'radio',
		'choices'    => array(
			'left'   => __('Left','ublflati'),
			'right'  => __('Right','ublflati'),
			'nosidebar'  => __('No Sidebars','ublflati')
		),
		'priority' => 4
	));
	
	$wp_customize->add_control('ublflati[paginationtype]', array(
		'label'      => __('Pagination Choice','ublflati'),
		'section'    => 'ublflati_theme_blog_section',
		'settings'   => 'ublflati[paginationtype]',
		'type'       => 'radio',
		'choices'    => array(
			'1'   => __('Version 1','ublflati'),
			'2'  => __('Version 2','ublflati')
		),
		'priority' => 5
	));
	
	$wp_customize->add_control('ublflati[searchfooter]', array(
		'label'      => __('Footer Style For Search And Tag Pages!','ublflati'),
		'section'    => 'ublflati_theme_blog_section',
		'settings'   => 'ublflati[searchfooter]',
		'type'       => 'radio',
		'choices'    => array(
			'1'   => __('Version 1','ublflati'),
			'2'  => __('Version 2','ublflati'),
			'3'  => __('Version 3','ublflati'),
			'4'  => __('Version 4','ublflati'),
			'5'  => __('Version 5','ublflati'),
			'6'  => __('Version 6','ublflati'),
			'7'  => __('Version 7','ublflati'),
			'8'  => __('Version 8','ublflati')
		),
		'priority' => 6
	));
	
	//portfolio section
	$wp_customize->add_section('ublflati_theme_portfolio_section',array(
		'title' => __('Portfolio Page Options','ublflati'),
		'description' => __('Themes Portfolio Options','ublflati'),
		'priority' => '43'
	));
	
	$wp_customize->add_setting('ublflati[allowcomments]', array(
		'type' => 'option',
		'capability'  => 'edit_theme_options',
		'default' 	   => 0
	));
	
	$wp_customize->add_setting('ublflati[showpopups]', array(
		'type' => 'option',
		'capability'  => 'edit_theme_options',
		'default' 	   => 0
	));
	
	$wp_customize->add_setting('ublflati[portfolioworkname]', array(
		'type' => 'option',
		'capability'  => 'edit_theme_options',
		'default' 	   => 'Work'
	));
	
	$wp_customize->add_setting('ublflati[relatedposttitle]', array(
		'type' => 'option',
		'capability'  => 'edit_theme_options',
		'default' 	   => 'Related Projects'
	));
	
	$wp_customize->add_setting('ublflati[relatedpostdescription]', array(
		'type' => 'option',
		'capability'  => 'edit_theme_options',
		'default' 	   => 'Ecilisis venenatis risus, suspendisse ac nec et. Nulla sed mauris, congue duis proin nonummy. Elementum phasellus. Mauris sed nulla sed, egestas feugiat a dictum libero vivamus purus arcu, commodo cursus egestas et.'
	));
	
	$wp_customize->add_setting('ublflati[relatedshow]', array(
		'type' => 'option',
		'capability'     => 'edit_theme_options',
		'default' => 'yes'
	));
	
	$wp_customize->add_setting('ublflati[portfoliofootertype]', array(
		'type' => 'option',
		'capability'     => 'edit_theme_options',
		'default' => 1
	));
	
	$wp_customize->add_control('ublflati[showpopups]', array(
		'label'      => __('Show Lightbox Effect On Portfolio Main Pages?','ublflati'),
		'section'    => 'ublflati_theme_portfolio_section',
		'settings'   => 'ublflati[showpopups]',
		'type'       => 'radio',
		'choices'    => array(
			'1'  => __('No','ublflati'),
			'0'  => __('Yes','ublflati')
		)
	));
	
	
	$wp_customize->add_control('ublflati[allowcomments]', array(
		'label'      => __('Allow comments on portfolio detailed page?','ublflati'),
		'section'    => 'ublflati_theme_portfolio_section',
		'settings'   => 'ublflati[allowcomments]',
		'type'       => 'radio',
		'choices'    => array(
			'1'  => __('Yes','ublflati'),
			'0'  => __('No','ublflati')
		)
	));
	
	$wp_customize->add_control( 'ublflati[portfolioworkname]', array(
		'label'      => __('The Title On Every Portfolio Title Page','ublflati'),
        'section'    => 'ublflati_theme_portfolio_section',
    ) );
	
	$wp_customize->add_control( 'ublflati[relatedposttitle]', array(
		'label'      => __('The Title For The Related Posts Title','ublflati'),
        'section'    => 'ublflati_theme_portfolio_section',
    ));
	
	$wp_customize->add_control( new ublflati_textarea( $wp_customize, 'ublflati[relatedpostdescription]', array(
		'label'   => __('Small Description Of Related Posts','ublflati'),
		'section' => 'ublflati_theme_portfolio_section',
		'settings'   => 'ublflati[relatedpostdescription]'
		) 
	));
	
	$wp_customize->add_control('ublflati[relatedshow]', array(
		'label'      => __('Show Related Posts','ublflati'),
		'section'    => 'ublflati_theme_portfolio_section',
		'settings'   => 'ublflati[relatedshow]',
		'type'       => 'radio',
		'choices'    => array(
			'yes'  => __('Yes','ublflati'),
			'no'  => __('No','ublflati')
		)
	));
	
	$wp_customize->add_control('ublflati[portfoliofootertype]', array(
		'label'      => __('Footer Type','ublflati'),
		'section'    => 'ublflati_theme_portfolio_section',
		'settings'   => 'ublflati[portfoliofootertype]',
		'type'       => 'radio',
		'choices'    => array(
			'1'  => __('Version 1','ublflati'),
			'2'  => __('Version 2','ublflati'),
			'3'  => __('Version 3','ublflati'),
			'4'  => __('Version 4','ublflati'),
			'5'  => __('Version 5','ublflati'),
			'6'  => __('Version 6','ublflati'),
			'7'  => __('Version 7','ublflati'),
			'8'  => __('Version 8','ublflati')
		)
	));
	
	//contact content
	$wp_customize->add_section('ublflati_theme_contact_section',array(
		'title' => __('Contact Page Settings','ublflati'),
		'description' => __('Settings for the contact page can be setup here!','ublflati'),
		'priority' => '44'
	));
	
	$wp_customize->add_setting('ublflati[googlemap]', array(
		'type' => 'option',
		'capability'     => 'edit_theme_options',
		'default' => 'show'
	));
	
	$wp_customize->add_setting('ublflati[googlemapheight]', array(
		'type' => 'option',
		'capability'     => 'edit_theme_options',
		'default' => 400
	));
	
	$wp_customize->add_setting('ublflati[googlemapzoom]', array(
		'type' => 'option',
		'capability'     => 'edit_theme_options',
		'default' => 14
	));
	
	$wp_customize->add_setting('ublflati[contacticon]', array(
		'type' => 'option',
		'capability'     => 'edit_theme_options',
	));
	
	$wp_customize->add_setting('ublflati[googletitle]', array(
		'type' => 'option',
		'capability'     => 'edit_theme_options',
		'default' => 'Mornington Crescent, Camden High Street, London'
	));
	
	$wp_customize->add_setting('ublflati[googlecenters]', array(
		'type' => 'option',
		'capability'     => 'edit_theme_options',
		'default' => ''
	));
	
	$wp_customize->add_setting('ublflati[contactform]', array(
		'type' => 'option',
		'capability'     => 'edit_theme_options',
		'default' => 'show'
	));
	
	$wp_customize->add_setting('ublflati[contactemail]', array(
		'type' => 'option',
		'capability'     => 'edit_theme_options'
	));
	
	$wp_customize->add_setting('ublflati[contactlayout]', array(
		'type' => 'option',
		'capability'     => 'edit_theme_options',
		'default' => 'left'
	));
	
	$wp_customize->add_control('ublflati[googlemap]', array(
		'label'      => __('Show/Hide Google Map','ublflati'),
		'section'    => 'ublflati_theme_contact_section',
		'settings'   => 'ublflati[googlemap]',
		'type'       => 'radio',
		'choices'    => array(
			'show'   => __('Show','ublflati'),
			'hide'  => __('Hide','ublflati')
		),
		'priority' => 1
	));
	
	$wp_customize->add_control( 'ublflati[googlemapheight]', array(
		'label'      => __('Height of the google map, please leave blank to keep standard','ublflati'),
        'section'    => 'ublflati_theme_contact_section',
		'priority' => 2
    ) );
	
	$wp_customize->add_control( 'ublflati[googlemapzoom]', array(
		'label'      => __('Choose a number between 3 and 20','ublflati'),
        'section'    => 'ublflati_theme_contact_section',
		'priority' => 3
    ) );
	
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ublflati[contacticon]', array(
		'label' => __('Upload Your Own Marker, Leave Blank If You Want To Use Ours!','ublflati'),
		'section' => 'ublflati_theme_contact_section',
		'setting' => 'ublflati[contacticon]',
		'priority' => 4
	)));
	
	$wp_customize->add_control( new ublflati_textarea( $wp_customize, 'ublflati[googletitle]', array(
		'label'   => __('Set The Google Map By Typing Your Address!','ublflati'),
		'section' => 'ublflati_theme_contact_section',
		'settings'   => 'ublflati[googletitle]',
		'priority' => 5
	) ) );

	$wp_customize->add_control( 'ublflati[googlecenters]', array(
		'label'      => __("Long &amp; Lat: http://itouchmap.com/latlong.html EXAMPLE USE: 52.874098,-1.678967",'ublflati'),
        'section'    => 'ublflati_theme_contact_section',
		'priority' => 6
    ) );
	
	$wp_customize->add_control('ublflati[contactform]', array(
		'label'      => __('Show/Hide Contact Form','ublflati'),
		'section'    => 'ublflati_theme_contact_section',
		'settings'   => 'ublflati[contactform]',
		'type'       => 'radio',
		'choices'    => array(
			'show'   => __('Show','ublflati'),
			'hide'  => __('Hide','ublflati')
		),
		'priority' => 7
	));
	
	$wp_customize->add_control( 'ublflati[contactemail]', array(
		'label'      => __('Set Contact Email','ublflati'),
        'section'    => 'ublflati_theme_contact_section',
		'priority' => 8
    ) );
	
	$wp_customize->add_control('ublflati[contactlayout]', array(
		'label'      => __('Show/Hide Google Map','ublflati'),
		'section'    => 'ublflati_theme_contact_section',
		'settings'   => 'ublflati[contactlayout]',
		'type'       => 'radio',
		'choices'    => array(
			'left'   => __('Left Column','ublflati'),
			'right'  => __('Right Column','ublflati'),
			'full'  => __('Full Width','ublflati')
		),
		'priority' => 9
	));
	
	//footer content
	$wp_customize->add_section('ublflati_theme_copyright_section',array(
		'title' => __('Theme Footer Copyright','ublflati'),
		'description' => __('Change the copyright to what you want!','ublflati'),
		'priority' => '45'
	));
	
	$wp_customize->add_setting('ublflati[footercopyright]', array(
		'type' => 'option',
		'capability'     => 'edit_theme_options',
		'default' => ' FLATI - All Rights Reserved : Template by <a href="http://www.themeforest.net/user/spiralpixel">Spiral Pixel</a>'
	));
	
	$wp_customize->add_setting('ublflati[footergoodbye]', array(
		'type' => 'option',
		'capability'     => 'edit_theme_options',
		'default' => 'thanks for stopping by!'
	));
	
	$wp_customize->add_setting('ublflati[footerstripbox1title]', array(
		'type' => 'option',
		'capability'     => 'edit_theme_options',
		'default' => 'Get A Free Quote'
	));
	
	$wp_customize->add_setting('ublflati[footerstripbox1content]', array(
		'type' => 'option',
		'capability'     => 'edit_theme_options',
		'default' => 'Ecilisis venenatis risus, suspendisse ac nec et. Nulla sed mauris, congue duis proin nonummy. Elementum phasellus mauris sed nulla sed, egestas feugiat a dictum libero  vivamus purus arcu, commodo cursus egestas et.'
	));
	
	$wp_customize->add_setting('ublflati[footerstripbox1button]', array(
		'type' => 'option',
		'capability'     => 'edit_theme_options',
		'default' => 'Contact Us Today'
	));
	
	$wp_customize->add_setting('ublflati[footerstripbox1buttonlink]', array(
		'type' => 'option',
		'capability'     => 'edit_theme_options',
		'default' => '#'
	));
	
	$wp_customize->add_control( new ublflati_textarea( $wp_customize, 'ublflati[footercopyright]', array(
		'label'   => __('Copyright Text','ublflati'),
		'section' => 'ublflati_theme_copyright_section',
		'settings'   => 'ublflati[footercopyright]'
	) ) );
	
	$wp_customize->add_control( new ublflati_textarea( $wp_customize, 'ublflati[footergoodbye]', array(
		'label'   => __('Footer Thank You text','ublflati'),
		'section' => 'ublflati_theme_copyright_section',
		'settings'   => 'ublflati[footergoodbye]'
	) ) );
	
	//footer social content
	$wp_customize->add_section('ublflati_theme_footersocial_section',array(
		'title' => __('Theme Footer Social Icons','ublflati'),
		'description' => __('Show and hide the social links within the footer','ublflati'),
		'priority' => '46'
	));
	
	$wp_customize->add_setting('ublflati[footertwitter]', array(
		'type' => 'option',
		'capability'     => 'edit_theme_options'
	));
	
	$wp_customize->add_setting('ublflati[footerfacebook]', array(
		'type' => 'option',
		'capability'     => 'edit_theme_options'
	));
	
	$wp_customize->add_setting('ublflati[footerlinkedin]', array(
		'type' => 'option',
		'capability'     => 'edit_theme_options'
	));
	
	$wp_customize->add_setting('ublflati[footervimeo]', array(
		'type' => 'option',
		'capability'     => 'edit_theme_options'
	));
	
	$wp_customize->add_setting('ublflati[footertgoogle]', array(
		'type' => 'option',
		'capability'     => 'edit_theme_options'
	));

	$wp_customize->add_control( 'ublflati[footertwitter]', array(
		'label'      => __('Twitter url, Leave blank to not show','ublflati'),
        'section'    => 'ublflati_theme_footersocial_section',
    ) );
	
	$wp_customize->add_control( 'ublflati[footerfacebook]', array(
		'label'      => __('Facebook url, Leave blank to not show','ublflati'),
        'section'    => 'ublflati_theme_footersocial_section',
    ) );
	
	$wp_customize->add_control( 'ublflati[footerlinkedin]', array(
		'label'      => __('Linked In url, Leave blank to not show','ublflati'),
        'section'    => 'ublflati_theme_footersocial_section',
    ) );
	
	$wp_customize->add_control( 'ublflati[footervimeo]', array(
		'label'      => __('Vimeo url, Leave blank to not show','ublflati'),
        'section'    => 'ublflati_theme_footersocial_section',
    ) );
	
	$wp_customize->add_control( 'ublflati[footertgoogle]', array(
		'label'      => __('Google+ url, Leave blank to not show','ublflati'),
        'section'    => 'ublflati_theme_footersocial_section',
    ) );
	
	
	//footer strip section 1
	$wp_customize->add_section('ublflati_theme_strip1_section',array(
		'title' => __('Footer Strip 1 Content','ublflati'),
		'description' => __('Change the wording etc within strip 1','ublflati'),
		'priority' => '47'
	));
	
	$wp_customize->add_setting('ublflati[footerstripbox1title]', array(
		'type' => 'option',
		'capability'     => 'edit_theme_options',
		'default' => 'Get A Free Quote'
	));
	
	$wp_customize->add_setting('ublflati[footerstripbox1content]', array(
		'type' => 'option',
		'capability'     => 'edit_theme_options',
		'default' => 'Ecilisis venenatis risus, suspendisse ac nec et. Nulla sed mauris, congue duis proin nonummy. Elementum phasellus mauris sed nulla sed, egestas feugiat a dictum libero  vivamus purus arcu, commodo cursus egestas et.'
	));
	
	$wp_customize->add_setting('ublflati[footerstripbox1button]', array(
		'type' => 'option',
		'capability'     => 'edit_theme_options',
		'default' => 'Contact Us Today'
	));
	
	$wp_customize->add_setting('ublflati[footerstripbox1buttonlink]', array(
		'type' => 'option',
		'capability'     => 'edit_theme_options',
		'default' => '#'
	));
	
	$wp_customize->add_control( 'ublflati[footerstripbox1title]', array(
		'label'      => __('Strip 1 Title','ublflati'),
        'section'    => 'ublflati_theme_strip1_section',
    ) );
	
	$wp_customize->add_control( new ublflati_textarea( $wp_customize, 'ublflati[footerstripbox1content]', array(
		'label'   => __('Strip 1 Content','ublflati'),
		'section' => 'ublflati_theme_strip1_section',
		'settings'   => 'ublflati[footerstripbox1content]'
	) ) );
	
	$wp_customize->add_control( 'ublflati[footerstripbox1button]', array(
		'label'      => __('Buttons Name','ublflati'),
        'section'    => 'ublflati_theme_strip1_section',
    ) );
	
	$wp_customize->add_control( 'ublflati[footerstripbox1buttonlink]', array(
		'label'      => __('Buttons Link','ublflati'),
        'section'    => 'ublflati_theme_strip1_section',
    ) );
	
	//footer strip section 1
	$wp_customize->add_section('ublflati_theme_strip2_section',array(
		'title' => __('Footer Strip 2 Content','ublflati'),
		'description' => __('Change the wording etc within strip 2','ublflati'),
		'priority' => '48'
	));
	
	$wp_customize->add_setting('ublflati[footerstripbox2title]', array(
		'type' => 'option',
		'capability'     => 'edit_theme_options',
		'default' => 'get in touch'
	));
	
	$wp_customize->add_setting('ublflati[footerstripbox2content]', array(
		'type' => 'option',
		'capability'     => 'edit_theme_options',
		'default' => 'We\'re social and we\'d love to hear from you! Feel free to send us an email, find us on Google Plus, follow us on Twitter and join us on Facebook.'
	));
	
	$wp_customize->add_control( 'ublflati[footerstripbox2title]', array(
		'label'      => __('Strip 2 Title','ublflati'),
        'section'    => 'ublflati_theme_strip2_section',
    ) );
	
	$wp_customize->add_control( new ublflati_textarea( $wp_customize, 'ublflati[footerstripbox2content]', array(
		'label'   => __('Strip 2 Content','ublflati'),
		'section' => 'ublflati_theme_strip2_section',
		'settings'   => 'ublflati[footerstripbox2content]'
	) ) );
}

add_action('customize_register','ublflati_customize_register');