<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	</header>
	<?php if ( '' !== get_the_post_thumbnail()){ ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'medium' ); ?>
			</a>
		</div><!-- .post-thumbnail -->
	<?php } ?>					
	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article>