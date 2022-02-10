<?php
/**
 * Template Name: Contact Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

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

    <div id="contact-page">
        <div class="container">
            <div class="row">

                <div class="col-xl-4 col-lg-5">
                    <div class="contact-intro">
                        <h2><?php the_title(); ?></h2>
                        <?php while ( have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>
                        <?php endwhile; // end of the loop. ?>           
						<div class="socials">
							<ul>
							<?php if( have_rows('socials_list_general', 'options') ): ?>
								<?php while( have_rows('socials_list_general', 'options') ): the_row(); ?>

									<?php if (get_sub_field('icon') == 'Linkedin') { ?>
										<li><a href="<?php the_sub_field('link_to'); ?>" target="_blank"><span class="icon-linkedin-brands"></span></a></li>
									<?php } elseif (get_sub_field('icon') == 'Twitter') { ?>
										<li><a href="<?php the_sub_field('link_to'); ?>" target="_blank"><span class="icon-twitter-brands"></span></a></li>
									<?php } elseif (get_sub_field('icon') == 'Facebook') { ?>
										<li><a href="<?php the_sub_field('link_to'); ?>" target="_blank"><span class="icon-facebook-brands"></span></a></li>
									<?php } elseif (get_sub_field('icon') == 'Instagram') { ?>
										<li><a href="<?php the_sub_field('link_to'); ?>" target="_blank"><span class="icon-instagram-brands"></span></a></li>
							        <?php } elseif (get_sub_field('icon') == 'Telegram') { ?>
										<li><a href="<?php the_sub_field('link_to'); ?>" target="_blank"><span class="icon-telegram-plane-brands"></span></a></li>
									<?php } elseif (get_sub_field('icon') == 'TikTok') { ?>
										<li><a href="<?php the_sub_field('link_to'); ?>" target="_blank"><span class="icon-tiktok-brands"></span></a></li>                                        
									<?php } ?>   

								<?php endwhile; ?>
							<?php endif; ?>
							</ul>
						</div>
						<!-- // socials  -->                                      
                    </div>
                </div>
                <!-- // intro  -->

                <div class="col-xl-7 offset-xl-1 col-lg-7">
                    <div class="contact-form">
                        <?php the_field('form_code_contact'); ?>
                    </div>
                </div>
                <!-- // form  -->

            </div>
            <!-- // row  -->
        </div>
        <!-- // container  -->
    </div>
    <!-- // contact page  -->  
    
    <section id="contact-info">
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <div class="contact-card">
                        <div class="info-header">
                            <div class="icon">
                                <img src="<?php the_field('icon_email_contact'); ?>" alt="">
                            </div>
                            <span class="label"><?php the_field('title_email_contact'); ?></span>
                        </div>
                        <!-- // icon  -->
                        <div class="contact-text">
                            <span class="title"><a href="mailto:<?php the_field('email_address_contact_page'); ?>"><?php the_field('email_address_contact_page'); ?></a></span>
                        </div>
                        <!-- // tedt  -->
                    </div>  
                </div>
                <!-- // ard  -->   
                
                <div class="col-md-4">
                    <div class="contact-card">
                        <div class="info-header">
                            <div class="icon">
                                <img src="<?php the_field('icon_phone_contact'); ?>" alt="">
                            </div>
                            <span class="label"><?php the_field('title_phone_contact'); ?></span>
                        </div>
                        <!-- // icon  -->
                        <div class="contact-text">
                            <span class="title"><a href="tel:<?php the_field('phone_number_contact_page'); ?>"><?php the_field('phone_number_contact_page'); ?></a></span>
                        </div>
                        <!-- // tedt  -->
                    </div>  
                </div>
                <!-- // ard  -->                 
                
                <div class="col-md-4">
                    <div class="contact-card">
                        <div class="info-header">
                            <div class="icon">
                                <img src="<?php the_field('icon_works_contact'); ?>" alt="">
                            </div>
                            <span class="label"><?php the_field('title_work_contact'); ?></span>
                        </div>
                        <!-- // icon  -->
                        <div class="contact-text">
                            <span class="title"><?php the_field('work_hours_contact_page'); ?></span>
                        </div>
                        <!-- // tedt  -->
                    </div>  
                </div>
                <!-- // ard  -->                      

            </div>
            <!-- // row  -->
        </div>
        <!-- // container  -->
    </section>
    <!-- // contact info  -->

    <div id="map-holder">
        <?php echo do_shortcode('[wpgmza id="1"]'); ?>
    </div>    

<?php get_footer(); ?>

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