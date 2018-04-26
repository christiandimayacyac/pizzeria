<?php
/**
Template Name: Front Page
 */
get_header(); ?>

    <div id="front_page">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <section class="hero" style="background:url('<?php echo get_the_post_thumbnail_url(); ?>') no-repeat;background-size:cover;">
                    <div class="hero-text">
                        <?php while( have_posts() ) : the_post() ; ?>
                        <div class="page-title">
                            <h1>
                                <?php echo bloginfo('description'); ?>
                            </h1>
                            <div class="page-title-text">
                                <p class="lead">
                                    <?php remove_filter( 'the_content', 'wpautop' ); the_content(); ?>
                                </p>
                            </div>
                            <button class="btn btn-warning">Read More</button>
                        </div>
                        <?php endwhile; ?>
                        <?php wp_reset_query(); ?>
                    </div>
                </section>

                <!--                SPECIALTIES           -->
                <section id="specialties">
                    <div class="container">
                        <h2 class="primary-text">Our Specialties</h2>
                        <div class="row specialty-row">
                            <?php $loop =  new WP_Query( array('post_type'=>'pizza','orderby'=>'rand','posts_per_page'=>3,'order'=>'ASC') ); ?>
                            <?php while( $loop->have_posts() ) : $loop->the_post() ; ?>
                            <div class="col-sm-4 specialty">
                                <div class="specialty-img tight">
                                    <?php 
                                        if( has_post_thumbnail() ){
                                            the_post_thumbnail('specialty_feat_size');
                                        }; 
                                    ?>
                                </div>
                                <div class="specialty-info">
                                    <h3>
                                        <?php the_title(); ?>
                                    </h3>
                                    <p>
                                        <?php the_content(); ?>
                                    </p>
                                    <h2>
                                        <?php the_field('price'); ?>
                                    </h2>
                                    <button class="btn btn-danger">more info</button>
                                </div>
                            </div>
                            <?php endwhile; ?>
                            <?php wp_reset_query(); ?>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>

    <?php get_footer(); ?>