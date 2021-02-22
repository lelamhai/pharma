jQuery(document).ready(function(){

	vw = jQuery(window).width();

	vh = jQuery(window).height();

	jQuery(window).scroll(function(){

		if (window.pageYOffset > 100){

			jQuery(".back-top").css({'opacity':'1','visibility':'visible'});

		} else {

			jQuery(".back-top").css({'opacity':'0','visibility':'hidden'});

		}

	});

	jQuery(".back-top").click(function (e){

		e.preventDefault();

		jQuery('html, body').animate({

			scrollTop: 0

		}, 500);

	});

});
// namlbn animation on scroll - open
jQuery(document).ready(function(){
	var goscroll = jQuery(".goscroll");
		jQuery(".goscroll").css("visibility","hidden");		// ẩn element mẹ muốn gán hiệu ứng
		var scroll = [];	// tạo mảng scroll chưa có giá trị
		srh = jQuery(window).height() ;		// lấy độ cao màn hình
		window.onscroll = function(){		// khi scroll thì chạy lệnh này
		for(i=0;i< goscroll.length ;i++){		// cho i chạy từ 1 tới nhỏ hơn chiều dài mảng goscroll 1 giá trị
			var kc = [];
			kc[i] = goscroll[i].getattribute("data-bottom");  // lấy giá trị của data-bottom
			if(kc[i] != null ){ kc[i] = parseint(kc[i]);} else { kc[i] = 80; } //nếu có data-bottom, ép nó thành kiểu số, nếu ko có thì lấy mặc định là 80
			scroll[i] = (jQuery(goscroll[i]).offset().top - srh) + kc[i];	// tính toán khi nào xuất hiện animation cho từng element class
			fistanima = goscroll[i].getattribute("data-anitype");	// lấy data-anitype của element mẹ
			child = goscroll[i].children ;		// lấy những element con của element hiện tại đã cuộn tới
			// console.log(goscroll[i].offsettop);
			// console.log(goscroll[i]);
			for(o=0;o<child.length;o++){

				if(fistanima != null ){ anima = fistanima;}	// nếu element mẹ có data-anitype thì lấy nó

				else { anima = child[o].getattribute("data-anitype")	// ngược lại lấy data-anitype của element con

					 if(anima != null){ anima = anima;}else { anima = "fadein"}	// nếu element con ko có data-anitype luôn thì lấy data-anitype mặc định là fadein, nếu có thì lấy nó

					 } // lấy giá trị data-anitype

				if(window.pageyoffset > scroll[i]){			// nếu cuộn màn hình nhiều hơn giá trị scroll hiện tại thì:

				child[o].classlist.add("animated",anima);		// thêm class cho từng element con đó

				goscroll[i].style.visibility = "visible";		// ẩn element mẹ

		// cho element mẹ hiển thị

	} else { 

		child[o].classlist.remove("animated",anima); 

				goscroll[i].style.visibility = "hidden";		// ẩn element mẹ

			}

		}

	}

}

})

// namlbn animation on scroll - close
jQuery(document).ready(function(){
	var y = jQuery("#dsk-header").height();
	jQuery(window).scroll(function(){
		if (window.pageYOffset > y+10){
			jQuery("#dsk-header .fix_header").addClass("show");
			/*jQuery("#site-wrapper").css("padding-top",y+'px');*/
			
		} 
		else {
			jQuery("#dsk-header .fix_header").removeClass("show");
			/*jQuery("#site-wrapper").css({'padding-top':0})*/
		}
		
		
	})

})

jQuery(document).ready(function(){
	jQuery(" #searchform input#post-type ").val(jQuery("#cars  option:selected").val());

	jQuery("#cars").on("change" ,function(){
		jQuery(" #searchform input#post-type ").val(jQuery("#cars  option:selected").val());

	});
});
jQuery(document).ready(function(){
	var host =window.location.hostname;	
	jQuery('#menu-item-594').append('<img class="icon_menu" src="https://'+host+'/wp-content/uploads/2021/02/sale.gif">')
});