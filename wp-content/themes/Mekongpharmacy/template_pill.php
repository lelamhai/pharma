<?php
/**
 * Template name: Thuốc
 */
?>
<?php get_header(); ?>
<div id="page_pill">
	<div class="breadcrumd">
	<div class="container">	
		<?php namlbn_breadcrumbs();?>

	</div>

</div>
	<div class="container">	
		<h1 class="page_title"><?php the_title();?></h1>
		 

	</div>
	<div class="search_box">
		<div class="container">	
			<h2>Tra cứu thuốc</h2>
			<div class="form">
				<form role="search" method="get" id="searchformpill" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Nhập tên thuốc..." />
					<input type="hidden" name="post-type" id= "post-type" value="thuoc">  
					<button type="submit" class="btn" id="searchsubmit" value="submit"><i class="fas fa-search"></i></button>

				</form>
			</div>
			
			<?php
			$number = array('A', 'B', 'C', 'D', 'E', 'F','G','H','I','J','K','L','M','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');?>
			<h2>Tra cứu thuốc theo bảng chữ cái</h2>
			<ul class="search_alpha">
				<?php 
				$i = 0;
				foreach ($number as $key => $value) {
					$i++;
					?>
					<li class="item scroll-to" data-target ="<?php echo $value;?>"><?php echo $value;?></li>
					<?php
				}
				?>
			</ul>
		</div>
	</div>
	<?php	foreach ($number as $key => $value) {
		?>
		<div class="list_alpha">
			<div class="container">

				<div class="content <?php echo $value;?>">
					<?php

					echo '<h2>';echo $value;echo '</h2>';
					$args = array(
						'post_type' => 'thuoc',
						'post_status' => 'publish',
						'posts_per_page'=>-1,

					);
					$the_query = new WP_Query( $args );

					if ( $the_query->have_posts() ) {
						echo '<div class="resul">';
						while ($the_query->have_posts()) {
							$the_query->the_post();
							$first = substr(get_the_title(), 0, 1);

							if ($first == $value) {
								?>

								<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
								<?php
							}
							
						}
						echo '</div>';
					}
					
					?>
				</div>
			</div>


		</div>
		<?php
	}?>


</div>
<?php get_footer(); ?>