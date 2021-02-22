jQuery(document).ready(function(){
	vw = jQuery(window).width();
	if(vw > 767){
		jQuery("#page_benh .hc_tab li").click(function(e){
			e.preventDefault();
			tg = jQuery(this).attr("data-target");
			jQuery(this).parent().find(".tab_active").removeClass("tab_active");
			jQuery(this).addClass("tab_active");
			jQuery(this).closest("#page_benh").find(".hc_tab_content .content_active").removeClass("content_active");
			jQuery(this).closest("#page_benh").find("."+tg).addClass("content_active");
		});
	}
	
	vw = jQuery(window).width();
	if(vw < 768){
		jQuery("#page_benh").find(".tab_active").removeClass("tab_active");
		jQuery("#page_benh").find(".hc_tab_content .content_active").removeClass("content_active");
		jQuery("#page_benh .hc_tab li").click(function(e){
			e.preventDefault();
			jQuery('.section_1_benh .col_benh').addClass('mini');
			jQuery('.section_1_benh .hinh_benh').addClass('hidden');
			jQuery('.section_1_benh .col_tab').addClass('show');
			jQuery('.section_1_benh .section_title .close_benh').html('<i class="fas fa-arrow-circle-left"></i>');
			tg = jQuery(this).attr("data-target");
			jQuery(this).parent().find(".tab_active").removeClass("tab_active");
			jQuery(this).addClass("tab_active");
			jQuery(this).closest("#page_benh").find(".hc_tab_content .content_active").removeClass("content_active");
			jQuery(this).closest("#page_benh").find("."+tg).addClass("content_active");
		})
		jQuery('.close_benh').click(function(e){
			jQuery('.section_1_benh .col_benh').removeClass('mini');
			jQuery('.section_1_benh .hinh_benh').removeClass('hidden');
			jQuery('.section_1_benh .col_tab').removeClass('show');
			jQuery("#page_benh").find(".tab_active").removeClass("tab_active");
		jQuery("#page_benh").find(".hc_tab_content .content_active").removeClass("content_active");
			jQuery(this).html('');
		})
	}
});
