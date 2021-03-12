</div> <!-- site-wrapper - file header -->
<footer id="site-footer">
	<div class="main_footer">
		<div class="container">
			<div class="row">
				<div class="col-4">
					<p class="footer_title"><?php the_field('ten_cty','option');?></p>
					<?php 
					$main_addr = get_field('main_addr','option');
					$add = $main_addr['addr'];
					?>
					<div class="contact_info">
						<p><i class="fas fa-map-marker-alt"></i><?php echo $add;?></p>
						<p><i class="far fa-envelope"></i><?php the_field('main_email','option');?></p>
						
					</div>
					<?php 
					$main_addr = get_field('main_addr','option');
					$map = $main_addr['map'];
					echo $map;
					?>
					
				</div>
				<div class="col-2">
					<div class="col_wrapper">
						<p class="footer_title"><?php the_field('title_footer_1','option');?></p>
						<nav class="menu_footer">
							<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-1' ) ); ?>
						</nav>
					</div>
					
				</div>
				<div class="col-2">
					<div class="col_wrapper">
						<p class="footer_title"><?php the_field('title_footer_2','option');?></p>
						<nav class="menu_footer">
							<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-2' ) ); ?>
						</nav>
					</div>
					
				</div>
				<div class="col-4">
					<div class="col_wrapper">
						<p class="footer_title"><?php the_field('title_footer_3','option');?></p>
						<div class="contact_info">
							<p><i class="fas fa-phone-alt"></i>Hotline : <?php the_field('sdt_chinh','option');?> ( miễn phí )</p>	
						</div>
						
						<ul class="social_icon">
							<?php

							if (get_field('link_facebook','option') !='') {
								?>
								<li><a href="<?php the_field('link_facebook','option'); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
								<?php
							}
							if (get_field('youtube','option') !='') {
								?>
								<li><a href="<?php the_field('youtube','option'); ?>" target="_blank"><i class="fab fa-youtube"></i></a></li>
								<?php
							}
							if (get_field('twitter','option') !='') {
								?>
								<li><a href="<?php the_field('twitter','option'); ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
								<?php
							}
							if (get_field('instagram','option') !='') {
								?>
								<li><a href="<?php the_field('instagram','option'); ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
								<?php
							} 
							?>
						</ul>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<div class="copy_right">
		<div class="container">
			<div class="row">
				<div class="col-6">
					<p>© 2020 MeKong Pharmacy </p>
				</div>
				<div class="col-6">
					<ul class="footer_social">
						<li> <a href="<?php the_field('link_facebook','option')?>"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="<?php the_field('instagram','option')?>"><i class="fab fa-instagram"></i></a></li> 
						<li><a href="<?php the_field('youtube','option')?>"><i class="fab fa-youtube"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		
		

	</div>
	<a class="back-top" href="#"><i class="fas fa-chevron-up"></i></a>
	
	<div class="icon">
		<div class="mainop">
			<i class="fas fa-plus"></i>
		</div>
		
		<a id="call" class="minifab op3" href="tel:<?php the_field('sdt_chinh','option');?>">
			<i class="fas fa-phone-alt"></i>
		</a>
		<a id="mess" class="minifab op2" href="https://m.me/<?php the_field('messenger','option');?>">
			<i class="fab fa-facebook-messenger"></i>
		</a>
		<a id="sms" class="minifab op1" href="sms:<?php the_field('sdt_chinh','option');?>">
			<i class="fas fa-sms"></i>
		</a>
	</div>
	<div class="fixed_footer">
		<div class="container">
			<ul>
				<li>
					<a href="<?php echo get_home_url(); ?>">
						<i class="fas fa-home"></i>
						Home
					</a>
				</li>
				<li>
					<a href="tel:<?php the_field('sdt_chinh','option')?>">
						<i class="fas fa-phone-volume"></i>
						Phone
					</a>
				</li>
				<li>
					<a href="mailto:<?php the_field('main_email','option')?>">
						<i class="far fa-envelope"></i>
						E-Mail
					</a>
				</li>
			</ul>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
<!-- <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script> -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_bloginfo("template_directory"); ?>/assets/js/quick-order/quick-order.js"></script>
<script>
var currentdate = new Date();
$( ".buttonMinus").click(function() {
    var productId = $(this).data("product");
	var idUser = $('#userId').val();
	var productPrice = $('#price-'+productId).val();
	var countBegin = 0;
    var count = parseInt($('#value-'+productId).val());
	countBegin = count;
    if(count > 0)
    {
        count = count - 1;
        $('#value-'+productId).val(count);
    }
	var data = {
			'action': 'load_posts_by_ajax',
			'userId': idUser,
			'productId': productId,
			'productCount': count,
			'productPrice': productPrice,
			'productDate': currentdate,
			'security': '<?php echo wp_create_nonce("load_more_posts_policy"); ?>'
	};

	$.post("<?php echo admin_url( 'admin-ajax.php' ); ?>", data, function(response) {
		
	});

	
	$totalCount = $("#totalCountQuickOrder").text().trim();
	$totalCount = parseInt($totalCount) + (count - countBegin);
	$("#totalCountQuickOrder").text($totalCount);

	
	$totalPrice = $("#totalPriceQuickOrder").text().trim();
	$totalPrice = $totalPrice.replaceAll('.','');

	$totalPrice = parseInt($totalPrice);

	$distanceCount = count - countBegin;
	$itemPrice = productPrice * $distanceCount;

	$totalPrice += $itemPrice;

	
	$totalPrice = $totalPrice.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");
	$("#totalPriceQuickOrder").text($totalPrice);
});

$( ".buttonAdd").click(function() {
	var productId = $(this).data("product");
	var idUser = $('#userId').val();
	var productPrice = $('#price-'+productId).val();

	console.log("========productPrice: " + productPrice);

	var countBegin = 0;
    var count = parseInt($('#value-'+productId).val());
	
	countBegin = count;

	console.log("========countBegin: " + countBegin);

    count = count + 1;
	$('#value-'+productId).val(count);
	var data = {
			'action': 'load_posts_by_ajax',
			'userId': idUser,
			'productId': productId,
			'productCount': count,
			'productPrice': productPrice,
			'productDate': currentdate,
			'security': '<?php echo wp_create_nonce("load_more_posts_policy"); ?>'
	};


	$.post("<?php echo admin_url( 'admin-ajax.php' ); ?>", data, function(response) {

	});

	
	$totalCount = $("#totalCountQuickOrder").text().trim();
	$totalCount = parseInt($totalCount) + (count - countBegin);
	$("#totalCountQuickOrder").text($totalCount);

	
	$totalPrice = $("#totalPriceQuickOrder").text().trim();
	$totalPrice = $totalPrice.replaceAll('.','');

	$totalPrice = parseInt($totalPrice);

	$distanceCount = count - countBegin;
	$itemPrice = productPrice * $distanceCount;

	$totalPrice += $itemPrice;

	
	$totalPrice = $totalPrice.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");
	$("#totalPriceQuickOrder").text($totalPrice);
});
</script>

<script>
$( ".GH-remove").click(function() {
	var id = $(this).data("id");
	$('.dataId-'+id).css('display','none');
	var data = {
		'action': 'remove_by_ajax',
		'productId': id,
		'security': '<?php echo wp_create_nonce("remove_item_policy"); ?>'
	};

	$.post("<?php echo admin_url( 'admin-ajax.php' ); ?>", data, function(response) {
	});
});
</script>

<script>
	$flag = true;
	$favorite = 1;
$( ".favorite").click(function() {
	if($(this).children("i:first").hasClass("yellow-star"))
	{
		$(this).children("i:first").removeClass("yellow-star");
		$favorite = 0;
		console.log(0);
	} else {
		$(this).children("i:first").addClass("yellow-star");
		$favorite = 1;
		console.log(1);
	}

	var id = $(this).data("star");
	var data = {
		'action': 'favorite_by_ajax',
		'productId': id,
		'productFavorite': $favorite,
		'security': '<?php echo wp_create_nonce("favorite_item_policy"); ?>'
	};

	$.post("<?php echo admin_url( 'admin-ajax.php' ); ?>", data, function(response) {
	});
});
</script>

<script>
	$flag = true;
	$favorite = 1;
$( ".favorite").click(function() {
	if($(this).children("i:first").hasClass("yellow-star"))
	{
		console.log(0);
		$(this).children("i:first").removeClass("yellow-star");
		$favorite = 0;
	} else {
		$(this).children("i:first").addClass("yellow-star");
		$favorite = 1;
		console.log(1);
	}

	var id = $(this).data("star");
	var data = {
		'action': 'favorite_by_ajax',
		'productId': id,
		'productFavorite': $favorite,
		'security': '<?php echo wp_create_nonce("favorite_item_policy"); ?>'
	};

	$.post("<?php echo admin_url( 'admin-ajax.php' ); ?>", data, function(response) {
	});
});
</script>


<script>
$( "#btn-submit-log").click(function() {
	$userName = $("#email-s").val();
	$password = $("#password-s").val();
	var data = {
		'action': 'login_by_ajax',
		'userName': $userName,
		'password': $password,
		'security': '<?php echo wp_create_nonce("login_policy"); ?>'
	};

	$.post("<?php echo admin_url( 'admin-ajax.php' ); ?>", data, function(response) {
		var result = response.slice(0, -1);
		var obj = jQuery.parseJSON(result);

		if(obj.result == 1)
		{
			console.log(obj.result);
			location.reload();
		} else {
			console.log("Tai khoang chua dung");
		}
	});
});
</script>

<script>
$( ".shopping-cart").click(function() {
	$userId = $("#userId").val();
	if($userId == "")
	{
		$('#modalLogin').modal('show');
		return false;
	}
});
</script>


</body>
</html>