<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package lapizzeria
 */

get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
                <header>
                    <h1 class="page-title screen-reader-text">
                        <?php single_post_title(); ?>
                    </h1>
                    <?php 
                        $blog_page_id = get_option('page_for_posts');
                        $image = get_post_thumbnail_id( $blog_page_id );
                        $image = wp_get_attachment_image_src($image,'full'); //full can be replaced by user declared image size in the functions.php
                    ?>
                    <div class="page-title" style="background:url('<?php echo $image[0]; ?>') no-repeat;background-size:cover;">
                        <h1>
                            <?php single_post_title(); ?>
                        </h1>
                    </div>

                    <div class="page-content container">
                        <div class="row content-box">
                            <div class="main-content col-sm-8">
                                <?php {
                                /* Start the Loop */
                                while ( have_posts() ) : the_post();

                                    /*
                                     * Include the Post-Format-specific template for the content.
                                     * If you want to override this in a child theme, then include a file
                                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                     */
                                    get_template_part( 'template-parts/content', get_post_format() );

                                endwhile;

                                the_posts_navigation();

                                }?>
                            </div>
                            <aside class="sidebar col-sm-4">
                                <div class="widget">
                                    <?php get_sidebar(); ?>
                                </div>
                            </aside>
                        </div>
                    </div>
                </header>

                <?php
            endif;


		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

        </main>
        <!-- #main -->
    </div>
    <!-- #primary -->

    <?php get_footer(); ?>