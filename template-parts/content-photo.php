<?php
/**
 * The template for displaying single posts with photos; no title
 *
 * @package Maxwell
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php maxwell_post_image_single(); ?>

<div class="entry-content clearfix">

		<?php the_content(); ?>

	<header class="photo-caption">

		<?php maxwell_entry_meta(); ?>

		<?php the_title( '<h3 class="photo-title">', '</h3>' ); ?>
		<?php maxwell_posted_by(); ?>

	</header><!-- .photo-caption -->



		<?php wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'maxwell' ),
			'after'  => '</div>',
		) ); ?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php maxwell_entry_tags(); ?>
		<?php do_action( 'maxwell_author_bio' ); ?>
		<?php maxwell_post_navigation(); ?>

	</footer><!-- .entry-footer -->

</article>
