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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>
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
                  <input type="hidden" id="userId" value="<?php 
                    if(isset($_COOKIE["idUser"]))
                    {
                      echo $_COOKIE["idUser"];
                    }
                  ?>">
                  <?php
                  if(isset($_COOKIE["username"]) && isset($_COOKIE["password"]))
                    {
                      ?>
                          <div class="login-finish">
                            <img src="<?php echo get_bloginfo("template_directory"); ?>/assets/images/quick_order/icon_login.png" alt="">
                          </div>

                      <?php
                    } else {
                    ?>
                    <div class="button-signin">
                            <button
                            type="button" 
                            class="btn btn-primary" 
                            data-toggle="modal" 
                            data-target="#modalLogin"
                            data-backdrop="static"
                            >
                              Đăng nhập
                            </button>
                          </div>

                          <div class="button-registration">
                            <button
                              type="button" 
                              class="btn btn-primary" 
                              data-toggle="modal" 
                              data-target="#exampleModal"
                              data-backdrop="static"
                            >
                              Tạo tài khoản
                            </button>
                          </div>
                        </div>
                    <?php
                    }

                  ?>
                          
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


<!-- =========== Modal Login ========= -->
  <div
      class="modal fade"
      id="modalLogin"
      tabindex="-1"
      role="dialog"
      aria-labelledby="modalLoginLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <div class="title-form">
              <h4>Đăng Nhập Thành Viên</h4>
              <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close"
                id="close-popup"
                
              >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
          <div class="modal-body">
            <div class="form-acc">
              <!-- <form action="#" id="myform-s" method="POST"> -->
                <div class="item-form">
                  <i class="fas fa-envelope"></i>
                  <input name="username" id="email-s" placeholder="Nhập email" />
                </div>
                <div class="item-form">
                  <i class="fas fa-lock"></i>
                  <input
                    type="password"
                    name="password"
                    id="password-s"
                    placeholder="Nhập mật khẩu"
                  />
                  <i class="fas fa-eye pass-icon" id="show-pass-s"></i>
                  <i
                    class="fas fa-eye-slash pass-icon"
                    id="hide-pass-s"
                    style="display: none"
                  ></i>
                </div>

                <!-- <div class="item-form">
                  <label
                    for="check-remem"
                    id="container-check-bnt"
                    class="contain-check-bnt"
                  >
                    <input type="checkbox" id="check-remem" />
                    <span id="text-notify">Nhớ mật khẩu </span>
                    <a href="#" class="forgot-pass">Quên mật khẩu</a>
                  </label>
                </div> -->

                <div class="item-form">
                  <button id="btn-submit-log">Đăng Nhập</button>
                </div>
                <!-- <p class="go-log configure-log">
                  Để Nhận Ưu Đãi Hấp Dẫn,<a href="#"> Đăng Ký Thành Viên</a>.
                </p> -->
              <!-- </form> -->
            </div>
          </div>
        </div>
      </div>
    </div>


<!-- =========== Modal create account ========= -->

<!-- Modal -->
<div
      class="modal fade"
      id="exampleModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <div class="title-form">
              <h4>Tạo Tài Khoản</h4>
              <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close"
                id="close-popup-sign-up"
              >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
		  
		  
		  
          <div class="modal-body">
            <div class="form-acc">
              <!-- <form action="#" id="myform" method="POST"> -->
                <div class="item-form">
                  <p class="title-part">Thông tin tài khoản</p>
                </div>

                <div class="item-form">
                  <i class="fas fa-envelope"></i>
                  <input name="email" id="email" placeholder="Nhập email" />
                </div>
                <div class="item-form">
                  <i class="fas fa-lock"></i>
                  <input
                    type="password"
                    name="password"
                    id="password"
                    placeholder="Nhập mật khẩu"
                  />
                  <i class="fas fa-eye pass-icon" id="show-pass"></i>
                  <i
                    class="fas fa-eye-slash pass-icon"
                    id="hide-pass"
                    style="display: none"
                  ></i>
                </div>
                <div class="item-form">
                  <i class="fas fa-lock"></i>
                  <input
                    type="password"
                    name="re-password"
                    id="re-password"
                    placeholder="Xác nhận mật khẩu"
                  />
                </div>
                <div class="item-form">
                  <label for="" class="title-radio">
                    <span>Loại tài khoản</span>
                  </label>
                  <div class="container-bnt">
                    <label for="a" class="contain-radio-bnt">
                      <input type="radio" class="role" name="role" value="1" checked />
                      <span>Người Tiêu Dùng</span>
                    </label>
                    <label for="b" class="contain-radio-bnt">
                      <input type="radio" class="role" name="role" value="0" />
                      <span>Nhà Thuốc</span>
                    </label>
                  </div>
                </div>

                <div class="item-form">
                  <p class="title-part" style="padding-top: 30px">
                    Thông tin người dùng
                  </p>
                </div>
                <div class="item-form">
                  <i class="fas fa-user"></i>
                  <input
                    type="text"
                    name="name-user"
                    id="name-user"
                    placeholder="Nhập tên người dùng"
                  />
                </div>
                <div class="item-form">
                  <i class="fas fa-phone"></i>
                  <input
                    type="text"
                    name="phonenumber"
                    id="phonenumber"
                    placeholder="Nhập số điện thoại"
                  />
                </div>
                <div class="item-form">
                  <i class="fas fa-map-marker-alt special-i"></i>
                  <textarea
                    cols="30"
                    rows="5"
                    placeholder="Nhập địa chỉ"
                    name="address"
                    id="address"
                  ></textarea>
                </div>
<!-- 
                <div class="item-form">
                  <label
                    for="check-notify"
                    id="container-check-bnt"
                    class="contain-check-bnt"
                  >
                    <input
                      type="checkbox"
                      name="check-notify"
                      id="check-notify"
                    />
                    <span id="text-notify-sign-up"
                      >Tôi đã đọc và đồng ý với
                      <a href="#" target="_blank">Điều khoản sử dụng</a>
                    </span>
                  </label>
                </div> -->
                <!-- <p class="go-log configure-log">
                  Nếu Bạn Có Tài Khoản,Vui Lòng <a href="#">Đăng Nhập</a>.
                </p> -->
                <div class="item-form">
                  <button id="btn-submit-sign-up">Tạo Tài Khoản</button>
                </div>
              <!-- </form> -->
            </div>
          </div>
        </div>
      </div>
    </div>


	<div id="site-wrapper">