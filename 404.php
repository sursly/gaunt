<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package gaunt
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Sorry', 'gaunt' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( '404 - It looks like nothing was found at this location. Maybe try a search?', 'gaunt' ); ?></p>

					<?php get_search_form(); ?>

					

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
