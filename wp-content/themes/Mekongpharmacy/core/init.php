<?php 

// show tag - open
function namlbn_tag($id){
	$tag = get_the_tags($id);
	if($tag){
		?>
		<p class="namlbn-tags">Tags:
			<?php
			foreach($tag as $tg){
				$sl = $tg->name;
				echo "<a href='".get_tag_link($tg->term_id)."' title='tag ".$sl."'>".$sl."</a>";
			}
			?>
		</p>
		<?php
	}
}
// show tag - close


// Giới hạn số từ trong câu -open
function limit_text($text, $limit) {
	if (str_word_count($text, 0) > $limit) {
		$words = str_word_count($text, 2);
		$pos = array_keys($words);
		$text = substr($text, 0, $pos[$limit]) . '...';
	}
	return $text;
}
// Giới hạn số từ trong câu -close

// Lấy string trong 1 đoạn - open
function get_string_between($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}
// Lấy string trong 1 đoạn - Close

// Disable Gutenberg
if (version_compare($GLOBALS['wp_version'], '5.0-beta', '>')) {
	// WP > 5 beta
	add_filter('use_block_editor_for_post_type', '__return_false', 10);
} else {
	// WP < 5 beta
	add_filter('gutenberg_can_edit_post_type', '__return_false', 10);
}


// breadcrumbs - open
if ( ! function_exists( 'namlbn_breadcrumbs' ) ) {
	function namlbn_breadcrumbs() {
		echo '<div class="namlbn-breadcrumb">';
		if ( function_exists('rank_math_the_breadcrumbs') ) {
			//yoast_breadcrumb( '<p id="breadcrumbs" class="container">','</p>' );
			rank_math_the_breadcrumbs();
		} else {
			echo '<p class="container">Cài Rank Math để hiển thị breadcrumbs</p>';
		}
		echo '</div>';
	}
}
// breadcrumbs - close


function namlbn_pagination() {
	?>
	<div class="namlbn-pagination">
		<?php
		$args = array(
			'type'      => 'list',
			'next_text' => __('Next','namlbn'),
			'prev_text' => __('Previous','namlbn'),
		);
		the_posts_pagination( $args );
		?>
	</div>
	<?php
}


// Giới hạn số từ của excerpt
function namlbn_custom_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'namlbn_custom_excerpt_length', 999 );


if(!function_exists('namlbn_get_logo')){
	function namlbn_get_logo(){
		if(has_custom_logo()){
			the_custom_logo(); 
		} else {
			echo "<a href='".get_home_url()."' class='site-name'>";
			echo "<img src='".get_template_directory_uri()."/assets/images/logo.jpg' alt='".get_bloginfo( 'name', 'display' )."' title=''>";
			echo "</a>";
		}
	}
}


if (!function_exists('namlbn_sharing')) {
	function namlbn_sharing(){
		?>
		<div class="share-btns">
			<span class="facebook-share">
				<a href="https://www.facebook.com/sharer.php?u=<?php echo get_the_permalink(); ?>" target="_blank"><i class="fab fa-facebook-square"></i>Share on Facebook</a>
			</span>
			<span class="twitter-share">
				<a class="twitter-share-button" href="https://twitter.com/intent/tweet?original_referer=<?php echo get_the_permalink(); ?>&text=<?php echo get_the_title(); ?>%0a&url=<?php echo get_the_permalink(); ?>" target="_blank"><i class="fab fa-twitter-square"></i>Tweet</a>
			</span>
		</div>
		<?php
	}
}

add_filter( 'get_the_archive_title', function ($title) {
	if ( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( '', false );
	} elseif ( is_author() ) {
		$title = '<span class="vcard">' . get_the_author() . '</span>' ;
	} elseif ( is_post_type_archive() ) {
		$title = post_type_archive_title( '', false );
	} elseif ( is_tax() ) {
		$title = single_term_title( '', false );
	}
	return $title;
});

function prefix_tinymce_toolbar( $args ) {
	$args['fontsize_formats'] = "50% 80% 90% 100% 120% 140% 150% 160% 180% 200% 225% 250%";
	return $args;
}
add_filter( 'tiny_mce_before_init', 'prefix_tinymce_toolbar' );

// Lọc sản phẩm đánh dấu sao - open
// add_action('restrict_manage_posts', 'featured_products_sorting');
// function featured_products_sorting() {
//     global $typenow;
//     $post_type = 'product'; // change to your post type
//     $taxonomy  = 'product_visibility'; // change to your taxonomy
//     if ($typenow == $post_type) {
//         $selected      = isset($_GET[$taxonomy]) ? $_GET[$taxonomy] : '';
//         $info_taxonomy = get_taxonomy($taxonomy);
//         wp_dropdown_categories(array(
//             'show_option_all' => __("Show all {$info_taxonomy->label}"),
//             'taxonomy'        => $taxonomy,
//             'name'            => $taxonomy,
//             'orderby'         => 'name',
//             'selected'        => $selected,
//             'show_count'      => true,
//             'hide_empty'      => true,
//         ));
//     };
// }
// add_filter('parse_query', 'featured_products_sorting_query');
// function featured_products_sorting_query($query) {
//     global $pagenow;
//     $post_type = 'product'; // change to your post type
//     $taxonomy  = 'product_visibility'; // change to your taxonomy
//     $q_vars    = &$query->query_vars;
//     if ( $pagenow == 'edit.php' && isset($q_vars['post_type']) && $q_vars['post_type'] == $post_type && isset($q_vars[$taxonomy]) && is_numeric($q_vars[$taxonomy]) && $q_vars[$taxonomy] != 0 ) {
//         $term = get_term_by('id', $q_vars[$taxonomy], $taxonomy);
//         $q_vars[$taxonomy] = $term->slug;
//     }
// }
// Lọc sản phẩm đánh dấu sao - close

function namlbn_ajax_pagination($total,$per_page) {
	if ($total >1 ){
		?>
		<div class="namlbn-ajax-pagination">
			<input type="hidden" name="per-page" id="per-page" value="<?php echo $per_page; ?>">
			<input type="hidden" name="total-page" id="total-page" value="<?php echo $total; ?>">
			<span class="namlbn-the-left">
				<a href="#" data-page="first-page" class="namlbn-first" data-toggle="true" style="display: none">Trang đầu</a>
				<a href="#" data-page="prev-page" class="namlbn-prev" data-toggle="true" style="display: none">Trước</a>
			</span>
			<span class="namlbn-page">
				<?php
				if ($total > 5) {
					for ($i=1; $i <= 5 ; $i++) { 
						?>
						<a href="#" data-page="<?php echo $i; ?>" class="<?php if($i == 1) { echo 'current-page'; } echo ' namlbn-page-'.$i;  ?>" data-toggle="<?php if ($i == 1) { echo 'false';} else { echo "true"; } ?>"><?php echo $i; ?></a>
						<?php
					}
					echo '<a href="#" data-page="'.$total.'" class="namlbn-page-'.$total.'" data-toggle="true" style="display:none">'.$total.'</a>';
				} else {
					for ($i=1; $i <= $total ; $i++) { 
						?>
						<a href="#" data-page="<?php echo $i; ?>" class="<?php if($i == 1) { echo 'current-page'; }  echo ' namlbn-page-'.$i;  ?>" data-toggle="<?php if ($i == 1) { echo 'false';} else { echo "true"; } ?>"><?php echo $i; ?></a>
						<?php
					}
				}
				?>
			</span>
			<span class="namlbn-the-right">
				<a href="#" data-page="next-page" class="namlbn-next" data-toggle="true">Sau</a>
				<a href="#" data-page="last-page" class="namlbn-last" data-toggle="true">Trang cuối</a>
			</span>
		</div>
		<?php
	}
}
?>