<?php query_posts( array(
    'post_type' => 'service',
    'post_per_page' => -1,
  )); 
?>
<?php while (have_posts()) : the_post(); ?>
<div class="col-md-4">
    <div class="busn-img">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        <div class="busn-text text-center">

            <h5 class="bu-con"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
            <p><?php the_excerpt(); ?></p>
            <div class="bu-angle-icon">
                <a href="<?php the_permalink(); ?>"><i class="fa fa-angle-right"></i></a>
            </div>
        </div>
    </div>
</div>
<?php endwhile; ?>
<?php wp_reset_query(); ?>