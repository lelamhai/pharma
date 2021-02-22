<?php
/*add_action( 'woocommerce_before_shop_loop_item_title', 'product_attribute', 20);*/
add_action('woocommerce_before_shop_loop_item_title','product_thumbnail_wrapper_open',5);
add_action('woocommerce_before_shop_loop_item_title','product_thumbnail_wrapper_close',25);
add_action('woocommerce_before_shop_loop_item_title','product_thumbnail_open',4);
add_action('woocommerce_before_shop_loop_item_title','product_thumbnail_close',20);
add_action( 'woocommerce_before_shop_loop_item_title', 'product_image_hover', 15 );
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
/*add_action( 'woocommerce_product_meta_end', 'wc_show_attribute_links',30 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_single_excerpt', 1 );*/

?>