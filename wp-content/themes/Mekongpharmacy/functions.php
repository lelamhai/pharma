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
add_action( 'init', 'process_post' );
function process_post() {
     $wp_user_query = new WP_User_Query(array('role' => 'subscriber'));
	 $users = $wp_user_query->get_results();
	 if(!empty($users))
	 {
		foreach($users as $user)
		{
			add_user_meta($user->id,'lelamhai', 'abc', true);
		}
	 }
}


add_action('wp_ajax_load_posts_by_ajax', 'load_posts_by_ajax_callback');
add_action('wp_ajax_nopriv_load_posts_by_ajax', 'load_posts_by_ajax_callback');
function load_posts_by_ajax_callback() {
    check_ajax_referer('load_more_posts_policy', 'security');
	
	$username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
	$phone = $_POST['phone'];
    $user_id = username_exists( $username );
    if ( !$user_id && email_exists($email) == false ) {
        $user_id = wp_create_user( $username, $password, $email );
        if( !is_wp_error($user_id) ) {
            $user = get_user_by( 'id', $user_id );
            $user->set_role( 'subscriber' );
        }
    }
	update_user_meta( $user_id, 'tho', 'dep trai lam');
    wp_die();
    
}



add_action( 'personal_options_update', 'save_extra_user_profile_fields_lzg' );
add_action( 'edit_user_profile_update', 'save_extra_user_profile_fields_lzg' );

function save_extra_user_profile_fields_lzg( $user_id ) {
    if(!current_user_can( 'edit_user', $user_id ) ) { 
        return false; 
    }
    update_user_meta($user_id, 'MaSP', $_POST["MaSP"]);
    update_user_meta($user_id, 'TenSP', $_POST["TenSP"]);
    update_user_meta($user_id, 'SoDT', $_POST["SoDT"]);
    update_user_meta($user_id, 'SoLuong', $_POST["SoLuong"]);
    update_user_meta($user_id, 'DiaChi', $_POST["DiaChi"]);
}

add_action( 'show_user_profile', 'extra_user_profile_fields_lzg' );
add_action( 'edit_user_profile', 'extra_user_profile_fields_lzg' );

function extra_user_profile_fields_lzg( $user ) { 
    $user_id = $user->ID;
    ?>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.0.js"></script>
    <h3>Extra profile information</h3>
    <table class="form-table">
        <tr>
            <td>MaSP</td>
            <td><input type="text" name="MaSP">
            </td>
        </tr>
        <tr>
            <td>TenSP</td>
            <td><input type="text" name="TenSP">
            </td>
        </tr>
        <tr>
            <td>SoDT</td>
            <td><input type="text" name="SoDT">
            </td>
        </tr>
        <tr>
            <td>SoLuong</td>
            <td><input type="number" name="SoLuong"autocomplete="off">
            </td>
        </tr>
        <tr>
            <td>DiaChi</td>
            <td><input type="text" name="DiaChi"autocomplete="off">
            </td>
        </tr>
    </table>
    <script type="text/javascript">
        $('input').addClass('regular-text');
        $('input[name=MaSP]').val('<?php echo get_the_author_meta('MaSP', $user->ID); ?>');
        $('input[name=TenSP]').val('<?php echo get_the_author_meta('TenSP', $user->ID); ?>');
        $('input[name=SoDT]').val('<?php echo get_the_author_meta('SoDT', $user->ID); ?>');
        $('input[name=SoLuong]').val('<?php echo get_the_author_meta('SoLuong', $user->ID); ?>');
        $('input[name=DiaChi]').val('<?php echo get_the_author_meta('DiaChi', $user->ID); ?>');
        // Hide some default options //
            /*
            $('.user-url-wrap').hide();
            $('.user-description-wrap').hide();
            $('.user-profile-picture').hide();
            $('.user-rich-editing-wrap').hide();
            $('.user-admin-color-wrap').hide();
            $('.user-comment-shortcuts-wrap').hide();
            $('.show-admin-bar').hide();
            $('.user-language-wrap').hide();
            //*/
    </script>
<?php 
}

function new_modify_user_table_lzg( $column ) {
    $column['MaSP'] = 'MaSP';
    $column['TenSP'] = 'TenSP';
    $column['SoDT'] = 'SoDT';
    $column['SoLuong'] = 'SoLuong';
    $column['DiaChi'] = 'DiaChi';
    return $column;
}
add_filter( 'manage_users_columns', 'new_modify_user_table_lzg' );

function new_modify_user_table_row_lzg( $val, $column_name, $user_id ) {
    $meta = get_user_meta($user_id);
    switch ($column_name) {
        case 'MaSP' :
            $MaSP = $meta['MaSP'][0];
            return $MaSP;
        case 'TenSP' :
            $TenSP = $meta['TenSP'][0];
            return $TenSP;
        case 'SoDT' :
            $SoDT = $meta['SoDT'][0];
            return $SoDT;
        case 'SoLuong' :
            $SoLuong = $meta['SoLuong'][0];
            return $SoLuong;
        case 'DiaChi' :
            $DiaChi = $meta['DiaChi'][0];
            return $DiaChi;
        default:
    }
    return $val;
}
add_filter( 'manage_users_custom_column', 'new_modify_user_table_row_lzg', 10, 3 );

// add 

?>