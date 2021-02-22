jQuery(document).ready(function(){
  jQuery('#banner_slider_gtbh030620 .banner').slick({
   infinite: true,
   autoplay:true,
   speed: 300,
   slidesToShow: 1,
   slidesToScroll: 1,
   arrows: true,
   prevArrow : '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
   nextArrow : '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>',
  
  });
});