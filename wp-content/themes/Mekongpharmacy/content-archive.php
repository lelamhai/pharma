<div id="content_archive_gtbh080121" class="list-posts">
	<div class="container">
		<h1 class="page_title"><?php the_archive_title();?></h1>
		<ul class="row">
			<?php 
			while (have_posts()) {
				the_post();
				?>
				<li class="col-12">
					<div class="col_wrapper relative">
						<a href="<?php echo get_the_permalink(); ?>" class="relative padding_ratio">
							<?php
							if (has_post_thumbnail()) {
								the_post_thumbnail( $size = 'medium_large', $attr = array('class' => 'full_relative absolute') );
							} else {
								echo '<img src="'.get_template_directory_uri().'/assets/images/default-thumbnail-768.jpg" class="full_relative absolute" alt="post thumbnail">';
							}
							?>
						</a>
						<div class="date absolute"><span class="month"><?php echo get_the_date('m'); ?></span><span class="day"><?php echo get_the_date('d'); ?></span></div>
						<div class="col_content absolute">

							<h3 class="news-title">
								<a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a>
							</h3>
							<p class="news-excerpt">
								<?php echo limit_text(get_the_excerpt(),20); ?>
							</p>
							<a class="read-more" href="<?php echo get_the_permalink(); ?>">Xem thêm</a>
						</div>
					</div>
				</li>
				<?php
			}
			?>
		</ul>
		<?php echo namlbn_pagination(); ?>
	</div>
</div>