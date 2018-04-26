<?php
/*
    Template Name: About Us Page
 */

get_header(); 
?>

    <div id="aboutus">
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

                <div class="container about-gallery">
                    <div class="row clearfix g-box-container">
                        <div class="about-g-box">
                            <?php 
                                $image_id = get_field('image_1');
                                $the_image  = wp_get_attachment_image_src($image_id,'boxes');
                            ?>
                            <img src="<?php echo $the_image[0]; ?>" class="about-img">
                            <div class="g-box-text">
                                <div class="g-box-text-content">
                                    <?php the_field('image_1_description'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="about-g-box">
                            <div class="g-box-text">
                                <div class="g-box-text-content">
                                    <?php the_field('image_2_description'); ?>
                                </div>
                            </div>
                            <?php 
                                $image_id = get_field('image_2');
                                $the_image  = wp_get_attachment_image_src($image_id,'boxes');
                            ?>
                            <img src="<?php echo $the_image[0]; ?>" class="about-img">
                        </div>
                        <div class="about-g-box">
                            <?php 
                                $image_id = get_field('image_3');
                                $the_image  = wp_get_attachment_image_src($image_id,'boxes');
                            ?>
                            <img src="<?php echo $the_image[0]; ?>" class="about-img">
                            <div class="g-box-text">
                                <div class="g-box-text-content">
                                    <?php the_field('image_3_description'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
            </main>
        </div>
    </div>

    <?php get_footer(); ?>