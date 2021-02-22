<?php
if ( is_active_sidebar('default') ) {
	dynamic_sidebar('default');
}
?>

<li id="last_test_post">
<h3 class="widgettitle">BÀI VIẾT MỚI NHẤT</h3>
	<?php
	$loop = new WP_Query(array(
		'post_type' => 'post',
		'post_status' =>'publish',
		'posts_per_page' => 5,

	));
	if ($loop->have_posts()) {
		echo '<ul class="list_post">';
		while ($loop->have_posts()) {
			$loop->the_post();
			?>
			<li class="post">
				<div class="wrapper">
					<div class="post_thumb">
						<a href="<?php echo get_the_permalink(); ?>" class="relative padding_ratio">
							<?php
							if (has_post_thumbnail()) {
								the_post_thumbnail( $size = 'medium', $attr = array('class' => 'full_relative absolute') );
							} else {
								echo '<img src="'.get_template_directory_uri().'/assets/images/default-thumbnail-400.jpg" class="full_relative absolute" alt="post thumbnail">';
							}
							?>
						</a>
						<div class="post_content">
							<a href="<?php echo get_the_permalink(); ?>"><?php the_title();?></a>
						</div>
					</div>
				</div>
			</li>
			<?php
		}
		echo '</ul>';
	}
	?>
</li>
<?php
?>