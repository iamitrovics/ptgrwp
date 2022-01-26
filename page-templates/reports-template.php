<?php
/**
 * Template Name: Reports Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

    <?php
    $imageID = get_field('paralax_image_page_header');
    $image = wp_get_attachment_image_src( $imageID, 'full-image' );
    $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
    ?> 

    <header class="parallax-window" id="page-header" data-parallax="scroll" data-image-src="<?php echo $image[0]; ?>">
        <div class="overlay">
            <div class="container">
                <div class="caption">
                    <h1><?php the_field('header_title_page_headr'); ?></h1>
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

   <div id="reports">
       <div class="container">
            <div class="row">
                <?php
                $loop = new WP_Query( array( 'post_type' => 'reports', 'posts_per_page' => 114) ); ?>
                <?php $i=3; ?>  
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                    <div class="col-lg-3 col-sm-6">
                        <div class="report-card wow fadeInUp" data-wow-duration="0.<?php echo $i; ?>s" data-wow-delay="0.5s">
                            <a href="<?php echo get_permalink(); ?>">
                                <span class="date"><?php echo get_the_date( 'F j, Y' ); ?></span>
                                <h4><?php the_title(); ?></h4>
                                <div class="hover-text">
                                    <?php the_field('intro_text_report'); ?>
                                </div>
                                <!-- // hover text  -->
                            </a>
                        </div>
                    </div>
                    <!-- // card  -->

                <?php $i++; $i++; endwhile; ?>
                <?php wp_reset_postdata(); ?>      
            </div>
            <!-- // row  -->
       </div>
       <!-- // container  -->
   </div>
   <!-- // reports  -->    


    <div class="parallax-window" id="bottom-cta" data-parallax="scroll" data-image-src="<?php the_field('background_image_bottom_cta_page'); ?>">
        <div class="overlay"></div>
        <div class="container">
            <div class="cta-content">
                <h2 class="wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.4s"><?php the_field('cta_title_page_setup'); ?></h2>
                <a href="<?php the_field('button_link_age_setuyp_bototm_cta'); ?>" class="btn-cta wow fadeIn" data-wow-duration="0.6s" data-wow-delay="0.6s"><?php the_field('button_label_page_setp'); ?></a>
            </div>
            <!-- // cta content  -->
        </div>
        <!-- // container  -->
    </div>
   <!-- // subscriptions  -->    

<?php get_footer(); ?>
