<section id="section_5" class="page_section">
	<div class="title">
		<div class="container">
			<div class="row flex_center">
				<div class="col-3">	
					<h2 class="section_title "><?php echo get_field('title_sc_5','option');?></h2>
				</div>
				<div class="col-9">
					<ul class="tab_nav">
						<?php 
						$i = 0;
						while(have_rows('tab_sp','option')){
							the_row();
							$i ++;
							$ten_tab = get_sub_field('ten_tab');
							?>
							<li class="tab <?php if($i == 1){echo 'tab_active';}?>" data-target="content_<?php echo $i;?>"><?php echo $ten_tab;?></li>
							<?php

						}?>
					</ul>

				</div>
			</div>
		</div>
	</div>

	<div class="tab_content relative">
		<div class="container">
			<?php 
			$i = 0;
			while(have_rows('tab_sp','option')){
				the_row();
				$i ++;
				$product_cat = get_sub_field('product_cat');
				?>
				<div class="content_tab <?php if($i == 1){echo 'content_active';}?> content_<?php echo $i;?>">
					<?php 
					$slug = $product_cat->slug;
					echo do_shortcode("[products limit='10' columns='5' category='$slug']");
					?>	
				</div>
				<?php

			}?>
		</div>

	</div>
</div>
</div>

</section>