<?php
    $footer_options = get_option('neuron_framework');
?>
<!-- ::::::::::::::::::::: Footer Section:::::::::::::::::::::::::: -->
<footer>
    <div class="primary-footer">
        <div class="container">
            <div class="row">
                <!-- start single footer-1 widget -->
                <div class="col-sm-6 col-md-4">
                    <div class="footer-widget about-us">
                        <?php dynamic_sidebar( 'footer-1' ) ?>
                    </div>
                </div><!-- end single footer widget -->

                <!-- start single footer-2 widget -->
                <div class="col-sm-6 col-md-2">
                    <div class="footer-widget usefull-link">
                        <?php dynamic_sidebar( 'footer-2' ) ?>
                    </div>
                </div><!-- end single footer widget -->

                <!-- start single footer-3 widget -->
                <div class="col-sm-6 col-md-3">
                    <div class="footer-widget latest-post">
                        <?php dynamic_sidebar( 'footer-3' ) ?>
                    </div>
                </div><!-- end single footer widget -->

                <!-- start single footer-4 widget -->
                <div class="col-sm-6 col-md-3">
                    <div class="footer-widget news-letter">
                        <?php dynamic_sidebar( 'footer-4' ) ?>
                    </div><!-- /.news-letter -->
                </div><!-- end single footer widget -->

            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.primary-footer -->

    <!-- footer copyright area -->
    <div class="copyright-wrapper text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p><?php echo $footer_options['copyright-text']; ?></p>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- ./end copyright-wrapper -->
</footer>

<!-- preloader -->
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_four"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_one"></div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>