jQuery(document).ready(function(){
	vw = jQuery(window).width();
	vh = jQuery(window).height();
	jQuery(".namlbn-open-lightbox").find("img").click(function(e){
		e.preventDefault();
		src = jQuery(this).attr("data-lightbox");
		add = '<img src="'+src+'" class="img_view">';
		img = new Image();
		img.src = src;
		src_zoom = jQuery(this).attr("data-zoom");
		jQuery(".namlbn-lightbox .popup-content").html(add);
		jQuery(".namlbn-lightbox .popup-content").append('<img src="'+src_zoom+'" class="img_zoom">');
		if (vw <= 425 ) {
			jQuery(".namlbn-lightbox .popup-content").css({
				"max-width"		: "95vw",
				"max-height"	: 	"95vh"
			});
		}
		if (vw > 425 && vw <= 767 ) {
			jQuery(".namlbn-lightbox .popup-content").css({
				"max-width"		: "90vw",
				"max-height"	: 	"100vh"
			});
		}
		if (vw > 767 && vw <= 1024 ) {
			jQuery(".namlbn-lightbox .popup-content").css({
				"max-width"		: "95vw",
				"max-height"	: 	"90vh"
			});
		}
		jQuery(".namlbn-lightbox").css("display","flex");
		jQuery(".popup-bgr").click(function(){
			jQuery(this).closest(".namlbn-lightbox").find("img").remove(); 
			jQuery(".namlbn-lightbox .popup-content i").remove(); 
			jQuery(".namlbn-lightbox").hide();
			jQuery(".namlbn-lightbox .popup-content .img_view").show();
			jQuery(".namlbn-lightbox .popup-content .img_zoom").hide();
			jQuery(".namlbn-lightbox .popup-content").css({
				"overflow": "",
				"width" : "",
				"height" : "",
			});
		});

	});
})