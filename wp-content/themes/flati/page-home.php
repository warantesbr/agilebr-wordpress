<?php 

/*
 * @package WordPress
 * @subpackage Flati Wordpress Theme
 * Template Name: Home Page Template
*/

get_header(); 

$options= get_option('ublflati');

if ( have_posts() ) : while ( have_posts() ) :the_post();

$h1titleshow  = get_post_meta( $post->ID, 'h1titleshow', true );
$pagephrase = get_post_meta( $post->ID, 'pagephrase', true );
$footertype = get_post_meta( $post->ID, 'footertype', true );

if(isset($h1titleshow) && $h1titleshow == 'show'){

?>

<div id="banner">

	<div class="container intro_wrapper">
    
		<div class="inner_content">

			<div class="welcome_index"><?php echo $pagephrase; ?></div>

		</div>

	</div>
    
</div>

<?php } ?>
  
<div class="container wrapper">

    <div class="inner_content">
    
        <div class="pad45"></div>
        <?php the_content(); ?>
        
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

<?php endwhile; endif; get_footer(); ?>