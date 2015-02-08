<?php
/**
 * @package WordPress
 * @subpackage WP-Skeleton
 */
 	get_header();
 	
    while ( have_posts() ) : the_post();
   
?> 

<?php the_title(); ?>

<?php endwhile; ?>