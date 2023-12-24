<?php 
/*
Template Name: Contact Template
*/
get_header();
// Get About text-image section
$options = get_option( 'neuron_framework' );
$contact_title = $options['contact-title'];
$contact_sub_title = $options['contact-sub-title'];
$cf7_shortcode = $options['cf7-shortcode'];
$contact_address_1 = $options['contact-address-1'];
$contact_address_2 = $options['contact-address-2'];
$contact_fax = $options['contact-fax'];
$contact_phone = $options['contact-phone'];
$contact_email = $options['contact-email'];
$contact_website = $options['contact-website'];
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

    <!-- ::::::::::::::::::::: Contact Section :::::::::::::::::::::::::: -->
	<section class="section-padding">
		<div class="container">
			<div class="row" style="margin-bottom: 50px;">
				<div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
					<!-- contact title -->
					<div class="template-title text-center">
						<h2><?php echo $contact_title; ?></h2>
						<?php echo $contact_sub_title; ?>
					</div>
				</div>
			</div>
		
			<div class="row">
				<div class="col-md-8">
                    <?php echo do_shortcode("$cf7_shortcode"); ?>
				</div>
				
				<div class="col-md-4">
					<!-- company address -->
					<div class="company-address">
						<ul>
							<li>
								<i class="fa fa-map-marker"></i>
								<p><?php echo $contact_address_1; ?></p>
								<span class="divider"></span>
								<p><?php echo $contact_address_2; ?></p>
							</li>
							<li>
								<i class="fa fa-phone"></i>
								<p>Fax: <?php echo $contact_fax; ?>
								<br>Phone: <?php echo $contact_phone; ?></p>
							</li>
							<li>
								<i class="fa fa-envelope-o"></i>
								<a href="mailto:<?php echo $contact_email; ?>"><?php echo $contact_email; ?></a>
								<a href="<?php echo $contact_website; ?>"><?php echo $contact_website; ?></a>
							</li>
						</ul>
					</div><!-- ./end company address -->
				</div>
			</div>
		</div>
	</section>

<?php endwhile; ?>
<?php get_footer() ?>