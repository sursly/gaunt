<?php
/**
 * @package gaunt
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>


		<?php if ( has_post_thumbnail() ) {
			echo '<div id="featured"><div class="bgimg" style="background-image: url(';
			echo get_the_post_thumbnail_url($post_id, 'large');
			echo ')";> </div>';
			echo '<div class="entry-meta">';
			the_time(get_option('date_format'));
			echo '</div>';
			the_title( '<h1 id="entry-title">', '</h1>' );
			echo '<div class="entry-meta date">';
			echo the_category();
			echo '</div>';
			echo '</div>';

} else {

	echo '<div class="entry-meta">';
	the_time(get_option('date_format'));
	echo '</div>';
 the_title( '<h1 id="entry-title">', '</h1>' );
 echo '<div class="entry-meta date">';
 echo the_category();
 echo '</div>';
	echo '</div>';

} ?>

	</header>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'gaunt' ),
				'after'  => '</div>',
			) );
		?>
	</div>

</article><!-- #post-## -->
