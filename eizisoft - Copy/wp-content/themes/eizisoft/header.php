<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage eizisoft
 * @since eizisoft 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Poppins:700,600,400' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Quicksand:700,400,300' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Work+Sans:700,600,400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
        <link href='https://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css"> <!-- CSS reset -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ionicons.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css"> <!-- Resource style -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css"> <!-- Resource style -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-2.css"> <!-- Resource style -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lightcase.css"> 

        <script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/modernizr.js"></script>

        <?php wp_head(); ?>




        <title><?php wp_title('|', true, 'right'); ?></title>
    </head>
    <body <?php body_class(); ?>>
<!--        <div id="loading">
            <div id="loading-image" ><img src="<?php echo get_template_directory_uri(); ?>/images/preloader.gif" alt="Loading..." /></div>
        </div>-->

        <div id="left"></div>
        <div id="right"></div>
        <div id="top"></div>
        <div id="bottom"></div>

        <div class="wrapper">
            <a href="<?php echo get_site_url(); ?>" class="logo">eizisoft<span>.</span></a>
            <a href="#menu" >
                <div class="nav-trigger" id="nav-trigger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </a>

            <div class="menu">
                <div class="menu-container">
                    <ul class="menu-list">
                        <li class="dropdown"><a class="page-scroll" href="<?php echo get_permalink(get_page_by_path('home')); ?>">Home</a></li>
                        <li class="dropdown"><a class="page-scroll" href="<?php echo get_permalink(get_page_by_path('about-us')); ?>">About</a></li>
                        <li class="dropdown"><a class="page-scroll" href="<?php echo get_permalink(get_page_by_path('all-portfolio')); ?>">Portfolio</a></li>
                        <!--<li class="dropdown"><a class="page-scroll" href="services.html">Services</a></li>-->
                        <li class="dropdown"><a class="page-scroll" href="<?php echo get_permalink(get_page_by_path('contact')); ?>">Contact</a></li>
                    </ul>

                    <div class="menu-social">
                        <ul>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <!--<li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>-->
                            <!--<li><a href="#"><i class="ion-social-dribbble-outline"></i></a></li>-->
                            <li><a href="#"><i class="ion-social-facebook-outline"></i></a></li>
                            <li><a href="#"><i class="ion-social-github"></i></a></li>
                        </ul>
                    </div>

                </div>
            </div>