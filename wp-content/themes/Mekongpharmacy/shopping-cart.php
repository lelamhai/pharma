<?php
/**
 * Template name: Giỏ Hàng
 */
?>

<?php get_header(); ?>
<div class="GH-container">
            <div class="GH-products-and-kart">
                <div class="GH-tittle">
                    <h1>Giỏ hàng</h1>
                </div>
                <div class="GH-content">
                    <div class="GH-left">
                        <div class="GH-instruction">
                            <i class="fas fa-star"></i>
                            <p>Nhấp để đánh dấu sản phẩm quan trọng (giới hạn 20% tổng số sản phẩm, 1 sản phẩm đặt nhiều cái cũng tính là 1)
                            </p>
                        </div>
                        <div class="GH-products">
                            <div></div>
                            <div class="GH-list-item">
                                <div class="GH-list-item-row">
                                    <div class="GH-star-circle">
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="GH-sample-img">                                 
                                        <img src="img/panadol.jpg" alt="panadol">
                                    </div>
                                    <div class="GH-information">
                                        <div class="GH-name">
                                            <a title="Panadol extra gsk (h/180v)" href="#">Panadol extra gsk (h/180v)</a>
                                        </div>
                                        <div class="GH-capacity">
                                            <small>Hộp 15 vỉ x 12 viên</small>
                                        </div>
                                    </div>
                                                                        
                                    <div class="GH-information2">
                                        <div class="GH-price">
                                            <span class="GH-number">234.400</span>
                                            <span class="GH-unit">đ</span>
                                        </div>
                                        <div class="GH-quantity">
                                            <button class="GH-minus" data-operation="-" data-target="qty.qtyBtn">
                                                <i class="fas fa-minus-circle"></i>
                                            </button>
                                            <input class="GH-number" type="text" placeholder="0" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></input>
                                            <button class="GH-plus" data-operation="+" data-target="qty.qtyBtn">
                                                <i class="fas fa-plus-circle"></i>
                                            </button>
                                            <button class="GH-trash">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="GH-list-item-row">
                                    <div class="GH-star-circle">
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="GH-sample-img">
                                        <img src="img/panadol.jpg" alt="panadol">
                                    </div>
                                    <div class="GH-information">
                                        <div class="GH-name">
                                            <a title="Panadol extra gsk (h/180v)" href="#">Solgar B-Complex "50" Vegetable Capsules (C/50v)</a>
                                        </div>
                                        <div class="GH-capacity">
                                            <small>Hộp 15 vỉ x 12 viên</small>
                                        </div>
                                    </div>
                                                                        
                                    <div class="GH-information2">
                                        <div class="GH-price">
                                            <span class="GH-number">234.400</span>
                                            <span class="GH-unit">đ</span>
                                        </div>
                                        <div class="GH-quantity">
                                            <button class="GH-minus" data-operation="-" data-target="qty.qtyBtn">
                                                <i class="fas fa-minus-circle"></i>
                                            </button>
                                            <input class="GH-number" type="text" placeholder="0" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></input>
                                            <button class="GH-plus" data-operation="+" data-target="qty.qtyBtn">
                                                <i class="fas fa-plus-circle"></i>
                                            </button>
                                            <button class="GH-trash">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="GH-note">                            
                                <i class="fas fa-exclamation-circle mr-1"></i>
                                Để thêm sản phẩm vào giỏ hàng, vui lòng quay về trang
                                <a href="Quick_order.html">Đặt hàng nhanh</a>                            
                        </div>
                        <div class="GH-note-2">
                            <h4 class="GH-note-2-tittle">Ghi chú khác</h4>
                            <h4>Trường hợp không tìm được thuốc mong muốn, Quý khách vui lòng điền yêu cầu bên dưới. Chúng tôi sẽ liên hệ mua thuốc và báo giá sớm nhất có thể.</h4>
                            <textarea name="note" rows="4" placeholder="Ghi chú của khách hàng"></textarea>
                            <div class="GH-btn-update-note">
                                <a href="#">Cập nhật ghi chú</a>
                            </div>
                        </div>
                    </div>
                    <div class="GH-right">
                        <div class="GH-kart">
                            <div>
                                <div class="GH-info">
                                    <small>Số lượng</small>
                                    <b>0</b>  
                                </div>
                                <div class="GH-info-2">
                                    <small>Tổng tiền</small>
                                    <div>
                                        <b>0</b>
                                        <b class="GH-unit">đ</b>
                                    </div>
                                </div>
                            </div>
                            <div class="GH-btn-check">
                                <a href="#">Tiếp tục thanh toán</a>
                            </div>
                                           
                        </div>
                        
                            <a href="Quick_order.html">&lt;&lt; Tiếp tục đặt hàng</a>

                    </div>
                    <div class="GH-popup">
                        <div>
                            <div class="GH-popup-header">
                                <div class="GH-popup-warnning-icon">
                                    <div class="GH-warnning-content">!</div>
                                </div>
                                <h2>Xin xác nhận</h2>
                                <button class="btn-close" id="close-popup">×</button>
                            </div>
                            <div class="GH-popup-content">
                                Bạn có chắc bạn muốn đánh dấu sản phẩm này là quan trọng trong đơn hàng hiện tại?
                            </div>
                            <div class="GH-popup-action">
                                <button class="GH-action-yes btn-no">Không</button>
                                <button class="GH-action-no btn-yes">Có</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>           
        </
<?php get_footer(); ?>