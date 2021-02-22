<?php 

function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

// Xóa style Woocommerce - open
add_filter( 'woocommerce_enqueue_styles', 'jk_dequeue_styles' );
function jk_dequeue_styles( $enqueue_styles ) {
	unset( $enqueue_styles['woocommerce-general'] );	// Remove the gloss
	unset( $enqueue_styles['woocommerce-layout'] );		// Remove the layout
	unset( $enqueue_styles['woocommerce-smallscreen'] );	// Remove the smallscreen optimisation
	return $enqueue_styles;
}
//add_filter( 'woocommerce_enqueue_styles', '__return_false' );

// Xóa style Woocommerce - close


function get_product_cat_name($cat_id){
	$cat_id = (int) $cat_id;
	$category = get_term( $cat_id, 'product_cat' );
	if ( ! $category || is_wp_error( $category ) )
		return '';
	return $category->name;
}

function get_product_cat_thumb($cat_id){
	$cat_id = (int) $cat_id;
	$category = get_term( $cat_id, 'product_cat' );
	do_action( 'woocommerce_before_subcategory_title', $category );
}

function product_cat_description($cat_id ) {
	$cat_id = (int) $cat_id;
	$category = get_term( $cat_id, 'product_cat' );    
	return term_description( $category );
}

function get_product_cat_link($cat_id){
	$cat_id = (int) $cat_id;
	$link = get_term_link($cat_id,'product_cat');
	return $link;
}



// Chuyển thành giá Liên hệ - open
function devvn_wc_custom_get_price_html( $price, $product ) {
	if ( $product->get_price() == 0 ) {
		if ( $product->is_on_sale() && $product->get_regular_price() ) {
			$regular_price = wc_get_price_to_display( $product, array( 'qty' => 1, 'price' => $product->get_regular_price() ) );
			$price = wc_format_price_range( $regular_price, __( 'Free!', 'woocommerce' ) );
		} else {
			$price = '<span class="amount">' . __('Liên hệ','woocommerce') . '</span>';
		}
	}
	return $price;
}
add_filter( 'woocommerce_get_price_html', 'devvn_wc_custom_get_price_html', 10, 2 );



function devvn_oft_custom_get_price_html( $price, $product ) {
	if ( !is_admin() && !$product->is_in_stock()) {
		$price = '<span class="amount">' . __('Liên hệ','woocommerce') . '</span>';
	}
	return $price;
}

add_filter( 'woocommerce_get_price_html', 'devvn_oft_custom_get_price_html', 99, 2 );

// Chuyển thành giá Liên hệ - close



// custom lại ảnh sản phẩm thành slider trang single-product -open

// Bao gồm code này, sửa file product-image và product-thumbnail kết hợp slick slider
function get_gallery_thumbnail( $attachment_id, $main_image = false ) {
	$gallery_thumbnail = wc_get_image_size( 'gallery_thumbnail' );
	$thumbnail_size    = apply_filters( 'woocommerce_gallery_thumbnail_size', array( $gallery_thumbnail['width'], $gallery_thumbnail['height'] ) );
	$thumbnail_src     = wp_get_attachment_image_src( $attachment_id, $thumbnail_size );
	$full_size         = apply_filters( 'woocommerce_gallery_full_size', apply_filters( 'woocommerce_product_thumbnails_large_size', 'full' ) );
	$full_src          = wp_get_attachment_image_src( $attachment_id, $full_size );
	$image_alt         = _wp_specialchars( get_post_field( 'post_title', $attachment_id ), ENT_QUOTES, 'UTF-8', true );
	return "<img src='". esc_url( $thumbnail_src[0] ) . "' alt='".$image_alt."'>";
}

function get_gallery_image( $attachment_id, $main_image = false ) {
	$flexslider        = (bool) apply_filters( 'woocommerce_single_product_flexslider_enabled', get_theme_support( 'wc-product-gallery-slider' ) );
	$gallery_thumbnail = wc_get_image_size( 'gallery_thumbnail' );
	$thumbnail_size    = apply_filters( 'woocommerce_gallery_thumbnail_size', array( $gallery_thumbnail['width'], $gallery_thumbnail['height'] ) );
	$full_size         = apply_filters( 'woocommerce_gallery_full_size', apply_filters( 'woocommerce_product_thumbnails_large_size', 'full' ) );
	$image_size 	   =	$full_size;
	$thumbnail_src     = wp_get_attachment_image_src( $attachment_id, $thumbnail_size );
	$full_src          = wp_get_attachment_image_src( $attachment_id, $full_size );
	$image             = wp_get_attachment_image(
		$attachment_id,
		$image_size,
		false,
		apply_filters('woocommerce_gallery_image_html_attachment_image_params',array(
			'title'                   => _wp_specialchars( get_post_field( 'post_title', $attachment_id ), ENT_QUOTES, 'UTF-8', true ),
			'data-caption'            => _wp_specialchars( get_post_field( 'post_excerpt', $attachment_id ), ENT_QUOTES, 'UTF-8', true ),
			'data-src'                => esc_url( $full_src[0] ),
			'data-large_image'        => esc_url( $full_src[0] ),
			'data-large_image_width'  => esc_attr( $full_src[1] ),
			'data-large_image_height' => esc_attr( $full_src[2] ),
			'class'                   => esc_attr( $main_image ? 'wp-post-image' : '' ),
		),
		$attachment_id,
		$image_size,
		$main_image
	)
	);
	return '<div data-thumb="' . esc_url( $full_src[0] ). '" class="woocommerce-product-gallery__image"><a href="' . esc_url( $full_src[0] ) . '">' . $image . '</a></div>';
}

function wpgs_woocommerce_version_check( $version = '3.0' )  {
	if ( class_exists( 'WooCommerce' ) ) {
		global $woocommerce;
		if ( version_compare( $woocommerce->version, $version, ">=" ) ) {
			return true;
		}
	}
	return false;
}

// custom lại ảnh sản phẩm thành slider trang single-product - close





/*Woocommerce minicart - open */
add_filter('woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment');
function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;
	ob_start();
	if (wp_is_mobile()) {
		?>
		<a href="<?php echo wc_get_cart_url();?>" title="Giỏ hàng" class="cart-contents">
			<?php echo file_get_contents(get_template_directory_uri().'/assets/images/cart-icon.svg'); ?>Giỏ hàng<b class="cart-count third_bgr"><?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?></b></a>
			<?php
		} else {
			?>
			<a href="<?php echo wc_get_cart_url();?>" title="Giỏ hàng" class="cart-contents"><span><?php echo file_get_contents(get_template_directory_uri().'/assets/images/cart-icon.svg'); ?></span>Giỏ hàng<b class="cart-count third_bgr"><?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?></b></a>
			<?php
		}
		$fragments['a.cart-contents'] = ob_get_clean();
		return $fragments;
	}
	/*Woocommerce minicart - close */
	?>