<nav class="navbar navbar-expand-lg navbar-light" data-toggle="sticky-onscroll">
    <div class="mobile-logo">
        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logoh1.png" alt="Responsive image"></a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container">
        <div class="col-lg-12">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="sticky-logo">
                    <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logoh1.png" alt="Responsive image"></a>
                </div>
                <?php
                    $cmo_menu = wp_nav_menu( array(
                        'theme_location' => 'mainmenu',
                        'menu_id'        => 'menu_id',
                        'menu_class'     => 'navbar-nav mr-auto',
                        'echo'           => false
                    ) );

                    $cmo_menu = str_replace("menu-item-has-children","menu-item-has-children has-children",$cmo_menu);
                    echo $cmo_menu;
                ?>
                <div class="menu-search-icon text-right">
                    <?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

                    <form role="search" method="get" class="header__search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <div class="search-icon">
                            <div id="search">
                                <input type="search" id="<?php echo $unique_id; ?>" placeholder="<?php echo esc_attr_x( 'Search..', 'placeholder', 'cmo' ); ?>" value="<?php echo get_search_query(); ?>" name="s">
                                <div class="icon"></div>
                            </div>
                        </div>
                    </form>
                    <div id="mySidebar" class="sidebar">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                        <?php
		                    $cmo_menu = wp_nav_menu( array(
		                        'theme_location' => 'sidemenu',
		                        'menu_id'        => '',
		                        'menu_class'     => '',
		                        'echo'           => false
		                    ) );

		                    $cmo_menu = str_replace("menu-item-has-children","menu-item-has-children has-children",$cmo_menu);
		                    echo $cmo_menu;
		                ?>
                    </div>
                    <div id="main">
                        <a class="openbtn" onclick="openNav()">☰ </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>