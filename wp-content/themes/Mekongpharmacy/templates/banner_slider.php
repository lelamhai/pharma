<div id="banner_slider_gtbh030620" class="relative">
	<?php 
	if (!wp_is_mobile()) {
		?>
		<div class="banner banner_desk">
			<?php

			while (have_rows('banner_slider','option')) {
				the_row();
				$img = get_sub_field('img');
				?>
				<div class="slider_item">
					<div class="wrapper">
						<div class="img relative padding_ratio">
							<?php 
							echo wp_get_attachment_image( $attachment_id = $img, $size = 'banner', $icon = false, $attr = array('class' => 'full_relative is_mask') );
							?>
						</div>	
					</div>	
				</div>	

				<?php
			}
			?>

		</div>
		<?php
	}
	else{
		?>
		<div class="banner banner_mobile">
			<?php

			while (have_rows('banner_slider_mobile','option')) {
				the_row();
				$img = get_sub_field('img');
				?>
				<div class="slider_item">
					<div class="wrapper">
						<div class="img relative padding_ratio">
							<?php 
							echo wp_get_attachment_image( $attachment_id = $img, $size = '_half_container', $icon = false, $attr = array('class' => 'full_relative is_mask') );
							?>
						</div>	
					</div>	
				</div>	

				<?php
			}
			?>

		</div>
		<?php
	}
	
	?>
	
</div>