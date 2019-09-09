<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <?php wp_head(); ?>
</head>


<body <?php body_class() ?>>

<!--top-area start-->
<div class="common-banner-bg">
    <div class="top-area">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="top-logo">
                        <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logoh1.png" alt="Responsive image"></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="top-contact-area">
                        <div class="top-contact">
                            <span><a href="#"><i class="fa fa-envelope"></i>mail@example.com</a></span>
                        </div>
                        <div class="top-contact">
                            <span><a href="#"><i class="fa fa-phone"></i> +145 (2466) 888</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="top-area-language common-area">
                        <div class="lan-text">
                            <a href="#"><span>EN</span></a>
                            <a href="#"><span>FR</span></a>
                        </div>
                        <div class="get-quote">
                            <a class="btn" href="#">GET QUOTE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--top-area End-->

    <!--Header Area Start-->
    <header>
        <?php get_template_part("/template-parts/common/nav"); ?>
    </header>
    <!--Header Area End-->

    <!--Banner-Area Start-->

    <div class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php
                        if ( is_home() ) {
                            get_template_part( "template-parts/home/home" );
                        }elseif (is_archive()) {
                           get_template_part( "template-parts/common/breadcamp-archive" );
                        }   
                        elseif (is_404()) {
                           get_template_part( "template-parts/common/breadcamp-404" );
                        }
                        else{
                            get_template_part( "template-parts/common/breadcamp" );
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!--Banner-Area End-->
</div>
