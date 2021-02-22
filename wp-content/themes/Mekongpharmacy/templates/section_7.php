<section id="section_7" class="page_section">
	<div class="container">
		<h2 class="section_title"><?php echo get_field('title_sc_7','option');?></h2>
		<?php
		$arr = array(
			"post_type" => "post",
			"post_status" => "publish",
			"posts_per_page" => 3,

		);
		$loop = new WP_Query($arr);
		if($loop->have_posts()){
			echo '<div class="row">';
			while ($loop ->have_posts()) {
				$loop ->the_post();
				?>
				<div class="col-4">
					<a href="<?php the_permalink();?>" class="col_wrapper relative">
						<div class="img padding_ratio relative">
							<?php
							if (has_post_thumbnail()) {
								the_post_thumbnail( $size = 'medium', $attr = array('class' => 'full_relative absolute') );
							} else {
								echo '<img src="'.get_template_directory_uri().'/assets/images/default-thumbnail-400.jpg" class="full_relative absolute" alt="post thumbnail">';
							}
							?>
						</div>
							<h3 class="title absolute"><?php the_title();?></h3>
						
						
					</a>
					
				</div>
				<?php 
			}
			echo '</div>';
			
		}
		?>
	</div>
</section>