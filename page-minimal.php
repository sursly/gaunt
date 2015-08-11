<?php
/*
 * 
 Template Name: Minimal
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php the_title( '<h1 id="entry-title">', '</h1>' ); ?>

			<?php while ( have_posts() ) : the_post(); ?>

					<?php the_content(); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


	


<?php get_footer(); ?>
