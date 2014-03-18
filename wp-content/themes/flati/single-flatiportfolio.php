<?php 

/*
 * @package WordPress
 * @subpackage Flati Wordpress Theme
 * 
*/

get_header(); 

$options = get_option('ublflati');

if ( have_posts() ) : while ( have_posts() ) :the_post();

if(isset($options['portfolioworkname'])){$pagetitle = $options['portfolioworkname'];} else { $pagetitle = ''; }
if(isset($options['portfoliofootertype'])){$footertype = $options['portfoliofootertype'];} else { $footertype = 1; }
if(isset($options['relatedshow'])){$relatedshow = $options['relatedshow'];} else { $relatedshow = 'no'; }
if(isset($options['relatedpostdescription'])){$relatedpostdescription = $options['relatedpostdescription'];} else { $relatedpostdescription = ''; }

$pagetoptitle  	= get_the_title();
$pagephrase 		= get_post_meta( $post->ID, 'portfoliodescription', true );
$portfoliolayout  = get_post_meta( $post->ID, 'portfoliolayout', true );
$gallerylink  		= get_post_meta( $post->ID, 'gallerylink', true );
$gallerytype  		= get_post_meta( $post->ID, 'gallerytype', true );
$image1 			= get_post_meta( $post->ID, 'galleryimage1', true );
$image2 			= get_post_meta( $post->ID, 'galleryimage2', true );
$image3 			= get_post_meta( $post->ID, 'galleryimage3', true );
$image4 			= get_post_meta( $post->ID, 'galleryimage4', true );
$image5 			= get_post_meta( $post->ID, 'galleryimage5', true );
$image6 			= get_post_meta( $post->ID, 'galleryimage6', true );
$image7 			= get_post_meta( $post->ID, 'galleryimage7', true );
$image8 			= get_post_meta( $post->ID, 'galleryimage8', true );
$image9 			= get_post_meta( $post->ID, 'galleryimage9', true );
$image10 			= get_post_meta( $post->ID, 'galleryimage10', true );

?>

<div id="banner">

    <div class="container intro_wrapper">
    
        <div class="inner_content">
        
            <?php if($pagetitle != ''){ ?><h1><?php echo $pagetitle; ?></h1><?php } ?>
            <?php if($pagetoptitle != ''){ ?><h1 class="title"><?php echo $pagetoptitle; ?></h1><?php } ?>
            <?php if($pagephrase != ''){ ?><h1 class="intro"><?php echo $pagephrase; ?></h1><?php } ?>
        
        </div>
        
    </div>
    
</div>
	
<div class="container wrapper">

    <div class="inner_content">
    
        <div class="pad30"></div>
        
        <?php
		 
		 if($portfoliolayout == 'left'){
			 
		 ?>
         <div class="row">
            <div class="span4">
            	
                <?php the_content(); ?>
                
                <div class="pad25"></div>
                <div class="portfoliobuttons">
					  <?php previous_post_link('%link', '<h6><i class="icon-circle-arrow-left grey"></i></h6>'); ?>
                    <?php next_post_link('%link', '<h6><i class="icon-circle-arrow-right grey"></i></h6>'); ?>
                    <?php if($gallerylink != ''){ ?><a href="<?php echo $gallerylink; ?>" class="btn btn-inverse btn-medium btn-rounded "><h6><?php _e('View','ublflati'); ?></h6></a> <?php } ?>
                </div>
                <div class="pad25"></div>
                </div>
                
                <div class="span8 pad15">
                	<?php 
					
					if($gallerytype == 'single'){
					
					if(has_post_thumbnail()) { $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false); ?>
					
					<div class="hover_colour makefullwidth"><a href="<?php echo $thumbnail['0']; ?>" rel="prettyPhoto"><img class="fullwidthimage" src="<?php echo $thumbnail['0']; ?>" alt="<?php the_title(); ?>" /></a></div>
						
					<?php } 
					
					} elseif($gallerytype == 'slides'){ 
					
					wp_enqueue_script( 'nivo', get_template_directory_uri() . '/js/jquery.nivo.slider.pack.js', array(), '1.0', false);
					
					?>
                    
					<div id="nslider" class="nivoSlider">
                  <?php if(has_post_thumbnail()) { $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false); ?>
					<div class="active item"><img src="<?php echo $thumbnail['0']; ?>" alt="<?php the_title(); ?>"></div>
					<?php } ?>
					<?php if($image1 != ''){ ?><img src="<?php echo $image1; ?>" alt="<?php the_title(); ?>"><?php } ?>
					<?php if($image2 != ''){ ?><img src="<?php echo $image2; ?>" alt="<?php the_title(); ?>"><?php } ?>
					<?php if($image3 != ''){ ?><img src="<?php echo $image3; ?>" alt="<?php the_title(); ?>"><?php } ?>
					<?php if($image4 != ''){ ?><img src="<?php echo $image4; ?>" alt="<?php the_title(); ?>"><?php } ?>
                  <?php if($image5 != ''){ ?><img src="<?php echo $image5; ?>" alt="<?php the_title(); ?>"><?php } ?>
                  <?php if($image6 != ''){ ?><img src="<?php echo $image6; ?>" alt="<?php the_title(); ?>"><?php } ?>
                  <?php if($image7 != ''){ ?><img src="<?php echo $image7; ?>" alt="<?php the_title(); ?>"><?php } ?>
                  <?php if($image8 != ''){ ?><img src="<?php echo $image8; ?>" alt="<?php the_title(); ?>"><?php } ?>
                  <?php if($image9 != ''){ ?><img src="<?php echo $image9; ?>" alt="<?php the_title(); ?>"><?php } ?>
                  <?php if($image10 != ''){ ?><img src="<?php echo $image10; ?>" alt="<?php the_title(); ?>"><?php } ?>
                  </div> 
                  <script type="text/javascript">
					//<![CDATA[
					jQuery(document).ready(function ($) {$('.nivoSlider').nivoSlider({effect: 'fade', manualAdvance: true });});
					//]]>
					</script>
						
					<?php } elseif($gallerytype == 'videoyoutube'){ ?>
                  <div class="vendor"><iframe src="//www.youtube.com/embed/<?php echo $image1; ?>?wmode=opaque"></iframe></div>
                  <?php } elseif($gallerytype == 'videovimeo'){ ?>
                  <div class="vendor"><iframe src="http://player.vimeo.com/video/<?php echo $image1; ?>?title=0&amp;byline=0&amp;portrait=0"></iframe></div>
                  <?php } ?>
                  <div class="pad25"></div>
                  
                </div>
                <div class="pad25"></div>
            </div>
            <?php if(isset($options['allowcomments']) && $options['allowcomments'] == 1){ ?>
            <div class="row pad30">
                <hr>
                <div class="span12 pad30">
                    <?php comments_template(); ?>
                </div>
            </div>
            <?php } ?>
        <?php 
			 
		 } elseif($portfoliolayout == 'right'){ ?>
			 
		 <div class="row">
                
              <div class="span8 pad15">
                	<?php 
					
					if($gallerytype == 'single'){
					
					if(has_post_thumbnail()) { $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false); ?>
					
					<div class="hover_colour marg-bottom5"><a href="<?php echo $thumbnail['0']; ?>" rel="prettyPhoto"><img src="<?php echo $thumbnail['0']; ?>" alt="<?php the_title(); ?>" /></a></div>
						
					<?php } 
					
					} elseif($gallerytype == 'slides'){ 
					
					wp_enqueue_script( 'nivo', get_template_directory_uri() . '/js/jquery.nivo.slider.pack.js', array(), '1.0', false);
					
					?>
                    
					<div id="nslider" class="nivoSlider marg-bottom5">
                  <?php if(has_post_thumbnail()) { $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false); ?>
					<div class="active item"><img src="<?php echo $thumbnail['0']; ?>" alt="<?php the_title(); ?>"></div>
					<?php } ?>
					<?php if($image1 != ''){ ?><img src="<?php echo $image1; ?>" alt="<?php the_title(); ?>"><?php } ?>
					<?php if($image2 != ''){ ?><img src="<?php echo $image2; ?>" alt="<?php the_title(); ?>"><?php } ?>
					<?php if($image3 != ''){ ?><img src="<?php echo $image3; ?>" alt="<?php the_title(); ?>"><?php } ?>
					<?php if($image4 != ''){ ?><img src="<?php echo $image4; ?>" alt="<?php the_title(); ?>"><?php } ?>
                  <?php if($image5 != ''){ ?><img src="<?php echo $image5; ?>" alt="<?php the_title(); ?>"><?php } ?>
                  <?php if($image6 != ''){ ?><img src="<?php echo $image6; ?>" alt="<?php the_title(); ?>"><?php } ?>
                  <?php if($image7 != ''){ ?><img src="<?php echo $image7; ?>" alt="<?php the_title(); ?>"><?php } ?>
                  <?php if($image8 != ''){ ?><img src="<?php echo $image8; ?>" alt="<?php the_title(); ?>"><?php } ?>
                  <?php if($image9 != ''){ ?><img src="<?php echo $image9; ?>" alt="<?php the_title(); ?>"><?php } ?>
                  <?php if($image10 != ''){ ?><img src="<?php echo $image10; ?>" alt="<?php the_title(); ?>"><?php } ?>
                  </div> 
                  <script type="text/javascript">
					//<![CDATA[
					jQuery(document).ready(function ($) {$('.nivoSlider').nivoSlider({effect: 'fade', manualAdvance: true });});
					//]]>
					</script>
						
					<?php } elseif($gallerytype == 'videoyoutube'){ ?>
                  <div class="vendor marg-bottom5"><iframe src="//www.youtube.com/embed/<?php echo $image1; ?>?wmode=opaque"></iframe></div>
                  <?php } elseif($gallerytype == 'videovimeo'){ ?>
                  <div class="vendor marg-bottom5"><iframe src="http://player.vimeo.com/video/<?php echo $image1; ?>?title=0&amp;byline=0&amp;portrait=0"></iframe></div>
                  <?php } ?>
                  <div class="pad25"></div>
                  
              </div>
              
              <div class="span4">
            	
                <?php the_content(); ?>
                
                <div class="pad25"></div>
                <div class="portfoliobuttons">
					  <?php previous_post_link('%link', '<h6><i class="icon-circle-arrow-left grey"></i></h6>'); ?>
                    <?php next_post_link('%link', '<h6><i class="icon-circle-arrow-right grey"></i></h6>'); ?>
                    <?php if($gallerylink != ''){ ?><a href="#" class="btn btn-inverse btn-medium btn-rounded "><h6><?php _e('View','ublflati'); ?></h6></a> <?php } ?>
                </div>
                <div class="pad25"></div>
              </div>
              <div class="pad25"></div>
              
            </div>
			<?php if(isset($options['allowcomments']) && $options['allowcomments'] == 1){ ?>
            <div class="row pad30">
                <hr>
                <div class="span12 pad30">
                    <?php comments_template(); ?>
                </div>
            </div>
            <?php } ?>
			 
		 <?php } else { ?>
          <div class="row">
             <div class="pad25"></div>
             <div class="span12">
             
             	<?php 
					
					if($gallerytype == 'single'){
					
					if(has_post_thumbnail()) { $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false); ?>
					
					<div class="hover_colour"><a href="<?php echo $thumbnail['0']; ?>" rel="prettyPhoto"><img src="<?php echo $thumbnail['0']; ?>" alt="<?php the_title(); ?>" /></a></div>
						
					<?php } 
					
					} elseif($gallerytype == 'slides'){ 
					
					wp_enqueue_script( 'nivo', get_template_directory_uri() . '/js/jquery.nivo.slider.pack.js', array(), '1.0', false);
					
					?>
                    
					<div id="nslider" class="nivoSlider">
                  <?php if(has_post_thumbnail()) { $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false); ?>
					<div class="active item"><img src="<?php echo $thumbnail['0']; ?>" alt="<?php the_title(); ?>"></div>
					<?php } ?>
					<?php if($image1 != ''){ ?><img src="<?php echo $image1; ?>" alt="<?php the_title(); ?>"><?php } ?>
					<?php if($image2 != ''){ ?><img src="<?php echo $image2; ?>" alt="<?php the_title(); ?>"><?php } ?>
					<?php if($image3 != ''){ ?><img src="<?php echo $image3; ?>" alt="<?php the_title(); ?>"><?php } ?>
					<?php if($image4 != ''){ ?><img src="<?php echo $image4; ?>" alt="<?php the_title(); ?>"><?php } ?>
                  <?php if($image5 != ''){ ?><img src="<?php echo $image5; ?>" alt="<?php the_title(); ?>"><?php } ?>
                  <?php if($image6 != ''){ ?><img src="<?php echo $image6; ?>" alt="<?php the_title(); ?>"><?php } ?>
                  <?php if($image7 != ''){ ?><img src="<?php echo $image7; ?>" alt="<?php the_title(); ?>"><?php } ?>
                  <?php if($image8 != ''){ ?><img src="<?php echo $image8; ?>" alt="<?php the_title(); ?>"><?php } ?>
                  <?php if($image9 != ''){ ?><img src="<?php echo $image9; ?>" alt="<?php the_title(); ?>"><?php } ?>
                  <?php if($image10 != ''){ ?><img src="<?php echo $image10; ?>" alt="<?php the_title(); ?>"><?php } ?>
                  </div> 
                  <script type="text/javascript">
					//<![CDATA[
					jQuery(document).ready(function ($) {$('.nivoSlider').nivoSlider({effect: 'fade', manualAdvance: true });});
					//]]>
					</script>
						
					<?php } elseif($gallerytype == 'videoyoutube'){ ?>
                  <div class="vendor"><iframe src="//www.youtube.com/embed/<?php echo $image1; ?>?wmode=opaque"></iframe></div>
                  <?php } elseif($gallerytype == 'videovimeo'){ ?>
                  <div class="vendor"><iframe src="http://player.vimeo.com/video/<?php echo $image1; ?>?title=0&amp;byline=0&amp;portrait=0"></iframe></div>
                  <?php } ?>
              <div class="clear"></div>
             	<div class="pad25"></div>
             
             </div>
         </div>
         <div class="row">
                <?php the_content(); ?>
          </div>
		  <div class="row">
		</div>
        <div class="row">
        	<div class="span12">
            	<div class="portfoliobuttons">
					  <?php previous_post_link('%link', '<h6><i class="icon-circle-arrow-left grey"></i></h6>'); ?>
                    <?php next_post_link('%link', '<h6><i class="icon-circle-arrow-right grey"></i></h6>'); ?>
                    <?php if($gallerylink != ''){ ?><a href="#" class="btn btn-inverse btn-medium btn-rounded "><h6><?php _e('View','ublflati'); ?></h6></a> <?php } ?>
                </div>
            </div>
        </div>
        <?php if(isset($options['allowcomments']) && $options['allowcomments'] == 1){ ?>
        <div class="row pad30">
            <hr>
            <div class="span12 pad30">
                <?php comments_template(); ?>
            </div>
        </div>
        <?php } ?>
         
		 <?php } 
		 
		 $categoryIDs = array();  // it's much nicer than concatenated string
		 $getcategory = get_the_terms($post->ID, 'flatiportfolio-categories');
		
		 foreach($getcategory as $t) {
			 $categoryIDs[] = $t->term_id;
		 }
		 
		 endwhile; endif; 
		 
		 $args = array(
			'post_type' => 'flatiportfolio',
			'tax_query' => array(
				array( 
					'taxonomy' => 'flatiportfolio-categories',
					'field' => 'id',
					'terms' => $categoryIDs
				)
			),
			'post__not_in' => array( $post->ID),
			'posts_per_page' => 20
		);
		$q = new WP_Query($args);
	
		?>
        
    </div>

</div>
<?php if($options['relatedshow'] == 'yes'){ 

wp_enqueue_script( 'carouFredSel', get_template_directory_uri() . '/js/jquery.carouFredSel-6.2.1-packed.js', array(), '6.2.1', true);

?>
<div class="strip2">
    <?php if($options['relatedposttitle'] != ''){ ?><h1><?php echo $options['relatedposttitle']; ?></h1><?php } ?>
    <?php if($options['relatedpostdescription'] != ''){ ?><h3 class="center about_strip"><?php echo $options['relatedpostdescription']; ?></h3><?php } ?>
        
    <div class="container wrapper">
    
    	<div class="inner_content">
        
    		<div class="inner_content col_full">
    			
                <div id="slider_related">
                <?php while($q->have_posts()){ $q->the_post(); 
				
				  $thumbnail 			= wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium', false);
				  $thumbnail_large 	= wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false);
				  
				  ?>
                    <div class="slider-item slider-item-custom">
                        <div class="slider-image">
                            <div class="hover_colour"><a href="<?php echo $thumbnail_large['0']; ?>" rel="prettyPhoto[portfolio1]"><img src="<?php echo $thumbnail['0']; ?>" alt="<?php the_title(); ?>"/></a></div> 
                        </div>
                    </div>
            	  <?php } ?>
                </div>
                <div id="sl-prev2" class="widget-scroll-prev2"><i class="icon-chevron-left white"></i></div>
                <div id="sl-next2" class="widget-scroll-next2"><i class=" icon-chevron-right white but_marg"></i></div>
            
        	</div>

        </div>
    </div>
</div>
<script type="text/javascript">
//<![CDATA[
jQuery(document).ready(function() {

	var portfolioCarousel = jQuery("#slider_related");
	
	portfolioCarousel.carouFredSel({
		width : "100%",
		height : "auto",
		circular : false,
		responsive : true,
		infinite : false,
		auto : false,
		items : {
			width : 230,
			visible: {
				min: 1,
				max:5
			}
		},
		mousewheel: true,
		swipe: { onMouse: true, onTouch: true },
		prev : {	
			button : "#sl-prev3",
			key : "left"
		},
		next : { 
			button : "#sl-next3",
			key : "right"
		},
		onCreate : function () {
			jQuery(window).on('resize', function(){
				portfolioCarousel.parent().add(portfolioCarousel).css('height', portfolioCarousel.children().first().outerHeight() + 'px');
			}).trigger('resize');
		}
	});

});
//]]>
</script>
<?php } ?>
<?php if($footertype == 3 || $footertype == 4 || $footertype == 7 || $footertype == 8){ ?>
<div class="strip">
	
    <?php if(isset($options['footerstripbox1title']) && $options['footerstripbox1title'] != ''){ ?>
    <h1 class="center"><?php echo $options['footerstripbox1title']; ?></h1>
    <?php } ?>
    
    <?php if(isset($options['footerstripbox1content']) && $options['footerstripbox1content'] != ''){ ?>
    <h3 class="center about_strip"><?php echo $options['footerstripbox1content']; ?></h3>
    <?php } ?>
    
    <div class="pad45"></div>
    
    <?php if(isset($options['footerstripbox1button']) && $options['footerstripbox1button'] != ''){ ?>
    <a href="<?php if(isset($options['footerstripbox1buttonlink']) && $options['footerstripbox1buttonlink'] != ''){ ?><?php echo $options['footerstripbox1buttonlink']; ?><?php } else { ?>#<?php } ?>" class="big_button"><?php echo $options['footerstripbox1button']; ?></a>
    <?php } ?>
    
    <div class="pad25"></div>
    
</div>
<?php } ?>

<?php if($footertype == 2 || $footertype == 4 || $footertype == 6 || $footertype == 8){ ?>
<div id="footer">
	
    <?php if(isset($options['footerstripbox2title']) && $options['footerstripbox2title'] != ''){ ?>
    <h1><?php echo $options['footerstripbox2title']; ?></h1>
    <?php } ?>
    
    <?php if(isset($options['footerstripbox2content']) && $options['footerstripbox2content'] != ''){ ?>
    <h3 class="center follow"><?php echo $options['footerstripbox2content']; ?></h3>
	<?php } ?>
    
	<div class="follow_us">
    	
        <?php if(isset($options['footertwitter']) && $options['footertwitter'] != ''){ ?><a href="<?php echo $options['footertwitter']; ?>" class="zocial twitter"></a><?php } ?>
        <?php if(isset($options['footerfacebook']) && $options['footerfacebook'] != ''){ ?><a href="<?php echo $options['footerfacebook']; ?>" class="zocial facebook"></a><?php } ?>
        <?php if(isset($options['footerlinkedin']) && $options['footerlinkedin'] != ''){ ?><a href="<?php echo $options['footerlinkedin']; ?>" class="zocial linkedin"></a><?php } ?>
        <?php if(isset($options['footertgoogle']) && $options['footertgoogle'] != ''){ ?><a href="<?php echo $options['footertgoogle']; ?>" class="zocial googleplus"></a><?php } ?>
        <?php if(isset($options['footervimeo']) && $options['footervimeo'] != ''){ ?><a href="<?php echo $options['footervimeo']; ?>" class="zocial vimeo"></a><?php } ?>
        
    </div>
    
</div>
<?php } ?>

<?php if($footertype == 1 || $footertype == 2 || $footertype == 3 || $footertype == 4){ ?>
<div id="footer2">

    <div class="container">
    
        <div class="row">
        
            <div class="span12">
            
                <?php if(isset($options['footercopyright']) && $options['footercopyright'] != ''){ ?>
                <div class="copyright">&copy; <?php echo date("Y"); ?> <?php echo $options['footercopyright']; ?></div>
                <?php } ?>
            
           </div>
                
        </div>
        
    </div>
    
</div>
<?php } ?>

<?php if($footertype == 5 || $footertype == 6 || $footertype == 7 || $footertype == 8){ ?>
<div id="footer_alt">

	<div class="container">
    
        <div class="row">
        
        	 <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-sidebar') ) : endif; ?>
    
            <div class="span3">
            
            <?php if(isset($options['footergoodbye']) && $options['footergoodbye'] != ''){ ?>
            <h5><?php echo $options['footergoodbye']; ?></h5>
            <?php } ?>
            
            <div class="follow_us2">
            
                <?php if(isset($options['footertwitter']) && $options['footertwitter'] != ''){ ?><a href="<?php echo $options['footertwitter']; ?>" class="zocial twitter"></a><?php } ?>
                <?php if(isset($options['footerfacebook']) && $options['footerfacebook'] != ''){ ?><a href="<?php echo $options['footerfacebook']; ?>" class="zocial facebook"></a><?php } ?>
                <?php if(isset($options['footerlinkedin']) && $options['footerlinkedin'] != ''){ ?><a href="<?php echo $options['footerlinkedin']; ?>" class="zocial linkedin"></a><?php } ?>
                <?php if(isset($options['footertgoogle']) && $options['footertgoogle'] != ''){ ?><a href="<?php echo $options['footertgoogle']; ?>" class="zocial googleplus"></a><?php } ?>
                <?php if(isset($options['footervimeo']) && $options['footervimeo'] != ''){ ?><a href="<?php echo $options['footervimeo']; ?>" class="zocial vimeo"></a><?php } ?>
            
            </div>
            
            <?php if(isset($options['footercopyright']) && $options['footercopyright'] != ''){ ?>
            <div class="copyright">&copy; <?php echo date("Y"); ?> <?php echo $options['footercopyright']; ?></div>
            <?php } ?>
            
            </div>
        
        </div>
        
	</div>
    
</div>
<?php } ?>

<a href="#"><i class="go-top hidden-phone hidden-tablet  icon-double-angle-up"></i></a>

<?php get_footer(); ?>