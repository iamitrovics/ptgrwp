<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Symbiotica_Starter_Theme
 */

get_header();
?>

    <?php 
    $values = get_field( 'paralax_image_page_header' );
    if ( $values ) { ?>
    
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
    
    <?php 
    } else { ?>
        
        <header id="header-banner">
            <div id="header-video">        
                <div class="overlay">
                    <div class="container">
                        <div class="caption">
                            <h1><?php the_field('header_title_page_headr'); ?></h1>
                        </div>
                    </div>
                    <!-- // container  -->
                </div>
                <!-- // overlay  -->
            </div>
            <!-- // video  -->
        </header>

    <?php } ?>

    <div id="breadcrumb">
        <div class="container">
            <ul>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                <li><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></li>
            </ul>
        </div>
    </div>
    <!-- // breadcrumb  -->

    <div id="regular-page">
        <div class="container">
            <div class="row">

                <div class="col-xl-4">
                    <div class="intro-title">
                        <h2><?php the_title(); ?></h2>
                    </div>
                </div>
                <!-- // title  -->

                <div class="col-xl-7 offset-xl-1">
                    <div class="main-content">
                    <?php while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                    <?php endwhile; // end of the loop. ?> 
                    </div>
                </div>
                <!-- // content  -->

            </div>
            <!-- // row  -->
        </div>
    </div>
    <!-- // regular page  -->

	<?php 
	$values = get_field( 'background_image_bottom_cta_page' );
	if ( $values ) { ?>
	
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
	
	<?php 
	} else { ?>
		
        <div id="cta-banner">
            <div id="cta-video">        
				<div class="overlay">
					<div class="container">
						<div class="cta-content">
                            <h2><?php the_field('cta_title_page_setup'); ?></h2>
                            <a href="<?php the_field('button_link_age_setuyp_bototm_cta'); ?>" class="btn-cta"><?php the_field('button_label_page_setp'); ?></a>
						</div>
						<!-- // cta content  -->
					</div>
					<!-- // container  -->					
				</div>
            </div>
            <!-- // video  -->
		</div>

	<?php } ?>         

<?php
get_footer(); ?>

    <?php 
    $values = get_field( 'background_image_bottom_cta_page' );
    if ( $values ) { ?>
    
    <?php 
    } else { ?>
        
        <script type="text/javascript">
        var sectionFirst = new vidbg('#cta-video', {
        mp4: '<?php the_field('background_video_general_bottom'); ?>',
        poster: '<?php bloginfo('template_directory'); ?>/img/bg/video.jpg',
        });
        </script>

    <?php } ?>    

    <?php 
    $values = get_field( 'paralax_image_page_header' );
    if ( $values ) { ?>
    
    <?php 
    } else { ?>
        
        <script type="text/javascript">
        var sectionFirst = new vidbg('#header-video', {
        mp4: '<?php the_field('video_background_general_header'); ?>',
        poster: '<?php bloginfo('template_directory'); ?>/img/bg/video.jpg',
        });
        </script>

    <?php } ?>    