<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package ROFL Cafe
 */
?>

	</div><!-- #content -->
</div><!-- #page -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<p><small>&copy; Copyright <a href="mailto:rofl.cafe@gmail.com" title="Drop us a line">ROFL Cafe</a> 2014. All Rights Reserved.</small></p>
            <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'rofl-cafe' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'rofl-cafe' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'rofl-cafe' ), 'ROFL Cafe', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->


<?php wp_footer(); ?>

</body>
</html>
