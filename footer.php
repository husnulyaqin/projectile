<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _s
 */
?>

<section class="footer">
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'forest_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'forest' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'forest' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'forest' ), 'forest', '<a href="http://automattic.com/" rel="designer">Automattic</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</section>

<?php wp_footer(); ?>
<script>
      // Basic demo
<?php 
  if ( !is_single() ) {

?>
      $('body').panelSnap();

      $('body').on('panelsnap:finish', function(e, $target){
      	var el = $target.find('.entry-link').html();
      	if(el != null)
        	var text = '<h2><a href="' + $target.find('.entry-link').html() + '">' + $target.find('.entry-title').text() + '</a></h2><p>' + $target.find('.entry-meta').text() +'</p><p class="desc">' + $target.find('.entry-content').text() + '</p>';
        	$('.eventlog').html(text);
        if(el == null)
        	var blank = '';
        	$('.eventlog').html(blank);
      });

<?php } ?>

      
      </script>

</body>
</html>