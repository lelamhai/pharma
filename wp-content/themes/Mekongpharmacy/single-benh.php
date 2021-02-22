<?php
get_header();

// CSS: content_single.css - content_none.css
if (have_posts()) {

	the_post();
	
	get_template_part( 'content', 'single-benh' );

} else {

	get_template_part( 'content', 'none' );

}

get_footer(); 

?>