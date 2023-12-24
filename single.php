<?php get_header(); ?>
<!-- ::::::::::::::::::::: start breadcrumb:::::::::::::::::::::::::: -->
<section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- breadcrumb content -->
                <div class="page-breadcrumbd">
                    <h2>News &amp; Press</h2>
                    <p><a href="index.php.html">Home</a> / News Details</p>
                </div><!-- end breadcrumb content -->
            </div>
        </div>
    </div>
</section><!-- end breadcrumb -->

<?php while ( have_posts() ) : the_post(); ?>
<!-- ::::::::::::::::::::: single-blog section:::::::::::::::::::::::::: -->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- post wrapper -->
                <div class="post-wrapper clearfix">
                    <!-- post thumbnail -->
                    <div style="margin: 0 auto;" class="single-thumb">
                        <?php the_post_thumbnail('large') ?>
                    </div>
                    
                    <!-- start single blog content -->
                    <div class="blog-content">
                        <!-- start single blog header -->
                        <header class="single-header">
                            <div class="single-post-title">
                                <h2><a href="#"><?php the_title(); ?></a></h2>
                            </div>
                            <!-- post meta -->
                            <!-- <div class="post-meta">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user"></i>
                                            Ahmed Faruk
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-tag"></i>
                                                Marketing, Sales 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-calendar"></i>
                                                20 Mar 2017 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-comment"></i>
                                            25 Comments
                                        </a>
                                    </li>
                                    <li class="rating">
                                        <a href="#">
                                            Rating
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </a>
                                    </li>
                                </ul>
                            </div> -->
                        </header><!-- /.end single blog header -->
                        
                        <!-- start single blog entry content -->
                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div><!-- /.end single blog entry content -->

                    </div><!-- /.end single blog content -->
                    
                    <!-- start comments wrapper -->
                    <!-- <div class="comments-wrapper">
                        <div class="single-post-title comment-title">
                            <h2>write your comment</h2>
                        </div>


                        <form class="contact-form" id="contactForm" name="contact-form" action="sendemail.php" method="POST">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="sr-only" for="name">Name</label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="sr-only" for="email">Email</label>
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="sr-only" for="subject">Subject</label>
                                        <input type="text" name="subject" class="form-control" id="subject" placeholder="Your Subject">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="sr-only" for="message">Message</label>
                                <textarea name="message" class="form-control" id="message" placeholder="Your Message"></textarea>
                            </div>
                            <div class="text-right">
                                <button type="submit" name="submit" class="btn btn-primary input-btn"><span>Submit</span></button>
                            </div>
                        </form>


                    </div> -->
                    
                    <!-- <div class="comments-responsed-wrapper">
                        <div class="single-post-title comment-title">
                            <h2>Commets (5)</h2>
                        </div>
                        <div class="comments-media">
                            <ol>
                                <li>
                                    <div class="comment-inner">
                                        <div class="comment-avatar">
                                            <img src="assets/img/comments/1.jpg" alt="" />
                                        </div>
                                        <div class="comment-section">
                                            <header>
                                                <h2>Josef Milton</h2>
                                                <span> 15 minutes ago </span>
                                            </header>
                                            <div class="comment-content">
                                                <p>The challenge is to ensure that when a client visits your website they feel positive about your company. </p>
                                                <a href="#" class="btn-comment-replay">Replay</a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <ul>
                                        <li>
                                            <div class="comment-inner">
                                                <div class="comment-avatar">
                                                    <img src="assets/img/comments/2.jpg" alt="" />
                                                </div>
                                                <div class="comment-section">
                                                    <header>
                                                        <h2>Jonathon Bin</h2>
                                                        <span> 10 minutes ago </span>
                                                    </header>
                                                    <div class="comment-content">
                                                        <p>The challenge is to ensure that when a client visits your website they feel positive about your company. </p>
                                                        <a href="#" class="btn-comment-replay">Replay</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="comment-inner">
                                                <div class="comment-avatar">
                                                    <img src="assets/img/comments/1.jpg" alt="" />
                                                </div>
                                                <div class="comment-section">
                                                    <header>
                                                        <h2>Josef Milton</h2>
                                                        <span> 5 minutes ago </span>
                                                    </header>
                                                    <div class="comment-content">
                                                        <p>The challenge is to ensure that when a client visits your website they feel positive about your company. </p>
                                                        <a href="#" class="btn-comment-replay">Replay</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ol>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section><!-- ./end single-blog section -->
<?php endwhile; ?>
<?php get_footer() ?>