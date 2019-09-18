<?php

// Require Files

require_once( get_theme_file_path( "/inc/tgm.php" ) );

// Theme Support

function cmo_theme_setup() {
    load_theme_textdomain( "cmo" );
    add_theme_support( "post-thumbnails" );
    add_theme_support( "title-tag" );
    add_theme_support( "custom-header", $cmo_custom_header_details);
    add_theme_support( 'html5', array( 'search-form', 'comment-list' ) );
    add_theme_support( "post-formats", array( "image", "gallery", "quote", "audio", "video", "link" ) );
    add_theme_support( "custom-background" );
    register_nav_menu( "mainmenu", __( "Main Menu", "cmo" ) );
    register_nav_menu( "sidemenu", __( "Sidebar Menu", "cmo" ) );
    add_image_size( "cmo-home-square", 800, 400, true );
}

add_action( "after_setup_theme", "cmo_theme_setup" );

// Assets Enqueue

function cmo_assets() {
    wp_enqueue_style( "bootstrap-css", get_theme_file_uri( "/assets/css/bootstrap.min.css" ), null, "1.0" );
    wp_enqueue_style( "bootstrap-grid-css", get_theme_file_uri( "/assets/css/bootstrap-grid.min.css" ), null, "1.0" );
    wp_enqueue_style( "owl.carousel-css", get_theme_file_uri( "/assets/css/owl.carousel.min.css" ), null, "1.0" );
    wp_enqueue_style( "owl.theme-css", get_theme_file_uri( "/assets/css/owl.theme.default.min.css" ), null, "1.0" );
    wp_enqueue_style( "animate-css", get_theme_file_uri( "/assets/css/animate.css" ), null, "1.0" );
    wp_enqueue_style( "nice-select-css", get_theme_file_uri( "/assets/css/nice-select.css" ), null, "1.0" );
    wp_enqueue_style( "magnific-popup-css", get_theme_file_uri( "/assets/css/magnific-popup.css" ), null, "1.0" );
    wp_enqueue_style( "font-awesome-css", get_theme_file_uri( "/assets/css/font-awesome.min.css" ), null, "1.0" );
    wp_enqueue_style( "style-css", get_theme_file_uri( "/assets/css/style.css" ), null, "1.0" );
    wp_enqueue_style( "responsive-css", get_theme_file_uri( "/assets/css/responsive.css" ), null, "1.0" );
    wp_enqueue_style( "cmo-css", get_stylesheet_uri(), null, 1.0 );

    wp_enqueue_script( "counter-js", get_theme_file_uri( "/assets/js/counter-jquery.js" ), null, "1.0" );
    wp_enqueue_script( "scroll-js", get_theme_file_uri( "/assets/js/scroll-jquery.js" ), null, "1.0" );
    wp_enqueue_script( "waypoints-js", get_theme_file_uri( "/assets/js/waypoints.min.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "counterup-js", get_theme_file_uri( "/assets/js/jquery.counterup.min.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "popup-js", get_theme_file_uri( "/assets/js/magnific-popup.min.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "sidebar-js", get_theme_file_uri( "/assets/js/sidebar-jquery.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "bootstrap-js", get_theme_file_uri( "/assets/js/bootstrap.min.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "nice-select-js", get_theme_file_uri( "/assets/js/jquery.nice-select.min.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "owl.carousel-js", get_theme_file_uri( "/assets/js/owl.carousel.min.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "wow-js", get_theme_file_uri( "/assets/js/wow.min.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "custom-js", get_theme_file_uri( "/assets/js/custom.js" ), array( "jquery" ), "1.0", true );
}

add_action( "wp_enqueue_scripts", "cmo_assets" );

// Widget

function cmo_widgets() {
    register_sidebar( array(
        'name'          => __( 'Sidebar Widget', 'cmo' ),
        'id'            => 'sidebar',
        'description'   => __( 'Widgets in this area will be shown right sidebar.', 'cmo' ),
        'before_widget' => '<div id="%1$s" class="catagories %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Widget One', 'cmo' ),
        'id'            => 'footer-one',
        'description'   => __( 'Widgets in this area will be footer.', 'cmo' ),
        'before_widget' => '<div id="%1$s" class="nav-link %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Widget Two', 'cmo' ),
        'id'            => 'footer-two',
        'description'   => __( 'Widgets in this area will be footer.', 'cmo' ),
        'before_widget' => '<div id="%1$s" class="nav-link %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Widget Three', 'cmo' ),
        'id'            => 'footer-three',
        'description'   => __( 'Widgets in this area will be footer.', 'cmo' ),
        'before_widget' => '<div id="%1$s" class="nav-link %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Widget Four', 'cmo' ),
        'id'            => 'footer-four',
        'description'   => __( 'Widgets in this area will be footer.', 'cmo' ),
        'before_widget' => '<div id="%1$s" class="nav-link %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>',
    ) );
}

add_action( "widgets_init", "cmo_widgets" );


// Pagination

function cmo_pagination() {
    global $wp_query;
    $links = paginate_links( array(
        'current'  => max( 1, get_query_var( 'paged' ) ),
        'total'    => $wp_query->max_num_pages,
        'type'     => 'list',
        'mid_size' => apply_filters( "cmo_pagination_mid_size", 3 )
    ) );
    $links = str_replace( "page-numbers", "pgn__num", $links );
    $links = str_replace( "<ul class='pgn__num'>", "<ul>", $links );
    $links = str_replace( "next pgn__num", "page-numbers", $links );
    $links = str_replace( "prev pgn__num", "page-numbers", $links );
    echo $links;
}