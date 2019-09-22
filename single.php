<?php 
the_post();
get_header(); ?>
<main>
    <section class="classic-blog-page">
        <!--start-container-->
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                        <!--Start-Blog-Post-->
					    <div class="blog-posts">
					        <!--Single-blog-post-->
					        <div class="single-blog-post">
					            <div class="blog-post-img">
					                <?php the_post_thumbnail("cmo-home-square"); ?>
					            </div>
					            <a href="#"><i class="fa fa-share-alt"></i>Share</a>
					        </div><!--End-blog-post-->
					        <!--Start-Blog-title-->
					        <div class="single-blog-title">
					            <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
					            <ul>
						            <li><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ); ?>">By: <?php the_author(); ?></a></li>
						            <?php 
						                $archive_month = get_the_time('m'); 
						                $archive_day   = get_the_time('d'); 
						                $archive_year  = get_the_time('Y');
						            ?>
						            <li><a href="<?php echo get_day_link( $archive_month, $archive_day, $archive_year ); ?>"><i class="fa fa-calendar-alt"></i><?php echo esc_html( get_the_date() ); ?></a></li>
						            <li><a href="<?php comments_link(); ?>"><i class="fa fa-comments"></i>Comments</a></li>
						        </ul>
					        </div><!--End-Blog-title-->
					        <div class="blog-description">
					            <?php the_content(); ?>
					        </div>
					    <div class="single-post-share">
					        <div class="single-left-content d-flex justify-content-start">
					            <p>
					                <i class="fa fa-tag"></i>
					                <?php
						            	echo get_the_tag_list();
						            ?>
					            </p>
					        </div>
					        <div class="single-right-content d-flex justify-content-end">
					            <a href="#"><i class="fa fa-share-alt"></i>Share the article</a>
					        </div>
					    </div><!--Sharing-content-end-->
					    <!--author-comment-status-->
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
											global $user_id;
					                            $cmo_author_facebook  = get_the_author_meta( 'facebook_url', $user_id );
					                            $cmo_author_instagram = get_the_author_meta( 'instagram_url', $user_id );
					                            $cmo_author_twitter   = get_the_author_meta( 'twitter_url', $user_id );
					                            $cmo_author_linkedin   = get_the_author_meta( 'linkedin_url', $user_id );
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
					    <!--start-comment-form-->
					    <?php
						    if(!post_password_required()){
						        comments_template();
						    }
					    ?>
					    <!--end-comment-form-->
                </div>
                
            </div>
            <?php get_sidebar(); ?>
        </div><!--End-Container-->
    </section>
</main><!-- Blog Classic Page Design End -->
<?php get_footer(); ?>
