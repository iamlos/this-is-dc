<?php
/**
 * Template Name: Two Column 
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
<div class="page-content">
	<?php 
	if (have_posts()) {
	  while (have_posts()) {
	    the_post();
	    ?>
	    <div class="two-column">
	    	<?php the_content(); ?>
	    </div>
	<?php   }
	} ?>

</div>
<?php get_footer(); ?>
