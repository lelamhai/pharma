jQuery(document).ready(function(){
	vw = jQuery(window).width();
	vh = jQuery(window).height();
	jQuery(".namlbn-open-lightbox").find("a.open-popup").click(function(e){
		e.preventDefault();
		src = jQuery(this).parent().find('img').attr("data-lightbox");
		add = '<img src="'+src+'">';
		img = new Image();
		img.src = src;
		src_bgr = jQuery(this).parent().find('img').attr("data-zoom");
		jQuery(".namlbn-lightbox .popup-content").html(add);
		jQuery(".namlbn-lightbox .popup-content").attr('data-in','1');
		jQuery(".namlbn-lightbox .popup-content").css('cursor','zoom-in');
		jQuery(".namlbn-lightbox .popup-content img").load(function(){
			content_width = jQuery(".namlbn-lightbox .popup-content").width();
			content_height = jQuery(".namlbn-lightbox .popup-content").height();
			jQuery(".namlbn-lightbox .popup-content").css({
				"width": content_width+"px",
				"height": content_height+"px",
				"overflow": "hidden",
			});
		});
		jQuery(".namlbn-lightbox .popup-content").css({
			"background-image" : "url("+src_bgr+")",
		});
		jQuery(".namlbn-lightbox .popup-content").mousemove(function(e){
			x_move = 100*(e.pageX - jQuery(".namlbn-lightbox .popup-content").offset().left)/content_width;
			y_move = 100*(e.pageY - jQuery(".namlbn-lightbox .popup-content").offset().top)/content_height;
			jQuery(".namlbn-lightbox .popup-content").css({
				"background-position" : x_move+"% "+y_move+"%",
			});
		});
		jQuery(".namlbn-lightbox").css("display","flex");
		jQuery(".popup-bgr").click(function(){
			jQuery(this).closest(".namlbn-lightbox").find("img").remove(); 
			jQuery(".namlbn-lightbox .popup-content").attr('data-in','1');
			jQuery(".namlbn-lightbox").hide();
			jQuery(".namlbn-lightbox .popup-content").css({
				"width": "",
				"height": "",
				"overflow": "",
			});
		});
		if (vw > 767 ) {
			jQuery(".namlbn-lightbox .popup-content").find("img").css({
				"max-width"		: "95vw",
				"max-height"	: 	"90vh"
			});
		}
	});
	jQuery(".namlbn-lightbox .popup-content").click(function(){
		console.log(jQuery(this).attr('data-in'));
		if (jQuery(this).attr('data-in') == '1') {
			jQuery(this).find('img').css("display","none");
			jQuery(this).css("cursor",'zoom-out');
			jQuery(this).attr('data-in','0');
		} else {
			jQuery(this).find('img').css("display","block");
			jQuery(this).css("cursor",'zoom-in');
			jQuery(this).attr('data-in','1');
		}
	});
})