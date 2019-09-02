<?php get_header(); ?>
<!-- Blog Classic Page Design  -->
<main>
    <section class="classic-blog-page">
        <!--start-container-->
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
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