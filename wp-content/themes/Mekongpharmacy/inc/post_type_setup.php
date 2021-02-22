<?php
// Register Custom Post Type
function custom_post_type_agency() {

	$labels = array(
		'name'                  => _x( 'Đối tác', 'Post Type General Name', 'namlbn' ),
		'singular_name'         => _x( 'Đối tác', 'Post Type Singular Name', 'namlbn' ),
		'menu_name'             => __( 'Đối tác', 'namlbn' ),
		'name_admin_bar'        => __( 'Đối tác', 'namlbn' ),
		'archives'              => __( 'Đối tác', 'namlbn' ),
		'attributes'            => __( 'Thuộc tính', 'namlbn' ),
		'parent_item_colon'     => __( 'Đối tác cha', 'namlbn' ),
		'all_items'             => __( 'Tất cả', 'namlbn' ),
		'add_new_item'          => __( 'Thêm dối tác mới', 'namlbn' ),
		'add_new'               => __( 'Thêm mới', 'namlbn' ),
		'new_item'              => __( 'Đối tác mới', 'namlbn' ),
		'edit_item'             => __( 'Chỉnh sửa', 'namlbn' ),
		'update_item'           => __( 'Cập nhật', 'namlbn' ),
		'view_item'             => __( 'Xem', 'namlbn' ),
		'view_items'            => __( 'Xem', 'namlbn' ),
		'search_items'          => __( 'Tìm kiếm', 'namlbn' ),
		'not_found'             => __( 'Không tìm thấy', 'namlbn' ),
		'not_found_in_trash'    => __( 'Không tìm thấy trong thùng rác', 'namlbn' ),
		'featured_image'        => __( 'Ảnh đại diện', 'namlbn' ),
		'set_featured_image'    => __( 'Đặt ảnh đại diện', 'namlbn' ),
		'remove_featured_image' => __( 'Remove featured image', 'namlbn' ),
		'use_featured_image'    => __( 'Use as featured image', 'namlbn' ),
		'insert_into_item'      => __( 'Insert into item', 'namlbn' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'namlbn' ),
		'items_list'            => __( 'Danh sách đối tác', 'namlbn' ),
		'items_list_navigation' => __( 'Items list navigation', 'namlbn' ),
		'filter_items_list'     => __( 'Filter items list', 'namlbn' ),
	);
	$args = array(
		'label'                 => __( 'Đối tác', 'namlbn' ),
		'description'           => __( 'Đối tác', 'namlbn' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'custom-fields', 'page-attributes', 'post-formats' ),
		'taxonomies'            => array( 'agency_pos' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-multisite',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'agency', $args );

}
add_action( 'init', 'custom_post_type_agency', 0 );

if ( ! function_exists('custom_post_type_dichvu') ) {

// Register Custom Post Type
	function custom_post_type_thuoc() {

		$labels = array(
			'name'                  => _x( 'Thuốc', 'Post Type General Name', 'namlbn' ),
			'singular_name'         => _x( 'Thuốc', 'Post Type Singular Name', 'namlbn' ),
			'menu_name'             => __( 'Thuốc', 'namlbn' ),
			'name_admin_bar'        => __( 'Thuốc', 'namlbn' ),
			'archives'              => __( 'Item Archives', 'namlbn' ),
			'attributes'            => __( 'Item Attributes', 'namlbn' ),
			'parent_item_colon'     => __( 'Parent Item:', 'namlbn' ),
			'all_items'             => __( 'Tất cả', 'namlbn' ),
			'add_new_item'          => __( 'Thêm mới', 'namlbn' ),
			'add_new'               => __( 'Thêm mới', 'namlbn' ),
			'new_item'              => __( 'Thêm mới', 'namlbn' ),
			'edit_item'             => __( 'Chỉnh sửa', 'namlbn' ),
			'update_item'           => __( 'Cập nhật', 'namlbn' ),
			'view_item'             => __( 'Xem', 'namlbn' ),
			'view_items'            => __( 'Xem', 'namlbn' ),
			'search_items'          => __( 'Tìm', 'namlbn' ),
			'not_found'             => __( 'Not found', 'namlbn' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'namlbn' ),
			'featured_image'        => __( 'Ảnh đại diện', 'namlbn' ),
			'set_featured_image'    => __( 'Thêm ảnh ảnh đại diện', 'namlbn' ),
			'remove_featured_image' => __( 'Xóa ảnh ảnh đại diên', 'namlbn' ),
			'use_featured_image'    => __( 'Dùng làm ảnh đại diện', 'namlbn' ),
			'insert_into_item'      => __( 'Insert into item', 'namlbn' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'namlbn' ),
			'items_list'            => __( 'Items list', 'namlbn' ),
			'items_list_navigation' => __( 'Items list navigation', 'namlbn' ),
			'filter_items_list'     => __( 'Filter items list', 'namlbn' ),
		);
		$args = array(
			'label'                 => __( 'Thuốc', 'namlbn' ),
			'description'           => __( 'Các loại thuốc của Công ty', 'namlbn' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'custom-fields','thumbnail' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 6,
			'menu_icon'             => 'dashicons-tickets-alt',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => false,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'query_var'             => 'thuoc',
			'capability_type'       => 'post',
		);
		register_post_type( 'thuoc', $args );

	}
	add_action( 'init', 'custom_post_type_thuoc', 0 );

}

// Thêm custom post type Dịch vụ - close
// Register Custom Post Type
function custom_post_type_benh() {

	$labels = array(
		'name'                  => _x( 'Bệnh', 'Post Type General Name', 'namlbn' ),
		'singular_name'         => _x( 'Bệnh', 'Post Type Singular Name', 'namlbn' ),
		'menu_name'             => __( 'Bệnh', 'namlbn' ),
		'name_admin_bar'        => __( 'Bệnh', 'namlbn' ),
		'archives'              => __( 'Bệnh', 'namlbn' ),
		'attributes'            => __( 'Thuộc tính', 'namlbn' ),
		'parent_item_colon'     => __( 'Bệnh cha', 'namlbn' ),
		'all_items'             => __( 'Tất cả', 'namlbn' ),
		'add_new_item'          => __( 'Thêm bệnh mới', 'namlbn' ),
		'add_new'               => __( 'Thêm mới', 'namlbn' ),
		'new_item'              => __( 'Bệnh mới', 'namlbn' ),
		'edit_item'             => __( 'Chỉnh sửa', 'namlbn' ),
		'update_item'           => __( 'Cập nhật', 'namlbn' ),
		'view_item'             => __( 'Xem', 'namlbn' ),
		'view_items'            => __( 'Xem', 'namlbn' ),
		'search_items'          => __( 'Tìm kiếm', 'namlbn' ),
		'not_found'             => __( 'Không tìm thấy', 'namlbn' ),
		'not_found_in_trash'    => __( 'Không tìm thấy trong thùng rác', 'namlbn' ),
		'featured_image'        => __( 'Ảnh đại diện', 'namlbn' ),
		'set_featured_image'    => __( 'Đặt ảnh đại diện', 'namlbn' ),
		'remove_featured_image' => __( 'Xóa ảnh đại diện', 'namlbn' ),
		'use_featured_image'    => __( 'Dùng làm ảnh đại diện', 'namlbn' ),
		'insert_into_item'      => __( 'Chèn', 'namlbn' ),
		'uploaded_to_this_item' => __( 'Tải lên', 'namlbn' ),
		'items_list'            => __( 'Danh sách', 'namlbn' ),
		'items_list_navigation' => __( 'Danh sách điều hướng', 'namlbn' ),
		'filter_items_list'     => __( 'Lọc', 'namlbn' ),
	);
	$args = array(
		'label'                 => __( 'Bệnh', 'namlbn' ),
		'description'           => __( 'Các bệnh', 'namlbn' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes', 'post-formats' ),
		'taxonomies'            => array( 'benh_cat' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-heart',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'benh', $args );

}
add_action( 'init', 'custom_post_type_benh', 0 );
?>