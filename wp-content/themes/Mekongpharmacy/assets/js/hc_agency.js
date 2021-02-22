jQuery(document).ready(function(){
	jQuery(".hc_agency .tinh").on('change',"select", function(){
		cat_id = jQuery(this).val();
		
	jQuery.ajax({
                    type : "post", //Phương thức truyền post hoặc get
                    dataType : "json", //Dạng dữ liệu trả về xml, json, script, or html
                   url : hc_agency.url ,  //Đường dẫn chứa hàm xử lý dữ liệu. Mặc định của WP như vậy
                   data : {
                        action: "hc_agency", //Tên action
                        cat_id : cat_id,
                    },
                    context: this,
                    beforeSend: function(){
                        //Làm gì đó trước khi gửi dữ liệu vào xử lý
                    },
                    success: function(response) {
                        //Làm gì đó khi dữ liệu đã được xử lý
                        if(response.success) {
                        	jQuery('.hc_agency .huyen').html(response.data);

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
