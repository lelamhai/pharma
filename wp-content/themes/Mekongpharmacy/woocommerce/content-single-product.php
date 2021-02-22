<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
echo '<div class="notices">';
echo '<div class="container">';
do_action( 'woocommerce_before_single_product' );
echo '</div>';
echo '</div>';
if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
	<div class="top_section">
		<div class="container">
			<div class="row">
				<div class="col-9">
					<div class="row">
						<div class="col-7">
							<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>

</div>
<div class="col-5">
	<div class="summary entry-summary">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		woocommerce_template_single_title();
		woocommerce_template_single_price();
		woocommerce_template_single_excerpt();
		echo '<div class="woocommerce_button_simple">';
		woocommerce_template_single_add_to_cart();
		echo '</div>';
		echo '<div class="woocommerce_button">';
		echo '<p>';
		echo '<a href ="#" class="button_hc"> <i class="fas fa-cart-plus"></i> Thêm vào giỏ</a>';
		echo '</p>';
		echo '<p>';
		echo do_shortcode('[devvn_quickbuy id="" button_text1="Mua ngay" button_text2 = "Ví dụ sub text" small_link="1"]');
		echo '</p>';
		echo '</div>';
		woocommerce_template_single_meta();
		woocommerce_template_single_sharing();
		
		?>
	</div>
</div>
</div>
</div>
<aside class="col-3 siderbar_product">
	<?php get_sidebar('product');?>
</aside>
</div>
</div>
</div>
<div class="bottom_section">
	<div class="container">
		<div class="row">
			<div class="col-3">
				<?php woocommerce_output_related_products();?>
			</div>
			<div class="col-9">
				<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	//do_action( 'woocommerce_after_single_product_summary' );
	woocommerce_output_product_data_tabs();
	?>
</div>
</div>
</div>
</div>



</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
