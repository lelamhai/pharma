jQuery(document).ready(function(){
	jQuery("#section_5 .tab_nav li").click(function(e){
		e.preventDefault();
		tg = jQuery(this).attr("data-target");
		jQuery(this).parent().find(".tab_active").removeClass("tab_active");
		jQuery(this).addClass("tab_active");
		jQuery(this).closest("#section_5").find(".content_active").removeClass("content_active");
		jQuery(this).closest("#section_5").find("."+tg).addClass("content_active");
	});
});
