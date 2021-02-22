jQuery(document).ready(function(){
	jQuery('.namlbn-for').slick({
		autoplay : false,
		autoplaySpeed : 3000,
		speed:100,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		centerMode :false,
		prevArrow : '<button type="button" class="slick-prev"><</button>',
		nextArrow: '<button type="button" class="slick-next">></button>',
		
	});
	jQuery('.namlbn-nav').slick({
		autoplay : false,
		autoplaySpeed : 3000,
		speed:100,
		slidesToShow: 4,
		slidesToScroll: 1,
		arrows: false,
		fade: false,
		focusOnSelect: true,
		centerMode :false,
		prevArrow : '<button type="button" class="slick-prev"><</button>',
		nextArrow: '<button type="button" class="slick-next">></button>',
		asNavFor: '.namlbn-for',
	});
});
jQuery(document).ready(function(){
	//select = jQuery("td.value select");
	cur = jQuery(".namlbn-nav .slick-current");
	fi_nav = jQuery(".namlbn-nav .slick-slide[data-slick-index='0']");
	jQuery("td.value select").change(function(){
		jQuery(fi_nav).trigger("click");
	});
	jQuery(".namlbn-product-image-view").click(function(e){
		e.preventDefault();
		link = jQuery(this).attr("href");
		add = '<img src="'+link+'">';
		jQuery(".namlbn-lightbox-content").append(add);
		jQuery(".view-product-popup").css("display","flex");
		jQuery(".view-product-popup").attr("data-toggle","1");
	});
	jQuery(document).keyup(function(e){
		if (jQuery(".view-product-popup").attr("data-toggle") == "1") {
			if (e.keyCode == 27) {
				jQuery(".view-product-popup").css("display","none");
				jQuery(".namlbn-lightbox-content img").remove();
				jQuery(".view-product-popup").attr("data-toggle","0");
			}
		}
	})
	// jQuery(document).keyup(function(e) {
	// 	if (e.keyCode === 13) {
	// 		jQuery(".view-product-popup").css("display","none");
	// 		jQuery(".namlbn-lightbox-content img").remove();
	// 	}     

	// });
	jQuery(".view-product-popup .popup-bgr").click(function(){
		jQuery(".view-product-popup").css("display","none");
		jQuery(".namlbn-lightbox-content img").remove();
		jQuery(".view-product-popup").attr("data-toggle","0");
	});
	jQuery("#close-lightbox").click(function(e){
		e.preventDefault();
		jQuery(".view-product-popup").css("display","none");
		jQuery(".namlbn-lightbox-content img").remove();
		jQuery(".view-product-popup").attr("data-toggle","0");
	});
})
/*jQuery(document).ready(function(){
		vw = jQuery(window).width();
	if (vw >= 1025) {
		jQuery('.namlbn-product-image-view').zoom();
	}
	
});*/
jQuery(document).ready(function(){
	
	jQuery(".namlbn--with-images").has(".namlbn-nav").addClass("has_nav");
});
jQuery(document).ready(function(){
	jQuery(".button_hc").click(function(e){
		e.preventDefault();
		jQuery(".woocommerce_button_simple button.single_add_to_cart_button").trigger('click');
	});
});
jQuery(document).ready(function(){
	jQuery('.quantity').on('click', '.plus', function(e) {
		jQueryinput = jQuery(this).prev('input.qty');
		var val = parseInt(jQueryinput.val());
		jQueryinput.val( val+1 ).change();
	});

	jQuery('.quantity').on('click', '.minus', function(e) {
		jQueryinput = jQuery(this).next('input.qty');
		var val = parseInt(jQueryinput.val());
		if (val > 0) {
			jQueryinput.val( val-1 ).change();
			
		} 
	});
});
jQuery(document).ajaxComplete(function(){
	jQuery('.quantity').off('click', '.plus').on('click', '.plus', function(e) {        
		jQueryinput = jQuery(this).prev('input.qty');
		var val = parseInt(jQueryinput.val());
		jQueryinput.val( val+1 ).change();
	});
	jQuery('.quantity').off('click', '.minus').on('click', '.minus',
		function(e) {       
			jQueryinput = jQuery(this).next('input.qty');
			var val = parseInt(jQueryinput.val());
			if (val > 1) {
				jQueryinput.val( val-1 ).change();
			}
		});
});
