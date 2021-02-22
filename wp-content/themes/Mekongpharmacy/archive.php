<?php
get_header();
// CSS: content_archive.css - content_none.css

?>
<div class="breadcrumd">
	<div class="container">	
		<?php namlbn_breadcrumbs();?>

	</div>

</div>
<?php
if (have_posts()) {
	get_template_part( 'content', 'archive' );
} else {
	get_template_part( 'content', 'none' );
}
get_footer(); 
?>