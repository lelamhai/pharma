jQuery(document).ready(function(){
	jQuery('#section_2 .products').slick({

		infinite: true,
		speed: 300,
		slidesToShow:5,
		slidesToScroll: 1,
		swipeToSlide:true,
		prevArrow : '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
   nextArrow : '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>',
		responsive: [
		{
			breakpoint: 1024,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 3,
				infinite: true,
				dots: true
			}
		},
		
		{
			breakpoint: 641,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		}
    
    ]
});
});