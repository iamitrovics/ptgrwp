<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Symbiotica_Starter_Theme
 */

get_header();
?>

    <header id="reports-header">
        <div class="container">
            <?php if(ICL_LANGUAGE_CODE=='en'): ?>

                <h1>Reports</h1>

            <?php elseif(ICL_LANGUAGE_CODE=='de'): ?>

                <h1>Neueste Berichte</h1>

            <?php endif;?>              
        </div>
        <!-- // container  -->
    </header>
    <!-- // reports header  -->

    <div id="breadcrumb">
        <div class="container">
            <ul>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                <li><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></li>
            </ul>
        </div>
    </div>
    <!-- // breadcrumb  -->    

    <div id="reports-single">
        <div class="container">
            <div class="row">

                <div class="col-lg-4">
                    <div class="report-intro">
                        <h2><?php the_title(); ?></h2>
                        <a href="<?php bloginfo('url'); ?>/reports" class="btn-cta wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.7s">All Reports</a>
                    </div>
                </div>
                <!-- // intro  -->

                <div class="col-lg-7 offset-lg-1">
                    <div class="report-content">
                    <?php while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                    <?php endwhile; // end of the loop. ?> 
                    </div>
                </div>
                <!-- // content  -->

            </div>
            <!-- // row  -->
        </div>
        <!-- // container  -->
    </div>
    <!-- // reports single  -->

<?php
get_footer();
