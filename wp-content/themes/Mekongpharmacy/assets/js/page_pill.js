jQuery(document).ready(function(){
jQuery(".scroll-to").click(function (e){
	e.preventDefault();
	target = jQuery(this).attr("data-target");
	jQuery('html, body').animate({
		scrollTop: jQuery("."+target).offset().top - 100
	},0);
});
});