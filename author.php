<?php get_header(); ?>
<!-- Blog Classic Page Design  -->
<main>
    <section class="classic-blog-page">
        <!--start-container-->
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <div class="author">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="author-img">
                                    <?php echo get_avatar( get_the_author_meta( "ID" ) ); ?>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <!--person-info-->
                                <div class="author-info">
                                    <div class="title">
                                        <h4><?php the_author(); ?></h4>
                                    </div>
                                    <p><?php the_author_meta( "description" ); ?></p>
                                    <!--start-author-social-media-->
                                    <div class="author-social-icon">
                                        <?php
                                            $cmo_author_facebook  = get_field( "facebook", "user_" . get_the_author_meta( "ID" ) );
                                            $cmo_author_instagram = get_field( "instagram", "user_" . get_the_author_meta( "ID" ) );
                                            $cmo_author_twitter   = get_field( "twitter", "user_" . get_the_author_meta( "ID" ) );
                                            $cmo_author_linkedin   = get_field( "linkedin", "user_" . get_the_author_meta( "ID" ) );
                                        ?>
                                        <ul>
                                            <?php if ( $cmo_author_facebook ): ?>
                                                <li><a href="<?php echo esc_url( $cmo_author_facebook ); ?>"><i class="fa fa-facebook-f"></i></a></li>
                                            <?php endif; ?>
                                            <?php if ( $cmo_author_instagram ): ?>
                                                <li><a href="<?php echo esc_url( $cmo_author_instagram ); ?>"><i class="fa fa-instagram"></i></a></li>
                                            <?php endif; ?>
                                            <?php if ( $cmo_author_twitter ): ?>
                                                <li><a href="<?php echo esc_url( $cmo_author_twitter ); ?>"><i class="fa fa-twitter"></i></a></li>
                                            <?php endif; ?>
                                            <?php if ( $cmo_author_linkedin ): ?>
                                                <li><a href="<?php echo esc_url( $cmo_author_linkedin ); ?>"><i class="fa fa-linkedin"></i></a></li>
                                            <?php endif; ?>
                                        </ul>
                                    </div><!--end-author-social-media-->
                                </div><!--Author-info-end-->
                            </div>
                        </div>
                    </div><!--Author-comment-status-end-->
                    <?php
                        if ( ! have_posts() ):
                            ?>
                            <h1><?php _e("There is no post in this author","cmo"); ?></h1>
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