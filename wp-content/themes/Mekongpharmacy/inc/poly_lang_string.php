<?php
add_filter( 'rank_math/frontend/breadcrumb/items', function( $crumbs, $class ) {

        // With this code, we get the home URL with the current language
        $home_link = pll_home_url(pll_current_language());
       // $home_label = pll_home_url(pll_current_language());

        // The first item in the $crumbs array is usually the home (except if it is disabled
        // The second item inside each item is the link (so in this case, the home link)
        $crumbs[0][1] = $home_link;
	   // $crumbs[0][1] = $home_label;

	return $crumbs;
}, 10, 2);


add_filter( 'rank_math/frontend/breadcrumb/strings', function( $strings ) {
	$strings = array(
		'prefix'         => '',
		'home'           => pll__('Home'),
		'error404'       => '',
		'archive_format' => '',
		'search_format'  => '',
	);
	return $strings;
});

add_action('init','register_polylang_string'); 
function register_polylang_string(){
	pll_register_string('namlbn-theme','Liên hệ','namlbn');
}
?>
