<?php

function ublflati_commenting($comment, $args, $depth) { 

$GLOBALS['comment'] = $comment; 

$gravatarimage = get_avatar( $comment, 40); 
$newavatar = str_replace("class='avatar", "class='avatar img-circle", $gravatarimage) ;
						
?>
<div class="media" id="comment-<?php comment_ID(); ?>">
    <a class="pull-left" href="#"><?php echo $newavatar; ?></a>
    <div class="media-body">
    <p class="media-heading"><a href="#"><?php comment_author(); ?></a> &raquo; <?php echo get_comment_date('j M Y'); ?> &raquo; <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth'], 'reply_text' => __('Reply','ublflati')))) ?></p>
    <?php comment_text() ?>
    </div>
</div>
<div class="clear"></div>
<?php } ?>