<?php
/**
 * Template name: Đặt Hàng Nhanh
 */
?>
<?php get_header(); ?>
<button onclick="myFunction()">click</button>

<script>
    function myFunction() {
        
		var data = {
		'action': 'load_posts_by_ajax',
		'username': 'lelamhai',
        'password': '123456',
		'email' : 'haile@aaa.vom',
        'phone': '123456',
		'security': '<?php echo wp_create_nonce("load_more_posts_policy"); ?>'
		};

		$.post("<?php echo admin_url( 'admin-ajax.php' ); ?>", data, function(response) {
            console.log('finish');
            // page++;
            // var $res = JSON.parse(response);
            // $('#row-more').append($res.datas);
            // if($res.status==2){
            //     $(".wrap-more").css("display", "none");
            // }
		});
    }
</script>
<?php get_footer(); ?>