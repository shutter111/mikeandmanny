<?php
	get_header();

		if(have_posts()): while(have_posts()): the_post();

			get_template_part( 'templates/page-generic' );
?>

			<?php if(have_rows('our_team')): ?>

				<section class="section" id ="our-team">
					<h1 class="center">Our Team</h1>

					<div class="container">

					<?php while(have_rows('our_team')): the_row();

						if(have_rows('team_member')): while(have_rows('team_member')): the_row();

							$picture = get_sub_field('picture');
							$name = get_sub_field('name');
							$bio = get_sub_field('bio');

					?>

							<article class="team-member">

								<figure><img src="<?php echo $picture; ?>" alt=""></figure>
								<h1><?php echo $name; ?></h1>
								<?php echo $bio; ?>

								<?php if(have_rows('website')): while(have_rows('website')): the_row();

									$button_text = get_sub_field('button_text');
									$button_link = get_sub_field('button_link');

										if($button_link):
								?>
											<div class="cta">
												<a href="<?php echo $button_link; ?>" class="mandmBtn" target="_blank">
													<?php echo $button_text ? $button_text : $button_link; ?>
												</a>
											</div>

								<?php

										endif;

									endwhile; endif; 
								?>

							</article>

					<?php

						endwhile; endif;

						endwhile; 
					?>
						<!--<article class="team-member">
							<figure></figure>
							<h1>Mike Janyk</h1>
							<p></p>
							<a href="#" class="mandmBtn" target="_blank">More about Mike</a>
						</article>-->
					</div>
				</section>

			<?php endif; ?>

<?php

		endwhile; endif;

	get_footer(); 
?>