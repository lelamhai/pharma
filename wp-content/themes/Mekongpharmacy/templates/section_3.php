<section id="section_3" class="page_section">
	<div class="container">
		<h2 class="section_title "><?php echo get_field('title_sc_3','option');?></h2>
		<?php 
		$arr = array();
		while (have_rows('san_pham_sc_3','option')) {
			the_row();
			$id =get_sub_field('product');
			$arr[] = $id;
		}
		$arr_id = implode(",",$arr);
	echo do_shortcode("[products ids='$arr_id']");
?>
	</div>
</section>