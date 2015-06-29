<?php
/**
 * The template for displaying all single posts.
 *
 * @package ROFL Cafe
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
        <section id="cat-blocks">
		<?php while ( have_posts() ) : the_post(); ?>
            <div class='cat-entry content-block'>
			<?php get_template_part( 'content', 'single' ); ?>

			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
            </div><!-- #content-block -->
		<?php endwhile; // end of the loop. ?>
        </section><!-- #cat-blocks -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
