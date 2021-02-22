<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Tìm sản phẩm, thuốc..." />
	<input type="hidden" name="post-type" id= "post-type" value="">  
	<button type="submit" class="btn" id="searchsubmit" value="submit"><i class="fas fa-search"></i></button>

</form>
