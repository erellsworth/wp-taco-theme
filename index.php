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
				<?php get_template_part( 'partials/excerpts' ); ?>
			</div>
		<?php } 
	}
	?> 
</div><!-- .shredded_cheese -->

<?php get_footer();
