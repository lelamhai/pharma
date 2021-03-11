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
                            <p>Nhấp để đánh dấu sản phẩm quan trọng.</p>
                        </div>
                        <div class="GH-products">
                            <div></div>
                            <div class="GH-list-item">



                <?php
                    global $wpdb;
                    $table_name = $wpdb->prefix . "quick_order";
                    $data = $wpdb->get_results( 'SELECT * FROM '.$table_name.' WHERE UserId = '.$_COOKIE['idUser'].' AND ProductCount > 0');
                    for($i=0; $i < count($data); $i++)
                    {
                        $totalCount = $totalCount + $data[$i] -> ProductCount;
                        $totalPrice = $totalPrice + ($data[$i] -> ProductPrice *  $data[$i] -> ProductCount);

                        ?>
                        
                                <div class="GH-list-item-row dataId-<?php echo $data[$i] -> ProductId;?>" >
                                    <div class="GH-star-circle">
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="GH-sample-img">
                                        <?php echo get_the_post_thumbnail( $data[$i] -> ProductId, 'full');?>
                                    </div>
                                    <div class="GH-information">
                                        <div class="GH-name">
                                            <a title="Panadol extra gsk (h/180v)" href="#"><?php echo get_the_title($data[$i] -> ProductId)?></a>
                                        </div>
                                        <div class="GH-capacity">
                                            <small>Hộp 15 vỉ x 12 viên</small>
                                        </div>
                                    </div>
                                                                        
                                    <div class="GH-information2">
                                        <div class="GH-price">
						<div class="GH-new-price">
                                            		<span class="GH-number">
                                                		<?php 
                                                    		$value = get_field( "_sale_price", $data[$i] -> ProductId );
                                                    		if($value == null)
                                                    		{
                                                        		$value = get_field( "_regular_price", $data[$i] -> ProductId );
                                                    		}
                                                    			echo number_format($value, 0, ',', '.');
                                                		?>    
                                            		</span>
                                            		<span class="GH-unit">đ</span>
						</div>
						<div class="GH-old-price">
                                        		<span class="GH-number">
                                            			<del>234.400</del>
                                        		</span>
                                        		<span class="GH-unit">
                                            			<del>đ</del>
                                        		</span>
                                    		</div>   
                                        </div>

                                        <div class="GH-quantity">
                                            <button class="GH-minus buttonMinus" data-product="<?php echo $data[$i] -> ProductId?>">
                                                    <i class="fas fa-minus-circle"></i>
                                                </button>
                                                <input type="hidden" id="price-<?php echo$data[$i] -> ProductId;?>"  value="<?php echo $value;?>">
                                            <input id="value-<?php echo $data[$i] -> ProductId;?>" class="GH-number" type="text"  value=<?php 
                                                    $key_1_value = get_post_meta($_COOKIE["idUser"],  $data[$i] -> ProductId , true );
                                                    if ( ! empty( $key_1_value ) ) {
                                                        echo $key_1_value;
                                                    } else {
                                                        echo 0;
                                                    }
                                                        ?>>
                                            </input>

                                            <button class="GH-plus buttonAdd" data-product="<?php echo $data[$i] -> ProductId?>">
                                                    <i class="fas fa-plus-circle"></i>
                                                </button>
                                         
                                            <button class="GH-trash GH-remove" data-id="<?php echo $data[$i] -> ProductId;?>">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                    
                                </div>
                        
                        <?php
                    }
                ?>


                                
                            </div>
                        </div>
                        <!-- <div class="GH-note">                            
                                <i class="fas fa-exclamation-circle mr-1"></i>
                                Để thêm sản phẩm vào giỏ hàng, vui lòng quay về trang
                                <a href="Quick_order.html">Đặt hàng nhanh</a>                            
                        </div> -->
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
                                    <b id="totalCountQuickOrder">
                                        <?php echo $totalCount; ?>
                                    </b>  
                                </div>
                                <div class="GH-info-2">
                                    <small>Tổng tiền</small>
                                    <div>
                                        <b id="totalPriceQuickOrder"><?php echo number_format($totalPrice, 0, ',', '.');?></b>
                                        <b class="GH-unit">đ</b>
                                    </div>
                                </div>
                            </div>
                            <div class="GH-btn-check">
				<div class="GH-text-danger">
				Đây là tài khoản dùng thử. Giỏ hàng sẽ không thể lưu và thanh toán được. Xin bạn vui lòng tạo tài khoản cá nhân để sử dụng tính năng này! Cảm ơn!
				</div>
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
</div>
<?php get_footer(); ?>