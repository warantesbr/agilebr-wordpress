<?php 

/*
 * @package WordPress
 * @subpackage Flati Wordpress Theme
 * 
*/

get_header(); 

$options= get_option('ublflati');

global $post;
$author_id=$post->post_author;

$relatedargs = array(
	'author' => $author_id,
	'post__not_in' => array( $post->ID),
	'posts_per_page' => 3
);

$relatedquery = new WP_Query( $relatedargs );

$relatedlist = '';
					
while($relatedquery->have_posts()){ $relatedquery->the_post(); 
	
	$relatedlist .= '<div class="span3">' . "\n";
   
	$relatedthumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium', false);
	$relatedthumbnail_large = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false);
	
	if($relatedthumbnail['0'] != ''){
	$relatedlist .= '<div class="hover_colour"><a href="'.$relatedthumbnail_large['0'].'" rel="prettyPhoto"><img src="'.$relatedthumbnail['0'].'" alt="'.get_the_title().'" /></a></div><div class="clear"></div>' . "\n";
	} else {$relatedlist .= '<div class="ublnoimages"></div><div class="clear"></div>';}
               
	$relatedlist .= '<h6><a href="'.get_permalink().'"><span>';
	$relatedlist .= get_the_title() . '</span></a><br><i class="icon-time muted"></i> ';
	$relatedlist .= get_the_time('j') . '/' . get_the_time('m') . '/' . get_the_time('Y') . ' '; 
	$relatedlist .= ' <i class="icon-comments muted"></i> <a href="' . get_permalink().'">';
	
	$relatedlist .= get_comments_number(0 . __(' comments','ublflati'), 1 . __(' comment','ublflati'), '% ' . __('comments','ublflati')) . '</a></h6>' . "\n";

	$relatedlist .= '</div>' . "\n";

}

wp_reset_postdata();

if ( have_posts() ) : while ( have_posts() ) :the_post();

global $post;

$pagetitle = $options['blogtitle'];
$pagetoptitle = get_the_title();
$pagephrase = get_post_meta( $post->ID, 'blogtitle2', true );
$footertype = get_post_meta( $post->ID, 'singlefooter', true );
$blogtype 	= get_post_meta( $post->ID, 'blogtype', true );
$blogsidebars = get_post_meta( $post->ID, 'blogsidebars', true );
$image1 = get_post_meta( $post->ID, 'image1', true );
$image2 = get_post_meta( $post->ID, 'image2', true );
$image3 = get_post_meta( $post->ID, 'image3', true );
$image4 = get_post_meta( $post->ID, 'image4', true );
$image5 = get_post_meta( $post->ID, 'image5', true );
$image6 = get_post_meta( $post->ID, 'image6', true );
$image7 = get_post_meta( $post->ID, 'image7', true );
$image8 = get_post_meta( $post->ID, 'image8', true );
$image9 = get_post_meta( $post->ID, 'image9', true );
$image10 = get_post_meta( $post->ID, 'image10', true );

if($blogsidebars == ''){$blogsidebars = 'nosidebar';}
if($footertype == ''){$footertype = 1;}

?>

<div id="banner">

    <div class="container intro_wrapper">
    
        <div class="inner_content">
        
            <?php if(isset($options['blogtitle']) && $pagetitle != ''){ ?><h1><?php echo $pagetitle; ?></h1><?php } ?>
            <?php if($pagetoptitle != ''){ ?><h1 class="title"><?php echo $pagetoptitle; ?></h1><?php } ?>
            <?php if($pagephrase != ''){ ?><h1 class="intro"><?php echo $pagephrase; ?></h1><?php } ?>
        
        </div>
        
    </div>
    
</div>
	
<div class="container wrapper">

    <div class="inner_content">
    
        <div class="pad30"></div>
        	<?php if($blogsidebars == 'nosidebar'){ ?>
        	<div class="row">
            
				<div class="span8 offset2">
                
                  <h1 class="post_intro center"><?php the_title(); ?></h1>
					<div class="pad30"></div>
		
					<div class="post">
		
        				<?php if($blogtype == 'noimage'){
							
						} elseif($blogtype == 'image'){
							
						if(has_post_thumbnail()) { 
						
							$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false);
						
							if($thumbnail['1'] > 1024){
								$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large', false);
							}
							
							echo '<img src="'.$thumbnail['0'].'" alt="'.get_the_title().'" >';
						
						}
							
						} elseif($blogtype == 'slide'){
							
						$randomslide = 'slide_' . rand(1,28734682);
						
						echo '<div id="carousel" class="carousel slide ">';

						echo '<div class="carousel-inner '.$randomslide.'">';
                            
                      if(has_post_thumbnail()) { 
								
							$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false);
							if($thumbnail['1'] > 1024){ $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large', false); }
						
					        echo '<div class="item"><img src="'.$thumbnail['0'].'" alt="'.get_the_title().'" /></div>';
							
						}
						
						if($image1 != ''){ echo '<div class="item"><img src="'.$image1.'" alt="'.get_the_title().'" /></div>';}
                      if($image2 != ''){ echo '<div class="item"><img src="'.$image2.'" alt="'.get_the_title().'" /></div>';}
                      if($image3 != ''){ echo '<div class="item"><img src="'.$image3.'" alt="'.get_the_title().'" /></div>';}
                      if($image4 != ''){ echo '<div class="item"><img src="'.$image4.'" alt="'.get_the_title().'" /></div>';}
                      if($image5 != ''){ echo '<div class="item"><img src="'.$image5.'" alt="'.get_the_title().'" /></div>';}
                      if($image6 != ''){ echo '<div class="item"><img src="'.$image6.'" alt="'.get_the_title().'" /></div>';}
                      if($image7 != ''){ echo '<div class="item"><img src="'.$image7.'" alt="'.get_the_title().'" /></div>';}
                      if($image8 != ''){ echo '<div class="item"><img src="'.$image8.'" alt="'.get_the_title().'" /></div>';}
                      if($image9 != ''){ echo '<div class="item"><img src="'.$image9.'" alt="'.get_the_title().'" /></div>';}
                      if($image10 != ''){ echo '<div class="item"><img src="'.$image10.'" alt="'.get_the_title().'" /></div>';}

						echo '</div>';
						echo '<script>' . "\n";
						echo '// <![cdata[' . "\n";
                    	echo 'jQuery(document).ready(function ($) {' . "\n";
						echo 'jQuery(".'.$randomslide.' > .item:first-child").addClass("active");' . "\n";
                    	echo '});' . "\n";
					    echo '// ]]>' . "\n";
						echo '</script>' . "\n";
						echo '<a class="left carousel-control" href="#carousel" data-slide="prev"></a>' . "\n";
						echo '<a class="right carousel-control" href="#carousel" data-slide="next"></a>' . "\n";

						echo '</div>';
							
						} elseif($blogtype == 'music'){
						echo '<iframe class="soundcloud" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F'.$image1.'"></iframe> ';
						} elseif($blogtype == 'youtube'){
						echo '<div class="vendor"><iframe src="//www.youtube.com/embed/'.$image1.'?wmode=opaque"></iframe></div>';
						} elseif($blogtype == 'vimeo'){
						echo '<div class="vendor"><iframe src="http://player.vimeo.com/video/'.$image1.'?title=0&amp;byline=0&amp;portrait=0"></iframe></div>';
						} else {
							
						if(has_post_thumbnail()) { 
						
							$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false);
						
							if($thumbnail['1'] > 1024){
								$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large', false);
							}
							
							echo '<img src="'.$thumbnail['0'].'" alt="'.get_the_title().'" >';
						
						}
							
						} ?>
		
						<div class="pad30"></div>
		
						<?php 
						
						$new_content = do_shortcode(get_the_content()); 
						
						$new_content = str_replace('span3', 'span2', $new_content);
						$new_content = str_replace('span4', 'span3', $new_content);
						$new_content = str_replace('span6', 'span4', $new_content);
						$new_content = str_replace('span8', 'span5', $new_content);
						$new_content = str_replace('span9', 'span6', $new_content);
						$new_content = str_replace('span12', 'span8', $new_content);
						
						echo $new_content;
						
						?>
		
						<div class="pad25"></div>
						<div class="post-meta">
							<ul>
								<li><?php _e('Posted','ublflati'); ?> <a href="#"><?php the_author(); ?></a> <span class="muted">|</span></li>
								<li><?php the_time('jS M Y'); ?> </li>
                             <li><?php _e('In ','ublflati') . the_category(', '); ?> <span class="muted">|</span></li>
                             <?php the_tags( __("<li>Tags ","ublflati"), ', ', '<span class="muted">|</span></li>'); ?>
								<li><a href="#"><?php comments_number(0, 1, '% '); ?></a> <?php comments_number(__(' comments','ublflati'), __(' comment','ublflati'), __(' comments','ublflati')); ?></li>
							</ul>
						</div>
						<?php $args = array(
							'before'           => '<div class="center portfoliobuttons"><div class="pad5"></div><hr><h3>'.__('Page Pagination','ublflati').'</h3>',
							'after'            => '</div>',
							'link_before'      => '',
							'link_after'       => '',
							'next_or_number'   => 'next',
							'nextpagelink'     => '<h6><i class="icon-circle-arrow-right grey"></i></h6>',
							'previouspagelink' => '<h6><i class="icon-circle-arrow-left grey"></i></h6> ',
							'pagelink'         => '%',
							'echo'             => 1
						); 
						
						wp_link_pages( $args ); ?>
						<div class="pad5"></div>
						<hr>
						<div class="center portfoliobuttons">
                         <?php previous_post_link('%link', '<h6><i class="icon-circle-arrow-left grey"></i></h6>'); ?>
                         <?php next_post_link('%link', '<h6><i class="icon-circle-arrow-right grey"></i></h6>'); ?>
						</div>
						<hr>  
						<div class="pad5"></div>
						<?php comments_template(); ?>
                	</div>
                    
				</div>
		
			</div>
        	<?php } else { ?>
           <div class="row">
           	
            	<?php if($blogsidebars == 'left'){ ?><div class="sidebar span3"><?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('blog-sidebar') ) : endif; ?></div><?php } ?>
			
           	<div class="span9">
            
					<?php if($blogtype == 'noimage'){
                    
                    } elseif($blogtype == 'image'){
                    
                    	if(has_post_thumbnail()) { 
                    
                    	$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false);
                    
                    	if($thumbnail['1'] > 1024){
                    		$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large', false);
                    	}
                    
                    	echo '<a href="'.$thumbnail['0'].'" rel="prettyPhoto"><img src="'.$thumbnail['0'].'" alt="'.get_the_title().'" ></a>';
                    
                     }
                    
                    } elseif($blogtype == 'slide'){
						
					  $randomslide = 'slide_' . rand(1,28734682);
						
					  echo '<div id="carousel" class="carousel slide ">';
				
					  echo '<div class="carousel-inner '.$randomslide.'">';
							
					  if(has_post_thumbnail()) { 
								
							$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false);
							if($thumbnail['1'] > 1024){ $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large', false); }
						
							echo '<div class="item"><img src="'.$thumbnail['0'].'" alt="'.get_the_title().'" /></div>';
							
						}
						
					  if($image1 != ''){ echo '<div class="item"><img src="'.$image1.'" alt="'.get_the_title().'" /></div>';}
					  if($image2 != ''){ echo '<div class="item"><img src="'.$image2.'" alt="'.get_the_title().'" /></div>';}
					  if($image3 != ''){ echo '<div class="item"><img src="'.$image3.'" alt="'.get_the_title().'" /></div>';}
					  if($image4 != ''){ echo '<div class="item"><img src="'.$image4.'" alt="'.get_the_title().'" /></div>';}
					  if($image5 != ''){ echo '<div class="item"><img src="'.$image5.'" alt="'.get_the_title().'" /></div>';}
					  if($image6 != ''){ echo '<div class="item"><img src="'.$image6.'" alt="'.get_the_title().'" /></div>';}
					  if($image7 != ''){ echo '<div class="item"><img src="'.$image7.'" alt="'.get_the_title().'" /></div>';}
					  if($image8 != ''){ echo '<div class="item"><img src="'.$image8.'" alt="'.get_the_title().'" /></div>';}
					  if($image9 != ''){ echo '<div class="item"><img src="'.$image9.'" alt="'.get_the_title().'" /></div>';}
					  if($image10 != ''){ echo '<div class="item"><img src="'.$image10.'" alt="'.get_the_title().'" /></div>';}
				
					  echo '</div>';
					  echo '<script>' . "\n";
					  echo '// <![cdata[' . "\n";
					  echo 'jQuery(document).ready(function ($) {' . "\n";
					  echo 'jQuery(".'.$randomslide.' > .item:first-child").addClass("active");' . "\n";
					  echo '});' . "\n";
					  echo '// ]]>' . "\n";
					  echo '</script>' . "\n";
					  echo '<a class="left carousel-control" href="#carousel" data-slide="prev"></a>' . "\n";
					  echo '<a class="right carousel-control" href="#carousel" data-slide="next"></a>' . "\n";
				
					  echo '</div>';
							
					  } elseif($blogtype == 'music'){
					  echo '<iframe class="soundcloud" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F'.$image1.'"></iframe> ';
					  } elseif($blogtype == 'youtube'){
					  echo '<div class="vendor"><iframe src="//www.youtube.com/embed/'.$image1.'?wmode=opaque"></iframe></div>';
					  } elseif($blogtype == 'vimeo'){
					  echo '<div class="vendor"><iframe src="http://player.vimeo.com/video/'.$image1.'?title=0&amp;byline=0&amp;portrait=0"></iframe></div>';
					  } else {
					  if(has_post_thumbnail()) { 
                    
                    	$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false);
                    
                    	if($thumbnail['1'] > 1024){
                    		$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large', false);
                    	}
                    
                    	echo '<a href="'.$thumbnail['0'].'" rel="prettyPhoto"><img src="'.$thumbnail['0'].'" alt="'.get_the_title().'" ></a>';
                    
                    }
					  } ?>
                    
					<div class="pad5"></div>
			
           		<h1 class="post_link "><?php the_title(); ?></h1>
			
           		<div class="clear"></div>
			
					<div class="post-meta muted">
			
           			<ul>
							<li><?php _e('Posted by','ublflati'); ?> <a href="#"><?php the_author(); ?></a></li>
							<li><?php _e('in ','ublflati') . the_category(', '); ?></li>
							<?php the_tags( __("<li>tags ","ublflati"), ', ', '</li>'); ?>
						</ul>
                        
					</div> 
                  
                  <?php 
					
					$new_content = get_the_content();
					$new_content = apply_filters('the_content', $new_content);
					$new_content = str_replace(']]>', ']]&gt;', $new_content);
					
					$new_content = str_replace('span3', 'span2', $new_content);
					$new_content = str_replace('span4', 'span3', $new_content);
					$new_content = str_replace('span6', 'span4', $new_content);
					$new_content = str_replace('span8', 'span5', $new_content);
					$new_content = str_replace('span9', 'span6', $new_content);
					$new_content = str_replace('span12', 'span9', $new_content);
					
				echo $new_content;

				$gravatarimage = get_avatar( get_the_author_meta('user_email') ); 
				$newavatar = str_replace("class='avatar", "class='pull-left img-rounded pad_author", $gravatarimage) ;
					
				?>
                  
				<div class="pad30"></div>
                    
              <?php $args = array(
					'before'           => '<div class="center portfoliobuttons"><div class="pad5"></div><hr><h3>'.__('Page Pagination','ublflati').'</h3>',
					'after'            => '</div>',
					'link_before'      => '',
					'link_after'       => '',
					'next_or_number'   => 'next',
					'nextpagelink'     => '<h6><i class="icon-circle-arrow-right grey"></i></h6>',
					'previouspagelink' => '<h6><i class="icon-circle-arrow-left grey"></i></h6> ',
					'pagelink'         => '%',
					'echo'             => 1
				); 
				
				wp_link_pages( $args ); ?>

				<div class="well">

					<?php echo $newavatar; ?>

					<h3><?php _e('About The Author','ublflati'); ?></h3>

					<p><?php echo get_the_author_meta( 'description' ); ?></p>

				</div>
              
				<div class="pad30"></div>

				<div class="row">

					<?php echo $relatedlist; ?>

				</div>

				<div class="pad15"></div>
				<hr>
				<div class="pad15"></div>
              <?php comments_template(); ?>
                
           	</div>
            
            	<?php if($blogsidebars == 'right'){ ?><div class="sidebar span3"><?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('blog-sidebar') ) : endif; ?></div><?php } ?>
                
           </div> 
           <?php } ?>
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