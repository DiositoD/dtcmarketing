<?php get_header(); ?>

<!-- Slider Section -->
<?php if(function_exists('avartanslider')) avartanslider('cloth-store'); ?>


<!-- Gallery -->
    <section class="gallery-block compact-gallery">
            <div class="row no-gutters">
                <div class="col-md-9 col-lg-4">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/images/Ads-Men.jpg">
                </div>
                <div class="col-md-9 col-lg-4">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/images/Adv-Kids.jpg">
                </div>
                <div class="col-md-9 col-lg-4">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/images/Ads-Women.jpg">
                </div>
                
            </div>
    </section> <br> <br>


<!-- New items -->
<div class="container">
<h4 class="categorys"><i class="bi bi-layout-three-columns icons"></i>  WHAT'S NEW?</h4> 
<?php echo do_shortcode('[products limit="4" columns="4" orderby="id" order="DESC" visibility="visible"]');?>


<!-- Most Popular -->
<h4 class="categorys"> <i class="bi bi-layout-three-columns icons"></i> BEST SELLERS</h4> 
<div class="row">
<?php echo do_shortcode('[products limit="3" columns="3" best_selling="true" ]');?>
<div class="col"> <img class="woocommerce img" src="<?php echo get_template_directory_uri();?>/images/Deal-men.jpg"> </div>
</div>  

<div class="row">
<div class="col"> <img class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" src="<?php echo get_template_directory_uri();?>/images/Deal-women.jpg"> </div>
<?php echo do_shortcode('[products limit="3" columns="3" best_selling="true" ]');?>
</div> 


</div><br>

<!-- LATEST BLOG -->
<div class="container">
<h4 class="categorys"> <i class="bi bi-layout-three-columns icons"></i> LATEST BLOG</h4> 
<br>
<div class="row">
<?php if ( have_posts() ) : 
    while ( have_posts() ) : the_post();  ?>

<div class="col">
<?php if ( has_post_thumbnail() ) {
    the_post_thumbnail('post-thumbnails', array('class' => '')); } ?>
    <br>  <br>
         <p class="latest-blog-date"><?php the_date();?></p>
        <h3 class="latest-blog-content"><?php the_content();?></h3>
    </div>

<?php endwhile; endif; ?>
</div> </div>

<br> <br>

<?php get_footer();?>
</body>
</html>