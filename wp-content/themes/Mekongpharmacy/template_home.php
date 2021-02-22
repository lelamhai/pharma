<?php
/**
 * Template name: Home Page
 */
?>
<?php get_header(); ?>
<h1 class="namlb-seo" style="width: 0;height: 0;margin:0;visibility: hidden;z-index: -2"><?php echo bloginfo('name')."&nbsp;"; echo bloginfo('description'); ?></h1>
<!-- Style banner.css -->
<?php get_template_part('templates/banner_slider'); ?>
<?php get_template_part('templates/section_1'); ?>
<?php get_template_part('templates/section_2'); ?>
<?php get_template_part('templates/section_3'); ?>
<?php get_template_part('templates/section_4'); ?>
<?php get_template_part('templates/section_5'); ?>
<?php get_template_part('templates/section_6'); ?>
<?php get_template_part('templates/section_7'); ?>
<?php get_template_part('templates/section_8'); ?>
<?php get_template_part('templates/section_9'); ?>
<?php get_footer(); ?>