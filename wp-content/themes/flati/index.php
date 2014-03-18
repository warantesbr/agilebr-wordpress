<?php 

/*
 * @package WordPress
 * @subpackage Flati Wordpress Theme
 * 
*/

get_header(); 

$options= get_option('ublflati');

if(isset($options['searchfooter'])){ $footertype = $options['searchfooter']; } else { $footertype = 1; }
if(isset($options['blogmainlayout'])){ $layouttype = $options['blogmainlayout']; } else { $layouttype = 1; }

?>

<div id="banner">

    <div class="container intro_wrapper">
    
        <div class="inner_content">
        
            <?php if(isset($options['blogtitle']) && $options['blogtitle'] != ''){ ?><h1><?php echo $options['blogtitle']; ?></h1><?php } ?>
            <h1 class="title"><?php wp_title("",true); ?></h1>
            <?php if(isset($options['blogtitle2']) && $options['blogtitle2'] != ''){ ?><h1 class="intro"><?php echo $options['blogtitle2']; ?></h1><?php } ?>
        
        </div>
        
    </div>
    
</div>
<div class="container wrapper">

    <div class="inner_content">
    
        <div class="pad30"></div>
        
        <div class="row">
        	<?php if(isset($options['blogleftright']) && $options['blogleftright'] == 'left'){ ?><div class="sidebar span3 pad15"><?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('blog-sidebar') ) : endif; ?></div><?php } ?>
			<div class="<?php if(isset($options['blogleftright']) && $options['blogleftright'] == 'nosidebar'){ echo 'span12'; } else { echo 'span9'; }?> pad15">
           <?php
			if ( have_posts() ) : while ( have_posts() ) :the_post();	
			if (is_search() && ($post->post_type=='page')) continue;
			
			$blogtype  = get_post_meta( $post->ID, 'blogtype', true ); 
			$image1	 	= get_post_meta( $post->ID, 'image1', true ); 
			$image2	 	= get_post_meta( $post->ID, 'image2', true ); 
			$image3	 	= get_post_meta( $post->ID, 'image3', true ); 
			$image4	 	= get_post_meta( $post->ID, 'image4', true ); 
			$image5	 	= get_post_meta( $post->ID, 'image5', true ); 
			$image6	 	= get_post_meta( $post->ID, 'image6', true ); 
			$image7 	= get_post_meta( $post->ID, 'image7', true ); 
			$image8	 	= get_post_meta( $post->ID, 'image8', true ); 
			$image9	 	= get_post_meta( $post->ID, 'image9', true ); 
			$image10	= get_post_meta( $post->ID, 'image10', true ); 
			
			if($layouttype == 1){
			
			?>

				<div class="row">

					<div class="span1">	

						<div class="btn btn-medium btn-rounded btn-blog1 capitaltext"><?php the_time('j'); ?><br><?php the_time('M'); ?><br><i class="icon-comments icon-2x"></i><br><a class="com_no" href="<?php the_permalink(); ?>"><?php comments_number(0, 1, '% '); ?></a></div>

					</div>

					<div class="<?php if(isset($options['blogleftright']) && $options['blogleftright'] == 'nosidebar'){ echo 'span11'; } else { echo 'span8'; }?>">
                    
                      <?php if($blogtype == 'noimage'){
						  
					    } elseif($blogtype == 'image'){ 
						
						if(has_post_thumbnail()) { 
						$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false);
						
						if($thumbnail['1'] > 1024){
						$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large', false);
						}
						
					    ?>
                      <div class="hover_img"><a href="<?php echo $thumbnail['0']; ?>" rel="prettyPhoto"><img src="<?php echo $thumbnail['0']; ?>" alt="<?php the_title(); ?>"></a></div>
                      <?php } 
					  
					    } elseif($blogtype == 'slide'){ 
						
						$randomslide = 'slide_' . rand(1,28734682);
						
						?>
						<div id="carousel" class="carousel slide ">

							<div class="carousel-inner <?php echo $randomslide; ?>">
                            
                            <?php if(has_post_thumbnail()) { 
								
							   $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false);
						
						       if($thumbnail['1'] > 1024){ $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large', false); }
						
					           ?>
                      	    <div class="item"><img src="<?php echo $thumbnail['0']; ?>" alt="<?php the_title(); ?>" /></div>
                      	    <?php } ?>
								<?php if($image1 != ''){ ?><div class="item"><img src="<?php echo $image1; ?>" alt="" /></div><?php } ?>
                             <?php if($image2 != ''){ ?><div class="item"><img src="<?php echo $image2; ?>" alt="" /></div><?php } ?>
                             <?php if($image3 != ''){ ?><div class="item"><img src="<?php echo $image3; ?>" alt="" /></div><?php } ?>
                             <?php if($image4 != ''){ ?><div class="item"><img src="<?php echo $image4; ?>" alt="" /></div><?php } ?>
                             <?php if($image5 != ''){ ?><div class="item"><img src="<?php echo $image5; ?>" alt="" /></div><?php } ?>
                             <?php if($image6 != ''){ ?><div class="item"><img src="<?php echo $image6; ?>" alt="" /></div><?php } ?>
                             <?php if($image7 != ''){ ?><div class="item"><img src="<?php echo $image7; ?>" alt="" /></div><?php } ?>
                             <?php if($image8 != ''){ ?><div class="item"><img src="<?php echo $image8; ?>" alt="" /></div><?php } ?>
                             <?php if($image9 != ''){ ?><div class="item"><img src="<?php echo $image9; ?>" alt="" /></div><?php } ?>
                             <?php if($image10 != ''){ ?><div class="item"><img src="<?php echo $image10; ?>" alt="" /></div><?php } ?>

							</div>
							<script>
							// <![cdata[
                    		jQuery(document).ready(function ($) {
							jQuery('.<?php echo $randomslide; ?> > .item:first-child').addClass('active');
                    		});
					       // ]]>
							</script>
							<a class="left carousel-control" href="#carousel" data-slide="prev"></a>
							<a class="right carousel-control" href="#carousel" data-slide="next"></a>

						</div>
					    <?php } elseif($blogtype == 'music'){ ?>
                      <iframe class="soundcloud" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F<?php echo $image1 ; ?>"></iframe> 
                      <?php } elseif($blogtype == 'youtube') { ?>
                      <div class="vendor"><iframe src="//www.youtube.com/embed/<?php echo $image1; ?>?wmode=opaque"></iframe></div>
                      <?php } elseif($blogtype == 'vimeo') { ?>
                      <div class="vendor"><iframe src="http://player.vimeo.com/video/<?php echo $image1 ; ?>?title=0&amp;byline=0&amp;portrait=0"></iframe></div>
                      <?php } else { 
					  
						if(has_post_thumbnail()) { 
						$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false);
						
						if($thumbnail['1'] > 1024){
						$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large', false);
						}
						
					    ?>
                      <div class="hover_img"><a href="<?php echo $thumbnail['0']; ?>" rel="prettyPhoto"><img src="<?php echo $thumbnail['0']; ?>" alt="<?php the_title(); ?>"></a></div>
                      <?php }  
					  
					    } ?>
                        
                      <h1 class="post_link"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			
						<div class="post-meta muted">
                        <ul>
                            <li><?php _e('Posted by ','ublflati'); ?> <a href="#"><?php the_author(); ?></a> </li>
                            <li><?php _e('in ','ublflati') . the_category(', '); ?> </li>
                            <li><?php the_tags( __("tags ","ublflati"), ', ', ''); ?></li>
                        </ul>
						</div>
				
						<?php if($post->post_excerpt){ the_excerpt(); } ?>
			
						<div class="read_more"><a href="<?php the_permalink(); ?>"><?php _e('READ MORE &rarr;','ublflati'); ?></a></div>
						<div class="pad45"></div>

					</div>
        	
				</div>
                
              <?php } elseif($layouttype == 2) {  ?>
				<div class="row">
               
              		 <div class="<?php if(isset($options['blogleftright']) && $options['blogleftright'] == 'nosidebar'){ echo 'span12'; } else { echo 'span9'; }?> pad15">
                     
                   <?php if($blogtype == 'noimage'){
						  
					 } elseif($blogtype == 'image'){  
                     
                   if(has_post_thumbnail()) { 
						
					  $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false);
						
					  if($thumbnail['1'] > 1024){$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large', false);}
						
					  ?>
                    <div class="hover_img"><a href="<?php echo $thumbnail['0']; ?>" rel="prettyPhoto"><img src="<?php echo $thumbnail['0']; ?>" alt="<?php the_title(); ?>"></a></div>
                    <?php } 
                     
                    } elseif($blogtype == 'slide'){ 
				   
				     $randomslide = 'slide_' . rand(1,28734682);
						
					  ?>
                    <div id="carousel" class="carousel slide ">

							<div class="carousel-inner <?php echo $randomslide; ?>">
                            
                            <?php if(has_post_thumbnail()) { 
								
							   $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false);
						
						       if($thumbnail['1'] > 1024){ $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large', false); }
						
					           ?>
                      	    <div class="item"><img src="<?php echo $thumbnail['0']; ?>" alt="<?php the_title(); ?>" /></div>
                      	    <?php } ?>
								<?php if($image1 != ''){ ?><div class="item"><img src="<?php echo $image1; ?>" alt="" /></div><?php } ?>
                             <?php if($image2 != ''){ ?><div class="item"><img src="<?php echo $image2; ?>" alt="" /></div><?php } ?>
                             <?php if($image3 != ''){ ?><div class="item"><img src="<?php echo $image3; ?>" alt="" /></div><?php } ?>
                             <?php if($image4 != ''){ ?><div class="item"><img src="<?php echo $image4; ?>" alt="" /></div><?php } ?>
                             <?php if($image5 != ''){ ?><div class="item"><img src="<?php echo $image5; ?>" alt="" /></div><?php } ?>
                             <?php if($image6 != ''){ ?><div class="item"><img src="<?php echo $image6; ?>" alt="" /></div><?php } ?>
                             <?php if($image7 != ''){ ?><div class="item"><img src="<?php echo $image7; ?>" alt="" /></div><?php } ?>
                             <?php if($image8 != ''){ ?><div class="item"><img src="<?php echo $image8; ?>" alt="" /></div><?php } ?>
                             <?php if($image9 != ''){ ?><div class="item"><img src="<?php echo $image9; ?>" alt="" /></div><?php } ?>
                             <?php if($image10 != ''){ ?><div class="item"><img src="<?php echo $image10; ?>" alt="" /></div><?php } ?>

							</div>
							<script>
							// <![cdata[
                    		jQuery(document).ready(function ($) {
							jQuery('.<?php echo $randomslide; ?> > .item:first-child').addClass('active');
                    		});
					       // ]]>
							</script>
							<a class="left carousel-control" href="#carousel" data-slide="prev"></a>
							<a class="right carousel-control" href="#carousel" data-slide="next"></a>

						</div>
                    <?php } elseif($blogtype == 'music'){ ?>
                    <iframe class="soundcloud" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F<?php echo $image1 ; ?>"></iframe> 
                    <?php } elseif($blogtype == 'youtube') { ?>
                    <div class="vendor"><iframe src="//www.youtube.com/embed/<?php echo $image1; ?>?wmode=opaque"></iframe></div>
                    <?php } elseif($blogtype == 'vimeo') { ?>
                    <div class="vendor"><iframe src="http://player.vimeo.com/video/<?php echo $image1 ; ?>?title=0&amp;byline=0&amp;portrait=0"></iframe></div>
                    <?php } else {
						
					  if(has_post_thumbnail()) { 
						
					  $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false);
						
					  if($thumbnail['1'] > 1024){$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large', false);}
						
					  ?>
                    <div class="hover_img"><a href="<?php echo $thumbnail['0']; ?>" rel="prettyPhoto"><img src="<?php echo $thumbnail['0']; ?>" alt="<?php the_title(); ?>"></a></div>
                    <?php } 
                    
                    } ?>
                    
                   </div>
               
              </div>
              
              <div class="row">
              
              		<div class="span1">	
                      <div class="btn btn-medium btn-rounded btn-blog capitaltext"><?php the_time('j'); ?><br><?php the_time('M'); ?><br><i class="icon-comments icon-2x"></i><br><a class="com2_no" href="<?php the_permalink(); ?>"><?php comments_number(0, 1, '% '); ?></a></div>
					</div>
			
					<div class="<?php if(isset($options['blogleftright']) && $options['blogleftright'] == 'nosidebar'){ echo 'span11'; } else { echo 'span8'; }?>">
			
            			<h1 class="post_link"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			
						<div class="post-meta muted">
			
            				<ul>
								<li><?php _e('Posted by ','ublflati'); ?> <a href="#"><?php the_author(); ?></a> </li>
                             <li><?php _e('in ','ublflati') . the_category(', '); ?> </li>
                             <li><?php the_tags( __("tags ","ublflati"), ', ', ''); ?></li>
							</ul>
						</div>
				
						<?php if($post->post_excerpt){ the_excerpt(); } ?>
			
						<div class="read_more"><a href="<?php the_permalink(); ?>"><?php _e('READ MORE &rarr;','ublflati'); ?></a></div>
						<div class="pad45"></div>
                        
					</div>
              
              </div>
			   <?php } endwhile; endif; 
               
              if(isset($options['paginationtype']) && $options['paginationtype'] == 1){ ?>

				<div class="row">	
                
					<div class="span1"></div>

					<div class="<?php if(isset($options['blogleftright']) && $options['blogleftright'] == 'nosidebar'){ echo 'span11'; } else { echo 'span8'; }?>">

                    <ul class="pager">
                    	  <li class="previous"><?php echo get_next_posts_link(__('&larr; Older','ublminx')); ?></li>
           			  <li class="next"><?php echo get_previous_posts_link(__('Newer &rarr;','ublminx')); ?></li>
                    </ul>

					</div>

				</div>

           	<?php } else {  ?>
               <div class="row">
                  <div class="span1"></div>
                  <div class="<?php if(isset($options['blogleftright']) && $options['blogleftright'] == 'nosidebar'){ echo 'span11'; } else { echo 'span8'; }?>">
                
                    <?php ubl_pagination($pages = '', $range = 2);  ?>
					
					</div>
            	</div>
				<?php } ?>
           
           </div>	
			<?php if(!isset($options['blogleftright']) || $options['blogleftright'] == 'right'){ ?><div class="sidebar span3 pad15"><?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('blog-sidebar') ) : endif; ?></div><?php } ?>
			<div class="clear"></div>
           <div class="pad45"></div>
                        
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

<?php get_footer(); ?>