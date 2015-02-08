<?php
/**
 * @package WordPress
 * @subpackage WP-Skeleton
 */
 	get_header();
 	
    while ( have_posts() ) : the_post();
   
?> 
<div class="container">
	<?php if(has_post_thumbnail()): ?>
		<figure class="banner"><?php the_post_thumbnail(); ?></figure>
	<?php endif; ?>
	<?php the_title(); ?>
</div>
<?php endwhile; ?>