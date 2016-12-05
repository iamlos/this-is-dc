<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dmped
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="nav-menu">
				<div class="nav-left"><?php wp_nav_menu(); ?></div>
				<div class="nav-middle">
					<div class="container">
						<p>An Initiative of</p>
						<img src="<?php echo get_template_directory_uri()?>/img/logo.png">
					</div>
				</div>
				<div class="social nav-right">
					<ul>
						<li><img src="<?php echo get_template_directory_uri()?>/img/fb.png"></li>
						<li><img src="<?php echo get_template_directory_uri()?>/img/ig.png"></li>
						<li><img src="<?php echo get_template_directory_uri()?>/img/tw.png"></li>
					</ul>
				</div>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
