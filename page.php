<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package gaunt
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php the_title( '<h1 id="entry-title">', '</h1>' ); ?>
		<?php the_post_thumbnail( 'large' ); ?> 

			<?php while ( have_posts() ) : the_post(); ?>

					<?php the_content(); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


	

<?php get_sidebar(); ?>
<?php get_footer(); ?>
