
<div class=" col-3">
	<div class="col_wrapper">
		<h2 class="post-title">
			<a  href="<?php the_permalink() ?>"><?php if(get_post_type(get_the_ID())== 'product'){
				echo 'SẢN PHẨM';
			} ?><?php the_title(); ?></a>
		</h2>
	</div>

</div>
