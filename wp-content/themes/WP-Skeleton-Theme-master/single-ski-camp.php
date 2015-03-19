<?php
	wp_enqueue_script( 'bpopup', get_template_directory_uri().'/js/jquery.bpopup.min.js', array('jQuery'), false, true );
	wp_enqueue_script( 'skiCampjs', get_template_directory_uri().'/js/ski-camp.js', array('jQuery', 'bpopup', 'bxSliderjs'), false, true );

	get_header();

		if(have_posts()): while(have_posts()): the_post();

			get_template_part( 'templates/page-generic' );


			if(have_rows('details')): while(have_rows('details')): the_row();

?>
			<div id="ski-camp-details">

				<?php if(have_rows('detail')): 
					$i = 0;
				?>
				<?php

					while(have_rows('detail')): the_row();

					$detail_title = get_sub_field('detail_title');
					$detail_text = get_sub_field('detail_text');
					$detail_image = get_sub_field('detail_image');

	
					$i++;
				?>

				<div class="ski-camp-details">

					<div class="container ski-camp">
						<div class="content-area">
							<?php
								if($i % 2 == 0):
								//var_dump($i);
							?>
							<div class="detail">

								<div class="text">
									<?php echo $detail_title ? '<h3>'.$detail_title.'</h3>' : ''; ?>
									<?php echo $detail_text; ?>
								</div>

								<?php if(have_rows('video')): while(have_rows('video')): the_row();
									$video_thumb = get_sub_field('video_thumb');
									$video_url = get_sub_field('video_url');

									if($video_thumb && $video_url):
								?>
											<figure class="video" data-attr="video-<?php echo $i; ?>"><img src="<?php echo $video_thumb; ?>" alt=""></figure>

											<div class="vimeoVid" id="video-<?php echo $i; ?>">
												<div class="container videoWrapper">
													<?php echo $video_url; ?>
												</div>
											</div>
										<?php endif; ?>
									<?php endwhile; ?>
								<?php else: ?>
									<?php echo $detail_image ? '<figure><img src="'.$detail_image.'" alt=""></figure>' : ''; ?>
								<?php endif; ?>

							</div>

							<?php else: ?>

							<div class="detail">

								<?php if(have_rows('video')): while(have_rows('video')): the_row();
									$video_thumb = get_sub_field('video_thumb');
									$video_url = get_sub_field('video_url');

									if($video_thumb && $video_url):
								?>
											<figure class="video" data-attr="video-<?php echo $i; ?>"><img src="<?php echo $video_thumb; ?>" alt=""></figure>

											<div class="vimeoVid" id="video-<?php echo $i; ?>">
												<div class="container videoWrapper">
													<?php echo $video_url; ?>
												</div>
											</div>
										<?php endif; ?>
									<?php endwhile; ?>
								<?php else: ?>
									<?php echo $detail_image ? '<figure><img src="'.$detail_image.'" alt=""></figure>' : ''; ?>
								<?php endif; ?>

								<div class="text">
									<?php echo $detail_title ? '<h3>'.$detail_title.'</h3>' : ''; ?>
									<?php echo $detail_text; ?>
								</div>

							</div>

							<?php endif; ?>

						</div><!-- content area -->
					</div>


				</div>


				<?php 
						

					endwhile; endif; 
				?>

			</div>

			<?php endwhile; endif; ?>

			<div class="cta">
				<a href="https://vimeo.com/mikeandmanny" class="mandmBtn applynow" target="_blank">View all videos</a>
			</div>
								

<?php

		endwhile; endif;

	get_footer(); 
?>
    
                               