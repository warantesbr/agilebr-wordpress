<?php 

/*
 * @package WordPress
 * @subpackage Flati Wordpress Theme
 * Template Name: Contact Page
*/

get_header(); 

$options= get_option('ublflati');

if ( have_posts() ) : while ( have_posts() ) :the_post();

endwhile; endif;

$h1titleshow  = get_post_meta( $post->ID, 'h1titleshow', true );
$pagephrase = get_post_meta( $post->ID, 'pagephrase', true );
$pagetoptitle = get_post_meta( $post->ID, 'h1title2', true );
$pagetitle = get_post_meta( $post->ID, 'h1title', true );
$footertype = get_post_meta( $post->ID, 'footertype', true );

if(isset($h1titleshow) && $h1titleshow == 'show'){

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

<?php } ?>
<?php 

if(isset($options['googlemap']) && $options['googlemap'] == 'show'){ 

if(isset($options['googlemapzoom']) && $options['googlemapzoom'] != ''){ 

	if (in_array($options['googlemapzoom'], array(3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20))) {
		$googlezoom = $options['googlemapzoom'];
	} else {
		$googlezoom = 14;
	}

} else {
	$googlezoom = 14;
}

if(isset($options['googletitle']) && $options['googletitle'] != ''){
	
	$checkifarray = strpos($options['googletitle'], '>>');
	
} else {
	
	$checkifarray = false;
	
}

if($checkifarray === false){

?>
<div id="google-maps">
    <div class="google-maps" <?php if(isset($options['googlemapheight']) && $options['googlemapheight'] != ''){ echo 'style="height:'.$options['googlemapheight'].'px;"'; } ?>></div>
</div>
<script type="text/javascript">
	//<![CDATA[
	jQuery(window).load(function() {
	jQuery(".google-maps").gmap3({
    marker:{
	address:"<?php if(isset($options['googletitle']) && $options['googletitle'] != ''){ echo $options['googletitle']; } else { echo '23, Mornington Crescent, London'; } ?>",
	options:{icon: "<?php if(isset($options['contacticon']) && $options['contacticon'] != ''){ echo $options['contacticon']; } else { echo IMAGES; ?>/marker.png<?php } ?>"}},
    map:{
      options:{
		zoom: <?php echo $googlezoom; ?>,
		scrollwheel: false,
		mapTypeControl: false,
		streetViewControl: false,
		scalControl: false,
		draggable: false,}
		}
		});	
	});
	//]]>
</script>	
<?php } else { 

	$explodelist = explode('>>',$options['googletitle']);
	
	$googlelist = '';
	
	foreach($explodelist as $glist){
		$googlelist .= "{address:\"".$glist."\", data:\"".$glist."\", options:{icon: \"";if(isset($options['contacticon']) && $options['contacticon'] != ''){ $googlelist .= $options['contacticon']; } else { $googlelist .= IMAGES . "/marker.png"; }$googlelist .= "\"}},";
	}

?>	
<div id="google-maps">
    <div class="google-maps" <?php if(isset($options['googlemapheight']) && $options['googlemapheight'] != ''){ echo 'style="height:'.$options['googlemapheight'].'px;"'; } ?>></div>
</div>
<script type="text/javascript">
	//<![CDATA[
	jQuery(window).load(function() {
		
		jQuery(".google-maps").gmap3({
			
			map:{
				options:{
					center:[<?php if(isset($options['googlecenters']) && $options['googlecenters'] != ''){ echo $options['googlecenters']; } else { echo '52.874098,-1.678967'; } ?>],
					zoom: <?php echo $googlezoom; ?>,
					scrollwheel: false,
					mapTypeControl: false,
					streetViewControl: false,
					scalControl: false,
				}
			},
			marker:{
				values:[<?php echo rtrim($googlelist,','); ?>],
				options:{
					draggable: false
				}
			}
		
		});	
		
	});
	//]]>
</script>	
<?php }

} ?>
  
<div class="container wrapper">

    <div class="inner_content">
    
		<div class="row">
			<?php if(!isset($options['contactlayout']) || $options['contactlayout'] == 'left'){ ?>
			<div class="span4 pad20">
            
				<?php the_content(); ?>

			</div>
			<?php } ?>
			<div class="<?php if(isset($options['contactlayout']) && $options['contactlayout'] == 'full'){ echo 'span12'; } else { echo 'span8'; } ?>">
				<?php 
				
				if(isset($options['contactform']) && $options['contactform'] == 'show'){ 
				
					if(isset($options['contactemail']) && $options['contactemail'] != ''){ 
				?>
				<div class="contact_form">  

					<div id="note"></div>
        
					<div id="fields">
                        <form id="ajax-contact-form">
                        
                            <p class="form_info"><?php _e('name','ublflati'); ?> <span class="required">*</span></p>
                            <input class="span5" type="text" name="name" value="" />
        
                            <p class="form_info"><?php _e('email','ublflati'); ?> <span class="required">*</span></p>
                            <input class="span5" type="text" name="email" value=""  />
        
                            <p class="form_info"><?php _e('subject','ublflati'); ?></p>
                            <input class="span5" type="text" name="subject" value="" /><br>
        
                            <p class="form_info"><?php _e('message','ublflati'); ?></p>
                            <textarea name="message" id="message" class="span8" ></textarea>
                            <div class="clear"></div>
        
                            <input type="submit" class="btn  btn-primary btn-custom btn-form marg-right5" value="<?php _e('submit','ublflati'); ?>" />
                            <input type="reset"  class="btn  btn-primary btn-custom btn-form" value="<?php _e('reset','ublflati'); ?>" />
                            <div class="clear"></div>
        
                        </form>
					</div>

				</div>
			   <?php }
                
              } ?>                    
			</div> 
           <?php if(isset($options['contactlayout']) && $options['contactlayout'] == 'right'){ ?>
			<div class="span4 pad20">
            
				<?php the_content(); ?>

			</div>
			<?php } ?>               	
				
			</div>
        
    </div>
    
</div>

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
<script type="text/javascript">
	// <![cdata[ 
	jQuery(document).ready(function($){	
		jQuery("#ajax-contact-form").submit(function() {
			var str = jQuery(this).serialize();		
			$.ajax({
				type: "POST",
				url: "<?php echo TEMPPATH; ?>/ThemeFunctions/contact.php",
				data: str,
				success: function(msg) {
					// Message Sent - Show the 'Thank You' message and hide the form
					if(msg == 'OK') {
						result = '<div class="notification_ok"><?php _e('Your message has been sent. Thank you!','ublflati'); ?></div>';
						$("#fields").hide();
					} else {
						result = msg;
					}
					jQuery('#note').html(result);
				}
			});
			return false;
		});															
	});		
	// ]]>
</script>
<?php get_footer(); ?>