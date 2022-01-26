<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Symbiotica_Starter_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="icon" type="image/png"  href="<?php echo get_template_directory_uri(); ?>/img/ico/favicon.png">

<!-- 
	<link rel="dns-prefetch" href="//fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin> -->


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<div class="menu-overlay"></div>

	<div class="main-menu-sidebar visible-xs visible-sm visible-md" id="menu">

		<header>
			<a href="javascript:;" class="close-menu-btn"><img src="<?php bloginfo('template_directory'); ?>/img/ico/close-white.svg" alt=""></a>
		</header>
		<!-- // header  -->

		<nav id="sidebar-menu-wrapper">
			<div id="menu">    
				<ul class="nav-links">
					<?php
					wp_nav_menu( array(
						'menu'              => 'primary_menu',
						'theme_location'    => 'primary_menu',
						'depth'             => 2,
						'container'         => false,
						'container_class'   => 'collapse navbar-collapse',
						'container_id'      => false,
						'menu_class'        => 'nav navbar-nav',
						'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						'items_wrap' => '%3$s',
						'walker'            => new wp_bootstrap_navwalkermobile())
					);
					?>  
				</ul>
			</div>
			<!-- // menu  -->

			<footer>
				<a href="<?php the_field('button_link_cta_header', 'options'); ?>" class="btn-cta"><?php the_field('button_label_cta_header', 'options'); ?></a>
			</footer>

		</nav> 
		<!-- // sidebar menu wrapper  -->

	</div>
	<!-- // main menu sidebar  -->	

	<div id="top-bar">
		<div class="container">

			<div class="top-bar__branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php the_field('website_logo_general', 'options'); ?>" alt="<?php bloginfo('name'); ?>"></a>
			</div>
			<!-- // branding  -->

			<div class="top-bar__nav">

				<div class="top-bar__menu">
					<?php wp_nav_menu( array( 'theme_location' => 'primary_menu' ) ); ?>
					<a href="javascript:;" id="btn-search"><span class="icon-search-regular"></span></a>
				</div>
				<!-- // menu  -->

				<div class="top-bar__cta">
					<a href="<?php the_field('button_link_cta_header', 'options'); ?>" class="btn-cta"><?php the_field('button_label_cta_header', 'options'); ?></a>
				</div>
				<!-- // cta  -->

				<div class="top-bar__lang">
				<?php wp_nav_menu( array( 'theme_location' => 'lang_menu' ) ); ?>
				</div>
				<!-- // language  -->

			</div>
			<!-- // nav  -->

			<div id="mobile-menu--btn" class="d-xl-none">
				<a href="javascript:;">
					<span></span>
					<span></span>
					<span></span>
					<div class="clearfix"></div>
				</a>
			</div>
			<!-- // mobile  -->				

		</div>
		<!-- // container  -->

		<div id="search-bar">
			<div class="container">

			<form role="search" method="get" id="searchform"
				class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<div>
					<label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
					<input type="text" placeholder="Keyword" value="<?php echo get_search_query(); ?>" name="s" id="s" />
					<input type="submit" id="searchsubmit"
						value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
				</div>
			</form>

			</div>
		</div>
		<!-- // search bar  -->
		
	</div>
	<!-- // top bar  -->