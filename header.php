<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php
            wp_head();
            // Get About text-image section
            $options = get_option( 'neuron_framework' );
            $phone_number = $options['site-phone-number'];
            $email_address = $options['site-email-number'];
            $social_links = $options['site-social-links'];
        ?>
    </head>
    <body <?php body_class(); ?>>
        <!-- ::::::::::::::::::::: Header Section:::::::::::::::::::::::::: -->
        <header>
            <!-- start top bar -->
            <div class="header-top-area">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 hidden-xs">
                            <div class="contact">
                                <p>
                                    <i class="fa fa-phone"></i>
                                    <?php echo $phone_number; ?>
                                </p>
                                <p>
                                    <i class="fa fa-envelope"></i>
                                    <a href="#"><?php echo $email_address; ?></a>
                                </p>
                            </div><!-- /.contact -->
                        </div><!-- /.col-sm-8 -->

                        <div class="col-sm-4">
                            <div class="social-icon">
                                <ul>
                                    <?php
                                        if(!empty($social_links)):
                                        foreach ($social_links as $social_link):
                                    ?>
                                    <li><a href="<?php echo $social_link['sl-link']; ?>" title="<?php echo $social_link['sl-title']; ?>"><i class="fa <?php echo $social_link['sl-icon']; ?>"></i></a></li>
                                    <?php endforeach; endif; ?>
<!--                                    <li><a href=""><i class="fa fa-twitter"></i></a></li>-->
<!--                                    <li><a href=""><i class="fa fa-linkedin"></i></a></li>-->
<!--                                    <li><a href=""><i class="fa fa-google-plus"></i></a></li>-->
<!--                                    <li><a href=""><i class="fa fa-tumblr"></i></a></li>-->
                                </ul>
                            </div><!-- /.social-icon -->
                        </div><!-- /.col-sm-4 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- end top bar -->

            <!-- Start Navigation -->
            <nav class="navbar navbar-default navbar-sticky bootsnav">
                <div class="container">
                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" class="logo logo-scrolled" alt=""></a>
                    </div>
                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <?php 
                           wp_nav_menu(
                                array(
                                    'theme_location' => 'menu-1',
                                    'menu_class'     => 'nav navbar-nav navbar-right',
                                )
                            );
                        ?>
                    </div><!-- /.navbar-collapse -->
                </div>
            </nav>
            <!-- End Navigation -->
            <div class="clearfix"></div>
        </header> <!-- end header -->
