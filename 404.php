<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Symbiotica_Starter_Theme
 */

get_header();
?>

    <div id="ermac-wrapper">
        <div class="overlay"></div>
        <div class="container">
            <div class="ermac-content">
                <span class="small-title"><?php the_field('small_title_ermac', 'options'); ?></span>
                <h2><?php the_field('block_title_ermac', 'options'); ?></h2>
                <?php the_field('content_block_404', 'options'); ?>
                
                <div class="form-wrapper">
                <form role="search" method="get" id="searchform"
                    class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <div>
                        <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>

                        <?php if(ICL_LANGUAGE_CODE=='en'): ?>

                            <input type="text" placeholder="Search in the website" value="<?php echo get_search_query(); ?>" name="s" id="s" />

                        <?php elseif(ICL_LANGUAGE_CODE=='de'): ?>

                            <input type="text" placeholder="Suche in der Website" value="<?php echo get_search_query(); ?>" name="s" id="s" />

                        <?php endif;?>  

                        <button type="submit" id="searchsubmit"
                            value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>"><span class="icon-search-regular"></span></button>
                    </div>
                </form>
                </div>
                <!-- // form wrapper  -->
            </div>
            <!-- // content  -->
        </div>
        <!-- // container  -->
    </div>
    <!-- // wrapper  -->

<?php
get_footer();
?>

    <script type="text/javascript">
    var sectionFirst = new vidbg('#ermac-wrapper', {
    mp4: '<?php the_field('background_video_ermac', 'options'); ?>',
    poster: '<?php bloginfo('template_directory'); ?>/img/bg/video.jpg',
    });
    </script>