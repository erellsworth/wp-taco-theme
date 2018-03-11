<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage WP_Taco_Theme
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="shredded_cheese row">
	<?php
	if ( have_posts() ) {
		/* Start the Loop */
		while ( have_posts() ){ the_post(); ?>
			<div class="col-xs-12 col-md-6 col-lg-4">
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
			</div>
		<?php } 
	}
	?> 
</div><!-- .shredded_cheese -->

<?php get_footer();
