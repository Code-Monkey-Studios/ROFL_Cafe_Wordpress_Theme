<?php
/**
 * The front-page template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package ROFL Cafe
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="index-main" role="main">
            <h1>What's Happening?</h1>
            <section id="home-blocks">
                <!-- Latest from Each Category (add your own use commas to separate) -->
                <?php query_posts(
                    array('category_name'=>"News, Events, Release Dates",
                    'showposts'=>3,
                    'order'=>DESC)
                ); ?>
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <!-- Entry Title -->
                        <div class='cat-entry content-block'>
                            <header class="entry-header">
                                <?php if ( is_single() ) : ?>
                                    <h1 class="entry-title"><?php the_title(); ?></h1>
                                <?php else : ?>
                                    <!-- Jknetdesign, 2015 -->
                                    <?
  	                                    $cats = wp_get_post_categories($post->ID);
	                                    $cat_name = 'Unknown';
	                                    if($cat = array_shift($cats)) {
		                                    $cat = get_category($cat);
		                                    $cat_name = $cat->name;
	                                    }
                                    ?>
                                    <h2 class="archive-title">
                                        <?php printf( __( 'Featured Post: %s', 'twentytwelve' ), '<span>' . $cat_name . '</span>' ); ?>
                                    </h2>
                                    <div class='cat-entry-thumb'>
                                        <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'twentytwelve' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">
                                            <?php the_post_thumbnail('excerpt-thumbnail', 'class=alignleft'); ?>
                                        </a>
                                    </div>
                                    <h1 class="entry-title">
				                        <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'twentytwelve' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">
                                            <?php the_title(); ?>
                                        </a>
			                        </h1>
                                <?php endif; // is_single() ?>
                            </header><!-- .entry-header -->
                            <!-- Entry Content -->
                            <div class="entry-content">
                                <?php the_excerpt( __( 'Continue reading <span class="meta-nav">→</span>', 'twentytwelve' ) ); ?>
                                <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
                            </div><!-- .entry-content -->
                            <?php if ( comments_open() ) : ?>
                                <div class="comments-link">
                                    <?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'twentytwelve' ) . '</span>', __( '1 Reply', 'twentytwelve' ), __( '% Replies', 'twentytwelve' ) ); ?>
                                </div><!-- .comments-link -->
                            <?php endif; // comments_open() ?>
	                    </div><!-- content-block -->
                    <?php endwhile; ?>
                <?php endif; ?>
                <!-- End of Category Display -->
            </section><!-- home-blocks -->
		</main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer(); ?>