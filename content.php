<?php
/**
 * @package _s
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><a class="entry-link" href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta" style="visibility:hidden">
			<?php//  forest_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	
	<div class="entry-content" style="visibility:hidden">
		<?php the_excerpt( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'forest' ) ); ?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'forest' ),
				'after'  => '</div>',
			) );
		?>
	</div>

<!-- .entry-content -->
	<?php endif; ?>

</article><!-- #post-## -->
