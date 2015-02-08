<?php
/**
 * @package WordPress
 * @subpackage WP-Skeleton
 */
 	get_header();
?>
<div id="splash-page">
	<div class="containerWrapper">
		<div class="header"> 
		</div>
		<?php 
		 	
		    while ( have_posts() ) : the_post();
		   
		?> 
		<div class="container">
			<?php if(has_post_thumbnail()): ?>
				<figure class="banner"><?php the_post_thumbnail(); ?></figure>
			<?php endif; ?>
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
			<div class="cta">
				<a class="mandmBtn" href="#">Apply Now</a>
				<a class="mandmBtn" href="#">For Coaches</a>
			</div>
		</div>
		<?php endwhile; ?>
		<div class="push"></div>
	</div><!-- Wrapper -->
	
	<div class="footer splash">
	</div>
</div>