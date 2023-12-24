<?php 
/*
Template Name: About Template
*/
get_header();
// Get About text-image section
$options = get_option( 'neuron_framework' );
$is_active_section_about = $options['about-sec-active-about'];
$about_title = $options['about-title'];
$about_detail = $options['about-detail'];
$about_image = $options['about-image'];
$about_faqs = $options['about-faq'];
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

    <!-- ::::::::::::::::::::: Block Section:::::::::::::::::::::::::: -->
    <section class="block about-us-block section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- block text -->
                    <div class="block-text">
                        <?php the_content(); ?>
                    </div>
                </div>
                <!-- <div class="col-md-6">
                    <div class="block-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-us-block.jpg" alt="" />
                    </div>
                </div> -->
            </div>
        </div>
    </section><!-- block area end -->

	<!-- ::::::::::::::::::::: Services section:::::::::::::::::::::::::: -->
    <?php get_template_part('template-parts/promo') ?>

    <!-- ::::::::::::::::::::: start block content area:::::::::::::::::::::::::: -->
    <?php if($is_active_section_about == '1'): ?>
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

	<!-- ::::::::::::::::::::: Accordian Section:::::::::::::::::::::::::: -->
	<section class="accordian-section section-padding darker-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="accorian-item">

						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <?php
                                if(!empty($about_faqs)):
                                $faq_no = 0;
                                foreach ($about_faqs as $about_faq):
                                    $faq_no++;
                                if($faq_no == 1) {
                                    $aria_expended = 'true';
                                    $in_class = 'in';
                                } else {
                                    $aria_expended = 'false';
                                    $in_class = '';
                                }
                            ?>
							<!-- accordian item-1 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="heading<?php echo $faq_no; ?>">
									<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $faq_no; ?>" aria-expanded="<?php echo $aria_expended; ?>" aria-controls="collapse<?php echo $faq_no; ?>">
									    <?php echo $about_faq['faq-title'] ?>
									</a>
									</h4>
								</div>
								<div id="collapse<?php echo $faq_no; ?>" class="panel-collapse collapse <?php echo $in_class; ?>" role="tabpanel" aria-labelledby="heading<?php echo $faq_no; ?>">
									<div class="panel-body">
                                        <?php echo $about_faq['faq-detail'] ?>
                                    </div>
								</div>
							</div>
							<?php  endforeach; endif; ?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end accordian section -->
	
    <!-- ::::::::::::::::::::: Clients section:::::::::::::::::::::::::: -->
	<?php get_template_part('template-parts/client') ?>

<?php endwhile; ?>
<?php get_footer() ?>