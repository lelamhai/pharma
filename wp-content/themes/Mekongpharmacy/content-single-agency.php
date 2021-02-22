<div id="content_single_agency" class="page_section">
	<div class="container">
		<p class="title">Hệ thống đối tác</p>
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

					<div class="result">

					</div>
				</div>
			</div>
			<div class="col-9">
				<div class="col_wrapper">
					<h1 class="page_title"><?php the_title();?></h1>
					<?php
					if (get_field('dia_chi') != '') {
						echo '<p class="address">';
						echo '<span>Địa chỉ:</span>';
						the_field('dia_chi');
						echo '</p>';
					}
					if (get_field('open_time') != '') {
						echo '<p class="time">';
						echo '<span>Giờ mở cửa:</span>';
						the_field('open_time');
						echo '</p>';
					}
					if (get_field('sdt') != '') {
						echo '<p class="phone">';
						echo '<span>Số điện thoại:</span>';
						the_field('sdt');
						echo '</p>';
					}
					if (get_field('map') != '') {
						echo '<div class="map">';

						the_field('map');
						echo '</div>';
					}
					if (have_rows('sp_kinh_doanh')) {
						echo '<div class="product_agency">';

						echo '<h2> Sản phẩm kinh doanh tại hệ thống</h2>';
						echo '<div class="row">';
						while (have_rows('sp_kinh_doanh')) {
							the_row();
							$img = get_sub_field('img');
							$name = get_sub_field('ten');
							$link_sp = get_sub_field('link_sp');
							?>
							<div class="col-3">
								<div class="col_wrapper">
									<a href="<?php echo $link_sp;?>" class="thumb padding_ratio relative">
										<?php 
										echo wp_get_attachment_image( $attachment_id = $img, $size = 'thumbnail', $icon = false, $attr = array('class' => 'full_relative absolute') );
										?>
									</a>
									<h4 class="name"><a href="<?php echo $link_sp;?>"><?php echo $name;?></a></h4>
								</div>
							</div>
							<?php
						}
						echo '</div>';
						echo '</div>';
					}
					?>

				</div>
			</div>
		</div>
		
	</div>
</div>