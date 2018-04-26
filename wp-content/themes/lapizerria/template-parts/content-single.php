<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package lapizzeria
 */

?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="single-entry-content">
            <div class="page-title" style="background:url('<?php echo get_the_post_thumbnail_url(); ?>') no-repeat;background-size:cover;">
                <h1>
                    <?php the_title(); ?>
                </h1>
            </div>


            <div class="page-content container text-center">
                <div class="main-content col-sm-8">
                    <div class="post-thumbnail-box">
                        <?php the_post_thumbnail('specialty_img_size'); ?>
                    </div>
                    
                    <div class="entry-meta clear fix">
                        <time>
                            <?php the_time('d'); ?>
                            <span><?php the_time('M'); ?></span>
                        </time>

                        <?php 
                            if ( is_singular() ) :
                                the_title( '<h3 class="entry-title">', '</h3>' );
                            else :
                                the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
                            endif;
                        ?>

                        <div class="post-author">
                            <i class='fa fa-user' aria-hidden="true"></i>
                            <span><?php the_author_posts_link(); ?></span>
                        </div>
                    </div>

                    <div class="post-text-content">
                        <?php the_content(); ?>
                    </div>
                </div>
                <aside class="sidebar col-sm-4">
                    <div class="widget">
                        <?php get_sidebar(); ?>
                    </div>
                </aside>
            </div>

        </div>
        <!-- .entry-content -->

    </article>
    <!-- #post-<?php the_ID(); ?> -->
