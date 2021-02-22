jQuery(document).ready(function(){
	vw = jQuery(window).width();
	if (vw < 641) {
		jQuery('#section_7 .row').slick({

			infinite: true,
			speed: 300,
			slidesToShow:2,
			slidesToScroll: 1,
			swipeToSlide:true,
			arrows:false,
			
		});
	}
	
});