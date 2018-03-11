<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage WP_Taco_Theme
 * @since 1.0
 * @version 1.0
 */

?>
<nav id="taco-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'wp-taco-theme' ); ?>">
	<button class="menu-toggle fa-2x" data-menu-id="top-menu" data-expanded="false">
		<i class="fas fa-bars"></i>
	</button>
	<?php wp_nav_menu( array(
		'theme_location' => 'top',
		'menu_id'        => 'top-menu',
	) ); ?>
</nav><!-- #site-navigation -->
