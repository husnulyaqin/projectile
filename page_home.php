<?php
/*
Template Name: Home Page
*/
?>


<?php get_header(); ?>

<?php get_sidebar(); ?>

	<div id="primary" class="content-area eightcol">
		<img src="http://localhost/cdn/img/i_4_3.jpg" style="position: absolute; margin: -25px -75px 0 -25px; width: 69.4%; box-shadow: 0 0 4px #000">
		<main id="main" class="site-main" role="main" style="margin-top: 40em">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template();
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->

	</div><!-- #primary -->

<div id="thirdly" class="widget-area twocol last" role="complementary">
asfdasdfasfd
a
</div>

<?php get_footer(); ?>
