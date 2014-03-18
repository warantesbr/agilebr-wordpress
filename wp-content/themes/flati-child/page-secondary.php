<?php 

/*
 * @package WordPress
 * @subpackage Flati Wordpress Theme
 * Template Name: Secondary Page Template
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

<?php include 'sidebar_chatter.php' ?>

<?php include 'sidebar_sponsors.php' ?>

<?php include 'sidebar_footer.php'; ?>

<?php endwhile; endif; get_footer(); ?>