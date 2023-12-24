<?php 
/*
Template Name: Portfolio Template
*/
get_header();
// Get CS Service data
$options = get_option( 'neuron_framework' );
$portfolio_title = $options['portfolio-title'];
$portfolio_sub_title = $options['portfolio-sub-title'];
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

	<!-- ::::::::::::::::::::: Portfolio section:::::::::::::::::::::::::: -->
	<section class="section-padding darker-bg">
		<div class="container">
			<div class="row" style="margin-bottom: 50px;">
				<div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
					<!-- portfolio title -->
					<div class="template-title text-center">
						<h2><?php echo $portfolio_title; ?></h2>
                        <?php echo $portfolio_sub_title; ?>
					</div>
				</div>
			</div>
		
			<div class="row">
                <?php
                    global $post;
                    $args = array( 'posts_per_page' => 6, 'post_type' => 'portfolio', 'orderby' => 'menu_order', 'order' => 'DESC' );
                    $service_posts = get_posts( $args );
                    foreach($service_posts as $post) : setup_postdata($post);

                    $sub_title = get_post_meta($post->ID, 'sub_title', true);
                ?>
                <!-- <div class="col-sm-6 col-md-4">
                    <div class="services-tiem">
                        <?php the_post_thumbnail('thumbnail', array('class' => 'hvr-buzz-out')); ?>
                        <h3><a href="<?php echo $service_link; ?>"><?php the_title(); ?></a></h3>
                        <p><?php the_content(); ?></p>
                    </div>
                </div> -->
                <!-- portfolio item -->
				<div class="col-sm-6 col-md-4">
					<div class="portfolio-item">
                        <?php the_post_thumbnail('full', array('class' => 'hvr-buzz-out')); ?>
						<div class="portfolio-details">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<a href="#"><?php echo $sub_title; ?></a>
						</div><!-- /.portfolio-details -->
					</div><!-- /.portfolio-item -->
				</div>
                <?php endforeach; wp_reset_query(); ?>	
			</div>
		</div>
	</section>
    
    <!-- ::::::::::::::::::::: Client section:::::::::::::::::::::::::: -->
    <?php get_template_part('template-parts/client') ?>

<?php endwhile; ?>
<?php get_footer() ?>