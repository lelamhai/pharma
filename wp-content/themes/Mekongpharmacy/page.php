<?php get_header();
// CSS: category.css


?>
<div class="breadcrumd">
	<div class="container">	
		<?php namlbn_breadcrumbs();?>

	</div>

</div>
<?php
if (have_posts()) {
	the_post();
	get_template_part( 'content', 'page' );
} else {
	get_template_part( 'content', 'none' );
}
get_footer(); 
?>