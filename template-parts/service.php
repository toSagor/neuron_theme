<?php
// Get CS Service data
$options = get_option( 'neuron_framework' );
$service_title = $options['service-title'];
$service_sub_title = $options['service-sub-title'];
?>

<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
                <div class="template-title text-center">
                    <h2><?php echo $service_title; ?></h2>
                    <p><?php echo $service_sub_title; ?></p>
                </div>
            </div>
        </div>

        <div class="row">
            <?php
                global $post;
                $args = array( 'posts_per_page' => 6, 'post_type' => 'service', 'orderby' => 'menu_order', 'order' => 'ASC' );
                $service_posts = get_posts( $args );
                foreach($service_posts as $post) : setup_postdata($post);

                $service_link = get_post_meta($post->ID, 'Service_Link', true);
            ?>
            <div class="col-sm-6 col-md-4">
                <div class="services-tiem">
                    <?php the_post_thumbnail('thumbnail', array('class' => 'hvr-buzz-out')); ?>
                    <h3><a href="<?php echo $service_link; ?>"><?php the_title(); ?></a></h3>
                    <p><?php the_content(); ?></p>
                </div>
            </div>
            <?php endforeach; wp_reset_query(); ?>
        </div>
    </div>
</section><!-- end services section -->