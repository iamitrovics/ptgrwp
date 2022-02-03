<?php
/**
 * Template Name: Products Template
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

    <div class="products-intro">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6">
                    <div class="intro-content pad-right">
                        <h2><?php the_field('custom_title_products_funds'); ?></h2>
                        <?php the_field('content_block_prod_intro'); ?>
                        <a href="<?php the_field('button_link_prod_intro'); ?>" class="btn-cta"><?php the_field('button_label_prod_intro'); ?></a>
                    </div>
                </div>
                <!-- // col  -->

                <div class="col-lg-6 col-md-6">
                    <div class="image-holder">
                    <?php
                    $imageID = get_field('featured_image_prod_page');
                    $image = wp_get_attachment_image_src( $imageID, 'half-image' );
                    $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                    ?> 

                    <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                    </div>
                </div>
                <!-- // image  -->

            </div>
            <!-- // row  -->
        </div>
        <!-- // container  -->
    </div>
    <!-- // intro  -->

    <div class="products-intro">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6">
                    <div class="image-holder">
                    <?php
                    $imageID = get_field('featured_image_prod_page_twenty');
                    $image = wp_get_attachment_image_src( $imageID, 'half-image' );
                    $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                    ?> 

                    <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                    </div>
                </div>
                <!-- // image  -->

                <div class="col-lg-6 col-md-6">
                    <div class="intro-content pad-left">
                        <h2><?php the_field('custom_title_products_funds_twenty'); ?></h2>
                        <?php the_field('content_block_prod_intro_twenty'); ?>
                        <a href="<?php the_field('button_link_prod_intro_twenty'); ?>" class="btn-cta"><?php the_field('button_label_prod_intro_twenty'); ?></a>
                    </div>
                </div>
                <!-- // col  -->                

            </div>
            <!-- // row  -->
        </div>
        <!-- // container  -->
    </div>
    <!-- // intro  -->    

    <div id="product-features">
        <div class="container">
            <div class="row">
            <?php if( have_rows('product_features_product_page') ): ?>
                <?php while( have_rows('product_features_product_page') ): the_row(); ?>

                    <div class="col-lg-4 col-md-6">
                        <div class="feature-card">
                            <img src="<?php the_sub_field('icon'); ?>" alt="">
                            <p><?php the_sub_field('content'); ?></p>
                        </div>
                    </div>
                    <!-- // card  -->

                <?php endwhile; ?>
            <?php endif; ?>
            </div>
            <!-- // row  -->
        </div>
        <!-- // contaienr  -->
    </div>
    <!-- // product features  -->

     <div class="parallax-window" id="bottom-cta" data-parallax="scroll" data-image-src="<?php the_field('background_image_bottom_cta_page'); ?>">
        <div class="overlay"></div>
        <div class="container">
            <div class="cta-content">
                <?php if( get_field('cta_title_page_setup') ): ?>
                    <h2><?php the_field('cta_title_page_setup'); ?></h2>
                <?php endif; ?>
                <p><?php the_field('subtitle_cta_bottom'); ?></p>
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