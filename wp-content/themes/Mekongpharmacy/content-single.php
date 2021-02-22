<div id="content_single_gtbh030620">
	<div class="container">
		<div class="row">
			<div class="col-9">
				<div class="col_wrapper">
					<div class="img_post padding_ratio relative">
						<?php the_post_thumbnail( $size = 'medium_large', $attr = array('class' => 'full_relative absolute') );?>
					</div>
					<main>
						<article>
							<header id="single-header" class="article-header">
								<h1 class="page-title"><?php the_title(); ?></h1>
								<p class="this-author">Tác giả: <b><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ) ;?>"><?php the_author()?></a></b><i class="far fa-clock"></i><span><?php the_date(); ?></span></p>
							</header>
							<section class="article-content">
								<?php the_content(); ?>
							</section>
							<footer id="single-footer" class="article-footer">
								<div class="single-footer-info">
									<?php the_field('single_info','option'); ?>
								</div>
								<p class="post-cat">Chuyên mục:
									<?php 
									$this_cat = get_the_category();
									foreach ($this_cat as $key => $val) {
										echo '<a href="'.get_category_link($val->term_id).'">'.$val->name.'</a>';
									}
									?>
								</p>
								<?php namlbn_tag($post->the_ID); ?>
								<p class="post-pagination">
									<?php
									previous_post_link('%link','Bài trước: %title', TRUE);
									next_post_link( '%link','Bài sau: %title', TRUE ); 
									?>
								</p>
							</footer>
						</article>
					</main>
					<div class="post-comment container">
						<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0&appId=278927666417419&autoLogAppEvents=1"></script>
						<div class="fb-comments" data-href="<?php echo get_the_permalink(); ?>" data-width="100%" data-numposts="5" data-colorscheme="dark"></div>
					</div>
				</div>
				
			</div>
			<aside class="col-3 sidebar">
				<div class="col_wrapper">
					<?php get_sidebar();?>
				</div>
				
			</aside>
		</div>	
	</div>
	
</div>