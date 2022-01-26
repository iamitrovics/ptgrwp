<?php get_header(); ?>

    <header id="hero-banner">


        <?php if (get_field('type_of_banner_hero') == 'Video Background') { ?>
            <div id="hero-video">        
                
                <div class="overlay"></div>

                    <div class="caption-overlay">
                    <div class="container">
                        <div class="hero-caption">
                            <h1 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.7s"><?php the_field('main_title_video_hero'); ?></h1>
                            <div class="hero-ctas">
                                <a href="<?php the_field('cta_button_link_hero'); ?>" class="btn-cta wow fadeInUp" data-wow-duration="0.7s" data-wow-delay="0.8s"><?php the_field('cta_button_label_hero'); ?></a>
                                <a href="<?php the_field('secondary_button_link_hero'); ?>" class="btn-sec wow fadeInUp" data-wow-duration="0.7s" data-wow-delay="0.9s"><span><?php the_field('secondary_button_label_hero'); ?></span></a>
                            </div>
                            <!-- // ctas  -->
                        </div>
                        <!-- // caption  -->
                    </div>
                    <!-- // container  -->
                </div>
                <!-- // caption  -->
            </div>
            <!-- // video  -->
        <?php } elseif (get_field('type_of_banner_hero') == 'Slider') { ?>

        <?php } ?>   

    </header>
    <!-- // hero banner  -->

    <section id="features">
        <header>
            <span class="title wow fadeIn"  data-wow-duration="0.3s" data-wow-delay="0.5s"><?php the_field('small_title_features_home'); ?></span>
            <h2 class="wow fadeIn"  data-wow-duration="0.4s" data-wow-delay="0.6s"><?php the_field('section_title_features_home'); ?></h2>
            <div class="wow fadeIn"  data-wow-duration="0.6s" data-wow-delay="0.7s">
                <img src="<?php bloginfo('template_directory'); ?>/img/ico/bitcoin-gold.png" alt="" class="ico">
                <?php the_field('intro_text_features_home'); ?>
                <img src="<?php bloginfo('template_directory'); ?>/img/ico/bitcoin-gold.png" alt="" class="ico">

            </div>
        </header>
        <!-- // header  -->
    </section>
    <!-- // features  -->

    <div id="features-list">
        <div class="container">
            <div class="row">

                <?php if( have_rows('features_repe_home') ): ?>
                    <?php $i=5; ?>
                    <?php while( have_rows('features_repe_home') ): the_row(); ?>

                        <div class="col-lg-4 col-sm-6">
                            <div class="feature-card wow fadeIn" data-wow-duration="0.<?php echo $i; ?>s" data-wow-delay="0.<?php echo $i; ?>s">
                                <div class="feature-header">
                                    <div class="feature-text">
                                        <h3><?php the_sub_field('main_title'); ?></h3>
                                        <div class="hidden-content">
                                            <p><?php the_sub_field('hover_text'); ?></p>
                                            <a href="<?php the_sub_field('button_link'); ?>" class="btn-more"><span><?php the_sub_field('button_label'); ?></span></a>
                                        </div>
                                    </div>
                                    <!-- // text  -->
                                </div>
                                <!-- // header  -->
                                <div class="feature-desc">
                                    <a href="<?php the_sub_field('button_link'); ?>" class="btn-more"><span><?php the_sub_field('button_label'); ?></span></a>
                                    <div class="feature-image">
                                        <?php
                                        $imageID = get_sub_field('featured_image');
                                        $image = wp_get_attachment_image_src( $imageID, 'feat-image' );
                                        $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                        ?> 

                                        <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                                    </div>
                                    <!-- // image  -->
                                </div>
                                <!-- // desc  -->
                            </div>
                        </div>
                        <!-- // card  -->

                    <?php $i++; $i++; endwhile; ?>
                <?php endif; ?>

            </div>
            <!-- // row  -->
        </div>
        <!-- // container  -->
    </div>
    <!-- // features list  -->

    <div id="about">
        <div class="container">
            <div class="row">

                <div class="col-xl-5 col-lg-5 col-sm-6">
                    <div class="about-intro">
                        <h2 class="wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.5s"><?php the_field('section_title_about_home'); ?></h2>
                        <a href="<?php the_field('button_link_about_home'); ?>" class="btn-cta wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.7s"><?php the_field('button_label_about_home'); ?></a>
                    </div>
                </div>
                <!-- // intro  -->

                <div class="col-xl-6 offset-xl-1 col-lg-7 col-sm-6">
                    <div class="intro-text wow fadeIn" data-wow-duration="0.7s" data-wow-delay="0.8s">
                        <?php the_field('intro_text_about_home'); ?>
                    </div>
                    <!-- // intro  -->
                </div>
                <!-- // text  -->

            </div>
            <!-- // row  -->
        </div>
        <!-- // container  -->
    </div>
    <!-- // about  -->

    <div id="stats-wrapper">
        <div class="container">
            <header>
                <h3><?php the_field('stats_title'); ?></h3>
            </header>
                <div class="stats">
                    <div class="row">
                    <?php if( have_rows('stats_list_home_about') ): ?>
                        <?php $i=1; ?>
                        <?php while( have_rows('stats_list_home_about') ): the_row(); ?>

                            <div class="col-lg-3 col-sm-3">
                                <div class="stat-card"> 
                                    <div class="counter">
                                        <span class="value">
                                            
                                            <span class='numscroller' data-min='1' data-max='<?php the_sub_field('value'); ?>' data-delay='<?php echo $i; ?>' data-increment='1'>
                                            <small><?php the_sub_field('value'); ?></small>
                                            </span><span class="after">%</span>

                                    </div>
                                    <span class="label"><?php the_sub_field('label'); ?></span>
                                </div>
                            </div>
                            <!-- // card  -->

                        <?php $i++; endwhile; ?>
                    <?php endif; ?>
                    </div>
                    <!-- // row  -->
                </div>
                <!-- // stats  -->            
        </div>
    </div>
    <!-- // stats  -->

    <section id="why-us">
        <img src="<?php the_field('background_image_why_home'); ?>" alt="" class="img-shape wow fadeIn">
        <div class="container">
            <div class="why-wrapper">
                <div class="row">

                    <div class="col-xl-5 col-lg-5">
                        <div class="why-intro">
                            <span class="small-title wow fadeIn" data-wow-duration="0.4s" data-wow-delay="0.5s"><?php the_field('small_title_why_home'); ?></span>
                            <h2 class="wow fadeIn" data-wow-duration="0.6s" data-wow-delay="0.7s"><?php the_field('section_title_why_home'); ?></h2>
                        </div>  
                    </div>
                    <!-- // intro  -->

                    <div class="col-xl-6 offset-xl-1 col-lg-7">
                        <div class="why-blocks">
                            <div class="row">
                                <?php if( have_rows('why_blocks_home') ): ?>
                                    <?php $i=2; ?>
                                    <?php while( have_rows('why_blocks_home') ): the_row(); ?>

                                        <div class="col-lg-6 col-sm-4">
                                            <div class="why-card wow fadeInUp" data-wow-duration="0.<?php echo $i; ?>s" data-wow-delay="0.<?php echo $i; ?>s">
                                                <div class="why-icon">
                                                    <img src="<?php the_sub_field('icon'); ?>" alt="">
                                                </div>
                                                <!-- // icon  -->
                                                <div class="why-text">
                                                    <h3><?php the_sub_field('title'); ?></h3>
                                                    <p><?php the_sub_field('text'); ?></p>
                                                </div>
                                                <!-- // text  -->
                                            </div>
                                        </div>
                                        <!-- // card  -->

                                    <?php $i++; $i++; $i++; endwhile; ?>
                                <?php endif; ?>
                            </div>
                            <!-- // row  -->
                        </div>
                    </div>
                    <!-- // blocks  -->

                </div>
                <!-- // row  -->
            </div>
            <!-- // wrapper  -->
        </div>
        <!-- // container  -->
    </section>
    <!-- // why us  -->


    <div class="parallax-window" id="middle-cta" data-parallax="scroll" data-image-src="<?php the_field('background_image_middle_cta'); ?>">
        <div class="container">
            <div class="cta-content">
                <h2 class="wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.5s"><?php the_field('section_title_middle_cta'); ?></h2>
                <div class="wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.7s">
                    <?php the_field('cta_content_middle_cta'); ?>
                </div>
                <a href="<?php the_field('button_link_middle_cta_home'); ?>" class="btn-cta wow fadeIn" data-wow-duration="0.6s" data-wow-delay="0.8s"><?php the_field('button_label_middle_cta'); ?></a>
            </div>
            <!-- // cta content  -->
        </div>
        <!-- // container  -->
    </div>
   <!-- // subscriptions  -->    

   <div id="brands">
       <div class="container">
           <header>
               <h2 class="wow fadeIn" data-wow-duration="0.4s" data-wow-delay="0.3s"><?php the_field('section_title_brands_home'); ?></h2>
           </header>
           <!-- // header  -->
           <div id="brands-slider" class="wow fadeIn" data-wow-duration="0.4s" data-wow-delay="0.7s">
            <?php if( have_rows('brands_list_home') ): ?>
                <?php while( have_rows('brands_list_home') ): the_row(); ?>

                    <div class="item">
                        <div class="logo">
                            <img src="<?php the_sub_field('logo'); ?>" alt="">
                        </div>
                    </div>
                    <!-- // item  -->

                <?php endwhile; ?>
            <?php endif; ?>
           </div>
           <!-- // slider  -->
       </div>
       <!-- // container  -->
   </div>
   <!-- // brands  -->

   <section id="experience">
       <div class="container">
            <div class="row">

                <div class="col-xl-5 col-lg-5 col-sm-6">
                    <div class="exp-intro">
                        <h2 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.4s"><?php the_field('block_title_exp_home'); ?></h2>
                    </div>
                </div>
                <!-- // intro  -->

                <div class="col-xl-6 offset-xl-1 col-lg-7 col-sm-6">
                    <div class="exp-content wow fadeIn" data-wow-duration="0.4s" data-wow-delay="0.7s">
                        <?php the_field('intro_text_exp_home'); ?>
                    </div>
                </div>
                <!-- // contentn  -->

            </div>
            <!-- // row  -->
            <!--
            <div class="exp-list">
                <div class="row">
                    <?php if( have_rows('exp_list_home') ): ?>
                        <?php $i=3; ?>
                        <?php while( have_rows('exp_list_home') ): the_row(); ?>

                            <div class="col-lg-4 col-sm-4">
                                <div class="exp-card wow fadeInUp" data-wow-duration="0.<?php echo $i; ?>s" data-wow-delay="0.<?php echo $i; ?>s">
                                    <div class="exp-icon">
                                        <img src="<?php the_sub_field('icon'); ?>" alt="">
                                    </div>
                                    <div class="exp-text">
                                        <h3><?php the_sub_field('title'); ?></h3>
                                        <p><?php the_sub_field('text'); ?></p>
                                        <a href="<?php the_sub_field('button_link'); ?>" class="btn-more"><span><?php the_sub_field('button_label'); ?></span></a>
                                    </div>
                                </div>
                            </div>

                        <?php $i++; $i++; $i++; endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
           -->
       </div>
       <!-- // container  -->
   </section>
   <!-- // experience  -->

   <div id="quotes">
       <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div id="quotes-slider" class="wow fadeIn" data-wow-duration="0.6s" data-wow-delay="0.3s">
                        <?php if( have_rows('quotes_list_home') ): ?>
                            <?php while( have_rows('quotes_list_home') ): the_row(); ?>

                                <div class="item">
                                    <div class="quote-card">
                                        <?php the_sub_field('quote'); ?>
                                        <span class="author">- <?php the_sub_field('author'); ?></span>
                                    </div>
                                </div>
                                <!-- // quote  -->

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <!-- // slider  -->
                </div>
            </div>
            <!-- // row  -->
       </div>
       <!-- // container  -->
   </div>
   <!-- // quotes  -->

    <?php 
    $values = get_field( 'background_image_bottom_cta' );
    if ( $values ) { ?>
        
        <div class="parallax-window" id="bottom-cta" data-parallax="scroll" data-image-src="<?php the_field('background_image_bottom_cta'); ?>">
            <div class="overlay"></div>
            <div class="container">
                <div class="cta-content">
                    <h2 class="wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.4s"><?php the_field('cta_title_bottom_cta_home'); ?></h2>
                    <a href="<?php the_field('button_link_bottom_cta_home'); ?>" class="btn-cta wow fadeIn" data-wow-duration="0.6s" data-wow-delay="0.6s"><?php the_field('button_label_bottom_cta'); ?></a>
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
                            <h2 class="wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.4s"><?php the_field('cta_title_bottom_cta_home'); ?></h2>
                            <a href="<?php the_field('button_link_bottom_cta_home'); ?>" class="btn-cta wow fadeIn" data-wow-duration="0.6s" data-wow-delay="0.6s"><?php the_field('button_label_bottom_cta'); ?></a>
						</div>
						<!-- // cta content  -->
					</div>
					<!-- // container  -->					
				</div>
            </div>
            <!-- // video  -->
		</div>

    <?php } ?>


   
   
   <div id="reports">
       <div class="container">
            <header>
                <h2 class="wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.4s"><?php the_field('block_title_reports_home'); ?></h2>
            </header>

            <?php $hasposts = get_posts('post_type=reports'); ?>

            <?php if( empty ( $hasposts ) ) { ?>
                <div class="notice-reports wow fadeInUp" data-wow-duration="0.7s" data-wow-delay="0.7s">
                    <?php the_field('notice_text_reports'); ?>
                </div>  
            <?php } ?>


            <div class="row">


                <?php
                $loop = new WP_Query( array( 'post_type' => 'reports', 'posts_per_page' => 4) ); ?>
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
            
            <?php $hasposts = get_posts('post_type=reports'); ?>
            <?php if( !empty ( $hasposts ) ) { ?>
                <footer>
                    <a href="<?php the_field('button_link_bottom_reports_home'); ?>" data-wow-duration="0.7s" data-wow-delay="0.7s" class="btn-cta wow fadeIn"><?php the_field('button_label_reports_home'); ?></a>
                </footer>
            <?php } ?>
            
       </div>
       <!-- // container  -->
   </div>
   <!-- // reports  -->

<?php get_footer(''); ?>

    <script src="<?php echo get_template_directory_uri(); ?>/js/numscroller-1.0.js"></script> 

    <script type="text/javascript">
    var sectionFirst = new vidbg('#hero-video', {
    mp4: '<?php the_field('video_background_home'); ?>',
    poster: '<?php bloginfo('template_directory'); ?>/img/bg/video.jpg',
    });
    </script>

    <?php 
    $values = get_field( 'background_image_bottom_cta' );
    if ( $values ) { ?>
    
    <?php 
    } else { ?>
        
        <script type="text/javascript">
        var sectionFirst = new vidbg('#cta-video', {
        mp4: '<?php the_field('background_video_middle_cta_home'); ?>',
        poster: '<?php bloginfo('template_directory'); ?>/img/bg/video.jpg',
        });
        </script>

    <?php } ?>    
    
	<script>
		window.addEventListener("load", function(){
			setTimeout(
				function open(event){
					document.querySelector(".popup").style.display = "flex";
				},
				<?php the_field('delay_time', 'options'); ?>
			)
		});


		document.querySelector("#close").addEventListener("click", function(){
			document.querySelector(".popup").style.display = "none";
		});		
	</script>