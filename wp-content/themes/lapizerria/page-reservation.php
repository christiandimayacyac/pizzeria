<?php
    /*
        Template Name: Reservation Page
    */
?>



    <?php get_header(); ?>
    <div id="reservation_page">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <?php while( have_posts() ) : the_post() ; ?>
                <div class="page-title" style="background:url('<?php echo get_the_post_thumbnail_url(); ?>') no-repeat;background-size:cover;">
                    <h1>
                        <?php the_title(); ?>
                    </h1>
                </div>
                <div class="page-content container text-center">
                    <div class="reservation-info">
                        <div class="reservation">
                            <h2>Make a Reservation</h2>
                            <form class="form-reservation" method="POST">
                                <div class="form-group">
                                    <label for="form-name" class="sr-only">Name</label>
                                    <input type="text" class="form-control " name="form-name" placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="form-date" class="sr-only">Date</label>
                                    <input type="datetime-local" class="form-control" name="form-date" placeholder="Date" required>
                                </div>
                                <div class="form-group">
                                    <label for="form-email" class="sr-only">Email</label>
                                    <input type="email" class="form-control" name="form-email" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <label for="form-phone" class="sr-only">Phone Number</label>
                                    <input type="text" class="form-control" name="form-phone" placeholder="Phone Number" required>
                                </div>
                                <div class="form-group">
                                    <label for="form-message" class="sr-only">Message</label>
                                    <textarea class="form-control" name="form-message" placeholder="Message" required></textarea>
                                </div>
                                <input type="submit" name="form-send" value="Send" class="btn btn-danger form-send">
                            </form>
                        </div>
                        <div class="location">
                            <h2>Location</h2>
                            <div class="map">
                                
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