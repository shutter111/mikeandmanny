<?php
	wp_enqueue_script( 'fancyselect', get_template_directory_uri().'/js/fancySelect.js', array('jQuery'), false, true );
	wp_enqueue_script( 'fundraiser', get_template_directory_uri().'/js/fundraiser.js', array('jQuery', 'fancyselect'), false, true );

	get_header();

		if(have_posts()): while(have_posts()): the_post();

			get_template_part( 'templates/page-generic' );

			if(have_rows('intro')):
?>
	

				<div class="container" id="fundraisers">
					<div class="content-area">
						<?php while(have_rows('intro')): the_row();

							$text = get_sub_field('text');
							$image = get_sub_field('image');

						?>

							<figure><img src="<?php echo $image; ?>" alt=""></figure>
							<?php echo $text; ?>

						<?php endwhile; ?>
					</div>
				</div>

			<?php endif; ?>

			<?php if(have_rows('upcoming_events')): ?>
			<section class="section" id="upcoming-event">
				<div class="container">
					<h1 class="center">upcoming fundraiser event</h1>

					<?php while(have_rows('upcoming_events')): the_row(); ?>

						<?php if(have_rows('event')): ?>
						<article class="event">
							<?php while(have_rows('event')): the_row();

								$image = get_sub_field('image');
								$title = get_sub_field('event_title');
								$where = get_sub_field('where');
								$when = get_sub_field('when');
								$cost = get_sub_field('cost');
								$message = get_sub_field('message');
								$message_from = get_sub_field('message_from');
							?>
								<figure><img src="<?php echo $image; ?>" alt=""></figure>
								<h1><?php echo $title; ?></h1>
								<p><strong>Where:</strong> <?php echo $where; ?></p>
								<p><strong>When:</strong> <?php echo $when; ?></p>
								<p><strong>Cost:</strong> <?php echo $cost; ?></p>

								<blockquote>
									<?php echo $message; ?>
									<span>– <?php echo $message_from; ?></span>
								</blockquote>
							<?php endwhile; ?>
						</article>
						<?php endif; ?>

					<?php endwhile; ?>

					<div class="sub-section">
						<h2 class="center">Purchase Your Tickets</h2>

						<div class="tickets">
							<div class="option">
								<p>Purchase your tickets through paypal here!</p>
								<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
									<input name="cmd" type="hidden" value="_s-xclick" />
									<input name="hosted_button_id" type="hidden" value="536QCCTVLPZ2U" /></form>
									<table>
										<tbody>
											<tr>
												<td>
													<select name="os0" id="ticket">
													<option value="1 tickets">1 tickets $150.00 CAD</option>
													<option value="2 tickets">2 tickets $300.00 CAD</option>
													<option value="3 tickets">3 tickets $450.00 CAD</option>
													<option value="4 tickets">4 tickets $600.00 CAD</option>
													</select>
												</td>
											</tr>
										</tbody>
									</table>
									<input name="currency_code" type="hidden" value="CAD" />
									<img class="paypal" src="<?php echo get_template_directory_uri(); ?>/images/paypal.jpg" alt="Paypal">
									<input class="mandmBtn applynow" alt="PayPal - The safer, easier way to pay online!" name="submit" type="submit" value="Buy Now" />
								</form>
							</div>
							<div class="option">
								<p>If you don’t have paypal, simply email us to purchase your tickets!</p>
								<a href="#" class="mandmBtn applynow">Purchase Your Ticket</a>
							</div>
						</div><!-- tickets -->

					</div>
				</div>
			</section>
			<?php endif; ?>

<?php

		endwhile; endif;

	get_footer(); 
?>