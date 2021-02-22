<?php
if ( ! function_exists('product_image_hover') ) {
	function product_image_hover() {
		$img = get_field('product_image_hover');
		if ($img) {
			?>
			<img src="<?php echo $img['sizes']['mobile'];?>" alt="<?php echo $img['title'];?>" class ="img_product_hover">
			<?php
		}
		
	}
}
if (!function_exists('product_thumbnail_wrapper_open')) {
	function product_thumbnail_wrapper_open(){
		echo '<div class="product_thumnail_wrapper relative">';
	}
}
if (!function_exists('product_thumbnail_wrapper_close')) {
	function product_thumbnail_wrapper_close(){
		echo '</div>';
	}
}
if (!function_exists('product_thumbnail_open')) {
	function product_thumbnail_open(){
		echo '<div class="product_thumnail">';
	}
}
if (!function_exists('product_thumbnail_close')) {
	function product_thumbnail_close(){
		echo '</div>';
	}
}
/*if (!function_exists('product_attribute')) {

	function product_attribute($id){
		$terms_tinh_trang = get_the_terms($id,'pa_tinh-trang');
		if ($terms_tinh_trang)  {
			
			foreach ($terms_tinh_trang as $key => $value) {
				$name_tinh_trang = $value->name;
				echo '<span class="type absolute">';
				echo $name_tinh_trang;
				echo '</span>';
			}	
		}	
	}
}*/
/*function wc_show_attribute_links() {
	global $post;
	$attribute_names = array( 'pa_tinh-trang','pa_size','pa_chat-lieu-vo'); // Add attribute names here and remember to add the pa_ prefix to the attribute name
	foreach ( $attribute_names as $attribute_name ) {
		$taxonomy = get_taxonomy( $attribute_name );
		if ( $taxonomy && ! is_wp_error( $taxonomy ) ) {
			$terms = wp_get_post_terms( $post->ID, $attribute_name );
			$terms_array = array();
			if ( ! empty( $terms ) ) {
				foreach ( $terms as $term ) {
					if ($attribute_name == 'pa_size') {
						$term_name = get_field('kich_thuoc_san_pham',get_the_ID());
					} else {
						$term_name = $term->name ;
					}
					$archive_link = get_term_link( $term->slug, $attribute_name );
					$full_line = '<a href="' . $archive_link . '">'. $taxonomy->labels->singular_name . ': '. $term_name . '</a>';
					array_push( $terms_array, $full_line );
				}
				echo implode( $terms_array, '' );
			}
		}
	}
}
*/
if ( ! function_exists( 'woocommerce_output_related_products' ) ) {

	/**
	 * Output the related products.
	 */
	function woocommerce_output_related_products() {

		$args = array(
			'posts_per_page' => 3,
			'columns'        => 1,
			'orderby'        => 'rand', // @codingStandardsIgnoreLine.
		);

		woocommerce_related_products( apply_filters( 'woocommerce_output_related_products_args', $args ) );
	}
}
if ( ! function_exists( 'woocommerce_template_loop_product_title' ) ) {

	/**
	 * Show the product title in the product loop. By default this is an H2.
	 */
	function woocommerce_template_loop_product_title() {
		if (is_singular('product')) {
			echo '<h3 class="' . esc_attr( apply_filters( 'woocommerce_product_loop_title_classes', 'woocommerce-loop-product__title' ) ) . '">' . get_the_title() . '</h3>'; 
		}
		else{
			echo '<h2 class="' . esc_attr( apply_filters( 'woocommerce_product_loop_title_classes', 'woocommerce-loop-product__title' ) ) . '">' . get_the_title() . '</h2>'; 
		}
		// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
}

/*if ( ! function_exists( 'type_select_filter_product' ) ) {
	function type_select_filter_product() {
		?>
		<div class="hc_filter">
			<select id="brand_filter" class="namlbn_filter tax_filter">
				<option>Bộ sưu tập</option>
				<?php
				$status_arr = get_terms('product_cat',array('hide_empty' => true,'child_of'=>65));
				$brand_ids = array();
				foreach ($status_arr as $key => $status) {
					$term_taxonomy_id = $status->term_taxonomy_id;
					$brand_ids[] = $status->term_taxonomy_id;
					$term_name = $status->name;
					?>
					<option title="<?php echo $term_name; ?>" data-filter="tax" data-value="<?php echo $term_taxonomy_id; ?>" data-tax="product_cat" <?php if ($term_taxonomy_id == get_queried_object_id()) {
						echo " class='active'";
					} ?>><?php echo $term_name; ?></option>>
					<?php
				}
				?>
			</select> 
			<select id="material_filter" class="tax_filter">
				<option>Chất liệu vỏ</option>
				<?php
				$status_arr = get_terms('pa_chat-lieu-vo',array('hide_empty' => true));
				foreach ($status_arr as $key => $status) {
					$term_taxonomy_id = $status->term_taxonomy_id;
					$term_name = $status->name;
					?>
					<option title="<?php echo $term_name; ?>" data-filter="tax" data-value="<?php echo $term_taxonomy_id; ?>" data-tax="pa_chat-lieu-vo"<?php if ($term_taxonomy_id == get_queried_object_id()) {
						echo " class='active'";
					} ?>><?php echo $term_name; ?></option>
					<?php
				}
				?>
			</select> 
			<select id="size_filter" class="tax_filter">
				<option>Kích thước</option>
				<?php
				$status_arr = get_terms('pa_size',array('hide_empty' => true));

				foreach ($status_arr as $key => $status) {
					$term_taxonomy_id = $status->term_taxonomy_id;
					$term_name = $status->name;
					?>
					<option title="<?php echo $term_name; ?>" data-filter="tax" data-value="<?php echo $term_taxonomy_id; ?>" data-tax="pa_size"<?php if ($term_taxonomy_id == get_queried_object_id()) {
						echo " class='active'";
					} ?>><?php echo $term_name; ?></option>>
					<?php
				}
				?>
			</select>
			<?php
			if (have_rows('bo_loc_gia','option')) {
				echo '<select id="price_filter">';
				?>
				<option>Lọc theo giá</option>
				<?php 
				while (have_rows('bo_loc_gia','option')) {
					the_row();
					$title = get_sub_field('title');
					$min = get_sub_field('gia_min');
					$max = get_sub_field('gia_max');
					?>
					<option title="<?php echo $title; ?>" data-filter="price" data-value="<?php echo "$min|$max"; ?>"><?php echo $title; ?></option>
					<?php
				}
				echo '</select>';
			} 
			?>
			<?php
			$obj_id = get_queried_object_id();
			if ("65" != $obj_id && !in_array($obj_id,$brand_ids)) {
				$get = get_term_by( "ID", $obj_id,'product_cat');
				if (empty($get)) {
					$term = get_term_by( "ID", $obj_id,'product_tag');
					if (!empty($term)) {
						?>
						<select class=" tax_filter" style="display: none">
							<option title="<?php echo $term->name ; ?>" data-filter="tax" data-value="<?php echo $obj_id; ?>"  data-tax="product_tag" class="active"><?php echo $term->name; ?></option>
						</select>
						<?php
					}
				} else {
					$term = $get;
					if (!empty($term)) {
						?>
						<select class="tax_filter" style="display: none">
							<option title="<?php echo $term->name ; ?>" data-filter="tax" data-value="<?php echo $obj_id; ?>"  data-tax="product_cat" class="active"><?php echo $term->name; ?></option>
						</select>
						<?php
					}
				}
			}
			?>
		</div>
		<?php
	}
}*/

?>