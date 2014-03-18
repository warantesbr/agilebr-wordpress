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

			<div class="welcome_index"><?php echo $pagephrase; ?></div>

		</div>

	</div>
    
</div>

<?php } ?>
  
<div class="container wrapper">

    <div class="inner_content">

        <div class="pad45"></div>
        <?php the_content(); ?>
        
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
                    <div class=""><a href="<?php echo $thumbnail['0']; ?>" rel="prettyPhoto[portfolio1]"><img src="<?php echo $thumbnail['0']; ?>" alt="<?php the_title(); ?>" /></a></div>  
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

<?php include 'sidebar_chatter.php' ?>

<?php include 'sidebar_footer.php'; ?>

<script type="text/javascript">
//<![CDATA[
jQuery(window).load(function(){ 
    jQuery('.projects').isotope({ });
});
//]]>
</script>       

<?php get_footer(); ?>