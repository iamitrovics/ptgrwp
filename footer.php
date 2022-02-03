<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Symbiotica_Starter_Theme
 */

?>

	<footer id="page-footer">
		<div class="container">
			<div class="row">
			
				<div class="col-lg-3 col-sm-6">
					<div class="footer-brand">
						<img src="<?php the_field('footer_logo_footer', 'options'); ?>" alt="" class="wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">


						<div class="footer-contact">
							<span class="title wow fadeIn" data-wow-duration="0.4s" data-wow-delay="0.5s">
								<a href="<?php bloginfo('url'); ?>/contact-us#breadcrumb"><?php the_field('block_title_footer_contact', 'options'); ?></a></span>
							<div class="wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.6s">
								<?php the_field('contact_info_footer', 'options'); ?>
							</div>
							<div class="contact-info wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.6s">
								<ul>
									<li><span class="icon-envelope-solid"></span><a href="mailto:<?php the_field('email_address_footer', 'options'); ?>"><?php the_field('email_address_footer', 'options'); ?></a></li>
									<li><span class="icon-phone-alt-solid"></span><a href="tel:<?php the_field('phone_number_footer', 'options'); ?>"><?php the_field('phone_number_footer', 'options'); ?></a></li>
								</ul>
							</div>
							<!-- // info  -->
						</div>						

					</div>
				</div>
				<!-- // brand  -->

				<div class="col-lg-3 col-sm-6">
					<div class="footer-brand">
						<span class="title wow fadeIn" data-wow-duration="0.7s" data-wow-delay="0.7s"><?php the_field('about_title_footer', 'options'); ?></span>
						<div class="wow fadeInUp" data-wow-duration="0.7s" data-wow-delay="0.7s">
							<?php the_field('about_text_footer', 'options'); ?>
						</div>						
					</div>
					<!-- // brand  -->
					<div class="socials wow fadeInUp"data-wow-duration="0.7s" data-wow-delay="0.7s">
						<span class="title wow fadeIn" data-wow-duration="0.4s" data-wow-delay="0.5s"><?php the_field('block_title_footer_quick', 'options'); ?></span>
						<?php the_field('social_text_footer', 'options'); ?>
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
				<!-- // footer contact  -->				

				<div class="col-lg-3 col-sm-6 footer-nav--col">
					<div class="footer-nav">
						<span class="title wow fadeIn" data-wow-duration="0.4s" data-wow-delay="0.5s"><?php the_field('block_title_footer_partners', 'options'); ?></span>
						<ul class="wow fadeIn" data-wow-duration="0.6s" data-wow-delay="0.7s">
						<?php if( have_rows('partners_list_footer', 'options') ): ?>
						<?php while( have_rows('partners_list_footer', 'options') ): the_row(); ?>

							<li><a href="<?php the_sub_field('link_to'); ?>" target="_blank"><?php the_sub_field('label'); ?></a></li>

						<?php endwhile; ?>
						<?php endif; ?>
						</ul>
					</div>
				</div>
				<!-- // nav  -->

				<div class="col-lg-3 col-sm-6 footer-nav--col">
					<div class="footer-nav">
						<span class="title wow fadeIn" data-wow-duration="0.4s" data-wow-delay="0.5s"><?php the_field('block_title_quick_footer_nav', 'options'); ?></span>	
						<div class="wow fadeIn" data-wow-duration="0.6s" data-wow-delay="0.7s">				
							<?php wp_nav_menu( array( 'theme_location' => 'quick_menu' ) ); ?>
						</div>	
					</div>
				</div>
				<!-- // footer nav  -->

			</div>
			<!-- // row  -->
			<div id="copyright">
				<small class="wow fadeIn"><?php the_field('copyright_text_footer', 'options'); ?> <?php echo date("Y"); ?></small>
			</div>
			<!-- // disc  -->
		</div>
		<!-- // container  -->
	</footer>
	<!-- // page footer  -->

	<?php if ( get_field( 'display_settings_popup', 'options' ) ): ?>
		<div class="popup">
			<div class="popup-inner">
			<button id="close">&times;</button>
				<div class="popup-wrapper">
					<div class="popup-image">
						<?php
						$imageID = get_field('featured_image_poup', 'options');
						$image = wp_get_attachment_image_src( $imageID, 'sdaa-image' );
						$alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
						?> 

						<img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
					</div>
					<!-- // image  -->
					<div class="popup-text">
						<h3><?php the_field('block_title_poup', 'options'); ?></h3>
						<?php the_field('content_block_poup', 'options'); ?>
					</div>
					<!-- // text  -->
				</div>
				<!-- // wrapper  -->
			</div>
			<!-- // inner  -->
		</div>
		<!-- // popup  -->	
	<?php else: ?>
	<?php endif; ?>


<?php wp_footer(); ?>

	<script src="//code.tidio.co/e45oxgnvvcelz83gng4xilymwlqms86d.js"></script>

	<script src="<?php bloginfo('template_directory'); ?>/js/vidbg.js"></script>

	<script>
	wow = new WOW(
	{
	mobile:       false,       // default
	}
	)
	wow.init();
	</script>



</body>
</html>
