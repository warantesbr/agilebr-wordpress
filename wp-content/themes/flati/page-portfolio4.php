<?php 

/*
 * @package WordPress
 * @subpackage Flati Wordpress Theme
 * Template Name: 4 Column Portfolio
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
        
            <?php if($pagetitle != ''){ ?><h1><?php echo $options['portfolioworkname']; ?></h1><?php } ?>
            <?php if($pagetoptitle != ''){ ?><h1 class="title"><?php echo $pagetoptitle; ?></h1><?php } ?>
            <?php if($pagephrase != ''){ ?><h1 class="intro"><?php echo $pagephrase; ?></h1><?php } ?>
        
        </div>
        
    </div>
    
</div>

<?php } ?>
  
<div class="container wrapper">

    <div class="inner_content">
    
        <div id="options">                                           
            <ul id="filters" class="option-set" data-option-key="filter">
                 <?php
					//list terms in a given taxonomy (useful as a widget for twentyten)
					$taxonomy = 'flatiportfolio-categories';
					$tax_terms = get_terms($taxonomy);
					?>
					<li><a href="#filter" data-option-value="*" class="selected"><?php _e('All','ublflati'); ?></a></li>
					<?php
					foreach ($tax_terms as $tax_term) {
						
					$portnavname = $tax_term->slug;
					$portnavname = str_replace(" ","",$portnavname);
					$portnavname = strtolower($portnavname);
					echo '<li>' . '<a href="#filter" ' . ' data-option-value=".' . $portnavname .'">' . $tax_term->name.'</a></li>';
					}
					?>
            </ul>                                           
            <div class="clear"></div>
        </div>
        <div class="row">
        
        	<div class="projects">
            
            	<?php
				
				query_posts( array( 'post_type' => 'flatiportfolio', 'posts_per_page' => -1) );
              if ( have_posts() ) : while ( have_posts() ) : the_post(); 
			  
			    $gallerytype = get_post_meta( $post->ID, 'gallerytype', true );
				
				global $post;
				$terms = get_the_terms($post->ID, 'flatiportfolio-categories');
				$taxclassadd = '';
				foreach($terms as $t){$taxclassadd .= ' ' . $t->slug;}
				
				$taxclass = 'span3 element' . $taxclassadd; $str= ltrim ($taxclassadd,' ');
				
				$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false);
				
				if($thumbnail['1'] > 1024){
					$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large', false);
				}
				
				?>
            	<div <?php post_class($taxclass); ?> id="post-<?php the_ID(); ?>" data-category="<?php echo $str; ?>">
                	  <?php if(isset($options['showpopups']) && $options['showpopups'] != 1){ ?>
                    <div class="hover_img"><a href="<?php echo $thumbnail['0']; ?>" rel="prettyPhoto[portfolio1]"><img src="<?php echo $thumbnail['0']; ?>" alt="<?php the_title(); ?>" /></a></div>  
                    <?php } else { ?>
                    <div class="hover_img"><a href="<?php echo get_permalink(); ?>"><img src="<?php echo $thumbnail['0']; ?>" alt="<?php the_title(); ?>" /></a></div>
                    <?php } ?>
                    <div class="item_description">
                       <a href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
                        <br>
                        <?php if(get_the_excerpt() != ''){ ?><?php the_excerpt(); ?><?php } ?>
                    </div>                                    
                </div>
                
                <?php endwhile; endif; ?>
            
            </div>
        
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
//<![CDATA[
	jQuery(window).load(function(){	
	jQuery('.projects').isotope({ });
});
//]]>
</script>		

<?php get_footer(); ?>