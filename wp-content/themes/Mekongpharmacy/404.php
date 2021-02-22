

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title() ?></title>
</head>
<body >
	
	<div class="main-page-404">
		<div id="mainlblock"><center>
			<h1>404</h1>
			<h2>Xin lỗi!</h2>
			<p>Đường link bạn đang tìm kiếm hiện không có. <a href="javascript:history.go(-1)" title="Quay lại">Quay lại</a>,<br>
				hoặc về <a href="./">trang chủ</a> và chọn đường link mới.</p>
			</center></div>
		</div>
	</body>
	</html>



	<style>
	#mainlblock {
		width: 600px;
		height: auto;
		background: #FFF;
		border-radius: 10px;
		-webkit-border-radius: 10px;
		-moz-border-radius: 10px;
		box-shadow: 0px 0px 5px rgba(0,0,0,0.3);
		position: absolute;
		top: 50%;
		left: 50%;
		margin: -150px 0 0 -300px;
		-webkit-animation: shake .5s;
		-moz-animation: shake .5s;
		-o-animation: shake .5s;
		animation: shake .5s;
	}
	h1, h2 {
		font-size: 100px;
		margin: 0;
		color: #C00;
		text-shadow: 1px 1px 0px #f2f2f2, 1px 2px 0px #b1b1b2;
	}
	h2 {
		margin: 0;
		font-size: 35px;
		padding-bottom: 20px;
		color: #323232;
	}
	body {
		margin: 0px;
		padding: 0px;
		font-size: 20px;
		color: #323232;
		font-family: Arial, Helvetica, sans-serif;
		background: #FFF url(<?php bloginfo( 'template_directory' ) ?>/images/bg-404.jpg);
	}
</style>




