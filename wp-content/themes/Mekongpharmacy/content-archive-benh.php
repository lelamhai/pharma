<div id="content_archive_benh_gtbh080121" class="list-posts">
	<div class="container">
		<h1 class="page_title"><?php the_archive_title();?></h1>
		<ul class="row">
			<?php 
			while (have_posts()) {
				the_post();
				?>
				<li class="col-4">
					<div class="col_wrapper relative">
						
							<h3 class="news-title">
								<a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a>
							</h3>
					
					</div>
				</li>
				<?php
			}
			?>
		</ul>
		<?php echo namlbn_pagination(); ?>
	</div>
</div>