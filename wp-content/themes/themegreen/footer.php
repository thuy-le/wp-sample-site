<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Greenr
 */
?>

	</div><!-- #content -->
</div>

	<footer id="colophon" class="site-footer" role="contentinfo">
	<?php
		global $greenr;
		if( $greenr['footer-widgets'] ) : ?>
		<div class="footer-top footer-widgets">
			<div class="container">
				<div class="row">
					<?php get_template_part('footer','widgets'); ?>
				</div>
			</div>
		</div>
	<?php endif; ?>
		<div class="footer-bottom copy">
			<div class="container">
				<div class="sixteen columns">
					<div class="site-info">
						<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'greenr' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'greenr' ), 'WordPress' ); ?></a>
						<span class="sep"> | </span>
						<?php printf( __( 'Theme: %1$s by %2$s.', 'greenr' ), 'Greenr', '<a href="http://www.webulous.in/" rel="designer">Webulous Themes</a>' ); ?>
					</div><!-- .site-info -->
				</div>
			</div>			
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
