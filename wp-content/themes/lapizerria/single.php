<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package lapizzeria
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'single' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer(); ?>



Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis porro molestiae vitae soluta culpa esse, provident sed fuga, debitis maxime ipsam reiciendis dicta quos nam numquam dolor illo in accusantium. Consequatur laudantium eos voluptatum a atque doloribus voluptatem magni voluptates officia doloremque modi nisi, et vel architecto corporis excepturi quaerat iusto ut aperiam tempora molestiae magnam maxime totam, possimus? Molestiae, illum iure, laudantium adipisci necessitatibus dolor, exercitationem voluptate a commodi iste, ullam quidem qui inventore reiciendis alias itaque autem. Sunt dolorem consequatur doloribus aspernatur enim unde ex, ab esse dignissimos minima explicabo exercitationem incidunt atque, qui totam molestiae sint, soluta excepturi voluptate error beatae. Tenetur voluptatum doloremque soluta debitis hic sint, itaque illo necessitatibus, aliquam alias quidem asperiores expedita, molestias impedit corrupti sit repudiandae cum, ipsum ad accusamus inventore. Distinctio voluptas quod excepturi assumenda, nihil inventore fuga repellendus fugiat nam veritatis iste eaque, eveniet illum libero ut, odio incidunt natus quis quam veniam iure sunt esse, dolor! Nihil molestiae placeat quam ut ducimus, delectus impedit repudiandae dolores ipsum ad quisquam vero, numquam consequatur exercitationem minima, expedita facere eius adipisci fuga est aut nisi sequi, suscipit rerum. Magni hic fugiat quis eius aperiam similique, odio, labore voluptatum ad obcaecati tempora. Ipsam soluta necessitatibus ut animi illo rem, nisi accusantium, deleniti enim voluptas ad ducimus minus aperiam esse at repellendus dolor. Quidem id, quasi adipisci non eveniet. Laboriosam nemo consequatur ullam libero nostrum blanditiis fuga dicta assumenda ipsam recusandae impedit mollitia, nesciunt quos iure, itaque, aperiam dolore ea! Molestiae hic voluptas vel id omnis quod ea inventore porro atque sit dolorum dolores, officia beatae sint qui eius reprehenderit totam provident aliquam. Cupiditate sapiente nobis nemo eaque cum, est quidem fuga, saepe quam veritatis magni laudantium, repellendus! Soluta sint quis maxime labore sapiente, optio omnis aperiam? Unde voluptates non sunt quidem consequatur ipsam?
