<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package landscape
 */
?>



	<div class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'landscape_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'landscape' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'landscape' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( '%1$s Theme by %2$s', 'alice-landscape' ), 'Alice-Landscape', '<a href="http://jackiergleason.com/" rel="designer">Jackie Gleason</a>' ); ?>
		</div><!-- .site-info -->
	</div><!-- #colophon .site-footer -->


<?php wp_footer(); ?>
</div><!-- #main .site-main -->
</div><!-- main-area -->
</div><!-- #page .hfeed .site -->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/angular.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/theme-templates.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/theme.js"></script>
</body>
</html>