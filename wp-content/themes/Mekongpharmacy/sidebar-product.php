<ul class="widget">
	<li class="widget_item">
		<div class="chinh_sach_widget">
			<?php
			if (have_rows('chinh_sach','option')) {
				echo '<ul>';
				while (have_rows('chinh_sach','option')) {
					the_row();
					$img = get_sub_field('img');
					$title = get_sub_field('title');
					$content = get_sub_field('content');
					?>
					<li>
						<div class="wrapper">
							<div class="img">
								<div class="wrapper_img">
									<?php 
									echo wp_get_attachment_image( $attachment_id = $img, $size = 'thumbnail', $icon = false, $attr = array('class' => '') );
									?>
								</div>
								
							</div>	
							<div class="content">
								<p><?php echo $title;?></p>
								<p><?php echo $content;?></p>
							</div>
						</div>
					</li>
					<?php 
				}
				echo '</ul>';
				# code...
			}
			?>
		</div>
	</li>
	<li class="widget_item">
		<div class="support_widget">
			<?php
			if (have_rows('support_cnt','option')) {
				?>
				<div class="widget_support">
					<h3 class="widgettitle"><?php the_field('support_title','option') ?></h3>
					<ul>
						<?php
						while (have_rows('support_cnt','option')) {
							the_row();
							$title = get_sub_field('title');
							$icon = get_sub_field('icon');
							$phone = get_sub_field('phone');
							?>
							<li>
								<div class="wrapper">
									<div class="img">
										<div class="wrapper_img">
											<?php 
											echo wp_get_attachment_image( $attachment_id = $icon, $size = 'thumbnail', $icon = false, $attr = array('class' => '') );
											?>
										</div>

									</div>	
									<div class="content">
										<p><b><?php echo $title; ?></b></p>
										<p class="name_phone">
											<a href="tel:<?php echo $phone;?>"><?php echo $phone;?></a>
										</p>
									</div>
								</div>
								
							</li>
							<?php
						}
						?>
					</ul>
				</div>
				<?php
			}
			?>
		</div>
	</li>
</ul>