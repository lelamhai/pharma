<?php
/**
 * Template name: Đặt Hàng Nhanh
 */
?>
<?php
$data = $wpdb->get_results( 'SELECT * FROM '.$table_name.' WHERE UserId ='.$_COOKIE["idUser"]);
$totalCount = 0;
$totalPrice = 0;
for($i=0; $i < count($data); $i++)
{
    $totalCount = $totalCount + $data[$i] -> ProductCount;
    $totalPrice = $totalPrice + ($data[$i] -> ProductPrice *  $data[$i] -> ProductCount);
}

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

                    <?php
                    $args = array(
                        'post_type' => 'product',
                        'posts_per_page' => 10
                    ); 
                    $the_query = new WP_Query( $args );
                    if ( $the_query->have_posts() ) {
                        while ( $the_query->have_posts() ) {
                            $the_query->the_post();
                            ?>
                            
                              <div class="DHN-list-item-row">
                                    <div class="DHN-sample-img">
                                            <?php echo get_the_post_thumbnail( $_post->ID, 'full' );?>
                                            <!-- <img src="<?php bloginfo('template_url'); ?>/assets/images/quick_order/panadol.jpg" alt="">    -->
                                        </div>
                                        <div class="DHN-information">
                                            <div class="DHN-name">
                                                <a title="Panadol extra gsk (h/180v)" href="#"><?php the_title()?></a>
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
                                                <span class="DHN-number">
                                                    <?php 
                                                        $value = get_field( "_sale_price", $post->ID );
                                                        if($value == null)
                                                        {
                                                            $value = get_field( "_regular_price", $post->ID );
                                                        }
                                                        echo number_format($value, 0, ',', '.');
                                                    ?>
                                                    <input type="hidden" id="price-<?php echo $post->ID;?>"  value="<?php echo $value;?>">
                                                </span>
                                                <span class="DHN-unit">đ</span>
                                            </div>
                                            <div class="DHN-quantity">
                                                <button class="DHN-minus buttonMinus" data-product="<?php echo $post->ID?>">
                                                    <i class="fas fa-minus-circle"></i>
                                                </button>

                                                <input id="value-<?php echo $post->ID;?>" class="DHN-number" type="text" 
                                                value=<?php 
                                                    $key_1_value = get_post_meta($_COOKIE["idUser"],  $post->ID, true );
                                                    if ( ! empty( $key_1_value ) ) {
                                                        echo $key_1_value;
                                                    } else {
                                                        echo 0;
                                                    }
                                                        ?>>
                                                </input>

                                                <button class="DHN-plus buttonAdd" data-product="<?php echo $post->ID?>">
                                                    <i class="fas fa-plus-circle"></i>
                                                </button>
                                            </div>
                                        </div>
                                        
                                    </div>
                            
                            <?php
                        }
                    } else {
                    }
                    wp_reset_postdata();
                    ?>
    
                    </div>
                </div>
                
                <div class="DHN-kart">
                    <div>
                        <div class="DHN-info">
                            <small>Số lượng</small>
                            <b id="totalCountQuickOrder">
                            <?php echo $totalCount; ?>
                            </b>  
                        </div>
                        <div class="DHN-info-2">
                            <small>Tổng tiền</small>
                            <div>
                                <b id="totalPriceQuickOrder"><?php echo number_format($totalPrice, 0, ',', '.');?></b>
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
<?php get_footer(); ?>