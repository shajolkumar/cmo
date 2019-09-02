<!--Footer Area Start-->

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <?php
                    if ( is_active_sidebar( "footer-one" ) ) {
                        dynamic_sidebar( "footer-one" );
                    }
                ?>
            </div>
            <div class="col-md-3">
                <?php
                    if ( is_active_sidebar( "footer-two" ) ) {
                        dynamic_sidebar( "footer-two" );
                    }
                ?>
            </div>
            <div class="col-md-3">
                <?php
                    if ( is_active_sidebar( "footer-three" ) ) {
                        dynamic_sidebar( "footer-three" );
                    }
                ?>
            </div>
            <div class="col-md-3">
                <?php
                    if ( is_active_sidebar( "footer-four" ) ) {
                        dynamic_sidebar( "footer-four" );
                    }
                ?>
            </div>
        </div>
    </div>
</footer>

<!--Footer Area End-->

<!--Copyright Area Start-->

<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-3">
                <div class="copy-right-logo">
                    <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/footer-logo.png" alt="bsn-img" class="img-responsive"></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-5">
                <p>@2019 - CMO Consulting | All Rights Reserved</p>
            </div>
            <div class="col-lg-6 col-md-4">
                <div class="terms-policy">
                    <ul>
                        <li><a href="">Privacy Policy</a></li>
                        <li><a href="">Terms of Service</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Copyright Area End-->
<!--Top Arrow area start-->
<div class="top-arrow">
    <a href="#" id="scroll" style="display: none;"><i class="fa fa-rocket"></i></a>
</div>
<!--top-arrow-->
<?php wp_footer(); ?>
</body>
</html>