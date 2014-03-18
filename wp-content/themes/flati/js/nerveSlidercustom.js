jQuery(document).ready(function($) {
	$(".myslider").show();
	$(".myslider").startslider({
		slideTransitionSpeed: 500,
		slideTransitionEasing: "easeOutExpo",
		slidesDraggable: true,
		sliderResizable: true,
		showDots:true,
	});
});