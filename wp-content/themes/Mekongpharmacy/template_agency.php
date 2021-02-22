<?php
/**
 * Template name: Agency
 */
?>
<?php get_header(); ?>
<div id="page_agency">
	<div class="breadcrumd">
		<div class="container">	
			<?php namlbn_breadcrumbs();?>

		</div>

	</div>
	<div class="container">
		<h1 class="page_title"><?php the_title();?></h1>
		
		<div class="row">
			<div class="col-3">
				<div class="col_wrapper">
					<div class="hc_agency">
						<div class="tinh">
							<select name="tinh_thanh" id="tinh_thanh" class="hc_filter">
								<option value="none">Chọn tỉnh / thành phố</option>
								<?php
								$terms = get_terms( 'agency_pos', array(
									'hide_empty' => false,
									'parent'=>0
								) );
								foreach ($terms as $key => $value) {
									$cat_id = $value->term_id;
									$cat_name = $value->name;
									?>
									<option value="<?php echo $cat_id;?>" data-parent="parent_<?php echo $cat_id;?>"><?php echo $cat_name;?></option>
									<?php
								}
								?>
							</select>
						</div>
						<div class="huyen">
							<select name="quan_huyen" id="quan_huyen" class="hc_filter">
								<option value="">Chọn quận / huyện</option>
								
							</select>


						</div>
						
					</div>
					
					
				</div>
			</div>
			<div class="col-9">
				<div class="col_wrapper">
					<p>	<?php the_field('title_agency','option');?></p>
					<ul class="list_agency">
						<?php while (have_rows('agency_rp','option')) {
							the_row();
							$agency = get_sub_field('agency');
							?>
							<li>
								<h2><a href="<?php echo get_the_permalink($agency);?>">
									<?php echo get_the_title($agency);?>
								</a></h2>
								<p><?php echo get_field('dia_chi',$agency);?></p>
							</li>
							<?php 
						}
						?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
</div>

<?php get_footer(); ?>