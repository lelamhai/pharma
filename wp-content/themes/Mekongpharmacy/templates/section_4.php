<div id="section_4" class="page_section">
	<?php $img_sc_4 = get_field('img_sc_4','option');?>
	<a class="banner_sc_4" href="<?php the_field('link_sc_4','option');?>">
		<span class="run_1 absolute"></span>
		<span class="run_2 absolute"></span>
		<span class="run_3 absolute"></span>
		<span class="run_4 absolute"></span>
		<div class="padding_ratio relative">
			<?php 
			echo wp_get_attachment_image( $attachment_id = $img_sc_4, $size = 'banner', $icon = false, $attr = array('class' => 'full_relative is_mask') );
			?>
		</div>
		
	</a>
</div>