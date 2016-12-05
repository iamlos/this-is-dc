<?php
/**
 * Template Name: Front Page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dmped
 */

get_header(); ?>
<script type="text/javascript">$(function() {

});</script>
<?php

// check if the repeater field has rows of data
if( have_rows('topics_home') ):

 	// loop through the rows of data
    while ( have_rows('topics_home') ) : the_row();
?>
	<section class="section-scroll" >
		<div class="full-hero" style="background-image: url('<?php the_sub_field("topic_image")?>')">

			<div class="topic-desc">
				<h2 class="topic-head"><?php the_sub_field("topic_name"); ?></h2>
				<?php the_sub_field("topic_description"); ?>
				<div class="button">
					<a href="<?php the_sub_field('topic_url');?>"> Read more about this topic</a>
				</div>
			</div>
			<!--<div class="nav-menu">
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
			</div>-->
		</div>
	</section>
<?php 

    endwhile;

else :

    // no rows found

endif;

?>
<?php

get_footer();
