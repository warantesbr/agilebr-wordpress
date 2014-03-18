<?php

if(!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename('SCRIPT_FILENAME')){
	die(__('Please do not load this page directly. Thanks!','ublflati'));
}

if(post_password_required()){
	echo '<p class="nocomments">'.__('Password Is Needed To View This Post','ublflati').'</p>';
	return;
} ?>

<?php if (have_comments()){ ?>
<h2><?php comments_number('0 '.__('comments','ublflati'), '1 '.__('comment','ublflati'), '% '.__('comments','ublflati')) ; ?></h2> 

<?php wp_list_comments('type=comment&callback=ublflati_commenting'); ?>

<p><span class="alignleft"><?php previous_comments_link(__('Previous','ublflati')) ?></span><span class="alignright"><?php next_comments_link(__('Next','ublflati')) ?></span></p>
<?php } ?>

<?php if(comments_open()){ ?>

<div class="pad25"></div>

<div class="span7">

	<div class="row">
    
		<h2><?php _e('Have your say!','ublflati'); ?></h2>

			<div class="contact_form">

				<div id="note"></div>

				<div id="fields">

					<?php
                    
                    comment_form( array(
                        'title_reply' => __('Have your say!','ublflati'),
                        
                        'fields' => array(
                            'author' => '<p class="form_info">'.__("name","ublflati").' <span class="required">*</span></p><input class="span5" type="text" name="author" id="author" value="" /></p>',
                            'email'  => '<p class="form_info">'.__("email","ublflati").' <span class="required">*</span></p><input class="span5" type="text" name="email" id="email" value=""  /></p>',
                            'url'    => null,
                        ),
                        'comment_notes_before' => '',
                        'comment_field' => '<p class="form_info">'.__("message","ublflati").'</p><textarea name="comment" id="comment" class="span8" ></textarea></p><div class="clear"></div>',
                        'comment_notes_after' => false
                    
                    ) ); 
                    
                    ?>
                    <div class="clear"></div>
                
				</div>

			</div>

		</div>

</div>
       
<?php } ?>