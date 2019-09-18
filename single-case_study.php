<?php 
the_post();
get_header(); ?>
<!-- Service Single styling Start -->
<main>
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xm-12">
                    <!-- Srart service Area -->
                    <div class="service-area">
                        <h2>Case Study</h2>
                        <ul>
                            <?php query_posts( array(
                                'post_type' => 'case_study',
                                'post_per_page' => -1,
                              )); 
                            ?>
                            <?php while (have_posts()) : the_post(); ?>
                            <li><a href="<?php the_permalink(); ?>"><i class="fa fa-angle-double-right"></i> <?php the_title(); ?></a></li>
                            <?php endwhile; ?>
                            <?php wp_reset_query(); ?>
                        </ul>
                    </div> <!-- End service Area -->

                    <!-- Contact Area Section Start -->
                    <div class="contact-area">
                        <h2>Contact</h2>
                        <div class="ca-area d-flex">
                            <div class="content-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/address.png" alt="Address">
                            </div>
                            <div class="text-area">
                                <p>Collins Street West <br>Victoria 8007, AU</p>
                            </div>
                        </div>
                        <div class="ca-area d-flex">
                            <div class="content-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/phone.png" alt="Address">
                            </div>
                            <div class="text-area">
                                <p>Collins Street West <br>Victoria 8007, AU</p>
                            </div>
                        </div>
                        <div class="ca-area d-flex">
                            <div class="content-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/email.png" alt="Address">
                            </div>
                            <div class="text-area">
                                <p>Collins Street West <br>Victoria 8007, AU</p>
                            </div>
                        </div>
                    </div><!-- Contact Area Section End -->
                    <div class="brocher-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/brochure.jpg" alt="Brocher Image">
                        <a class="brocher-link" href="#">Download Case Study <br>Report</a>
                    </div>
                </div>

                <!-- Main Content Area -->
                <div class="col-lg-8 col-md-8 col-sm-12 col-xm-12">
                    <div class="over-view-title">
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                    </div>
                    <div class="ss-pricing">
                        <div class="ss-pricing-title">
                            <h2>Pricing</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card card-pricing">
                                    <div class="card-body ">
                                        <div class="single-pricing-plan text-center">
                                            <h4 class="pt-4">Basic Plan</h4>
                                            <h2><small>S</small>24<small>.99</small></h2>
                                            <ul>
                                                <li>Architecto beatae vitae Dicta</li>
                                                <li>sunt explicabo Nemo enim</li>
                                                <li>ipsam Voluptatem quia voluptas</li>
                                                <li>Sit aspernatur aut odit</li>
                                                <li>aspernatur aut odit</li>
                                            </ul>
                                            <div class="card-footer">
                                                <a href="Pricing.html" class="sing-btn">Sign Up</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-pricing">
                                    <div class="card-body ">
                                        <div class="single-pricing-plan text-center">
                                            <h4 class="pt-4">Regular</h4>
                                            <h2><small>S</small>54<small>.99</small></h2>
                                            <ul>
                                                <li>Architecto beatae vitae Dicta</li>
                                                <li>sunt explicabo Nemo enim</li>
                                                <li>ipsam Voluptatem quia voluptas</li>
                                                <li>Sit aspernatur aut odit</li>
                                                <li>aspernatur aut odit</li>
                                            </ul>
                                            <div class="card-footer">
                                                <a href="Pricing.html" class="sing-btn">Sign Up</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-pricing">
                                    <div class="card-body">
                                        <div class="single-pricing-plan text-center">
                                            <h4 class="pt-4">Premium</h4>
                                            <h2><small>S</small>84<small>.99</small></h2>
                                            <ul>
                                                <li>Architecto beatae vitae Dicta</li>
                                                <li>sunt explicabo Nemo enim</li>
                                                <li>ipsam Voluptatem quia voluptas</li>
                                                <li>Sit aspernatur aut odit</li>
                                                <li>aspernatur aut odit</li>
                                            </ul>
                                            <div class="card-footer">
                                                <a href="Pricing.html" class="sing-btn">Sign Up</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!--  Service Single styling End -->
<?php get_footer(); ?>