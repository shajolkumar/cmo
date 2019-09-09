<?php get_header(); ?>
<!-- Blog Classic Page Design  -->
<main>
    <section class="classic-blog-page">
        <!--start-container-->
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <?php
                        if ( ! have_posts() ):
                            ?>
                            <h1 class="text-center"><?php _e("There is no post in this archive","cmo"); ?></h1>
                        <?php
                        endif;
                    ?>
                    <?php
                        while ( have_posts() ) :
                        the_post();
                    ?>
                    <?php get_template_part("/template-parts/common/content"); ?>
                    <?php
                        endwhile;
                    ?>
                    <!--Pagination Start-->
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div><!--End-Container-->
    </section>
</main><!-- Blog Classic Page Design End -->
<?php get_footer(); ?>