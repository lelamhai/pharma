<?php
/**
 * Template name: Đặt Hàng Nhanh
 */
?>
<?php get_header(); ?>


<div class="DHN-container">
    <div class="DHN-tittle">
        <h1>Đặt hàng nhanh</h1>
    </div>

    <div class="DHN-quick-order-and-kart">
                <div class="DHN-quick-order">
                    <div class="DHN-search-box">
                        <div class="DHN-input-box">
                            <i class="fas fa-search"></i>
                            <input class="DHN-input-search", placeholder="Nhập tên thuốc, hoạt chất cần tìm...">
                            <div class="DHN-kart-2nd">
                                <div>
                                    <div class="DHN-info">
                                        <small>Số lượng</small>
                                        <b>0</b>  
                                    </div>
                                    <div class="DHN-info-2">
                                        <small>Tổng tiền</small>
                                        <div>
                                            <b>0</b>
                                            <b class="DHN-unit">đ</b>
                                        </div>
                                    </div>
                                </div>
                                <div class="DHN-btn-check">
                                    <a href="#">Xem giỏ hàng</a>
                                </div>                       
                            </div>
                        </div>
                    </div>
                    <div class="DHN-list-item">
                        <div class="DHN-list-item-row">
                            <div class="DHN-sample-img">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/quick_order/panadol.jpg" alt="">   
                            </div>
                            <div class="DHN-information">
                                <div class="DHN-name">
                                    <a title="Panadol extra gsk (h/180v)" href="#">Panadol extra gsk (h/180v)</a>
                                </div>
                                <div class="DHN-category">
                                    <ul>    
                                        <li>
                                            <div class="DHN-tag-ban-chay">
                                                <i class="fas fa-thumbs-up"></i>
                                                Bán chạy
                                            </div>                                            
                                        </li>
                                        <li>
                                            <div class="DHN-tag-hoa-don-nhanh" >
                                                <i class="fas fa-file-invoice-dollar"></i>
                                                Hóa đơn nhanh
                                            </div>
                                        </li>
                                        <li>
                                            <div class="DHN-tag-giao-nhanh">
                                                <i class="fas fa-shipping-fast"></i>
                                            Giao nhanh
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="DHN-information2">
                                <div class="DHN-capacity">
                                    <small>Hộp 15 vỉ x 12 viên</small>
                                </div>                                
                            </div>
                            <div class="DHN-information3">
                                <div class="DHN-price">
                                    <span class="DHN-number">234.400</span>
                                    <span class="DHN-unit">đ</span>
                                </div>
                                <div class="DHN-quantity">
                                    <button class="DHN-minus" data-operation="-" data-target="qty.qtyBtn">
                                        <i class="fas fa-minus-circle"></i>
                                    </button>
                                    <input class="DHN-number" type="text" placeholder="0" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></input>
                                    <button class="DHN-plus" data-operation="+" data-target="qty.qtyBtn">
                                        <i class="fas fa-plus-circle"></i>
                                    </button>
                                </div>
                            </div>
                            
                        </div>
                        <div class="DHN-list-item-row">
                            <div class="DHN-sample-img">
                                <!-- <img src="img/maverlon.jpg" alt="maverlon"> -->
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/quick_order/panadol.jpg" alt="">   
                            </div>
                            <div class="DHN-information">
                                <div class="DHN-name">
                                    <a title="Marvelon bayer (h/21v)" href="#">Marvelon bayer (h/21v)</a>
                                </div>
                                <div class="DHN-category">
                                    <ul>
                                        <li>
                                            <div class="DHN-tag-ban-chay">
                                                <i class="fas fa-thumbs-up"></i>
                                                Bán chạy
                                            </div>                                            
                                        </li>
                                        <li>
                                            <div class="DHN-tag-hoa-don-nhanh" >
                                                <i class="fas fa-file-invoice-dollar"></i>
                                                Hóa đơn nhanh
                                            </div>
                                        </li>
                                        <li>
                                            <div class="DHN-tag-giao-nhanh">
                                                <i class="fas fa-shipping-fast"></i>
                                            Giao nhanh
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="DHN-information2">
                                <div class="DHN-capacity">
                                    <small>Hộp 1 vỉ x 21 viên</small>
                                </div>                                
                            </div>
                            <div class="DHN-information3">
                                <div class="DHN-price">
                                    <span class="DHN-number">71.500</span>
                                    <span class="DHN-unit">đ</span>
                                </div>
                                <div class="DHN-quantity">
                                    <button class="DHN-minus" data-operation="-">
                                        <i class="fas fa-minus-circle"></i>
                                    </button>
                                    <input class="DHN-number" type="text" placeholder="0" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></input>
                                    <button class="DHN-plus" data-operation="+">
                                        <i class="fas fa-plus-circle"></i>
                                    </button>
                                </div>
                            </div>
                            
                        </div>
                        <div class="DHN-list-item-row">
                            <div class="DHN-sample-img">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/quick_order/panadol.jpg" alt="">   
                                <!-- <img src="img/phosphalugel.jpg" alt="phosphalugel"> -->
                            </div>
                            <div class="DHN-information">
                                <div class="DHN-name">
                                    <a title="Phosphalugel boehringer ingelheim (h/26g)" href="#">Phosphalugel boehringer ingelheim (h/26g)</a>
                                </div>
                                <div class="DHN-category">
                                    <ul>
                                        <li>
                                            <div class="DHN-tag-ban-chay">
                                                <i class="fas fa-thumbs-up"></i>
                                                Bán chạy
                                            </div>                                            
                                        </li>
                                        <li>
                                            <div class="DHN-tag-hoa-don-nhanh" >
                                                <i class="fas fa-file-invoice-dollar"></i>
                                                Hóa đơn nhanh
                                            </div>
                                        </li>
                                        <li>
                                            <div class="DHN-tag-giao-nhanh">
                                                <i class="fas fa-shipping-fast"></i>
                                            Giao nhanh
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="DHN-information2">
                                <div class="DHN-capacity">
                                    <small>Hộp 26 gói x 20gr</small>
                                </div>                                
                            </div>
                            <div class="DHN-information3">
                                <div class="DHN-price">
                                    <span class="DHN-number">107.900</span>
                                    <span class="DHN-unit">đ</span>
                                </div>
                                <div class="DHN-quantity">
                                    <button class="DHN-minus" data-operation="-">
                                        <i class="fas fa-minus-circle"></i>
                                    </button>
                                    <input class="DHN-number" type="text" placeholder="0" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></input>
                                    <button class="DHN-plus" data-operation="+">
                                        <i class="fas fa-plus-circle"></i>
                                    </button>
                                </div>
                            </div>
                            
                        </div>
                        <div class="DHN-list-item-row">
                            <div class="DHN-sample-img">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/quick_order/panadol.jpg" alt="">   
                                <!-- <img src="img/panadol.jpg" alt="panadol"> -->
                            </div>
                            <div class="DHN-information">
                                <div class="DHN-name">
                                    <a title="Panadol extra gsk (h/180v)" href="#">Panadol extra gsk (h/180v)</a>
                                </div>
                                <div class="DHN-category">
                                    <ul>
                                        <li>
                                            <div class="DHN-tag-ban-chay">
                                                <i class="fas fa-thumbs-up"></i>
                                                Bán chạy
                                            </div>                                            
                                        </li>
                                        <li>
                                            <div class="DHN-tag-hoa-don-nhanh" >
                                                <i class="fas fa-file-invoice-dollar"></i>
                                                Hóa đơn nhanh
                                            </div>
                                        </li>
                                        <li>
                                            <div class="DHN-tag-giao-nhanh">
                                                <i class="fas fa-shipping-fast"></i>
                                            Giao nhanh
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="DHN-information2">
                                <div class="DHN-capacity">
                                    <small>Hộp 15 vỉ x 12 viên</small>
                                </div>                                
                            </div>
                            <div class="DHN-information3">
                                <div class="DHN-price">
                                    <span class="DHN-number">234.400</span>
                                    <span class="DHN-unit">đ</span>
                                </div>
                                <div class="DHN-quantity">
                                    <button class="DHN-minus" data-operation="-" data-target="qty.qtyBtn">
                                        <i class="fas fa-minus-circle"></i>
                                    </button>
                                    <input class="DHN-number" type="text" placeholder="0" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></input>
                                    <button class="DHN-plus" data-operation="+" data-target="qty.qtyBtn">
                                        <i class="fas fa-plus-circle"></i>
                                    </button>
                                </div>
                            </div>
                            
                        </div>
                        <div class="DHN-list-item-row">
                            <div class="DHN-sample-img">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/quick_order/panadol.jpg" alt="">   
                                <!-- <img src="img/maverlon.jpg" alt="maverlon"> -->
                            </div>
                            <div class="DHN-information">
                                <div class="DHN-name">
                                    <a title="Marvelon bayer (h/21v)" href="#">Marvelon bayer (h/21v)</a>
                                </div>
                                <div class="DHN-category">
                                    <ul>
                                        <li>
                                            <div class="DHN-tag-ban-chay">
                                                <i class="fas fa-thumbs-up"></i>
                                                Bán chạy
                                            </div>                                            
                                        </li>
                                        <li>
                                            <div class="DHN-tag-hoa-don-nhanh" >
                                                <i class="fas fa-file-invoice-dollar"></i>
                                                Hóa đơn nhanh
                                            </div>
                                        </li>
                                        <li>
                                            <div class="DHN-tag-giao-nhanh">
                                                <i class="fas fa-shipping-fast"></i>
                                            Giao nhanh
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="DHN-information2">
                                <div class="DHN-capacity">
                                    <small>Hộp 1 vỉ x 21 viên</small>
                                </div>                                
                            </div>
                            <div class="DHN-information3">
                                <div class="DHN-price">
                                    <span class="DHN-number">71.500</span>
                                    <span class="DHN-unit">đ</span>
                                </div>
                                <div class="DHN-quantity">
                                    <button class="DHN-minus" data-operation="-">
                                        <i class="fas fa-minus-circle"></i>
                                    </button>
                                    <input class="DHN-number" type="text" placeholder="0" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></input>
                                    <button class="DHN-plus" data-operation="+">
                                        <i class="fas fa-plus-circle"></i>
                                    </button>
                                </div>
                            </div>
                            
                        </div>
                        <div class="DHN-list-item-row">
                            <div class="DHN-sample-img">
                                <!-- <img src="img/phosphalugel.jpg" alt="phosphalugel"> -->
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/quick_order/panadol.jpg" alt="">   
                            </div>
                            <div class="DHN-information">
                                <div class="DHN-name">
                                    <a title="Phosphalugel boehringer ingelheim (h/26g)" href="#">Phosphalugel boehringer ingelheim (h/26g)</a>
                                </div>
                                <div class="DHN-category">
                                    <ul>
                                        <li>
                                            <div class="DHN-tag-ban-chay">
                                                <i class="fas fa-thumbs-up"></i>
                                                Bán chạy
                                            </div>                                            
                                        </li>
                                        <li>
                                            <div class="DHN-tag-hoa-don-nhanh" >
                                                <i class="fas fa-file-invoice-dollar"></i>
                                                Hóa đơn nhanh
                                            </div>
                                        </li>
                                        <li>
                                            <div class="DHN-tag-giao-nhanh">
                                                <i class="fas fa-shipping-fast"></i>
                                            Giao nhanh
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="DHN-information2">
                                <div class="DHN-capacity">
                                    <small>Hộp 26 gói x 20gr</small>
                                </div>                                
                            </div>
                            <div class="DHN-information3">
                                <div class="DHN-price">
                                    <span class="DHN-number">107.900</span>
                                    <span class="DHN-unit">đ</span>
                                </div>
                                <div class="DHN-quantity">
                                    <button class="DHN-minus" data-operation="-">
                                        <i class="fas fa-minus-circle"></i>
                                    </button>
                                    <input class="DHN-number" type="text" placeholder="0" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></input>
                                    <button class="DHN-plus" data-operation="+">
                                        <i class="fas fa-plus-circle"></i>
                                    </button>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
                <div class="DHN-kart">
                    <div>
                        <div class="DHN-info">
                            <small>Số lượng</small>
                            <b>0</b>  
                        </div>
                        <div class="DHN-info-2">
                            <small>Tổng tiền</small>
                            <div>
                                <b>0</b>
                                <b class="DHN-unit">đ</b>
                            </div>
                        </div>
                    </div>
                    <div class="DHN-btn-check">
                        <a href="Cart.html">Xem giỏ hàng</a>
                    </div>                       
                </div>
            </div>



</div>




<script>
    function myFunction() {
        
		var data = {
		'action': 'load_posts_by_ajax',
		'username': 'lelamhai',
        'password': '123456',
		'email' : 'haile@aaa.vom',
        'phone': '123456',
		'security': '<?php echo wp_create_nonce("load_more_posts_policy"); ?>'
		};

		$.post("<?php echo admin_url( 'admin-ajax.php' ); ?>", data, function(response) {
            console.log('finish');
            // page++;
            // var $res = JSON.parse(response);
            // $('#row-more').append($res.datas);
            // if($res.status==2){
            //     $(".wrap-more").css("display", "none");
            // }
		});
    }
</script>
<?php get_footer(); ?>