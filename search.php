<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Symbiotica_Starter_Theme
 */

get_header();
?>

    <header id="reports-header">
        <div class="container">
            <h1>Search: <?php echo get_search_query(); ?></h1>
        </div>
        <!-- // container  -->
    </header>
    <!-- // reports header  -->

    <div id="breadcrumb">
        <div class="container">
            <ul>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                <li><a href="<?php echo get_permalink(); ?>"><?php echo get_search_query(); ?></a></li>
            </ul>
        </div>
    </div>
    <!-- // breadcrumb  -->    

    <div id="search-page">

        <div class="container">

            <div class="row">
                <div class="col-xl-8 offset-xl-2">
                    <div class="search-content">

                        <?php if (!have_posts()): ?>

                            <div id="no-posts">

                                <?php if(ICL_LANGUAGE_CODE=='en'): ?>

                                    <h2>No Results Found</h2>
                                    <p>The page you requested could not be found. Try refining your search or return to the <a href="<?php bloginfo('url'); ?>"> home page</a>. You may also reach us directly at <a href="mailto:info@ptgr.ch">info@ptgr.ch</a> .</p>

                                    <div id="search-form">
                                        <form role="search" action="<?php echo site_url('/'); ?>" method="get" id="searchform">
                                        <input type="text" name="s" placeholder="Search in the website"/>
                                        <button type="submit" id="searchsubmit"
                                value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>"><span class="icon-search-regular"></span></button>
                                        </form>		
                                    </div>
                                    <!-- // form  -->                                    

                                <?php elseif(ICL_LANGUAGE_CODE=='de'): ?>

                                    <h2>Keine Ergebnisse gefunden</h2>
                                    <p>Die von Ihnen angeforderte Seite konnte nicht gefunden werden. Versuchen Sie, Ihre Suche zu verfeinern oder kehren Sie auf die <a href="<?php bloginfo('url'); ?>">Startseite</a>  zurück. Sie dürfen uns auch direkt unter <a href="mailto:info@ptgr.ch">info@ptgr.ch</a> erreichen.</p>


                                    <div id="search-form">
                                        <form role="search" action="<?php echo site_url('/'); ?>" method="get" id="searchform">
                                        <input type="text" name="s" placeholder="Suche in der Website"/>
                                        <button type="submit" id="searchsubmit"
                                value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>"><span class="icon-search-regular"></span></button>
                                        </form>		
                                    </div>
                                    <!-- // form  -->                                        

                                <?php endif;?>  


                            </div>

                        <?php endif; ?>	

                        <?php
                            while(have_posts()): the_post();
                                ?>
                                                
                                <div class="search-card">

                                    <span class="cat-link">
                                    
                                    <?php
                                    $postType = get_post_type_object(get_post_type());
                                    if ($postType) {
                                        echo esc_html($postType->labels->singular_name);
                                    }
                                    ?>
                                    </span>

                                    <h3><?php the_title(''); ?></h3>
                                    <p><?php the_excerpt();?></p>
                                    <a href="<?php echo get_permalink(); ?>" class="btn-more"><span>Read More</span></a>
                                </div>
                                <!-- // card  -->
                            
                            <?php
                        endwhile;
                        
                        ?>  

                    </div>
                </div>
            </div>
            
        </div>
        <!-- // container  -->
    </div>
    <!-- // regular page  -->    

<?php
get_footer();
