<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package _s
 */
?>
	<div id="secondary" class="widget-area twocol first" role="complementary">
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h2 class="menu-toggle"><?php _e( 'Menu', 'forest' ); ?></h2>
			<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'forest' ); ?>"><?php _e( 'Skip to content', 'forest' ); ?></a></div>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
		<?php do_action( 'before_sidebar' ); ?>
		<?php // if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

			<aside id="search" class="widget widget_search">
				<?php get_search_form(); ?>
			</aside>

			<aside id="archives" class="widget">
				<h2 class="widget-title"><?php _e( 'Archives', 'forest' ); ?></h2>
				<ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>
			</aside>

			<aside id="meta" class="widget">
				<h2 class="widget-title"><?php _e( 'Meta', 'forest' ); ?></h2>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</aside>

		<?php// endif; // end sidebar widget area ?>
	</div><!-- #secondary -->
