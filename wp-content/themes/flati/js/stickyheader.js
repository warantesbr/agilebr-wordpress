jQuery(document).ready(function(){
	 jQuery(window).bind('scroll',function(){
    
    	if(jQuery(this).scrollTop() > 250) {
		jQuery('.stickyheader').fadeIn(500);
		}
		if(jQuery(this).scrollTop() < 249){
        jQuery('.stickyheader').fadeOut(200);
		}  

    });
});