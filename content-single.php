<?php
/**
 * @package gaunt
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-meta"><?php the_time(get_option('date_format')); ?></div>
		<?php the_title( '<h1 id="entry-title">', '</h1>' ); ?>

		<div class="entry-meta date">
			<?php echo the_category(); ?>

		</div>	
		<?php the_post_thumbnail( 'large' ); ?> 

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
