<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lapizzeria
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
	
	    <?php 
            wp_nav_menu(array(
                    'theme_location'	=> 'primary',
                    'container'		    => 'nav',
                    'container_class'	=> 'footer-nav',
                    'menu_class'        => 'footer-navbar',
                    'after'	            => '<span class="separator"> |</span>',
                  ));
        ?>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'lapizzeria' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'lapizzeria' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'lapizzeria' ), 'lapizzeria', '<a href="http://www.facebook.com/christiandyc">christiandimayacyac</a>' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

<?php wp_footer(); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/fluidbox/js/jquery.fluidbox.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>
</body>
</html>
