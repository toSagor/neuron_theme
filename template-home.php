<?php
/*
Template Name: Home Template
*/
get_header();
// Get About text-image section
$options = get_option( 'neuron_framework' );
$is_active_section_home = $options['about-sec-active-home'];
$about_title = $options['about-title'];
$about_detail = $options['about-detail'];
$about_image = $options['about-image'];

?>
<!-- ::::::::::::::::::::: start slider section:::::::::::::::::::::::::: -->
<section class="slider-area">
    <?php
        global $post;
        $args = array( 'posts_per_page' => 5, 'post_type' => 'slide', 'orderby' => 'menu_order', 'order' => 'ASC' );
        $slide_posts = get_posts( $args );
        foreach($slide_posts as $post) : setup_postdata($post);

        $btn_text = get_post_meta($post->ID, 'btn_text', true);
        $btn_link = get_post_meta($post->ID, 'btn_link', true);
    ?>
    <!-- slide items-->
    <div style="background-image: url(<?php the_post_thumbnail_url(); ?>)" class="homepage-slider ">
        <div class="display-table">
            <div class="display-table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="slider-content">
                                <h1><?php the_title(); ?></h1>
                                <p><?php the_content(); ?></p>
                                <a href="<?php echo $btn_link; ?>"><?php echo $btn_text; ?> <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; wp_reset_query(); ?>
</section><!-- slider area end -->


<?php get_template_part('template-parts/promo') ?>


<!-- ::::::::::::::::::::: start block content area:::::::::::::::::::::::::: -->
<?php if($is_active_section_home == '1'): ?>
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="block-text">
                        <h2><?php echo $about_title; ?></h2>
                        <?php echo $about_detail; ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="block-img">
                        <img src="<?php echo $about_image['url']; ?>" alt="<?php echo $about_title; ?>" />
                    </div>
                </div>
            </div>
        </div>
    </section><!-- block area end -->
<?php endif; ?>

<!-- ::::::::::::::::::::: Services section:::::::::::::::::::::::::: -->
<?php get_template_part('template-parts/service') ?>

<!-- :::::::::::::::::::::  Client Section:::::::::::::::::::::::::: -->
<?php get_template_part('template-parts/client') ?>