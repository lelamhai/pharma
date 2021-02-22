<div id="content_single_benh">
	<main class="container">
		<article>
			<header id="single-header" class="article-header">
				<h1 class="page-title"><?php the_title(); ?></h1>

			</header>
			<section class="article-content">
				<?php the_content(); ?>
			</section>
			<footer id="single-footer" class="article-footer">
				<div class="single-footer-info">
					<?php the_field('single_info','option'); ?>
				</div>
				
				
			</footer>
		</article>
	</main>
</div>