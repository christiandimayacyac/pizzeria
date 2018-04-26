<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package lapizzeria
 */

get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="single-entry-content">
                    <div class="page-title" style="background:url('<?php echo get_the_post_thumbnail_url(); ?>') no-repeat;background-size:cover;">
                        <h1>
                            <?php the_title(); ?>
                        </h1>
                    </div>


                    <div class="page-content container text-center">
                        <div class="post-thumbnail-box">
                            <?php the_post_thumbnail('specialty_img_size'); ?>
                        </div>

                        <div class="ingredients">
                            <h3>Ingredients:</h3>
                            <?php the_content(); ?>
                        </div>

                        <div class="price">
                            <h3>Price:</h3>    
                            <p><?php the_field('price'); ?></p>
                        </div>


                    </div>

                </div>
                <!-- .entry-content -->
            </article>
        <?php endwhile; ?>
    </main>
    <!-- #main -->
</div>
<!-- #primary -->

<?php get_footer(); ?>