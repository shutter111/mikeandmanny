<?php
	wp_enqueue_script( 'miniCarouseljs',  get_template_directory_uri() . '/js/mini-carousel.js', array('jQuery', 'bxSliderjs'), false, true );

	$thumb_id = get_post_thumbnail_id();
	$img_url = wp_get_attachment_image_src( $thumb_id, 'full' );
?>

	<div class="container mini-carousel-wrapper">

		<div class="pager yellow" id="mini-carousel-pager">
			<div class="left"></div>
			<div class="right"></div>
		</div>

		<ul class="mini-carousel">
			<li>
				<div class="text">
					<h3>Ski Camp 2014</h3>
					<p>Prince George, Ottawa, Snow Valley ski club, Squamish, Québec, this group of 15 came from all over Canada to join in the fun of this all expense paid camp!</p>
					<a href="#" class="mandmBtn">Learn More</a>
				</div>
				<div class="image" style="background-image:url('<?php echo $img_url[0]; ?>');">
				</div>
			</li>
			<li>
				<div class="text">
					<h3>Ski Camp 2013</h3>
					<p>Prince George, Ottawa, Snow Valley ski club, Squamish, Québec, this group of 15 came from all over Canada to join in the fun of this all expense paid camp!</p>
					<a href="#" class="mandmBtn">Learn More</a>
				</div>
				<div class="image" style="background-image:url('<?php echo $img_url[0]; ?>');">
				</div>
			</li>
			<li>
				<div class="text">
					<h3>Ski Camp 2012</h3>
					<p>Prince George, Ottawa, Snow Valley ski club, Squamish, Québec, this group of 15 came from all over Canada to join in the fun of this all expense paid camp!</p>
					<a href="#" class="mandmBtn">Learn More</a>
				</div>
				<div class="image" style="background-image:url('<?php echo $img_url[0]; ?>');">
				</div>
			</li>
		</ul>

	</div>