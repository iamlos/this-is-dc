<?php
/**
 * Template Name: Three Column 
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
<?php 
if (have_posts()) {
  while (have_posts()) {
    the_post();
    ?>
    <div class="page-content">
	    <?php the_content(); ?>

	    <div class="masonry">
	    	<?php $post_type = get_field('topic_cat')->name; ?>
	    	<?php 
				$args = array('category_name' => $post_type); 
				$the_query = new WP_Query($args);
				if($the_query->have_posts()){
					
					while ( $the_query->have_posts() ) {
						$the_query->the_post();
						?>
						<div class="three-column">
							<?php 
							if ( has_post_thumbnail() ) {
								the_post_thumbnail();
							} ?>
							<h3 class="post-title"><?php the_title(); ?></h3>
							<?php the_content(); ?>
						</div>
					<?php }
				}
				?>
	    </div>
    </div>
<?php   }
} ?>


<?php get_footer(); ?>
