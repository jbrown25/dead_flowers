<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dead_flowers
 */

?>

	</div><!-- #content -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="container">
				<div class="row">
					<div class="col-md-4 wow animated fadeIn" data-wow-delay=".3s">
						<?php
							wp_nav_menu(array(
								'menu' => 'footer'
							));
						?>
					</div>
					<div class="col-md-4 wow animated fadeIn" data-wow-delay=".2s">
						<div class="site-info">
							<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'dead_flowers' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'dead_flowers' ), 'WordPress' ); ?></a>
							<span class="sep"> | </span>
							<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'dead_flowers' ), 'dead_flowers', '<a href="http://justinbrowndev.com" rel="designer">Justin A. Brown</a>' ); ?>
						</div>
					</div>
					
					<?php
						if(is_active_sidebar('footer-1')){
							dynamic_sidebar('footer-1');
						}
					?>
				</div>
			</div>
		</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
