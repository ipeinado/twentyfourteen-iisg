<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php get_sidebar( 'footer' ); ?>

			<div class="site-info">
				<?php do_action( 'twentyfourteen_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyfourteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyfourteen' ), 'WordPress' ); ?></a>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->

		<footer id="collaborators" class="footer-collaborators" role="banner">
			<div class="footer-collaborators-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_HUG.jpg" alt="Logo Hospital Universitario de Getafe" /></div>
			<div class="footer-collaborators-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_fundacion_HUG.png" alt="Logo Fundación Hospital Universitario de Getafe" /></div>
			<div class="footer-collaborators-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_UEM.jpg" alt="Logo Universidad Europea de Madrid" /></div>
		</footer>
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>