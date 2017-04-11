<?php
/**
 * The template for displaying all single portfolio
 *
 * @package WordPress
 * @subpackage eizisoft
 * @since eizisoft 1.0
 */
get_header();
$postID = get_the_ID();
?>

<div class="spacer hidden-xs"></div>
<div class="pt-portfolio-single" id="scroll-to-top">
    <div class="container">
        <h3  class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="3s">Project eizisoft</h3>
        <h1  class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="3s">
            <?php
            echo get_field('portfolio_title_1st_line', $postID);
            $lineSecond = get_field('portfolio_title_2nd_line', $postID);
            if ($lineSecond != '' || $lineSecond != null) {
                echo '<br class="hidden-xs">' . $lineSecond;
            }
            ?>
        </h1>
        <div class="spacer"></div>
        <div class="row">
            <div class="col-sm-12">

                <?php
                if (have_rows('portfolio_images')):
                    ?>
                    <div class="owl-carousel">
                        <?php
                        while (have_rows('portfolio_images')) : the_row();
                            ?>
                            <div class="pt-portfolio-item item">
                                <img src="<?php echo get_sub_field('portfolio_image'); ?>" alt="" title="" />
                            </div>
                            <?php
                        endwhile;
                        ?>
                    </div>
                    <?php
                endif;
                ?>
                <div class="spacer-1"></div>
            </div>

            <div class="col-md-8 col-sm-7">
                <div class="pt-portfolio-details">
                    <h2  class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0.1s">Description</h2>
                    <?php
                    while (have_posts()) : the_post();
                        the_content();
                    endwhile;
                    ?> 
                </div>
            </div>

            <?php
            if (get_field('project_details', $postID)) {
                ?>
                <div class="col-md-4 col-sm-5">
                    <div class="pt-portfolio-details">
                        <h2  class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0.1s">Project Details</h2>
                        <?php
                        $startedDate = get_field('started', $postID);
                        if ($startedDate != '' || $startedDate != null) {
                            ?>
                            <h6>
                                <span>Started:</span>
                                <?php echo $startedDate; ?>
                            </h6>
                            <?php
                        }
                        $completedDate = get_field('completed', $postID);
                        if ($completedDate != '' || $completedDate != null) {
                            ?>
                            <h6>
                                <span>Completed:</span> 
                                <?php echo $completedDate; ?>
                            </h6>
                            <?php
                        }
                        $totalBudget = get_field('total_budget', $postID);
                        if ($totalBudget != '' || $totalBudget != null) {
                            ?>
                            <h6>
                                <span>Total Budget:</span>
                                <?php echo $totalBudget; ?> 
                            </h6>
                            <?php
                        }
                        $result = get_field('result', $postID);
                        if ($result != '' || $result != null) {
                            ?>
                            <h6>
                                <span>Result:</span> 
                                <?php echo $result; ?>  
                            </h6>
                            <?php
                        }
                        $websiteName = get_field('website_name', $postID);
                        $websiteUrl = get_field('website_url', $postID);
                        if (($websiteName != '' || $websiteName != null) && (($websiteUrl != '' || $websiteUrl != null))) {
                            ?>
                            <h6>
                                <span>
                                    Website:
                                </span> 
                                <a target="_blank" href="<?php echo $websiteUrl; ?>"><?php echo $websiteName; ?></a></h6>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>

<div class="spacer-2"></div>

<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/jquery-2.1.1.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/plugins.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/jquery.counterup.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/script.js"></script>

<script type="text/javascript">
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        items: 3,
        singleItem: true
    });

    jQuery(document).ready(function ($) {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    });

    new WOW().init();
</script>

<?php get_footer(); ?>
