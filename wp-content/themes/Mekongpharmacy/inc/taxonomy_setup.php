<?php
// Register Custom Taxonomy
function custom_taxonomy_agency_pos() {

	$labels = array(
		'name'                       => _x( 'Vị trí đối tác', 'Taxonomy General Name', 'namlbn' ),
		'singular_name'              => _x( 'Vị trí đối tác', 'Taxonomy Singular Name', 'namlbn' ),
		'menu_name'                  => __( 'Vị trí đối tác', 'namlbn' ),
		'all_items'                  => __( 'Tất cả', 'namlbn' ),
		'parent_item'                => __( 'Vị trí cha', 'namlbn' ),
		'parent_item_colon'          => __( 'Vị trí cha', 'namlbn' ),
		'new_item_name'              => __( 'Thêm vị trí', 'namlbn' ),
		'add_new_item'               => __( 'Thêm vị trí', 'namlbn' ),
		'edit_item'                  => __( 'Chỉnh sửa', 'namlbn' ),
		'update_item'                => __( 'Cập nhật', 'namlbn' ),
		'view_item'                  => __( 'Xem', 'namlbn' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'namlbn' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'namlbn' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'namlbn' ),
		'popular_items'              => __( 'Popular Items', 'namlbn' ),
		'search_items'               => __( 'Search Items', 'namlbn' ),
		'not_found'                  => __( 'Not Found', 'namlbn' ),
		'no_terms'                   => __( 'No items', 'namlbn' ),
		'items_list'                 => __( 'Items list', 'namlbn' ),
		'items_list_navigation'      => __( 'Items list navigation', 'namlbn' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'agency_pos', array( 'agency' ), $args );

}
add_action( 'init', 'custom_taxonomy_agency_pos', 0 );
// Register Custom Taxonomy
function custom_taxonomy_nhom_benh() {

	$labels = array(
		'name'                       => _x( 'Nhóm bệnh', 'Taxonomy General Name', 'namlbn' ),
		'singular_name'              => _x( 'Nhóm bệnh', 'Taxonomy Singular Name', 'namlbn' ),
		'menu_name'                  => __( 'Nhóm bệnh', 'namlbn' ),
		'all_items'                  => __( 'Tất cả nhóm', 'namlbn' ),
		'parent_item'                => __( 'Nhóm cha', 'namlbn' ),
		'parent_item_colon'          => __( 'Nhóm cha', 'namlbn' ),
		'new_item_name'              => __( 'Tên nhóm mới', 'namlbn' ),
		'add_new_item'               => __( 'Thêm nhóm mới', 'namlbn' ),
		'edit_item'                  => __( 'Chỉnh sửa', 'namlbn' ),
		'update_item'                => __( 'Cập nhật', 'namlbn' ),
		'view_item'                  => __( 'Xem', 'namlbn' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'namlbn' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'namlbn' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'namlbn' ),
		'popular_items'              => __( 'Popular Items', 'namlbn' ),
		'search_items'               => __( 'Search Items', 'namlbn' ),
		'not_found'                  => __( 'Not Found', 'namlbn' ),
		'no_terms'                   => __( 'No items', 'namlbn' ),
		'items_list'                 => __( 'Items list', 'namlbn' ),
		'items_list_navigation'      => __( 'Items list navigation', 'namlbn' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'nhom_benh', array( 'benh' ), $args );

}
add_action( 'init', 'custom_taxonomy_nhom_benh', 0 );
?>