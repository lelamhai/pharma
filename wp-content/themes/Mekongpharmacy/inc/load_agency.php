<?php 
add_action( 'wp_ajax_load_agency', 'load_agency_function' );
add_action( 'wp_ajax_nopriv_load_agency', 'load_agency_function' );
function load_agency_function() {
	$term = $_POST['mang'];
    ob_start(); //bắt đầu bộ nhớ đệm
    $tinh = $term[0];
    $huyen = $term[1];
    if ($huyen) {
    	$args = array(
    		'post_type' => 'agency',
    		'post_status' => 'publish', 
    		'tax_query' => array( 
    			'relation' => 'AND',
    			array(
    				'taxonomy' => 'agency_pos',
    				'field' => 'id',
    				'terms' => $tinh,
    			),
    			array(
    				'taxonomy' => 'agency_pos',
    				'field' => 'id',
    				'terms' => $huyen,
    			),

    		),
    	);
    }
    else{
    	$args = array(
    		'post_type' => 'agency',
    		'post_status' => 'publish', 
    		'tax_query' => array( 

    			array(
    				'taxonomy' => 'agency_pos',
    				'field' => 'id',
    				'terms' => $tinh,
    			),
    			
    		),
    	);
    }
    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) {
        ?>
        <p> <?php the_field('title_agency','option');?></p>

        <?php
        echo '<ul class="list_agency"> ';
        while ($the_query->have_posts()) {
          $the_query->the_post();
          ?>
          <li>
            <h2><a href="<?php echo get_the_permalink();?>">
                <?php echo get_the_title();?>
            </a></h2>
            <p><?php echo get_field('dia_chi');?></p>
        </li>
        <?php 

    }
     echo '</ul>'; 
}
else{
    echo '<p>Hệ thống chưa có đối tác tại vị trí của bạn</p>';
}
    $result = ob_get_clean(); //cho hết bộ nhớ đệm vào biến $result

    wp_send_json_success($result); // trả về giá trị dạng json

    die();//bắt buộc phải có khi kết thúc
}
?>
