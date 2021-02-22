<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
echo '<div id="archive_child_product">';

do_action( 'namlbn_before_main_content' );

?>
<div class="breadcrumd">
	<div class="container">	
		<?php namlbn_breadcrumbs();?>

	</div>

</div>
<div class="container">
	<header class="woocommerce-products-header">

		<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
			<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
		<?php endif; ?>
		<?php
		do_action( 'woocommerce_archive_description' );
		?>

	</header>
</div>
<div class="list_child">
	<div class="container">	
		<ul class="row">
			<?php
			$a = get_queried_object();
			$id = $a->term_id;
			$b = get_term_children( $id, 'product_cat' );
			foreach ($b as $key => $value) {
				?>
				<li>
					<div class="col_wrapper">
						<a href="<?php echo get_product_cat_link($value);?>" class="img padding_ratio relative">
							<?php echo get_product_cat_thumb($value);?>
						</a>
						<h3>
							<a href="<?php echo get_product_cat_link($value);?>"><?php echo get_product_cat_name($value);?></a>
						</h3>

					</div>
				</li>
				<?php
			}
			?>
		</ul>
	</div>

</div>

<div class="container">



	<div class="archive_content">
		<h2 class="title">
			Bán chạy nhất 
		</h2>
		<div class="archive-container">
			<?php
			if ( woocommerce_product_loop() ) {
				?>
				<div class="wrap-count_ordering" > 
					<?php
					do_action( 'woocommerce_before_shop_loop' );
					?>
				</div>
				<section class="archive-list-product" >
					<?php
					woocommerce_product_loop_start();

					if ( wc_get_loop_prop( 'total' ) ) {
						while ( have_posts() ) {
							the_post();
							do_action( 'woocommerce_shop_loop' );
							wc_get_template_part( 'content', 'product' );
						}
					}
					woocommerce_product_loop_end();

					do_action( 'woocommerce_after_shop_loop' );
				} else {

					do_action( 'woocommerce_no_products_found' );
				}
				?>
			</section>
		</div>
	</div>

</div>

<?php

do_action( 'woocommerce_after_main_content' );
echo '</div>';
get_footer( 'shop' );
