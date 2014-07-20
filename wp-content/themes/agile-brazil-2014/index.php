<?php
get_header();
if (is_front_page()){
    if(pll_current_language() == 'pt'){
        $postid = 99;
    }else{
        $postid = 170;
    }
}else{
    $postid = get_the_ID();
}
$post = get_post($postid);

if (!is_front_page()){
    get_header('inside-start');
}
$content = apply_filters('the_content', $post->post_content);
echo $content;
if (!is_front_page()){
    get_header('inside-end');
}else{
    get_header('home');
}
get_footer();
?>