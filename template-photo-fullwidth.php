<?php
/**
 * Template Name: Photo Full-width Layout
 * Template Post Type: post, page
 *
 * Description: A custom template for displaying a fullwidth layout with no sidebar.
 *
 * @package Maxwell
 */

get_header(); ?>

	<section id="primary" class="fullwidth-content-area content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post();
                get_template_part( 'template-parts/content', 'photo' );
				comments_template();

			endwhile; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>
