<?php
/**
 * front page template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dead_flowers
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<section id="parallax-header" data-speed="6" data-type="background">
			<?php
				if(has_post_thumbnail()){
					the_post_thumbnail();
				}
			?>
		</section>
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php
			endif; ?>

		<section class="body">
			<div class="container">
				<div class="row">
					<?php
						/* Front Page Widget Area */
						if(is_active_sidebar('frontpage-1')){
							dynamic_sidebar('frontpage-1');
						}

						if(is_active_sidebar('frontpage-2')){
							dynamic_sidebar('frontpage-2');
						}
						
						if(is_active_sidebar('frontpage-3')){
							dynamic_sidebar('frontpage-3');
						}
					?>
				</div><!-- end row -->

				<div class="row">
					<div class="col-lg-12">
						<?php 
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							//get_template_part( 'template-parts/content', get_post_format() );

						endwhile;

						the_posts_navigation();

					else :

						//get_template_part( 'template-parts/content', 'none' );

					endif; ?>
					</div>
				</div>
			</div><!-- end container -->
			</section><!-- end body -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();