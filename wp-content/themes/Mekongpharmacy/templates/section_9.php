<section id="section_9">
	<div class="container">
		<div class="row flex_center">
			<h2 class="white_txt col-9"><i class="fas fa-map-marker-alt"></i><?php the_field('title_sc_9','option');?></h2>
			<p class="col-3">
				<?php $link_arr = get_field('link_nut_sc_9','option');
				$url = $link_arr['url'];
				$target = $link_arr['target'];
				?>
				<a href="<?php echo $url;?>" target=<?php echo $target;?>>Xem hệ thống cửa hàng</a>
			</p>
		</div>
	</div>
</section>