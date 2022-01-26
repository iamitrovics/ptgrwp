<?php
/**
 * Template Name: Education Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

    <header  id="education-header">
        <div class="overlay">
            <div class="container">
                <div class="caption">
                    <h1><?php the_field('header_title_page_headr'); ?></h1>
                    <a href="<?php the_field('button_link_page_header'); ?>" class="btn-cta local-cta"><?php the_field('button_label_page_header'); ?></a>
                </div>
            </div>
            <!-- // container  -->
        </div>
        <!-- // overlay  -->
    </header>
    <!-- // page header  -->    

    <div id="breadcrumb">
        <div class="container">
            <ul>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                <li><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></li>
            </ul>
        </div>
    </div>
    <!-- // breadcrumb  -->	

    <section id="education-intro">
        <div class="container">
            <div class="row">
                
                <div class="col-xl-5 col-lg-5">
                    <div class="intro-title">
                        <h2><?php the_field('custom_block_title_education_intro'); ?></h2>
                    </div>
                </div>
                <!-- // toitle  -->

                <div class="col-xl-6 offset-xl-1 col-lg-7">
                    <div class="intro-content">
                    <?php while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                    <?php endwhile; // end of the loop. ?> 
                    <div class="row packages">
                        <?php if( have_rows('packages_list_edu_page') ): ?>
                            <?php while( have_rows('packages_list_edu_page') ): the_row(); ?>

                                <div class="col-lg-4 col-sm-4 col-xs-4">
                                    <div class="package-card">
                                        <div class="stars">
                                            <?php if (get_sub_field('stars') == '1') { ?>
                                                <span class="icon-star-solid"></span>
                                            <?php } elseif (get_sub_field('stars') == '2') { ?>
                                                <span class="icon-star-solid"></span>
                                                <span class="icon-star-solid"></span>
                                            <?php } elseif (get_sub_field('stars') == '3') { ?>
                                                <span class="icon-star-solid"></span>
                                                <span class="icon-star-solid"></span>
                                                <span class="icon-star-solid"></span>
                                            <?php } ?>                                               
                                        </div>
                                        <span class="title"><?php the_sub_field('title'); ?></span>
                                    </div>
                                </div>
                                <!-- // card  -->

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <!-- // ow  -->
                    </div>
                </div>
                <!-- // content  -->

            </div>
            <!-- // row  -->
        </div>
        <!-- // container  -->
    </section>
    <!-- // intro  -->

    <div id="packages">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">

                        <?php if( have_rows('packages_list_education_listing') ): ?>
                            <?php while( have_rows('packages_list_education_listing') ): the_row(); ?>

                                <div class="col-lg-4 col-md-6">
                                    <div class="package-card">
                                        <div class="package-header">
                                            <header>
                                                <span class="title"><?php the_sub_field('title'); ?></span>
                                                <span class="subtitle"><?php the_sub_field('subtitle'); ?></span>
                                            </header>
                                        </div>
                                        <!-- // header  -->
                                        <div class="package-text">
                                            <?php the_sub_field('content'); ?>
                                            <a href="<?php the_sub_field('button_link'); ?>" class="btn-cta"><?php the_sub_field('button_label'); ?></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- // card  -->

                            <?php endwhile; ?>
                        <?php endif; ?>

                    </div>
                    <!-- // row  -->

                </div>
                <!-- // col  -->

            </div>
            <!-- // row  -->
        </div>
        <!-- // container  -->
    </div>
    <!-- // packages  -->

    <div id="bottom-notice">
        <div class="contaienr">
            <?php the_field('bottom_notice_edu_page'); ?>
        </div>
    </div>
    <!-- // notice  -->

    <div id="pro-package">
        <div class="container">

            <div class="row">

                <div class="col-lg-6 col-sm-6">
                    <div class="pro-intro">
                        <header>
                            <h2><?php the_field('block_title_pro_package'); ?></h2>
                        </header>                        
                        <?php the_field('intro_text_pro_package'); ?>
                    </div>
                </div>
                <!-- // intro  -->

                <div class="col-lg-5 offset-lg-1 col-sm-6">
                    <div class="package-card">
                        <div class="package-text">
                            <?php the_field('package_features_pro_package'); ?>
                            <a href="<?php the_field('button_link_pro_package'); ?>" class="btn-cta"><?php the_field('button_label_pro_package'); ?></a>
                        </div>
                        <!-- // desc  -->
                    </div>
                </div>
                <!-- // card  -->

            </div>
            <!-- // row  -->
        </div>
        <!-- // container  -->
    </div>
    <!-- // pro package  -->

     <div class="parallax-window" id="bottom-cta" data-parallax="scroll" data-image-src="<?php the_field('background_image_bottom_cta_page'); ?>">
        <div class="overlay"></div>
        <div class="container">
            <div class="cta-content">
                <h2><?php the_field('cta_title_page_setup'); ?></h2>
                <a href="<?php the_field('button_link_age_setuyp_bototm_cta'); ?>" class="btn-cta"><?php the_field('button_label_page_setp'); ?></a>
            </div>
            <!-- // cta content  -->
        </div>
        <!-- // container  -->
    </div>
   <!-- // subscriptions  -->       

<?php get_footer(); ?>

    <script type="text/javascript">
    var sectionFirst = new vidbg('#education-header', {
    mp4: '<?php the_field('video_background_general_header'); ?>',
    poster: '<?php bloginfo('template_directory'); ?>/img/bg/video.jpg',
    });
    </script>