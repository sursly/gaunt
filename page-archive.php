<?php
/*
 * 
 Template Name: Archives
 */

get_header(); 
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php the_title( '<h1 id="entry-title">', '</h1>' ); ?>
					<?php the_content(); ?>
			<?php endwhile; endif; ?>

			<ul id="archives">
		<?php $archive_query = new WP_Query('showposts=1000');
while ($archive_query->have_posts()) : $archive_query->the_post(); ?>
				<li>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title( '<h1 class="post-titles">', '</h1>' ); ?></a>
							<div class="entry-meta"><?php echo the_category(); ?></div>

				</li>
			<?php endwhile; // end of the loop. ?>
			</ul>
		</main><!-- #main -->
	</div><!-- #primary -->


	

<?php get_sidebar(); ?>
<?php get_footer(); ?>
