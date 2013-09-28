<?php
/**
 * The Template for displaying all single posts.
 *
 * @package _s
 */

get_header(); ?>


    <section class="post">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php forest_content_nav( 'nav-below' ); ?>

		

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</section>

<?php get_footer(); ?>