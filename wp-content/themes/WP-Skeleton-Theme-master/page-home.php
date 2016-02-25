<?php
	wp_enqueue_script( 'chartjs',  get_template_directory_uri() . '/js/Chart.js', array('jQuery'), false, true );
	wp_enqueue_script( 'homejs',  get_template_directory_uri() . '/js/home.js', array('jQuery', 'bxSliderjs', 'chartjs'), false, true );

	get_header();

		if(have_posts()): while(have_posts()): the_post();

			get_template_part( 'templates/page-generic' );
?>
	
	<?php get_template_part( 'templates/section-mini-carousel' ); ?>

<?php

		endwhile; endif;

	get_footer(); 
?>