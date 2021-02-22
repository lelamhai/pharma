<div id="content_single_thuoc">
	<div class="breadcrumd">
		<div class="container">	
			<?php namlbn_breadcrumbs();?>

		</div>

	</div>
	<div class="container">
		
		<div class="row">
			<div class="col-9">
				<div class="col_wrapper">
					<h1 class="page_title"><?php the_title();?></h1>
					<div class="info_thuoc">
						<div class="row">	
							<div class="col-4">
								<div class="thumb padding_ratio">
									<?php
									if (has_post_thumbnail()) {
										the_post_thumbnail( $size = 'medium_large', $attr = array('class' => 'full_relative absolute') );
									} else {
										echo '<img src="'.get_template_directory_uri().'/assets/images/default-thumbnail-768.jpg" class="full_relative absolute" alt="post thumbnail">';
									}
									?>
								</div>
							</div>
							<div class="col-8">

								<?php
								if (get_field('thuong_hieu') != '') {
									echo '<p class="thuong_hieu">';
									echo '<span>Thương hiệu thuốc:</span>';
									the_field('thuong_hieu');
									echo '</p>';
								}
								if (get_field('xuat_xu') != '') {
									echo '<p class="xuat_xu">';
									echo '<span>Xuất xứ:</span>';
									the_field('xuat_xu');
									echo '</p>';
								}
								if (get_field('quy_cach') != '') {
									echo '<p class="quy_cach">';
									echo '<span>Quy cách:</span>';
									the_field('quy_cach');
									echo '</p>';
								}
								if (get_field('ma_thuoc') != '') {
									echo '<p class="ma_thuoc">';
									echo '<span>Mã thuốc:</span>';
									the_field('ma_thuoc');
									echo '</p>';
								}
								
								?>
								<div class="form_btn">
									<a href="https://m.me/<?php the_field('messenger','option');?>" class="chat">Chat với tư vấn viên</a>
									<a href="https://mekongpharmacy.com/he-thong-doi-tac/">Tìm nơi mua</a>
								</div>
								<p class="dat_mua">
									<?php if (get_field('sdt_chinh','option') != '') {
										?>
										Gọi đặt mua : <a href="tel:<?php the_field('sdt_chinh','option');?>"><i class="fas fa-phone-alt"></i> <?php the_field('sdt_chinh','option');?></a>
										<?php
									}
									?>
								</p>
							</div>
						</div>	
					</div>
					<div class="content_thuoc">
						<?php the_content();?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>