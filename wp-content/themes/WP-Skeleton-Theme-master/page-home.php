<?php
	get_header();

		if(have_posts()): while(have_posts()): the_post();

			get_template_part( 'templates/page-generic' );
?>
	

		<?php get_template_part( 'templates/section-mini-carousel' ); ?>

<?php

		endwhile; endif;

	get_footer(); 
?>