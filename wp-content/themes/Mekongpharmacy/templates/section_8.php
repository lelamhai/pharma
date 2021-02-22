<div id="section_8" class="page_section">
	<div class="container">
		<?php 
		if (have_rows('box_sc_8','option')) {
			echo '<div class="row">';
			while (have_rows('box_sc_8','option')) {
				the_row();
				$icon = get_sub_field('icon');
				$cnt = get_sub_field('cnt');
				?>
				<div class="col-3">
					<div class="col_wrapper">
						<div class="img relative padding_ratio">
							<?php 
							echo wp_get_attachment_image( $attachment_id = $icon, $size = 'thumbnail', $icon = false, $attr = array('class' => 'full_relative is_mask') );
							?>
						</div>
						<div class="content align_center white_txt"><?php echo $cnt;?></div>
					</div>
				</div>
				<?php
			}
			
			echo '</div>';
		}
		?>
	</div>
</div>