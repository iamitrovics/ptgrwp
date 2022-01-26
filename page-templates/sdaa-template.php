<?php
/**
 * Template Name: SDAA Template
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
                    <h1><?php the_field('custom_title_sdaa_header'); ?></h1>
                    <h2><?php the_field('subtitle_header_sdaa'); ?></h2>
                    <a href="<?php the_field('button_link_sdaa_header'); ?>" class="btn-cta"><?php the_field('button_label_sdaa_header'); ?></a>
                    <a href="<?php the_field('button_link_btnsec_sda'); ?>" class="btn-sec local-cta wow fadeInUp" data-wow-duration="0.7s" data-wow-delay="0.9s"><span><?php the_field('button_2_label_sdaa'); ?></span></a>

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

    <div id="sdaa-intro">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="intro-text">
                        <span class="small-title"><?php the_field('small_title_sdaa_intro'); ?></span>
                        <h2><?php the_field('section_title_intro_sdaa'); ?></h2>
                        <?php the_field('content_block_intro_sdaa'); ?>
                    </div>
                </div>
                <!-- // text  -->
            </div>
            <!-- // row  -->
        </div>
        <!-- // container  -->
    </div>
    <!-- // intro  -->

    <div id="sdaa-brochure">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="download-wrapper">
                        <div class="image-holder">
                            <?php
                            $imageID = get_field('featured_image_dload_sdaa');
                            $image = wp_get_attachment_image_src( $imageID, 'half-image' );
                            $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                            ?> 

                            <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                        </div>
                        <!-- // image  -->
                        <div class="dload-text">
                            <h3><?php the_field('block_title_sdaa_dload'); ?></h3>
                            <?php the_field('content_block_dload_sdaa'); ?>
                            <a href="<?php the_field('button_link_sdaa_dload'); ?>"  class="btn-cta brochure-btn" data-my-element="popup"><?php the_field('button_label_sdaa_dload'); ?></a>
                        </div>
                        <!-- // text  -->
                    </div>
                    <!-- // wrapper  -->
                </div>
                <!-- // offset  -->
            </div>
            <!-- // row  -->
        </div>
        <!-- // container  -->
    </div>
    <!-- // sdaa brochure  -->

    <div class="sdaa-content--intro">
        <div class="container">
            <header>
                <span class="small-title"><?php the_field('small_title_sdaa_main_intro'); ?></span>
                <h2><?php the_field('section_title_main_sdaa_intro'); ?></h2>
            </header>
        </div>
    </div>
    <!-- // intro  -->

    <div id="sdaa-content">

    <?php if( have_rows('content_blocks_sdaa') ): ?>
        <?php while( have_rows('content_blocks_sdaa') ): the_row(); ?>

            <div class="content-wrapper">
                <?php
                $imageID = get_sub_field('featured_image');
                $image = wp_get_attachment_image_src( $imageID, 'featured_image' );
                $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                ?> 

                <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" />                 
                <div class="container">
                    <div class="content-block">
                        <h3><?php the_sub_field('block_title'); ?></h3>
                        <?php the_sub_field('content_block'); ?>
                    </div>
                    <!-- // content  -->
                </div>
                <!-- // container  -->
            </div>
            <!-- // wrapper  -->

        <?php endwhile; ?>
    <?php endif; ?>

    </div>
    <!-- // content  -->

    <div class="investment-title">
        <h2><?php the_field('section_title_investment_sdaa'); ?></h2>
    </div>

    <div id="investment">
        <div class="container">
            <div class="row">

            <?php if( have_rows('investment_blocks_invest') ): ?>
                <?php while( have_rows('investment_blocks_invest') ): the_row(); ?>

                    <div class="col-lg-4 col-sm-4">
                        <div class="invest-card">
                            <div class="invest-photo">
                                <?php
                                $imageID = get_sub_field('featured_image');
                                $image = wp_get_attachment_image_src( $imageID, 'invest-image' );
                                $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                ?> 

                                <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                            </div>
                            <!-- // photo  -->
                            <div class="invest-desc">
                                <div class="invest-text">
                                    <h3><?php the_sub_field('block_title'); ?></h3>
                                    <h4><?php the_sub_field('subtitle'); ?></h4>
                                    <?php the_sub_field('content_block'); ?>
                                </div>
                                <a href="<?php the_sub_field('button_link'); ?>" class="btn-cta"><?php the_sub_field('button_label'); ?></a>
                            </div>
                            <!-- // desc  -->
                        </div>
                    </div>
                    <!-- // card  -->

                <?php endwhile; ?>
            <?php endif; ?>


            </div>
            <!-- // row  -->
        </div>
        <!-- // container  -->
    </div>
    <!-- // investment  -->

    <div class="parallax-window" id="middle-cta" data-parallax="scroll" data-image-src="<?php the_field('background_image_glance'); ?>">
        <div class="container">
            <div class="cta-content">
                <h2><?php the_field('block_title_gance'); ?></h2>
                <?php the_field('content_block_at_glance'); ?>
                <a href="<?php the_field('button_link_glance'); ?>" class="btn-cta"><?php the_field('button_label_glance'); ?></a>
            </div>
            <!-- // cta content  -->
        </div>
        <!-- // container  -->
    </div>
   <!-- // subscriptions  -->        

     <div class="parallax-window" id="bottom-cta" data-parallax="scroll" data-image-src="<?php the_field('background_image_bottom_cta_sdaa'); ?>">
        <div class="overlay"></div>
        <div class="container">
            <div class="cta-content">
                <h2><?php the_field('cta_title_bottom_cta_sdaa'); ?></h2>
                <a href="<?php the_field('button_link_bottom_cta_sadda'); ?>" class="btn-cta"><?php the_field('button_label_botom_cta_sdaa'); ?></a>
            </div>
            <!-- // cta content  -->
        </div>
        <!-- // container  -->
    </div>
   <!-- // subscriptions  -->       

    <div class="modal-overlay" data-my-element="popup">
        <div class="modal" data-my-element="popup">
            <a class="close-modal">
                <img src="<?php bloginfo('template_directory'); ?>/img/ico/red-close.svg" alt="">
            </a>
            <!-- close modal -->
            <div class="modal-content">
                <div class="modal-content-in">
                    <h3><?php the_field('form_title_popup'); ?></h3>
                    <?php the_field('form_code_poup'); ?>
                </div>
                <!-- /.modal-content-in -->
            </div>
            <!-- content -->
        </div>
        <!-- modal -->
    </div>
    <!-- overlay -->

<?php get_footer(); ?>


    <script type="text/javascript">
    var sectionFirst = new vidbg('#education-header', {
    mp4: '<?php the_field('background_video_sada_header'); ?>',
    poster: '<?php bloginfo('template_directory'); ?>/img/bg/video.jpg',
    });
    </script>