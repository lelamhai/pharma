<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.8.0
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}
/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 * @see woocommerce_default_product_tabs()
 */
$product_tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $product_tabs ) ) : ?>
  <div class="woocommerce-tabs wc-tabs-wrapper">
    <ul class="tabs wc-tabs" role="tablist">
      <?php foreach ( $product_tabs as $key => $product_tab ) : 
        if ($key == 'additional_information' || $key == 'reviews') { } else {
          ?>
          <li class="<?php echo esc_attr( $key ); ?>_tab" id="tab-title-<?php echo esc_attr( $key ); ?>" role="tab" aria-controls="tab-<?php echo esc_attr( $key ); ?>">
            <a href="#tab-<?php echo esc_attr( $key ); ?>"><?php echo wp_kses_post( apply_filters( 'woocommerce_product_' . $key . '_tab_title', $product_tab['title'], $key ) ); ?></a>
          </li>
        <?php } endforeach;
        if (have_rows('thong_so')) {
          ?>
          <li class="ts_tab" id="tab-title-ts" role="tab" aria-controls="tab-ts">
            <a href="#tab-ts">Thông số kỹ thuật </a>
          </li>
          <?php
        }
        ?>
        <li class="comments_tab" id="tab-title-comments" role="tab" aria-controls="tab-comments">
          <a href="#tab-comments">Bình luận</a>
        </li>
      </ul>
      <?php foreach ( $product_tabs as $key => $product_tab ) : 
        if ($key == 'additional_information' || $key == 'reviews') { } else {
          ?>
          <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--<?php echo esc_attr( $key ); ?> panel entry-content wc-tab" id="tab-<?php echo esc_attr( $key ); ?>" role="tabpanel" aria-labelledby="tab-title-<?php echo esc_attr( $key ); ?>">
            <?php if ( isset( $product_tab['callback'] ) ) { call_user_func( $product_tab['callback'], $key, $product_tab ); } ?>
          </div>
        <?php } endforeach; ?>
        <?php 
        if (have_rows('thong_so')) {
          ?>
          <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--ts panel entry-content wc-tab" id="tab-ts" role="tabpanel" aria-labelledby="tab-title-ts">
            <h2>Thông số kỹ thuật </h2>
            <div class="thong_so">
              <ul>
               <?php
               while (have_rows('thong_so')) {
                 the_row();
                 $ten = get_sub_field('ten');
                 $noi_dung = get_sub_field('noi_dung');
                 ?>
                 <li><span class="name"><?php echo $ten?> </span> <span class="noi_dung"><?php echo $noi_dung?></span></p>
                   <?php
                 }
                 ?>
               </ul>
             </div>
           </div>
           <?php

         }
         ?>
         <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--comments panel entry-content wc-tab" id="tab-comments" role="tabpanel" aria-labelledby="tab-title-comments">
          <h2>Bình luận</h2>
          <div class="facebook-cm">
            <div class="fb-comments" data-href="<?php echo get_the_permalink(); ?>" data-width="100%" data-numposts="5"></div>
          </div>
        </div>
      </div>

    <?php endif; ?>
