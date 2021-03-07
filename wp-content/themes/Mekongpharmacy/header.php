<!DOCTYPE html>
<!--[if IE 8]> <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if !IE]> <html <?php language_attributes(); ?>> <![endif]-->
<html lang="vi">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta property="fb:app_id" content="278927666417419" />
	<meta name="viewport" content="width=device-width, maximum-scale=1, minimum-scale=1.0 ">
	<link rel="profile" href="http://gmgp.org/xfn/11" />
	
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php
	if(is_singular() && get_field('keywords',get_the_ID()) !=''){
		$keywords = get_field('keywords',get_the_ID());
		echo '<meta name="keywords" content="'.$keywords.'">';
	} elseif( !is_singular() && !is_front_page() && !is_home() && get_field('keywords','option') != '' && !is_tax() && !is_category()){
		$keywords = get_field('keywords','option');
		echo '<meta name="keywords" content="'.$keywords.'">';
	} elseif (is_singular() && get_field('keywords',get_the_ID()) =='') {
		$keywords = get_field('keywords','option');
		echo '<meta name="keywords" content="'.$keywords.'">';
	} elseif (is_front_page() && is_home()) {
		$keywords = get_field('keywords','option');
		echo '<meta name="keywords" content="'.$keywords.'">';
	} elseif (is_tax()){
		$id = get_queried_object()->term_id;
		$tax = get_queried_object()->taxonomy;
		$check = $tax."_".$id;
		if (get_field('keywords',"$check") != '') {
			$keywords = get_field('keywords',"$check");
		} else {
			$keywords = get_field('keywords','option');
		}
		echo '<meta name="keywords" content="'.$keywords.'">';
	} elseif (is_category()){
		$id = get_queried_object()->term_id;
		$tax = get_queried_object()->taxonomy;
		$check = $tax."_".$id;
		if (get_field('keywords',"$check") != '') {
			$keywords = get_field('keywords',"$check");
		} else {
			$keywords = get_field('keywords','option');
		}
		echo '<meta name="keywords" content="'.$keywords.'">';
	}
	?>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header id="site-header">
		<?php 
		if (!wp_is_mobile()) {
			?>
			<div id="dsk-header">
				<div class="header_top">
					<div class="container">
						<div class="row flex_center">
							<div class="col-3">
								<div class="logo">	
									<?php namlbn_get_logo()?>
								</div>
								
							</div>
							<div class="col-5">
								<div class="wrap-search">
									<div class="dm-all relative">
										<select name="dmall" id="cars" class="all" >
											<option value="all">Tất cả</option>
											<option value="post">Bài viết</option>
											<option value="product">Sản phẩm</option>
											<option value="thuoc">Thuốc</option>
										</select>
										<div style="display: none;" class="gtcheck" ></div>
									</div>
									<?php get_search_form() ?>
								</div>
							</div>
							<div class="col-4">
								<div class="wrap-button">
									<div class="button-signin">
										<button>Đăng nhập</button>
									</div>

									<div class="button-registration">
										<button>Tạo tài khoản</button>
									</div>
								</div>
								
								<!-- <div class="contact">
									<a href="tel:<?php the_field('sdt_chinh','option');?>"><i class="fas fa-phone-alt"></i>Hotline (miễn phí): <?php the_field('sdt_chinh','option');?></a>
								</div> -->
							</div>
						</div>
					</div>
				</div>
				<div class="header_main">
					<div class="container">
						<nav class="dsk-menu"><?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?></nav>
						
					</div>
				</div>
				<div class="fix_header">
					<div class="container">	
						<div class="row flex_center">
							<div class="col-2">
								<div class="logo">	
									<?php namlbn_get_logo()?>
								</div>
							</div>
							<div class="col-10">
								<nav class="dsk-menu"><?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?></nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		}
		else{
			?>
			<div id="mobile-header">
				<div class="header_top">
					<div class="container">
						<div class="row flex_center">
							<div class="col-3">
								<a href="#" id="open_menu"><i class="fas fa-align-justify"></i></a>
							</div>
							<div class="col-6">
								<div class="logo">	
									<?php namlbn_get_logo()?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="header_bottom">
					<div class="container">
						<?php get_search_form() ?>
					</div>
				</div>
				<div class="menu_fix">
					<div class="wrapper relative">
						<a href="#" id="close_menu"><i class="fas fa-times"></i></a>
					<div class="logo">	
						<?php namlbn_get_logo()?>
					</div>
					<nav class="menu_mobile"><?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?></nav>
					</div>
					
				</div>
			</div>
			<?php
		}
		?>


	</header>
	<div id="site-wrapper">