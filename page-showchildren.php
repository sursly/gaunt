<?php
/*
 *
 Template Name: Show Children
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">



			<?php while ( have_posts() ) : the_post(); ?>
<?php the_title( '<h1 id="entry-title">', '</h1>' ); ?>
			<?php the_content(); ?>



				<ul id="children">
				<?php

				$args = array(
				    'post_type'      => 'page',
				    'posts_per_page' => -1,
				    'post_parent'    => $post->ID,
				    'order'          => 'DESC',
				    'orderby'        => 'menu_order'
				 );


				$parent = new WP_Query( $args );

				if ( $parent->have_posts() ) : ?>

				    <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
					    <?php
					$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 300,300 ), false, '' );
					?>
				        <li id="parent-<?php the_ID(); ?>" class="parent-page" style="background-image: url(<?php echo $src[0]; ?>);">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				            <h2><?php the_title(); ?></h2></a>

				        </li>

				    <?php endwhile; ?>
				</ul>
				<?php endif; wp_reset_query(); ?>








			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->




<?php get_footer(); ?>
