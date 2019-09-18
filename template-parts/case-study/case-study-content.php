<?php query_posts( array(
    'post_type' => 'case_study',
    'post_per_page' => -1,
  )); 
?>
<?php while (have_posts()) : the_post(); ?>
<div class="col-lg-6 md-6 sm-12">
    <!--start-image-area-->
    <div class="case-img-area">
        <div class="ca-single-img">
            <?php the_post_thumbnail(); ?>
        </div><!--case-study-end-->
        <div class="case-img-content">
            <span><?php the_terms(get_the_id(), 'case_category', ' ' ); ?></span>
            <h2><?php the_title(); ?></h2>
            <div class="case-study-btn">
                <a class="btn" href="<?php the_permalink(); ?>">READ MORE</a>
            </div>
        </div><!--case-study-img-content-end-->
    </div><!--end-image-area-->
</div><!--end-col-->
<?php endwhile; ?>
<?php wp_reset_query(); ?>