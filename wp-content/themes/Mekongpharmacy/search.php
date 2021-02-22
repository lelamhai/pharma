<?php get_header(); ?>

<?php
$cat = get_queried_object();
?>
<div class="top-page page-title container">    
	<?php namlbn_breadcrumbs();  ?>    
</div>
<div id="primary" class="content-area">
	<main id="main" role="main">
		<section  class="">
			<div class="container">



				<section id="search-section">
					<?php 
					$post_type = $_GET['post-type'];


					if($post_type == 'all') {

						$search_query = new wp_query(array(
							'post_type' => array('product','post','thuoc','benh'),
							's' => $s,
							'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
						) );
					} else {
						$search_query = new wp_query(array(
							'post_type' => $post_type ,
							's' => $s,
							'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
						) );
					}




					if ( $search_query->have_posts() ) :
						?>
						<header>
							<h1 class="section-title">
								<?php
								/* translators: %s: search term */
								$search_count = $search_query->found_posts;
								printf( esc_attr__( 'kết quả tìm kiếm cho: %s', 'namlbn' ), '<span>' . get_search_query() . '</span>' );
								echo "<br/>tìm thấy $search_count kết quả";
								?>
							</h1>
						</header><!-- .page-header -->
						<div class="row">	
							<?php
							while ($search_query->have_posts()) {
								$search_query->the_post();

								get_template_part('content','search');
							}

							?>
						</div>

						<div class="navigation">
							<?php
							$args = array(
								'prev_text'          => '<i class="fas fa-arrow-left"></i>',
								'next_text'          => '<i class="fas fa-arrow-right"></i>',
							);
							echo paginate_links( $args );
							?>
						</div>
						<?php 
						else : ?>
							<p class="not-found">
								<span>---không tìm thấy kết quả---</span>
							</p>

						<?php	endif; ?>
					</section>
					<!-- search product -->


					<!-- close search post -->




				</div>


			</div>                

		</section>
	</main>
</div>

<?php get_footer(); ?>

