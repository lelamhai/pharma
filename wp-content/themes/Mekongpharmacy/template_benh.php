<?php
/**
 * Template name: Bệnh
 */
?>
<?php get_header(); ?>
<div id="page_benh" class="page_section">
	<div class="breadcrumd">
	<div class="container">	
		<?php namlbn_breadcrumbs();?>

	</div>

</div>
	<div class="container">
		
		<h1 class="page_title"><?php the_title();?></h1>

	</div>
	<section class="section_1_benh page_section">
		<div class="container">	
			<h2 class="section_title white_txt">
				<a class="close_benh"></a><?php the_field('title_sc_1_benh','option');?>
			</h2>
			<div class="row">
				<div class="col-4 col_benh">
					<div class="row">
						<div class="col-8 hinh_benh">
							<div class="img padding_ratio">	
								<?php 
								$img_left = get_field('img_left_benh','option');

								echo wp_get_attachment_image( $attachment_id = $img_left, $size = 'haft_conteiner', $icon = false, $attr = array('class' => 'full_relative is_mask') );

								?>
							</div>
						</div>
						<div class="col-4">
							<ul class="hc_tab">	
								<?php 
								$i = 0;
								while (have_rows('tab_benh_sc_1','option')) {
									the_row();
									$i ++;
									$name = get_sub_field('tieu_de');
									?>
									<li class="tab <?php if($i == 1){echo 'tab_active';}?>" data-target="content_<?php echo $i;?>"><?php echo $name;?></li>
									<?php
								}
								?>
							</ul>
						</div>
					</div>
					
					
				</div>
				<div class="col-8 col_tab">
					<div class="col_wrapper">
						
						<div class="hc_tab_content">
							<div class="wrapper">	
								<?php 
								$i = 0;
								while (have_rows('tab_benh_sc_1','option')) {
									the_row();
									$i ++;
									$cat = get_sub_field('chọn_nhom_benh');
									?>
									<div class="content content_<?php echo $i;?> <?php if($i == 1){echo 'content_active';}?>">
										

										<?php
										$args = array(
											'post_type' => 'benh',
											'post_status' => 'publish',
											'posts_per_page' => 20,
											'tax_query' => array( 
												array(
													'taxonomy' => 'nhom_benh',
													'field' => 'id',
													'terms' => $cat,

												)

											),
										);
										$the_query = new WP_Query($args);
										while ($the_query->have_posts()) {
											$the_query->the_post();
											?>
											<p><a href="<?php the_permalink();?>"><?php the_title();?></a></p>
											<?php
										}
										?>

									</div>
									<?php
								}
								?>
								
							</div>
							
						</div>
					</div>
					
					

				</div>	
			</div>
		</div>
	</section>
	<section id="section_2_benh" class="page_section">
		<div class="container">
			<h2 class="section_title">
				<?php the_field('title_sc_2_benh','option');?>
			</h2>
			<?php if (have_rows('benh_thuong_gap','option')) {
				echo '<div class="row">';
				while (have_rows('benh_thuong_gap','option')) {
					the_row();
					$img = get_sub_field('hinh_anh');
					$benh = get_sub_field('chon_nhom_benh');
					$cat_id = $benh->term_id;
					$name = $benh->name;
					?>
					<div class="col-3">
						<div class="col_wrapper">
							<div class="img padding_ratio">	
								<?php 
								echo wp_get_attachment_image( $attachment_id = $img, $size = 'haft_conteiner', $icon = false, $attr = array('class' => 'full_relative is_mask') );

								?>
							</div>
							<h3 class="cat_name"><a href="<?php echo get_term_link($cat_id);?>"><?php echo $name;?></a></h3>
							<?php
							$args = array(
								'post_type' => 'benh',
								'post_status' => 'publish',
								'posts_per_page' => 5,
								'tax_query' => array( 
									array(
										'taxonomy' => 'nhom_benh',
										'field' => 'id',
										'terms' => $cat_id,

									)

								),
							);
							$the_query = new WP_Query($args);
							while ($the_query->have_posts()) {
								$the_query->the_post();
								?>
								<p><a href="<?php the_permalink();?>"><?php the_title();?></a></p>
								<?php
							}
							?>


						</div>
					</div>
					<?php 
				}
				echo '</div>';
			}
			?>
		</div>
	</section>
</div>

<?php get_footer(); ?>