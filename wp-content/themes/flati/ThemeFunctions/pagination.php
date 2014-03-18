<?php

function ubl_pagination($pages = '', $range = 2){  

     $showitems = ($range * 2)+1;  

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == ''){
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages){
             $pages = 1;
         }
     }   

     if(1 != $pages){
		 
         echo '<div class="pagination"><ul>';
		 
		 if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo '<li><a href="'.get_pagenum_link(-1).'">'.__('First','ublflati').'</a></li>';
         if($paged > 1 && $showitems < $pages) echo '<li>' . get_previous_posts_link('&laquo;') . '</li>';

         for ($i=1; $i <= $pages; $i++){
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
                echo ($paged == $i)? '<li class="active"><a href="#">'.$i.'</a></li>':'<li><a href="'.get_pagenum_link($i).'">'.$i.'</a></li>';
             }
         }
		 
		 if ($paged < $pages && $showitems < $pages) echo '<li>' . get_next_posts_link('&raquo;') . '</li>';  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo '<li><a href="'.get_pagenum_link($pages).'">'.__('Last','ublflati').'</a></li>';
		 
         echo '</ul></div><div class="clearfix"></div>' . "\n";
		 
     }
	 
}

?>