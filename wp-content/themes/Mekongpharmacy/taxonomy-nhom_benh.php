<?php
get_header();
// CSS: content_archive.css - content_none.css

namlbn_breadcrumbs();
if (have_posts()) {
	get_template_part( 'content', 'archive-benh' );
} else {
	get_template_part( 'content', 'none' );
}
get_footer(); 
?>