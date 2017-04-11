<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage eizisoft
 * @since eizisoft 1.0
 */
get_header();
?>

<div class="pta-jarallax" id="scroll-to-top">
    <div class="main">
        <div class="container">
            <div class="main-intro">
                <h1 class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0.1s">
                    eizisoft
                    <span class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">.</span>
                </h1>
                <h4 class="wow fadeInLeft"data-wow-delay="0.5s">Design & <br class="hidden-xs"> Web Development</h4>
            </div>
        </div>
    </div>
</div>

<!-- About Section Begins Here -->
<div class="pta-about">
    <div class="container">
        <div class="pta-about-intro">
            <div class="row">
                <div class="col-sm-8 ">
                    <div class="pta-about-title">
                        <h4 class="wow fadeInLeft" data-wow-delay="0.5s">Who</h4>
                        <h1 class="wow fadeInLeft" data-wow-delay="0.5s">eizisoft - web design agency based in  India. We don't have clients, but partners.</h1>
                        <a href="<?php echo get_permalink(get_page_by_path('about-us')); ?>" class="pta-about-button btn-fill wow fadeIn"data-wow-delay="0.5s">About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- About Section Ends Here -->


<div class="pta-portfolio">
    <div class="container">
        <div class="col-md-12">
            <nav class="categories">
                <ul class="pta-portfolio_filter">
                    <li><a href="#" class="active" data-filter="*">All</a></li>
                    <li><a href="#" data-filter=".port">Portfolio</a></li>
                    <li><a href="#" data-filter=".design">Design</a></li>
                    <li><a href="#" data-filter=".ecommerce">eCommerce</a></li>
                    <li><a href="#" data-filter=".brand">Branding</a></li>
                    <li><a href="#" data-filter=".webdev">Web Devlopment</a></li>
                </ul>
            </nav>
        </div>
        <div class="col-md-12">
            <div class="row portfolio_container text-center">
                <!-- pta item -->
                <div class="col-md-4 col-sm-6 custompadding  port">
                    <a href="portfolio-item-1.html" class="pta-portfolio_item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/img1.png" alt="image" class="img-responsive" />
                        <div class="pta-portfolio-overlay">
                            <div class="pta-overlay-items">
                                <h5>Lorem Ipsum</h5>
                                <p>
                                    Design
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- pta item end -->

                <!-- pta item -->
                <div class="col-md-4 col-sm-6 custompadding  webdev brand">
                    <a href="portfolio-item-1.html" class="pta-portfolio_item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/img9.png" alt="image" class="img-responsive" />
                        <div class="pta-portfolio-overlay">
                            <div class="pta-overlay-items">
                                <h5>Lorem Ipsum</h5>
                                <p>
                                    Design
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- pta item end -->

                <!-- pta item -->
                <div class="col-md-4 col-sm-6 custompadding  ecommerce brand">
                    <a href="portfolio-item-1.html" class="pta-portfolio_item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.7s">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/img10.jpg" alt="image" class="img-responsive" />
                        <div class="pta-portfolio-overlay">
                            <div class="pta-overlay-items">
                                <h5>Lorem Ipsum</h5>
                                <p>
                                    Design
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- pta item end -->

                <!-- pta item -->
                <div class="col-md-4 col-sm-6 custompadding  design port">
                    <a href="portfolio-item-1.html" class="pta-portfolio_item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.9s">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/img11.jpg" alt="image" class="img-responsive" />
                        <div class="pta-portfolio-overlay">
                            <div class="pta-overlay-items">
                                <h5>Lorem Ipsum</h5>
                                <p>
                                    Design
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- pta item end -->

                <!-- pta item -->
                <div class="col-md-4 col-sm-6 custompadding  brand ecommerce">
                    <a href="portfolio-item-1.html" class="pta-portfolio_item wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.1s">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/img4.png" alt="image" class="img-responsive" />
                        <div class="pta-portfolio-overlay">
                            <div class="pta-overlay-items">
                                <h5>Lorem Ipsum</h5>
                                <p>
                                    Design
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- pta item end -->

                <!-- pta item -->
                <div class="col-md-4 col-sm-6 custompadding  brand ecommerce">
                    <a href="portfolio-item-1.html" class="pta-portfolio_item wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.3s">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/img5.jpg" alt="image" class="img-responsive" />
                        <div class="pta-portfolio-overlay">
                            <div class="pta-overlay-items">
                                <h5>Lorem Ipsum</h5>
                                <p>
                                    Design
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- pta item end -->

                <!-- pta item -->
                <div class="col-md-4 col-sm-6 custompadding  brand ecommerce">
                    <a href="portfolio-item-1.html" class="pta-portfolio_item wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.5s">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/img7.jpg" alt="image" class="img-responsive" />
                        <div class="pta-portfolio-overlay">
                            <div class="pta-overlay-items">
                                <h5>Lorem Ipsum</h5>
                                <p>
                                    Design
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- pta item end -->


                <!-- pta item -->
                <div class="col-md-4 col-sm-6 custompadding   webdev ecommerce">
                    <a href="portfolio-item-1.html" class="pta-portfolio_item wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.7s">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/img2.png" alt="image" class="img-responsive" />
                        <div class="pta-portfolio-overlay">
                            <div class="pta-overlay-items">
                                <h5>Lorem Ipsum</h5>
                                <p>
                                    Design
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- pta item end -->

                <!-- pta item -->
                <div class="col-md-4 col-sm-6 custompadding  brand ecommerce">
                    <a href="portfolio-item-1.html" class="pta-portfolio_item wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.9s">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/img3.png" alt="image" class="img-responsive" />
                        <div class="pta-portfolio-overlay">
                            <div class="pta-overlay-items">
                                <h5>Lorem Ipsum</h5>
                                <p>
                                    Design
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- pta item end -->

                <!-- pta item -->
                <div class="col-md-4 col-sm-6 custompadding  brand ecommerce hidden-md hidden-lg">
                    <a href="portfolio-item-1.html" class="pta-portfolio_item wow fadeInUp" data-wow-duration="2s" data-wow-delay="2s">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/img5.jpg" alt="image" class="img-responsive" />
                        <div class="pta-portfolio-overlay">
                            <div class="pta-overlay-items">
                                <h5>Lorem Ipsum</h5>
                                <p>
                                    Design
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- pta item end -->

            </div>
        </div>
    </div>
</div><!-- Portfolio End -->

<div class="spacer-1"></div>


<!-- Counter Section -->

<div class="counter-section pta-counter-section">
    <div class="container">
        <div class="row text-center">
            <div class="spacer-1 hidden-xs"></div>
            <div class="col-sm-4">
                <div class="counter-up">
                    <div class="counter-icon">
                        <i class="ion-ios-briefcase-outline"></i>
                    </div>
                    <div class="counter">535</div>
                    <div class="counter-text">
                        <h4>Projects Completed</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="counter-up">
                    <div class="counter-icon">
                        <i class="ion-ios-people-outline"></i>
                    </div>
                    <div class="counter">247</div>
                    <div class="counter-text">
                        <h4>Loving Clients</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="counter-up">
                    <div class="counter-icon">
                        <i class="ion-ios-personadd-outline"></i>
                    </div>
                    <div class="counter">12</div>
                    <div class="counter-text">
                        <h4>Awesome Team</h4>
                    </div>
                </div>
            </div>

        </div>
        <div class="spacer-1 hidden-xs"></div>
    </div>

</div>

<!-- Counter Section Ends -->


<div class="spacer-2"></div>

<!-- Call to Action Section Starts Here -->

<div class="container">
    <div class="pta-cta">
        <h4 class="wow fadeInLeft" data-wow-delay="0.5s">hire us</h4>
        <h1 class="wow fadeInLeft" data-wow-delay="0.5s">Check out our 
            <a href="<?php echo get_permalink(get_page_by_path('all-portfolio')); ?>" class="pta-button">portfolio</a> 
            or 
            <br class="hidden-xs">
            <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="pta-button">hire us</a> for your next project.</h1>
    </div>
</div>
<div class="spacer-2"></div>

<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/jquery-2.1.1.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/plugins.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/jquery.counterup.min.js"></script>
<!--<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/menu.js"></script>-->
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/script.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    });
    new WOW().init();
</script>

<?php
get_footer();
