<?php
get_header();

// CSS: content_single.css - content_none.css




?>
<div class="breadcrumd">
	<div class="container">	
		<?php namlbn_breadcrumbs();?>

	</div>

</div>
<?php
if (have_posts()) {

	the_post();
	
	
	get_template_part( 'content', 'single' );

} else {

	get_template_part( 'content', 'none' );

}

get_footer(); 

?>