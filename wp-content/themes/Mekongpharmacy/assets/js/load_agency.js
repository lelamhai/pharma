jQuery(document).ready(function(){
	jQuery(".hc_agency").on('change',"select", function(){

		a = 0;
		mang = [];
		term_parent_1 = jQuery('#tinh_thanh').find("option:selected").val();
		console.log(term_parent_1);
		term_parent_2 = jQuery('#quan_huyen').find("option:selected").attr('data-id');
		console.log(term_parent_2);
		if(jQuery(".hc_filter").find("option:selected").length > 0){
			jQuery(".hc_filter").find("option:selected").each(function(){
				if ( jQuery('#tinh_thanh').find("option:selected").val() && (!jQuery('#quan_huyen').find("option:selected").attr("data-id"))) {
					mang[a] = term_parent_1;
				}
				else if ((jQuery('#tinh_thanh').find("option:selected").val() != jQuery('#quan_huyen').find("option:selected").attr('data-id') )){
					mang[a] = term_parent_1;
				}
				else if ((jQuery('#tinh_thanh').find("option:selected").val() == jQuery('#quan_huyen').find("option:selected").attr('data-id') )) {
					mang[a] = jQuery(this).val();
					a++;
				}
			});
		}
		else{
			mang = [];
		}
		

		jQuery.ajax({
                    type : "post", //Phương thức truyền post hoặc get
                    dataType : "json", //Dạng dữ liệu trả về xml, json, script, or html
                   url : load_agency.url ,  //Đường dẫn chứa hàm xử lý dữ liệu. Mặc định của WP như vậy
                   data : {
                        action: "load_agency", //Tên action
                        mang : mang,
                    },
                    context: this,
                    beforeSend: function(){
                        //Làm gì đó trước khi gửi dữ liệu vào xử lý
                    },
                    success: function(response) {
                        //Làm gì đó khi dữ liệu đã được xử lý
                        if(response.success) {
                        	jQuery('#page_agency .col-9 .col_wrapper').html(response.data);
                        	console.log('haha');
                        }
                        else {
                        	alert('Đã có lỗi xảy ra');
                        }
                    },
                    error: function( jqXHR, textStatus, errorThrown ){
                        //Làm gì đó khi có lỗi xảy ra
                        console.log( 'The following error occured: ' + textStatus, errorThrown );
                    }
                });
            });
	

});

