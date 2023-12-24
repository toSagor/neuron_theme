<?php 
/*
Template Name: Service Template
*/
get_header();

// Get CS Service data
$options = get_option( 'neuron_framework' );
$service_ti_title = $options['service-ti-title'];
$service_ti_detail = $options['service-ti-detail'];
$service_ti_image = $options['service-ti-image'];
?>
<?php while ( have_posts() ) : the_post(); ?>
    <!-- ::::::::::::::::::::: Page Title Section:::::::::::::::::::::::::: -->
    <section <?php if(has_post_thumbnail()): ?> style="background-image: url(<?php the_post_thumbnail_url('large'); ?>);" <?php endif; ?> class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- breadcrumb content -->
                    <div class="page-breadcrumbd">
                        <h2><?php the_title(); ?></h2>
                        <p><a href="<?php echo site_url(); ?>">Home</a> / <?php the_title(); ?></p>
                    </div><!-- end breadcrumb content -->
                </div>
            </div>
        </div>
    </section><!-- end breadcrumb -->

    <!-- ::::::::::::::::::::: Services Section:::::::::::::::::::::::::: -->
    <?php get_template_part('template-parts/service') ?>
    
    <!-- ::::::::::::::::::::: Block Content :::::::::::::::::::::::::: -->
    <section class="block block2">
        <div class="container">
            <div class="row">
                <!-- block image -->
                <div class="col-md-6">
                    <div class="block-img">
                        <img src="<?php echo $service_ti_image['url']; ?>" alt="<?php echo $service_ti_title; ?>" />
                    </div>
                </div>
                <!-- block content -->
                <div class="col-md-6">
                    <div class="block-text">
                        <h2><?php echo $service_ti_title; ?></h2>
                        <?php echo $service_ti_detail; ?>
                    </div>
                </div>
                
            </div>
        </div>
    </section><!-- block area end -->

    <?php get_template_part('template-parts/client') ?>

<?php endwhile; ?>
<?php get_footer() ?>