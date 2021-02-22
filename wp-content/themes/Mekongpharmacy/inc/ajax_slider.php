<?php 
add_action( 'wp_ajax_test_ajax', 'test_ajax_function' );
add_action( 'wp_ajax_nopriv_test_ajax', 'test_ajax_function' );
function test_ajax_function() {
    ob_start(); //bắt đầu bộ nhớ đệm
    ?>
  <div class="banner banner_tab">
            <?php

            while (have_rows('banner_slider','option')) {
                the_row();
                $img = get_sub_field('img');
                ?>
                <div class="slider_item">
                    <div class="wrapper">
                        <div class="img relative padding_ratio">
                            <?php 
                            echo wp_get_attachment_image( $attachment_id = $img, $size = 'banner', $icon = false, $attr = array('class' => 'full_relative is_mask') );
                            ?>
                        </div>  
                    </div>  
                </div>  

                <?php
            }
            ?>

        </div>
    
    <script> 
    	jQuery('#banner_slider .banner_tab').slick({
    		autoplay : false,
    		autoplaySpeed : 6000,
    		speed : 1000,
    		slidesToShow: 1,
    		slidesToScroll: 1,
    		arrows: false,
    		fade: true,
    	});	
    </script>
    <?php
    $result = ob_get_clean(); //cho hết bộ nhớ đệm vào biến $result

    wp_send_json_success($result); // trả về giá trị dạng json

    die();//bắt buộc phải có khi kết thúc
}
?>
