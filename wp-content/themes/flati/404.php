<?php 

/*
 * @package WordPress
 * @subpackage Flati Wordpress Theme
 * 
*/

$options = get_option('ublflati');

get_header(); 

?>

<div id="banner">

    <div class="container intro_wrapper">
    
        <div class="inner_content">
            <h1><?php _e('Whoops!','ublflati'); ?></h1>
            <h1 class="title"><?php _e('Error 404','ublflati'); ?></h1>
            
            <h1 class="intro"><?php _e('The page you are ','ublflati'); ?><span><?php _e('looking for ','ublflati'); ?></span> <?php _e('seems to be missing, please ','ublflati'); ?><a href="<?php echo home_url(); ?>"><span><?php _e('continue browsing!','ublflati'); ?></span></a></h1>
        </div>
        
    </div>
    
</div>
	
<div class="container wrapper">

    <div class="inner_content">
    
        <div class="pad30"></div>
        
        <div class="row">
        
        	<div class="span12 screen-bg">
                <div class="row">
                	<div class="span8 offset2"><img src="<?php echo IMAGES; ?>/imac.png" class="animated shake" alt="<?php _e('Error 404','ublflati'); ?>"></div>
                </div>
            </div>
        
        </div>
        
    </div>

</div>

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

<a href="#"><i class="go-top hidden-phone hidden-tablet  icon-double-angle-up"></i></a>

<?php get_footer(); ?>