<?php $options = get_option('ublflati'); ?>
<!doctype html>
<html <?php language_attributes() ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php bloginfo('name'); ?><?php wp_title(" | ",true); ?></title>
<?php if(isset($options['ublfavicon']) && $options['ublfavicon'] != ''){ ?>
<link rel="shortcut icon" href="<?php echo $options['ublfavicon'];?>">
<?php } ?>
<?php wp_head(); ?>
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body <?php body_class(); ?>>

	<?php if(isset($options['ublnavigationchoice']) && $options['ublnavigationchoice'] == 0){ ?>
    <div class="header ">

        <div class="container">
        
        		 <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><i class="icon-reorder"></i></button>
                <div class="logo">
                     <?php if(isset($options['ubllogo']) && $options['ubllogo'] != ''){ ?><a href="<?php echo home_url(); ?>"><img src="<?php echo $options['ubllogo']; ?>" alt="<?php bloginfo('name'); ?>" class="animated bounceInDown" /></a><?php } ?>
                </div>

                <nav id="main_menu">
                <div class="nav-collapse collapse">
                    <?php
                        if( has_nav_menu( 'primary' ) ) {
                            wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav nav-pills', 'depth' => 2, 'walker' => new ublbootstrapWalker() ) );
                        }
                    ?>
                </div>
            </nav>
        </div>
    </div>
    
    <div class="header stickyheader">

        <div class="container">
        		  <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><i class="icon-reorder"></i></button>
                <div class="logo">
                     <?php if(isset($options['ubllogo']) && $options['ubllogo'] != ''){ ?><a href="<?php echo home_url(); ?>"><img src="<?php echo $options['ubllogo']; ?>" alt="<?php bloginfo('name'); ?>" class="animated bounceInDown" /></a><?php } ?>
                </div>

                <nav id="main_menu">
                <div class="nav-collapse collapse">
                    <?php
                        if( has_nav_menu( 'primary' ) ) {
                            wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav nav-pills', 'depth' => 2, 'walker' => new ublbootstrapWalker() ) );
                        }
                    ?>
                </div>
            </nav>
        </div>
    </div>
    <?php } else { ?>
	<div class="header ">

        <div class="container">
                <div class="logo">
                     <?php if(isset($options['ubllogo']) && $options['ubllogo'] != ''){ ?><a href="<?php echo home_url(); ?>"><img src="<?php echo $options['ubllogo']; ?>" alt="<?php bloginfo('name'); ?>" class="animated bounceInDown" /></a><?php } ?>
                </div>

                <nav id="main_menu" class="ublmenu1">
                <div class="menu_wrap">
                    <?php
                        if( has_nav_menu( 'primary' ) ) {
                            wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav sf-menu', 'depth' => 2, 'walker' => new ublcustomWalker() ) );
                        }
                    ?>
                </div>
            </nav>
        </div>
    </div>
    
    <div class="header stickyheader">

        <div class="container">
                <div class="logo">
                     <?php if(isset($options['ubllogo']) && $options['ubllogo'] != ''){ ?><a href="<?php echo home_url(); ?>"><img src="<?php echo $options['ubllogo']; ?>" alt="<?php bloginfo('name'); ?>" class="animated bounceInDown" /></a><?php } ?>
                </div>

                <nav id="main_menu" class="ublmenu2">
                <div class="menu_wrap">
                    <?php
                        if( has_nav_menu( 'primary' ) ) {
                            wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav sf-menu', 'depth' => 2, 'walker' => new ublcustomWalker() ) );
                        }
                    ?>
                </div>
            </nav>
        </div>
    </div>
    <?php } ?>
        
<?php 

if(isset($options['ublboxornot']) && $options['ublboxornot'] == 'boxed'): ?>
<div class="ublboxeffect">
<?php endif;

if(is_front_page()){

	if(isset($options['frontpageslider']) && $options['frontpageslider'] == 'revolution'){
		putRevSlider("home");
	} elseif(isset($options['frontpageslider']) && $options['frontpageslider'] == 'layerslider'){
		layerslider(1);
	} elseif(isset($options['frontpageslider']) && $options['frontpageslider'] == 'nerve'){
		echo '<div class="myslider">' . "\n";
		
		$args = array(
			'post_type' => 'ublflatifpageslider',
			'posts_per_page' => -1
		);
	
		$q = new WP_Query($args);
	
		while ( $q->have_posts() ) {
			
			$q->the_post();
			
			if(has_post_thumbnail()) {
			echo get_the_post_thumbnail( $post->ID, null ) . "\n";
			}
	
		}
	
		wp_reset_query();
	
		echo '</div>' . "\n";
	} elseif(isset($options['frontpageslider']) && $options['frontpageslider'] == 'nivo'){
		
		echo '<div class="nivo nivo_height">' . "\n";
 		echo '<div class="slider-wrapper theme-default frontpage_slider">' . "\n";
	 
		echo '<div id="nslider" class="nivoSlider">' . "\n";
	
		$args = array(
			'post_type' => 'ublflatifpageslider',
			'posts_per_page' => -1
		);
	
		$q = new WP_Query($args);
		
		$captionarray = array();
		
		$imagecount = 1;
	
		while ( $q->have_posts() ) {
			
			$q->the_post();
			
			if(has_post_thumbnail()) { 
				$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false);
				echo '<img src="'.$thumbnail['0'].'" alt="'.get_the_title().'" title="#nivocaption'.$imagecount.'" />';
			}
			
			$captionarray[] = '<div id="nivocaption'.$imagecount.'" class="nivo-html-caption">'.get_the_title().'</div>';
			
			$imagecount++;
	
		}
		
		wp_reset_query();
		
		echo '</div>' . "\n";
		echo '</div>' . "\n";

		foreach($captionarray as $captions){
			
			echo $captions . "\n";
			
		}
		
		echo '<script type="text/javascript">' . "\n";
 		echo '//<![CDATA[' . "\n";
		echo 'jQuery(window).load(function() {' . "\n";
		echo 'jQuery("#nslider").nivoSlider({' . "\n";
		echo 'effect: \'fade\', directionNav: true, pauseOnHover: true});' . "\n";
		echo '});' . "\n";
		echo '//]]>' . "\n";
		echo '</script>' . "\n";
	
		echo '</div>' . "\n";
		
		echo '<div class="clear"></div>' . "\n";
		
	}
	
}

?>