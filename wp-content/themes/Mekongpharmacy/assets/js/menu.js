
jQuery(document).ready(function(){

	jQuery("#open_menu").click(function(){

		jQuery(".menu_fix").addClass('show');

	});

	jQuery("#close_menu").click(function(){

		jQuery(".menu_fix").removeClass('show');

	});
});
jQuery(document).ready(function(){
	jQuery("nav.menu_mobile ul li.menu-item-has-children ").prepend('<i class="fas fa-chevron-down"></i>');
	// thêm mũi tên ngay sau li có chứa sub-menu
	jQuery("nav.menu_mobile ul li.menu-item-has-children > i").attr("data-active","0");
	// khởi tạo data-active = 0
	jQuery("nav.menu_mobile ul li.menu-item-has-children > i").click(function(){
		data = jQuery(this).attr("data-active");
	// lấy attribute data-active
	li = jQuery(this).closest("nav.menu_mobile ul li.menu-item-has-children");
	// tìm li chứa thẻ <i> vừa đc click có class menu-item-has-children
	if (data =='0')//nếu chưa click thì
	{
		jQuery(this).css("transform","rotate(180deg)");
		//xoay i 90 độ
		jQuery(li).children("nav.menu_mobile ul.sub-menu").show();
		// show sub-menu của li hiện tại
		jQuery(this).attr("data-active","1");
		// gán data active =1 để biết sub menu đã đc mở
	}
	else// nếu i đã mở thì
	{
		jQuery(this).css("transform","rotate(0deg)");
		//xoay i về ban đầu
		jQuery(li).children("nav.menu_mobile ul.sub-menu").hide();
		// ẩn sub-menu của li hiện tại
		jQuery(this).attr("data-active","0");
		// gán data active =0 để biết sub menu đã đc đóng
	}
});



});