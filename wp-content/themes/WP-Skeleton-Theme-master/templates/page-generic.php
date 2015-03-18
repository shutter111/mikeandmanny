<?php

	$page_title = get_field('page_title');
	$secondary_title = get_field('secondary_title');
	$page_intro = get_field('page_intro');

	$event_date = get_field('event_date');
	$event_place = get_field('event_place');

?>
<article class="main">
	<div class="container">
		<header>
			
			<?php if(is_front_page()): ?>

				<div class="homeContainer">
					<h1><?php echo $page_title; ?></h1>
					<div class="cta"><a href="https://app.etapestry.com/cart/SportBC/default/item.php?ref=1691.0.110200877" class="mandmBtn applynow" target="_blank">Donate Now</a></div>
				</div>

				<?php if(has_post_thumbnail()): ?>
					<figure class="banner"><?php the_post_thumbnail('full'); ?></figure>
				<?php endif; ?>


			<?php else: ?>

				<?php 

					if($event_date || $event_place){


						echo '<hgroup>';

							if($page_title){

								echo '<h1>'.$page_title.'</h1>';

							}else {
								echo '<h1>';
									the_title();
								echo '</h1>';
							}

							echo '<h4><span>'.$event_date.'</span><span>'.$event_place.'</span></h4>';
						echo '</hgroup>';


					}else {


						if($page_title){

							echo '<h1>'.$page_title.'</h1>';

						}else {
							echo '<h1>';
								the_title();
							echo '</h1>';
						}


					}

				?>


				<?php if(has_post_thumbnail()): ?>
					<figure class="banner"><?php the_post_thumbnail('full'); ?></figure>
				<?php endif; ?>


			<?php endif; ?>

		</header>

		<div class="content-area">
			<?php echo $secondary_title ? '<h2>'.$secondary_title.'</h2>' : ''; ?>
			<?php echo $page_intro ? $page_intro : ''; ?>
		</div>

	</div>
</article>