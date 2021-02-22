<?php 

 // Thiết lập các chức năng sẽ được theme hỗ trợ - open



if ( ! function_exists( 'namlbn_theme_setup' ) ) {
	function namlbn_theme_setup() {
	// Set the content width based on the theme's design and stylesheet.
		// if ( ! isset( $content_width ) ) {
		// 	$content_width = 1200; 
		// }
		
	//Thiết lập theme có thể dich được
		$language_folder = get_template_directory_uri() . '/languages';
		load_theme_textdomain( 'namlbn', $language_folder );

	//Tự chèn RSS Feed links trong <head>
		add_theme_support( 'automatic-feed-links' );

	//Thêm chức năng title-tag để tự thêm <title>
		add_theme_support( 'title-tag' );

	// Hỗ trợ post-thumbnails
		add_theme_support( 'post-thumbnails' );

	// Xét size post-thumbnail
		set_post_thumbnail_size(400,400,true);

	// Thêm các size khác
		add_image_size( 'haft_container', 600,0, false );

	// Thêm chức năng post format
		add_theme_support( 'post-formats', array(
			'image',
			'video',
			'gallery',
			'quote',
			'link'
		));

	//Thêm chức năng custom background
		$default_background = array(
			'default-color' => '#e8e8e8',
		);
		add_theme_support( 'custom-background', $default_background );

	// Tạo menu cho theme
		register_nav_menu ( 'primary-menu', __('Primary Menu', 'namlbn') );
		register_nav_menu( 'mobile-menu',__('Mobile Menu', 'namlbn') );
		register_nav_menu( 'footer-menu-1',__('Footer Menu 1', 'namlbn') );
		register_nav_menu( 'footer-menu-2',__('Footer Menu 2', 'namlbn') );

	// Tạo sidebar cho theme - open
		$arr = array(
			'name' => __('Sidebar mặc định', 'namlbn'),
			'id' => 'default',
			'description' => 'Sidebar mặc định các trang',
			'class' => 'sidebar',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>'
		);
		register_sidebar( $arr );

		
	// Tạo sidebar cho theme - close
	}

	add_action ( 'init', 'namlbn_theme_setup' );
};

// Thiết lập các chức năng sẽ được theme hỗ trợ - close


// Custom logo - open
function namlbn_custom_logo_setup() {
	$defaults = array(
		'height'      => 105,
		'width'       => 120,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'namlbn_custom_logo_setup' );
// Custom logo - close

?>