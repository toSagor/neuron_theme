<?php 
get_header(); 
?>
<?php while ( have_posts() ) : the_post(); 
	$portfolio_options = get_post_meta( get_the_ID(), 'portfolio_options', true );
?>
	
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

	<?php// echo var_dump($portfolio_options); ?>

    <!-- Portfolio Single -->
	<section class="single-portfolio-wrapper section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<!-- single portfolio images -->
					<div class="single-portfolio-images">
						<?php
							$feature_image = $portfolio_options['portfolio-feature-img'];
						?>
						<img class="img-responsive" src="<?php echo $feature_image['url']; ?>" alt="" />
					</div>
				</div>
				<div class="col-md-4">
					<!-- single portfolio info -->
					<div class="single-portfolio-inner">
						<header class="single-portfolio-title">
							<?php if ($portfolio_options['sub-title']) :?><a><?php echo $portfolio_options['sub-title']; ?></a><?php endif; ?>
							<h2><?php the_title(); ?></h2>
						</header>
						<div class="portfolio-details-panel">
							<?php the_content(); ?>
							
							<ul class="portfolio-meta">
								<?php if ($portfolio_options['client-name']) :?><li><span> Client </span> <?php echo $portfolio_options['client-name']; ?></li><?php endif; ?>
								<?php if ($portfolio_options['created-by']) :?><li><span> Created by </span> <?php echo $portfolio_options['created-by']; ?></li><?php endif; ?>
								<?php if ($portfolio_options['complited-on']) :?><li><span> Completed on </span> <?php echo $portfolio_options['complited-on']; ?></li><?php endif; ?>
								<?php if ($portfolio_options['portfolio-skills']) :?><li><span> Skills </span> <?php echo $portfolio_options['portfolio-skills']; ?></li><?php endif; ?>
								<li><span> Share </span> 
									<?php if ($portfolio_options['facebook-link']) :?><a href="<?php echo $portfolio_options['facebook-link']; ?>"><i class="fa fa-facebook"></i></a><?php endif; ?>
									<?php if ($portfolio_options['twitter-link']) :?><a href="<?php echo $portfolio_options['twitter-link']; ?>"><i class="fa fa-twitter"></i></a><?php endif; ?>
									<?php if ($portfolio_options['googleplus-link']) :?><a href="<?php echo $portfolio_options['googleplus-link']; ?>"><i class="fa fa-google-plus"></i></a><?php endif; ?>
									<?php if ($portfolio_options['linkedin-link']) :?><a href="<?php echo $portfolio_options['linkedin-link']; ?>"><i class="fa fa-linkedin"></i></a><?php endif; ?>
								</li>
							</ul>
						</div>
						<?php if ($portfolio_options['visit-link']) :?><a class="btn btn-primary" href="<?php echo $portfolio_options['visit-link']; ?>"> Visit website </a><?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
    
<?php endwhile; ?>
<?php get_footer() ?>