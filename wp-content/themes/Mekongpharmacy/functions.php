<?php 

require_once get_template_directory().'/core/init.php';
require_once get_template_directory().'/inc/namlbn_theme_settings.php';
require_once get_template_directory().'/inc/post_type_setup.php';
require_once get_template_directory().'/inc/taxonomy_setup.php';
// require_once get_template_directory().'/inc/poly_lang_string.php';
require_once get_template_directory().'/inc/acf_fields.php';
require_once get_template_directory().'/inc/woocom_setup.php';
require_once get_template_directory().'/inc/woo_function.php';
require_once get_template_directory().'/inc/woo_hook.php';
require_once get_template_directory().'/inc/hc_agency.php';
require_once get_template_directory().'/inc/load_agency.php';
require_once get_template_directory().'/inc/ajax_slider.php';
// require_once get_template_directory().'/inc/namlbn-woo-hook.php';
/**
* Set the content width based on the theme's design and stylesheet.
*/
if ( ! isset( $content_width ) ) {
	$content_width = 1200; /* pixels */
}
/*
* Thêm file css: style.css
*/
function namlbn_styles(){
	wp_register_style( $handle = 'fontawesome', $src = 'https://use.fontawesome.com/releases/v5.15.1/css/all.css', $deps = array(), $ver = false, $media = 'all' );
	wp_enqueue_style('fontawesome');
	wp_register_style( $handle = 'animate', $src = get_template_directory_uri().'/assets/css/style-animate.css', $deps = array(), $ver = false, $media = 'all' );
	wp_enqueue_style('animate');
	wp_register_style( $handle = 'namlbn-grid', $src = get_template_directory_uri().'/assets/css/namlbn-grid.css', $deps = array(), $ver = false, $media = 'all' );
	wp_enqueue_style('namlbn-grid');
	wp_register_style( $handle = 'slick-style', $src = get_template_directory_uri().'/assets/css/slick.css', $deps = array(), $ver = false, $media = 'all' );
	wp_enqueue_style('slick-style');
	wp_register_style( 'main-style', get_template_directory_uri() . '/style.css', 'all' );
	wp_enqueue_style( 'main-style' );

	wp_register_style( $handle = 'style_mobile', $src = get_template_directory_uri().'/assets/css/style_mobile.css', $deps = array(), $ver = false, $media = '(max-width:1024px)' );
	wp_enqueue_style('style_mobile');

	wp_register_style( $handle = 'header', $src = get_template_directory_uri().'/assets/css/header.css', $deps = array(), $ver = false, $media = 'all' );
	wp_enqueue_style('header');

	wp_register_style( $handle = 'menu-dsk', $src = get_template_directory_uri().'/assets/css/menu-dsk.css', $deps = array(), $ver = false, $media = 'all' );
	wp_enqueue_style('menu-dsk');

	wp_register_style( $handle = 'menu_mobile', $src = get_template_directory_uri().'/assets/css/menu_mobile.css', $deps = array(), $ver = false, $media = 'all' );
	wp_enqueue_style('menu_mobile');

	wp_register_style( $handle = 'banner', $src = get_template_directory_uri().'/assets/css/banner.css', $deps = array(), $ver = false, $media = 'all' );
	wp_enqueue_style('banner');

	wp_register_style( $handle = 'section_1', $src = get_template_directory_uri().'/assets/css/section_1.css', $deps = array(), $ver = false, $media = 'all' );
	wp_enqueue_style('section_1');

	wp_register_style( $handle = 'section_2', $src = get_template_directory_uri().'/assets/css/section_2.css', $deps = array(), $ver = false, $media = 'all' );
	wp_enqueue_style('section_2');

	wp_register_style( $handle = 'section_3', $src = get_template_directory_uri().'/assets/css/section_3.css', $deps = array(), $ver = false, $media = 'all' );
	wp_enqueue_style('section_3');

	wp_register_style( $handle = 'section_4', $src = get_template_directory_uri().'/assets/css/section_4.css', $deps = array(), $ver = false, $media = 'all' );
	wp_enqueue_style('section_4');

	wp_register_style( $handle = 'section_5', $src = get_template_directory_uri().'/assets/css/section_5.css', $deps = array(), $ver = false, $media = 'all' );
	wp_enqueue_style('section_5');

	wp_register_style( $handle = 'section_6', $src = get_template_directory_uri().'/assets/css/section_6.css', $deps = array(), $ver = false, $media = 'all' );
	wp_enqueue_style('section_6');

	wp_register_style( $handle = 'section_7', $src = get_template_directory_uri().'/assets/css/section_7.css', $deps = array(), $ver = false, $media = 'all' );
	wp_enqueue_style('section_7');

	wp_register_style( $handle = 'section_8', $src = get_template_directory_uri().'/assets/css/section_8.css', $deps = array(), $ver = false, $media = 'all' );
	wp_enqueue_style('section_8');

	wp_register_style( $handle = 'section_9', $src = get_template_directory_uri().'/assets/css/section_9.css', $deps = array(), $ver = false, $media = 'all' );
	wp_enqueue_style('section_9');

	wp_register_style( $handle = 'footer', $src = get_template_directory_uri().'/assets/css/footer.css', $deps = array(), $ver = false, $media = 'all' );
	wp_enqueue_style('footer');

	wp_register_style( $handle = 'pagination', $src = get_template_directory_uri().'/assets/css/namlbn-pagination.css', $deps = array(), $ver = false, $media = 'all' );
	wp_enqueue_style('pagination');

	wp_register_style( $handle = 'sidebar', $src = get_template_directory_uri().'/assets/css/sidebar.css', $deps = array(), $ver = false, $media = 'all' );
	wp_enqueue_style('sidebar');

	wp_register_style( $handle = 'sidebar_product', $src = get_template_directory_uri().'/assets/css/sidebar_product.css', $deps = array(), $ver = false, $media = 'all' );
	wp_enqueue_style('sidebar_product');

	wp_register_style( $handle = 'content_archive', $src = get_template_directory_uri().'/assets/css/content_archive.css', $deps = array(), $ver = false, $media = 'all' );
	wp_enqueue_style('content_archive');

	wp_register_style( $handle = 'archive_benh', $src = get_template_directory_uri().'/assets/css/archive_benh.css', $deps = array(), $ver = false, $media = 'all' );
	wp_enqueue_style('archive_benh');

	wp_register_style( $handle = 'content_single', $src = get_template_directory_uri().'/assets/css/content_single.css', $deps = array(), $ver = false, $media = 'all' );
	wp_enqueue_style('content_single');

	wp_register_style( $handle = 'single_thuoc', $src = get_template_directory_uri().'/assets/css/single_thuoc.css', $deps = array(), $ver = false, $media = 'all' );
	wp_enqueue_style('single_thuoc');

	wp_register_style( $handle = 'single_product', $src = get_template_directory_uri().'/assets/css/single_product.css', $deps = array(), $ver = false, $media = 'all' );
	wp_enqueue_style('single_product');

	wp_register_style( $handle = 'archive_product', $src = get_template_directory_uri().'/assets/css/archive_product.css', $deps = array(), $ver = false, $media = 'all' );
	wp_enqueue_style('archive_product');

	wp_register_style( $handle = 'sidebar_product', $src = get_template_directory_uri().'/assets/css/sidebar_product.css', $deps = array(), $ver = false, $media = 'all' );
	wp_enqueue_style('sidebar_product');
	// Cart style 
	wp_register_style( $handle = 'cart', $src = get_template_directory_uri().'/assets/css/cart.css', $deps = array(), $ver = false, $media = 'all' );

	wp_enqueue_style('cart');

	// Checkout style 
	wp_register_style( $handle = 'checkout', $src = get_template_directory_uri().'/assets/css/checkout.css', $deps = array(), $ver = false, $media = 'all' );

	wp_enqueue_style('checkout');

	// Checkout style 
	wp_register_style( $handle = 'page_agency', $src = get_template_directory_uri().'/assets/css/page_agency.css', $deps = array(), $ver = false, $media = 'all' );

	wp_enqueue_style('page_agency');

	// Checkout style 
	wp_register_style( $handle = 'page_pill', $src = get_template_directory_uri().'/assets/css/page_pill.css', $deps = array(), $ver = false, $media = 'all' );

	wp_enqueue_style('page_pill');

	// Checkout style 
	wp_register_style( $handle = 'page_benh', $src = get_template_directory_uri().'/assets/css/page_benh.css', $deps = array(), $ver = false, $media = 'all' );

	wp_enqueue_style('page_benh');

	// Checkout style 
	wp_register_style( $handle = 'single_agency', $src = get_template_directory_uri().'/assets/css/single_agency.css', $deps = array(), $ver = false, $media = 'all' );

	wp_enqueue_style('single_agency');

	// Checkout style 
	wp_register_style( $handle = 'search', $src = get_template_directory_uri().'/assets/css/search.css', $deps = array(), $ver = false, $media = 'all' );

	wp_enqueue_style('search');

	wp_register_style( $handle = 'google-fonts', $src = 'https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,300;0,400;0,500;0,700;0,800;1,100;1,300;1,400;1,500;1,700;1,800&display=swap', $deps = array(), $ver = false, $media = 'all' );
	wp_enqueue_style('google-fonts');

	// HaiLL
	wp_register_style( $handle = 'style', $src = get_template_directory_uri().'/assets/css/quick-order/quick_order.css', $deps = array(), $ver = false, $media = 'all' );
	wp_enqueue_style('style');

	wp_register_style( $handle = 'custome', $src = get_template_directory_uri().'/assets/css/custome.css', $deps = array(), $ver = false, $media = 'all' );
	wp_enqueue_style('custome');

	wp_register_style( $handle = 'popup', $src = get_template_directory_uri().'/assets/css/quick-order/popup.css', $deps = array(), $ver = false, $media = 'all' );
	wp_enqueue_style('popup');

	wp_register_style( $handle = 'shoppingcart', $src = get_template_directory_uri().'/assets/css/quick-order/cart.css', $deps = array(), $ver = false, $media = 'all' );
	wp_enqueue_style('shoppingcart');
}
add_action( 'wp_enqueue_scripts', 'namlbn_styles' );

function enqueue_admin_style( $hook ) {
	wp_register_style( 'admin_custom_style',  get_template_directory_uri().'/assets/css/admin-style.css', array(), '1.0'  );
	wp_enqueue_style( 'admin_custom_style' );
}
add_action( 'admin_enqueue_scripts', 'enqueue_admin_style' );


// Thêm javascript - open
function theme_register_scripts() {
	$php_array = array( 
		'language' => get_bloginfo( 'language' ), 
		'URLhome' => get_bloginfo( 'url' ) 
	);
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery',esc_url( trailingslashit( get_template_directory_uri() ) . 'assets/js/'.'jquery-3.4.1.min.js'), array(), '3.41', true ); 	// true Là đưa xuống footer
	wp_localize_script( 'jquery', 'php_array', $php_array );

	wp_register_script( 'site-js',esc_url( trailingslashit( get_template_directory_uri() ) . 'assets/js/'.'site.js'), array( 'jquery' ), '1.0', true ); 	
	wp_localize_script( 'site-js', 'php_array', $php_array );
	wp_enqueue_script( 'site-js' );
	if (wp_is_mobile()) {
		wp_register_script( 'site-mobile',esc_url( trailingslashit( get_template_directory_uri() ) . 'assets/js/'.'site-mobile.js'), array( 'jquery', 'site-js' ), '1.0', true ); 	
		wp_localize_script( 'site-mobile', 'php_array', $php_array );
		wp_enqueue_script( 'site-mobile' );
	} else {
		//wp_register_script( 'site-dsk',esc_url( trailingslashit( get_template_directory_uri() ) . 'assets/js/'.'site-dsk.js'), array( 'jquery', 'site-js' ), '1.0', true ); 	
		wp_localize_script( 'site-dsk', 'php_array', $php_array );
		wp_enqueue_script( 'site-dsk' );
	}
	// Slick script
	wp_register_script( 'slick-js',esc_url( trailingslashit( get_template_directory_uri() ) . 'assets/js/'.'slick.min.js'), array( 'jquery', 'site-js' ), '1.0', true ); 	
	wp_localize_script( 'slick-js', 'php_array', $php_array );
	wp_enqueue_script( 'slick-js' );

	// Menu script
	wp_register_script( 'site_menu',esc_url( trailingslashit( get_template_directory_uri() ) . 'assets/js/'.'menu.js'), array( 'jquery', 'site-js' ), '1.0', true ); 	
	wp_localize_script( 'site_menu', 'php_array', $php_array );
	wp_enqueue_script( 'site_menu' );

	// Banner script
	wp_register_script( 'banner_slider',esc_url( trailingslashit( get_template_directory_uri() ) . 'assets/js/'.'banner_slider.js'), array( 'jquery', 'site-js' ), '1.0', true ); 	
	wp_localize_script( 'banner_slider', 'php_array', $php_array );
	wp_enqueue_script( 'banner_slider' );

	// Section 2 script
	wp_register_script( 'section_2',esc_url( trailingslashit( get_template_directory_uri() ) . 'assets/js/'.'section_2.js'), array( 'jquery', 'site-js' ), '1.0', true ); 	
	wp_localize_script( 'section_2', 'php_array', $php_array );
	wp_enqueue_script( 'section_2' );

	// Section 2 script
	wp_register_script( 'section_5',esc_url( trailingslashit( get_template_directory_uri() ) . 'assets/js/'.'section_5.js'), array( 'jquery', 'site-js' ), '1.0', true ); 	
	wp_localize_script( 'section_5', 'php_array', $php_array );
	wp_enqueue_script( 'section_5' );

	// Section 2 script
	wp_register_script( 'section_7',esc_url( trailingslashit( get_template_directory_uri() ) . 'assets/js/'.'section_7.js'), array( 'jquery', 'site-js' ), '1.0', true ); 	
	wp_localize_script( 'section_7', 'php_array', $php_array );
	wp_enqueue_script( 'section_7' );

	// Single_product script
	wp_register_script( 'single_product',esc_url( trailingslashit( get_template_directory_uri() ) . 'assets/js/'.'single_product.js'), array( 'jquery', 'site-js' ), '1.0', true ); 	
	wp_localize_script( 'single_product', 'php_array', $php_array );
	wp_enqueue_script( 'single_product' );

	// Single_product script
	wp_register_script( 'page_pill',esc_url( trailingslashit( get_template_directory_uri() ) . 'assets/js/'.'page_pill.js'), array( 'jquery', 'site-js' ), '1.0', true ); 	
	wp_localize_script( 'page_pill', 'php_array', $php_array );
	wp_enqueue_script( 'page_pill' );

	// Single_product script
	wp_register_script( 'page_benh',esc_url( trailingslashit( get_template_directory_uri() ) . 'assets/js/'.'page_benh.js'), array( 'jquery', 'site-js' ), '1.0', true ); 	
	wp_localize_script( 'page_benh', 'php_array', $php_array );
	wp_enqueue_script( 'page_benh' );

	
	// Thêm ajax
wp_register_script( 'hc_agency',esc_url( trailingslashit( get_template_directory_uri() ) . 'assets/js/'.'hc_agency.js'), array( 'jquery' ), '1.0', true ); 	

	wp_localize_script( 'hc_agency', 'php_array', $php_array );
	wp_localize_script( 'hc_agency', 'hc_agency', array('url' => admin_url('admin-ajax.php')));
	wp_enqueue_script( 'hc_agency' );

	wp_register_script( 'load_agency',esc_url( trailingslashit( get_template_directory_uri() ) . 'assets/js/'.'load_agency.js'), array( 'jquery' ), '1.0', true ); 	

	wp_localize_script( 'load_agency', 'php_array', $php_array );
	wp_localize_script( 'load_agency', 'load_agency', array('url' => admin_url('admin-ajax.php')));
	wp_enqueue_script( 'load_agency' );

	wp_register_script( 'load_agency_sidebar',esc_url( trailingslashit( get_template_directory_uri() ) . 'assets/js/'.'load_agency_sidebar.js'), array( 'jquery' ), '1.0', true ); 	

	wp_localize_script( 'load_agency_sidebar', 'php_array', $php_array );
	wp_localize_script( 'load_agency_sidebar', 'load_agency_sidebar', array('url' => admin_url('admin-ajax.php')));
	wp_enqueue_script( 'load_agency_sidebar' );

	wp_register_script( 'ajax_banner',esc_url( trailingslashit( get_template_directory_uri() ) . 'assets/js/'.'ajax_banner.js'), array( 'jquery' ), '1.0', true ); 	

	wp_localize_script( 'ajax_banner', 'php_array', $php_array );
	wp_localize_script( 'ajax_banner', 'ajax_banner', array('url' => admin_url('admin-ajax.php')));
	wp_enqueue_script( 'ajax_banner' );

}
/** Gọi file script. */
add_action( 'wp_enqueue_scripts', 'theme_register_scripts', 1 );

// Thêm javascript - close


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Quản lý nội dung',
		'menu_title'	=> 'Quản lý nội dung',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'delete_pages',
		'redirect'		=> false
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Thông tin liên hệ',
		'menu_title'	=> 'Thông tin liên hệ',
		'parent_slug'	=> 'theme-general-settings',
		'capability'	=> 'delete_pages',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Nội dung khác',
		'menu_title'	=> 'Nội dung khác',
		'parent_slug'	=> 'theme-general-settings',
		'capability'	=> 'delete_pages',
	));
	
}
// add theme options - close

// --------- HaiLL ---------
// ===== Manager order ===== \\

function wpdocs_register_my_custom_menu_page(){
    add_menu_page( 
        __( 'Custom Menu Title', 'textdomain' ),
        'Giỏ hàng',
        'manage_options',
        'custompage',
        'my_custom_menu_page',
        plugins_url( 'myplugin/images/icon.png' ),
        6
    ); 
}
add_action( 'admin_menu', 'wpdocs_register_my_custom_menu_page' );
 
/**
 * Display a custom menu page
 */
function my_custom_menu_page(){
	?>
	<style>
			.row-header-cart {
				display: flex;
				padding-top: 30px;
    			padding-bottom: 30px;
				font-size: 16px;
				font-weight: 600;
			}

			.row-item-cart {
				display: flex;
				padding-top: 30px;
    			padding-bottom: 30px;
			}

			.wrap-header-cart {
				display: flex;
				width: 70%;
			}

			.wrap-item-cart {
				width: 70%;
			}

			.header-price-total-cart {
				width: 10%;
				text-align: center;
			}

			.item-price-total-cart {
				width: 10%;
				text-align: center;
			}

			.header-user-cart {
				text-align: center;
				width: 15%;
			}

			.item-user-cart {
				width: 15%;
			}

			.header-item {
				width: 18%;
			}

			.column-small {
				width: 8%;
			}

			.column-big {
				width: 50%;
				text-align: initial !important;
			}

			.content-item {
				display: inline-flex;
				width: 100%;
				margin-bottom: 15px;
			}

			.row-item-cart {
				font-size: 16px;
			}

			.row-item-cart:nth-of-type(odd) {
				background-color:#F2F2F2;
			}
				
			.row-item-cart:nth-of-type(even) {
				background-color:#fff;
			}

			.header-item {
				text-align: center;
			}

			.info-user-quick-order span {
				font-weight: 550;
				font-size: 17px;
			}


		</style>
		<div class="row-header-cart">
			<div class="wrap-header-cart">
				<div class="header-item column-small">Thích</div>
				<div class="header-item column-big">Tên sản phẩm</div>
				<div class="header-item column-small">Số Lượng</div>
				<div class="header-item">Ngày đặt</div>
				<div class="header-item column-small">Tiền</div>
			</div>
			<div class="header-price-total-cart">
				Tổng tiền
			</div>
			<div class="header-user-cart">
				Thông tin KH
			</div>
		</div>

		
	<?php
	global $wpdb;
	$table_name = $wpdb->prefix . "quick_order";
	$users = get_users( array( 'role__in' => array( 'author', 'subscriber' ) ) );
	foreach ( $users as $user ) {
		$data = $wpdb->get_results( 'SELECT * FROM '.$table_name.' WHERE UserId ='.$user->ID.' AND ProductCount > 0');
		$total = 0;
		if(count($data) > 0)
		{
			$totalPrice = 0;
			?>
				<div class="row-item-cart">
					<div class="wrap-item-cart">
						<?php 
							for($i = 0; $i < count($data); $i++)
							{
								$itemPrice = $data[$i]->ProductCount * $data[$i]->ProductPrice;
								$totalPrice = $totalPrice + $itemPrice;
								?>
								<div class="content-item ">
									<div class="header-item column-small">
										<?php 
											echo $data[$i]->ProductFavorite; 
										?>
									</div>
									<div class="header-item column-big">
										<?php 
										 	echo get_the_title($data[$i] -> ProductId)
										?>
									</div>
									<div class="header-item column-small">
										<?php 
											echo $data[$i]->ProductCount; 
										?>
									</div>
									<div class="header-item">
										<?php echo $data[$i]->ProductDate; ?>
									</div>
									<div class="header-item column-small">									
										<?php echo number_format($data[$i]->ProductPrice, 0, ',', '.');?> đ
									</div>
								</div>
								<?php
							}
						?>
						
					</div>
					<div class="item-price-total-cart">
						<?php echo number_format($totalPrice, 0, ',', '.');?> đ
					</div>
					<div class="item-user-cart">
						<div class="info-user-quick-order">Tên: <span><?php echo $user->display_name;?></span></div>
						<div class="info-user-quick-order">Số điện thoại: <span><?php echo $user->phone;?></span></div>
						<div class="info-user-quick-order">Mail: <span><?php echo $user->user_login;?></span></div>
						<div class="info-user-quick-order"><span><?php echo $user->description;?></span></div>
					</div>
				</div>

			
			<?php
		}
		?>
		<?php
	}
}

// ====== Add column user =======\\
function new_city_methods( $citymethods ) {
    $citymethods['phone'] = 'Phone';
	$citymethods['user'] = 'Role User';
    return $citymethods;  
}
add_filter( 'user_contactmethods', 'new_city_methods', 10, 1 );
function new_custom_user_table( $column_city ) {
    $column_city['phone'] = 'Phone';
	$column_city['user'] = 'Role User';
    return $column_city;
}
add_filter( 'manage_users_columns', 'new_custom_user_table' );
function new_custom_user_table_row( $value, $column_city, $user_id ) {
    switch ($column_city) {
        case 'phone' :
            return get_the_author_meta( 'phone', $user_id );

		case 'user' :
			return get_the_author_meta( 'user', $user_id );
        default:  
    }
    return $value;
}
add_filter( 'manage_users_custom_column', 'new_custom_user_table_row', 10, 3 );

//====== Create table Products =====\
	global $wpdb;
	$charset_collate = $wpdb->get_charset_collate();
	$table_name = $wpdb->prefix . 'quick_order';

	$sql = "CREATE TABLE $table_name (
	ProductId int,
	ProductName text,
	ProductCount int,
	ProductPrice int,
	ProductFavorite tinyint DEFAULT 0 NOT NULL,
	ProductDate datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
	UserId int
	) $charset_collate;";

	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql );


// ==== Insert data =====\\
add_action('wp_ajax_load_posts_by_ajax', 'load_posts_by_ajax_callback');
add_action('wp_ajax_nopriv_load_posts_by_ajax', 'load_posts_by_ajax_callback');
function load_posts_by_ajax_callback() {
    check_ajax_referer('load_more_posts_policy', 'security');
	global $wpdb;
	$table_name = $wpdb->prefix . "quick_order";
	$userId = $_POST['userId'];
	$productId = $_POST['productId'];
	$productCount = $_POST['productCount'];
	$productPrice = $_POST['productPrice'];
	$productDate = $_POST['productDate'];

	// check user id
	$data = $wpdb->get_results( 'SELECT UserId, ProductId FROM '.$table_name.' WHERE UserId ='.$userId .' AND ProductId = '.$productId);
	if($data[0]->UserId == null || $data[0]->ProductId == null)
	{
		$wpdb->insert( $table_name, array(
		'UserId' => $userId,
		'ProductId' => $productId,
		'ProductDate' => $productDate,
		'ProductPrice' => $productPrice,
		'ProductCount' => $productCount
		));

		add_post_meta($userId, $productId, $productCount);
	} else {
		$wpdb->update(
		$table_name,
			array( 
				'ProductCount' => $productCount
			),
			array(
				'ProductId' => $productId 
			)
		);

		update_post_meta ( $userId, $productId, $productCount);
	}
}

// ==== remove item ===\\

add_action('wp_ajax_remove_by_ajax', 'remove_by_ajax_callback');
add_action('wp_ajax_nopriv_remove_by_ajax', 'remove_by_ajax_callback');
function remove_by_ajax_callback() {
    check_ajax_referer('remove_item_policy', 'security');
	global $wpdb;
	$table_name = $wpdb->prefix . "quick_order";
	$productId = $_POST['productId'];
	$wpdb->delete( $table_name, array( 'ProductId' => $productId ) );
	update_post_meta($_COOKIE["idUser"], $productId, 0);
}

// ==== Favorite item ===\\
add_action('wp_ajax_favorite_by_ajax', 'favorite_by_ajax_callback');
add_action('wp_ajax_nopriv_favorite_by_ajax', 'favorite_by_ajax_callback');
function favorite_by_ajax_callback() {
    check_ajax_referer('favorite_item_policy', 'security');
	global $wpdb;
	$table_name = $wpdb->prefix . "quick_order";
	$productId = $_POST['productId'];
	$productFavorite = $_POST['productFavorite'];
	
	$wpdb->update(
		$table_name,
			array( 
				'ProductFavorite' => $productFavorite
			),
			array(
				'ProductId' => $productId 
			)
		);
}
// ==== Login ===\\
add_action('wp_ajax_login_by_ajax', 'login_by_ajax_callback');
add_action('wp_ajax_nopriv_login_by_ajax', 'login_by_ajax_callback');
function login_by_ajax_callback() {
    check_ajax_referer('login_policy', 'security');
	global $wpdb;
	$table_name = $wpdb->prefix . "quick_order";

	$userName = $_POST['userName'];
	$password = $_POST['password'];
	
	$user_data = array();
    $user_data['user_login'] = $userName;
    $user_data['user_password'] = $password;
    $user_data['remember'] = true;

	$user = wp_signon( $user_data, true );

	if($user->user_login != null)
	{
		$cookie_name_Id = 'idUser';
		$cookie_value_Id =  $user->ID;
		setcookie($cookie_name_Id, $cookie_value_Id, time() + (86400), "/"); // 86400 = 1 day

		$cookie_name = 'username';
		$cookie_value =  $userName;
		setcookie($cookie_name, $cookie_value, time() + (86400), "/"); // 86400 = 1 day

		$cookie_password = 'password';
		$cookie_password_value = $password;
		setcookie($cookie_password, $cookie_password_value, time() + (86400), "/"); // 86400 = 1 day
		
		echo '{"result": 1, "state": 1}';
	} else {
		echo '{"result": 0, "state": 1}';
	}
}
// ==== SignUp ===\\
add_action('wp_ajax_signUp_by_ajax', 'signUp_by_ajax_callback');
add_action('wp_ajax_nopriv_signUp_by_ajax', 'signUp_by_ajax_callback');
function signUp_by_ajax_callback() {
    check_ajax_referer('signUp_policy', 'security');
	$userName = $_POST['userName'];
	$password = $_POST['password'];
	$role = $_POST['role'];
	$nickname = $_POST['nickname'];
	$phonenumber = $_POST['phonenumber'];
	$description = $_POST['description'];

	$data = array(
		'user_login'           	=> $userName,
		'user_pass'            	=> $password,
		'role'					=> "subscriber",
		'user'					=> $role,
		'email'					=> $userName,
		'display_name'			=> $nickname,
		'phone'					=> $phonenumber,
		'description'			=>  $description,
		'show_admin_bar_front' => false
	);
	  
	$user_id = wp_insert_user( $data );
	if ( ! is_wp_error( $user_id ) ) {
		$user_data = array();
		$user_data['user_login'] = $userName;
		$user_data['user_password'] = $password;
		$user_data['remember'] = true;
	
		$user = wp_signon( $user_data, true );
		if($user->user_login != null)
		{
			$cookie_name_Id = 'idUser';
			$cookie_value_Id =  $user->ID;
			setcookie($cookie_name_Id, $cookie_value_Id, time() + (86400), "/"); // 86400 = 1 day
	
			$cookie_name = 'username';
			$cookie_value =  $userName;
			setcookie($cookie_name, $cookie_value, time() + (86400), "/"); // 86400 = 1 day
	
			$cookie_password = 'password';
			$cookie_password_value = $password;
			setcookie($cookie_password, $cookie_password_value, time() + (86400), "/"); // 86400 = 1 day
	
			echo '{"result": 1, "state": 0}';
		} else {
			echo '{"result": 0, "state": 0}';
		}
	} else {
		echo '{"result": 0, "state": 0}';
	}
}

// ==== Logout ===\\
add_action('wp_ajax_logout_by_ajax', 'logout_by_ajax_callback');
add_action('wp_ajax_nopriv_logout_by_ajax', 'logout_by_ajax_callback');
function logout_by_ajax_callback() {
    check_ajax_referer('logout_policy', 'security');
	wp_logout();
	
	$cookie_name_Id = 'idUser';
	$cookie_value_Id =  -1;
	setcookie($cookie_name_Id, $cookie_value_Id, time() - 3600, "/"); // 86400 = 1 day
	
	$cookie_name = 'username';
	$cookie_value = "";
	setcookie($cookie_name, $cookie_value, time() - 3600, "/"); // 86400 = 1 day
	
	$cookie_password = 'password';
	$cookie_password_value = "";
	setcookie($cookie_password, $cookie_password_value, time() - 3600, "/"); // 86400 = 1 day
}


// ==== Load more ===\\
add_action('wp_ajax_loadMore_by_ajax', 'loadMore_by_ajax_callback');
add_action('wp_ajax_nopriv_loadMore_by_ajax', 'loadMore_by_ajax_callback');
function loadMore_by_ajax_callback() {
    check_ajax_referer('loadMore_policy', 'security');
	$page = $_POST['page'];
	$args = array(
		'post_type'     => 'product',
		's'             => $_GET["search"],
		'post_status'       => 'publish',
		'paged'         => $page,
		'posts_per_page'=> 10
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
						        <div class="DHN-new-price">
                                           	     <span class="DHN-number">
                                               	     	<?php 
                                              	          	$value = get_field( "_sale_price", get_the_ID() );
                                                        	if($value == null)
                                                        	{
                                                            	$value = get_field( "_regular_price", get_the_ID() );
                                                        	}
                                                        	echo number_format($value, 0, ',', '.');
                                                    	?>
                                                    	<input type="hidden" id="price-<?php echo get_the_ID();?>"  value="<?php echo $value;?>">
                                                      </span>
                                               	      <span class="DHN-unit">đ</span>
						            </div>

						                <div class="DHN-old-price">
                                        		<span class="DHN-number">
                                            		      <del>234.400</del>
                                        		</span>
                                        		<span class="DHN-unit">
                                            		       <del>đ</del>
                                        		</span>
                                    		</div>   

                                            </div>
                                            <div class="DHN-quantity">
                                                <button class="DHN-minus buttonMinus" data-product="<?php echo get_the_ID()?>">
                                                    <i class="fas fa-minus-circle"></i>
                                                </button>

                                                <input id="value-<?php echo get_the_ID();?>" class="DHN-number" type="text" 
                                                value=<?php 
                                                    $key_1_value = get_post_meta($_COOKIE["idUser"],  get_the_ID(), true );
                                                    if ( ! empty( $key_1_value ) ) {
                                                        echo $key_1_value;
                                                    } else {
                                                        echo 0;
                                                    }
                                                        ?>>
                                                </input>

                                                <button class="DHN-plus buttonAdd" data-product="<?php echo get_the_ID();?>">
                                                    <i class="fas fa-plus-circle"></i>
                                                </button>
                                            </div>
                                        </div>
                                        
                                    </div>
			<?php
		}
	}
	wp_reset_postdata();
}
