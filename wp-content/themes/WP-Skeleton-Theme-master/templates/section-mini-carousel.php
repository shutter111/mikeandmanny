<?php
	wp_enqueue_script( 'miniCarouseljs',  get_template_directory_uri() . '/js/mini-carousel.js', array('jQuery', 'bxSliderjs'), false, true );


	$skiCamp = new WP_Query(array(

						'post_type' => 'ski-camp'

					)
				);
?>

	<?php if($skiCamp->have_posts()) : ?>

		<div class="container mini-carousel-wrapper">

			<div class="pager yellow" id="mini-carousel-pager">
				<div class="left"></div>
				<div class="right"></div>
			</div>

			<ul class="mini-carousel">

				<?php while($skiCamp->have_posts()): $skiCamp->the_post();

					$thumb_id = get_post_thumbnail_id();
					$img_url = wp_get_attachment_image_src( $thumb_id, 'full' );

				?>

					<li>
						<div class="text">
							<h3><?php the_title(); ?></h3>
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>" class="mandmBtn">Learn More</a>
						</div>
						<div class="image" style="background-image:url('<?php echo $img_url[0]; ?>');">
						</div>
					</li>

				<?php endwhile; ?>
			</ul>

		</div>

	<?php endif; ?>