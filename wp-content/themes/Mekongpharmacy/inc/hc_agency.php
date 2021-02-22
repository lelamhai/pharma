<?php 
add_action( 'wp_ajax_hc_agency', 'hc_agency_function' );
add_action( 'wp_ajax_nopriv_hc_agency', 'hc_agency_function' );
function hc_agency_function() {
	$cat_id = $_POST['cat_id'];
    ob_start(); //bắt đầu bộ nhớ đệm
    ?>
    <select name="quan_huyen" id="quan_huyen" class="hc_filter">
        <option value="">Chọn quận / huyện</option>
        <?php
        $terms = get_terms( 'agency_pos', array(
            'hide_empty' => false,
            'child_of'  =>$cat_id,
        ) );
        foreach ($terms as $key => $value) {
            $cat_child = $value->term_id;
            $name_child = $value->name;
            ?>
            <option value="<?php echo $cat_child;?>" data-id="<?php echo $cat_id;?>"><?php echo $name_child;?></option>
            <?php
        }
        ?>
    </select>
    <?php


    $result = ob_get_clean(); //cho hết bộ nhớ đệm vào biến $result

    wp_send_json_success($result); // trả về giá trị dạng json

    die();//bắt buộc phải có khi kết thúc
}
?>
