<?php
/*
    Template Name: Our Specialties
 */

get_header(); ?>


    <div id="menu_page">
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

                <div class="container">
                    <!--                    PIZZAS-->
                    <div class="specialty-category">
                        <h2>Pizza</h2>
                    </div>

                    <div class="row specialties-content">
                        <?php $loop =  new WP_Query( array('post_type'=>'pizza','orderby'=>'post_id','order'=>'ASC', 'category_name'=>'pizza') ); ?>
                        <?php while( $loop->have_posts() ) : $loop->the_post() ; ?>
                        <div class="col-sm-6">
                            <div class="item-box">
                                <?php if ( has_post_thumbnail() ) : ;?>
                                    <div class="box-effect2"><a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('specialty_img_size'); ?>"></a></div>
                                <?php endif; ?>
                                <h4 class="clearfix">
                                    <?php the_title(); ?>
                                    <span><?php the_field('price'); ?></span>
                                </h4>
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <?php wp_reset_query(); ?>
                    </div>

                    <!--                    OTHERS-->
                    <div class="specialty-category">
                        <h2>Others</h2>
                    </div>

                    <div class="row specialties-content">
                        <?php $loop =  new WP_Query( array('post_type'=>'pizza','orderby'=>'post_id','order'=>'ASC', 'category_name'=>'others') ); ?>
                        <?php while( $loop->have_posts() ) : $loop->the_post() ; ?>
                        <div class="col-sm-6">
                            <div class="item-box">
                                <?php if ( has_post_thumbnail() ) : ;?>
                                    <div class="box-effect2"><a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('specialty_img_size'); ?>"></a></div>
                                <?php endif; ?>
                                <h4 class="clearfix">
                                    <?php the_title(); ?>
                                    <span><?php the_field('price'); ?></span>
                                </h4>
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <?php wp_reset_query(); ?>
                    </div>


                </div>
            </main>
        </div>
    </div>

    <?php get_footer(); ?>