 <section id="section_1" class="page_section">
   <div class="container">
     <h2 class="section_title align_center"><?php echo get_field('title_sc_1','option');?> </h2>
     <div class="row">
      <?php 
      while (have_rows('danh_muc','option')) {
       the_row();
       $cat = get_sub_field('chon_danh_muc');
       ?>
       <div class="col-3">
        <div class="col_wrapper">
          <a href="<?php echo get_product_cat_link($cat);?>" class="img padding_ratio relative">
            <?php echo get_product_cat_thumb($cat);?>
          </a>
          <h3>
            <a href="<?php echo get_product_cat_link($cat);?>"><?php echo get_product_cat_name($cat);?></a>
          </h3>
          
        </div>
      </div>
      <?php
    }

    ?>
  </div>
</div>
</section>
