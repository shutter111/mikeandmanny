<?php
	get_header();

		if(have_posts()): while(have_posts()): the_post();

			get_template_part( 'templates/page-generic' );

			if(have_rows('details')): while(have_rows('details')): the_row();
?>
				<div class="container" id="ski-camp-details">


						<?php if(have_rows('detail')): ?>

							<div class="content-area">
								<?php while(have_rows('detail')): the_row();

									$detail_title = get_sub_field('detail_title');
									$detail_text = get_sub_field('detail_text');
									$detail_image = get_sub_field('detail_image');

								?>
									<div class="detail">
										<?php echo $detail_image ? '<figure><img src="'.$detail_image.'" alt=""></figure>' : ''; ?>
										<?php echo $detail_title ? '<h3>'.$detail_title.'</h3>' : ''; ?>
										<?php echo $detail_text; ?>
									</div>

								<?php endwhile; ?>

							</div>
							
						<?php endif; ?>

				</div>

<?php
	
	if(have_rows('application_info')): while(have_rows('application_info')): the_row();

?>
				<aside id="ski-camp-info">

					<?php if(have_rows('info')): ?>

					<div class="container">

						<ul>

							<?php while(have_rows('info')): the_row();

								$info_title = get_sub_field('info_title');
								$info_text = get_sub_field('info_text');
							?>

								<li>
									<?php echo $info_title ? '<h2>'.$info_title.'</h2>' : ''; ?>
									<?php echo $info_text; ?>
								</li>

							<?php endwhile; ?>

						</ul>

					</div>

					<?php endif; ?>

				</aside>

<?php endwhile; endif; ?>

			<div class="cta center">
				<a class="mandmBtn applynow" data-attr="athlete" href="#">Apply Now</a>
			</div>


			<?php get_template_part( 'templates/section-mini-carousel' ); ?>


<?php
			endwhile; endif;

		endwhile; endif;

	get_footer(); 
?>