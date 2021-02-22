jQuery(document).ready(function () {
	vw = jQuery(window).width();

	if (vw > 640 && vw < 1025) {
		jQuery.ajax({
                    type : "post", //Phương thức truyền post hoặc get
                    dataType : "json", //Dạng dữ liệu trả về xml, json, script, or html
                   url : ajax_banner.url ,  //Đường dẫn chứa hàm xử lý dữ liệu. Mặc định của WP như vậy
                   data : {
                        action: "test_ajax", //Tên action


                    },
                    context: this,
                    beforeSend: function(){
                        //Làm gì đó trước khi gửi dữ liệu vào xử lý
                    },
                    success: function(response) {
                        //Làm gì đó khi dữ liệu đã được xử lý
                        if(response.success) {
                        	jQuery("#banner_slider").html(response.data);
                        }
                        else {
                        	alert('Đã có lỗi xảy ra');
                        }
                    },
                    error: function( jqXHR, textStatus, errorThrown ){
                        //Làm gì đó khi có lỗi xảy ra
                       // console.log( 'The following error occured: ' + textStatus, errorThrown );
                   }
               });
	}
});