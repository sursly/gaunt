<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package gaunt
 */

get_header(); 
query_posts('posts_per_page=1'); 
?>

<?php global $post; ?>
<?php
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
?>


<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
<section id="homefeature">
		<div id="latest" style="background-image: url(<?php echo $src[0]; ?>);">
				
					
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title( '<h1 id="home-title">', '</h1>' ); ?> <span class="homecategory">
					<?php
					foreach((get_the_category()) as $category) {
					echo'<strong> ';
					echo  $category-> cat_name . '</strong> ';
					}
					?></span>
				</a>
					
		</div>

</section>
<?php endif; ?>
<section id="homefeature" class="noimage">
		<div id="latest">
				
					
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title( '<h1 id="home-title">', '</h1>' ); ?> <span class="homecategory">
					<?php
					foreach((get_the_category()) as $category) {
					echo'<strong> ';
					echo  $category-> cat_name . '</strong> ';
					}
					?></span>
				</a>
					
		</div>

</section>


	


<?php get_footer(); ?>
