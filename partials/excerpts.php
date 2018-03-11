<?php
/**
 * Template part for displaying post excerpts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage WP_Taco_Theme
 * @since 1.0
 * @version 1.1
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	</header>
	<?php if ( '' !== get_the_post_thumbnail()){ ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'medium' ); ?>
			</a>
		</div><!-- .post-thumbnail -->
	<?php } ?>					
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
</article>