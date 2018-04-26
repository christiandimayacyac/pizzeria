<?php
    /*
        Template Name: Gallery Page
    */
?>



    <?php get_header(); ?>
    <div id="gallery_page">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <?php while( have_posts() ) : the_post() ; ?>
                    <div class="page-title" style="background:url('<?php echo get_the_post_thumbnail_url(); ?>') no-repeat;background-size:cover;">
                        <h1>
                            <?php the_title(); ?>
                        </h1>
                    </div>
                    <div class="page-content container text-center">
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
            </main>
        </div>
    </div>

    <?php get_footer(); ?>