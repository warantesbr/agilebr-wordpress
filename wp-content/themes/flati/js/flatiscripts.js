jQuery(document).ready(function($){	

	setTimeout(function(){
	$('.progress .bar').each(function() {
			var me = $(this);
			var perc = me.attr("data-percentage");
			 var current_perc = 0;
			var progress = setInterval(function() {
				if (current_perc>=perc) {
					clearInterval(progress);
				} else {
					current_perc +=1;
					me.css('width', (current_perc)+'%');
				}
				me.text((current_perc)+'%');
			}, 20);
		});
	},300);

/***************************************************
	MENU
***************************************************/
	jQuery('ul.nav li.dropdown').hover(function (){
        jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn();
    }, function (){
        jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut();
    });
	
/***************************************************
	RESPONSIVE MENU
***************************************************/		
  	$("nav#main_menu select").change(function() {
    	window.location = $(this).find("option:selected").val();
  	});
	
/***************************************************
		TOOLTIP & POPOVER
***************************************************/
$("[rel=tooltip]").tooltip();
$("[data-rel=tooltip]").tooltip();

$("[data-rel=popover]").hover(function(){
	$(this).popover('toggle');
});

/***************************************************
		CAROUSEL - STOP AUTO CYCLE
***************************************************/
 $('.carousel').carousel({interval: false});

/***************************************************
		HOVERS
***************************************************/
$(".hover_img, .hover_colour").on('mouseover',function(){
		var info=$(this).find("img");
		info.stop().animate({opacity:0.1},500);
	}
);
$(".hover_img, .hover_colour").on('mouseout',function(){
		var info=$(this).find("img");
		info.stop().animate({opacity:1},800);
	}
);
	
/***************************************************
		BACK TO TOP LINK
***************************************************/
	$(window).scroll(function() {
		if ($(this).scrollTop() > 200) {
			$('.go-top').fadeIn(200);
		} else {
			$('.go-top').fadeOut(200);
		}
	});
				
	// Animate the scroll to top
	$('.go-top').click(function(event) {
		
		event.preventDefault();
		$('html, body').animate({scrollTop: 0}, 300);
		
	});
	
/***************************************************
	IFRAME
***************************************************/
	$("iframe").each(function(){
		var ifr_source = $(this).attr('src');
		var wmode = "wmode=transparent";
		if(ifr_source.indexOf('?') != -1) {
		var getQString = ifr_source.split('?');
		var oldString = getQString[1];
		var newString = getQString[0];
		$(this).attr('src',newString+'?'+wmode+'&'+oldString);
		}
		else $(this).attr('src',ifr_source+'?'+wmode);
	});
			
});	
	

/***************************************************
	ANIMATIONS
***************************************************/

jQuery(function($) { 	
	$('.welcome').show().addClass("animated fadeInDown");
	$('.welcome_index').show().addClass("animated fadeInDown");
	$('.intro_sections h6').show().addClass("animated fadeInUp");
	$('.fadeinup').show().addClass("animated fadeInUp");
	$('.fadeindown').show().addClass("animated fadeInDown");
}); 

/***************************************************
		PRETTYPHOTO
***************************************************/
jQuery('a[data-rel]').each(function($) {
$(this).attr('rel', $(this).attr('data-rel')).removeAttr('data-rel');
});
jQuery("a[rel^='prettyPhoto']").prettyPhoto();
	jQuery("a[rel^='prettyPhoto'], a[rel^='lightbox']").prettyPhoto({
overlay_gallery: false, social_tools: false,  deeplinking: false
});


