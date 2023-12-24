<section class="client-logo">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="all-client-logo">
                    <?php
                        global $post;
                        $args = array( 'posts_per_page' => 6, 'post_type' => 'brand_partner', 'orderby' => 'menu_order', 'order' => 'ASC' );
                        $brand_posts = get_posts( $args );
                        foreach($brand_posts as $post) : setup_postdata($post);

                        $brand_link = get_post_meta($post->ID, 'brand_link', true);
                    ?>
                    <a href="<?php echo $brand_link; ?>"><?php the_post_thumbnail('full'); ?></a>
                    <?php endforeach; wp_reset_query(); ?>
                </div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- end client section -->
<?php get_footer() ?>