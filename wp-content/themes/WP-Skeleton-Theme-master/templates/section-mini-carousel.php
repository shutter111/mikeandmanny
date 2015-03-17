<?php
	wp_enqueue_script( 'miniCarouseljs',  get_template_directory_uri() . '/js/mini-carousel.js', array('jQuery', 'bxSliderjs'), false, true );


	$skiCamp = new WP_Query(array(

						'post_type' => 'ski-camp'

					)
				);

	if(!is_front_page()):
?>

		<?php if($skiCamp->have_posts()) : ?>

			<div class="container mini-carousel-wrapper">

				<div class="pager yellow" id="mini-carousel-pager">
					<div class="left"></div>
					<div class="right"></div>
				</div>

				<ul class="mini-carousel">

					<?php while($skiCamp->have_posts()): $skiCamp->the_post();

						$page_title = get_field('page_title');
						$secondary_title = get_field('secondary_title');
						$page_intro = get_field('page_intro');

						$thumb_id = get_post_thumbnail_id();
						$img_url = wp_get_attachment_image_src( $thumb_id, 'full' );

					?>

						<li>
							<div class="text">
								<h3><?php the_title(); ?></h3>
								<?php echo $secondary_title ? '<p>'.$secondary_title.'</p>' : ''; ?>
								<a href="<?php the_permalink(); ?>" class="mandmBtn">Learn More</a>
							</div>
							<div class="image" style="background-image:url('<?php echo $img_url[0]; ?>');">
							</div>
						</li>

					<?php endwhile; ?>
				</ul>

			</div>

		<?php endif; ?>


	<?php else: 

		$mini_carousel = get_field('mini_carousel');
		//var_dump($mini_carousel);

		if($mini_carousel):
	?>
			<div class="container mini-carousel-wrapper">

				<div class="pager yellow" id="mini-carousel-pager">
					<div class="left"></div>
					<div class="right"></div>
				</div>

				<ul class="mini-carousel">

					<?php foreach($mini_carousel as $carousel): 
						//var_dump($carousel);
					?>

						<li>

							<?php foreach($carousel as $pageLink):
								//var_dump($pageLink->post_name);
								$secondary_title = get_field('secondary_title', $pageLink->ID);
								$permalink = get_permalink($pageLink->ID);
								$thumb_id = get_post_thumbnail_id($pageLink->ID);
								$img_url = wp_get_attachment_image_src( $thumb_id, 'full' );
							?>

							<div class="text">
								<h3><?php echo $pageLink->post_title; ?></h3>
								<?php echo $secondary_title ? '<p>'.$secondary_title.'</p>' : ''; ?>
								<a href="<?php echo $permalink; ?>" class="mandmBtn">Learn More</a>
							</div>
							<div class="image" style="background-image:url('<?php echo $img_url[0]; ?>');">
							</div>

							<?php endforeach; ?>

						</li>

					<?php endforeach; ?>

				</ul>

			</div>
		

<?php 
		endif;

	endif; 
?>