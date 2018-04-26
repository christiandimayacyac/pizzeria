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

        <div class="entry-content">
            <div class="post-thumbnail-box">
                <?php the_post_thumbnail('specialty_img_size'); ?>
            </div>


            <header class="entry-header">
                <?php

                if ( 'post' === get_post_type() ) : ?>
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
                    <!-- .entry-meta -->
                    <?php endif; ?>
            </header>
            <!-- .entry-header -->

            <?php
			the_excerpt( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'lapizzeria' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );
		?>

                <a href="<?php the_permalink(); ?>" class="btn btn-success">Read More</a>
        </div>
        <!-- .entry-content -->



<!--
        <footer class="entry-footer">
            		<?php lapizzeria_entry_footer(); ?>
            <div class="post-details">
                <i class='fa fa-folder-open'></i>
                <?php the_category(','); ?>
                <i class='fa fa-tags'></i>
                <?php the_tags(); ?>
                <div class="post-comments-badge"><a href="<?php comments_link(); ?>"><i class='fa fa-comments'>&nbsp;<?php comments_number(0,1,'%'); ?></i></a></div>
                <?php edit_post_link( 'Edit','<i class="fa fa-pencil"></i> ','' ); ?>
            </div>
        </footer>
-->
    </article>
    <!-- #post-<?php the_ID(); ?> -->