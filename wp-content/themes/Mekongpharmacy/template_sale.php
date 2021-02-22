<?php
/**
 * Template name: Slae
 */
?>
<?php get_header(); ?>

<div id="page_sale">
	<div class="breadcrumd">
	<div class="container">	
		<?php namlbn_breadcrumbs();?>

	</div>

</div>
	<div class="container">
		<h1 class="page_title"><?php the_title(); ?></h1>
		
		 <div class="archive-list-product">	
		 		<?php echo do_shortcode("[sale_products limit='-1' columns='4' paginate='true']");?>
		 </div>
	
	</div>
</div>
<?php get_footer(); ?>