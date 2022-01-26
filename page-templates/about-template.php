<?php
/**
 * Template Name: About Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

    <header  id="education-header">
        <div class="overlay">
            <div class="container">
                <div class="caption full-caption">
					<span class="small-title"><?php the_field('small_title_about_header'); ?></span>
                    <h1><?php the_field('main_title_about_header'); ?></h1>
                </div>
            </div>
            <!-- // container  -->
        </div>
        <!-- // overlay  -->
    </header>
    <!-- // page header  -->  	

	<div id="about-features">
		<div class="container">
			<div class="row">
				<?php if( have_rows('features_list_about_page') ): ?>
					<?php while( have_rows('features_list_about_page') ): the_row(); ?>

						<div class="col-lg-3 col-md-4">
							<div class="about-card">
								<div class="icon">
									<img src="<?php the_sub_field('icon'); ?>" alt="">
								</div>
								<!-- // icon  -->
								<h3><?php the_sub_field('title'); ?></h3>
								<p><?php the_sub_field('description'); ?></p>
							</div>
						</div>
						<!-- // acrd  -->

					<?php endwhile; ?>
				<?php endif; ?>
				<!--
				<div class="col-lg-3 col-md-8">
					<div class="cta-block">
						<div class="cta-caption">
							<h4><?php the_field('title_cta_block_about'); ?></h4>
							<a href="<?php the_field('button_link_cta_block_aobut'); ?>" class="btn-cta"><?php the_field('button_label_cta_block_about'); ?></a>
						</div>
					</div>
				</div>
				-->
				<!-- // block  -->
			</div>
			<!-- // row  -->
		</div>
		<!-- // container  -->
	</div>
	<!-- // features  -->

	<div id="about-team">
		<div class="container">
			<header>
				<h2><?php the_field('team_title_about'); ?></h2>
			</header>
			<div class="team-wrapper">
				<?php
				$loop = new WP_Query( array( 'post_type' => 'team', 'posts_per_page' => 115) ); ?>  
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

					<div class="team-card">
						<div class="team-photo">
							<?php
							$imageID = get_field('profile_image_team');
							$image = wp_get_attachment_image_src( $imageID, 'team-image' );
							$alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
							?> 

							<img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
						</div>
						<!-- // photo  -->
						<div class="team-desc">
							<span class="title"><?php the_field('team_position_member'); ?></span>
							<h3><?php the_title(); ?></h3>
							<div class="socials">
								<?php if( get_field('linkedin_profile_member') ): ?>
									<a href="<?php the_field('linkedin_profile_member'); ?>" target="_blank"><span class="icon-linkedin-brands"></span></a>
								<?php endif; ?>
							</div>
							<!-- // socials  -->
						</div>
						<!-- // desc  -->
					</div>
					<!-- // card  -->

				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>      
			</div>
			<!-- // wrapper  -->
		</div>
	</div>
	<!-- // team  -->

	<section id="perfomances">
		<div class="container">
			<div class="row">

				<div class="col-xl-5 col-md-5">
					<div class="intro-title">
						<h2><?php the_field('section_title_poerfomance_about'); ?></h2>
						<a href="<?php the_field('button_link_perf_about'); ?>" class="btn-cta"><?php the_field('button_label_perf_about'); ?></a>
					</div>
				</div>
				<!-- // intro title  -->

				<div class="col-xl-6 offset-xl-1 col-md-7">
					<div class="content-block">
						<?php the_field('content_block_perf_about'); ?>
					</div>
				</div>
				<!-- // contnet  -->

			</div>
			<!-- // row  -->
		</div>
		<!-- // containe  -->
	</section>
	<!-- // perfomances  -->

	<section id="strategic-partners">
		<div class="container">
			<header>
				<h2><?php the_field('block_title_strateg'); ?></h2>
				<?php the_field('intro_text_strateg_page'); ?>
			</header>
			<!-- // header  -->
			<div class="partenrs-list">

			<?php if( have_rows('partners_list_about') ): ?>
				<?php while( have_rows('partners_list_about') ): the_row(); ?>

					<div class="partner-card">
						<div class="partner-intro">
							<span class="small-title"><?php the_sub_field('small_title') ;?></span>
							<h3><?php the_sub_field('main_title'); ?></h3>

							<?php if( get_sub_field('link_to') ): ?>
							<a href="<?php the_sub_field('link_to'); ?>" target="_blank" class="btn-more"><span>Learn More</span></a>
							<?php endif; ?>

						</div>
						<!-- //  intro  -->
						<div class="partner-desc">
							<?php the_sub_field('description'); ?>
							<img src="<?php the_sub_field('logo'); ?>" alt="">
						</div>
						<!-- // desc  -->
					</div>
					<!-- // card  -->

				<?php endwhile; ?>
			<?php endif; ?>


			</div>
			<!-- // list  -->
		</div>
		<!-- // container  -->
	</section>
	<!-- // partners  -->

	<?php 
	$values = get_field( 'background_image_bottom_cta_about' );
	if ( $values ) { ?>
	
		<div class="parallax-window" id="bottom-cta" data-parallax="scroll" data-image-src="<?php the_field('background_image_bottom_cta_about'); ?>">
			<div class="overlay"></div>
			<div class="container">
				<div class="cta-content">
					<h2><?php the_field('cta_title_bottom_cta_about'); ?></h2>
					<a href="<?php the_field('button_link_cta_about_page'); ?>" class="btn-cta"><?php the_field('button_label_bottom_about'); ?></a>
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
							<h2><?php the_field('cta_title_bottom_cta_about'); ?></h2>
							<a href="<?php the_field('button_link_cta_about_page'); ?>" class="btn-cta"><?php the_field('button_label_bottom_about'); ?></a>
						</div>
						<!-- // cta content  -->
					</div>
					<!-- // container  -->					
				</div>
            </div>
            <!-- // video  -->
		</div>

	<?php } ?>

<?php get_footer(); ?>

    <?php 
    $values = get_field( 'background_image_bottom_cta_about' );
    if ( $values ) { ?>
    
    <?php 
    } else { ?>
        
        <script type="text/javascript">
        var sectionFirst = new vidbg('#cta-video', {
        mp4: '<?php the_field('video_background_about_bottom'); ?>',
        poster: '<?php bloginfo('template_directory'); ?>/img/bg/video.jpg',
        });
        </script>

    <?php } ?>    

	<script type="text/javascript">
    var sectionFirst = new vidbg('#education-header', {
    mp4: '<?php the_field('featured_video_about_header'); ?>',
    poster: '<?php bloginfo('template_directory'); ?>/img/bg/video.jpg',
    });
    </script>