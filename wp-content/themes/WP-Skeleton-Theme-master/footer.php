<?php
/**
 * @package WordPress
 * @subpackage WP-Skeleton
 */
?>
		<?php get_template_part( 'templates/section-sponsors' ); ?>
		<div class="push"></div>
	</div> <!-- containerWrapper -->

	<footer class="footer">
		<div class="container">
			<div class="footerLeft">
				<?php
					//$user_id = get_current_user_id();
					$user_id = 1;
					$footer = get_field('contact_us', 'user_'.$user_id);
					$social = get_field('social_links', 'user_'.$user_id);

					$address = $footer[0]["address"];
					$phone = $footer[0]["phone_number"];
					$email = $footer[0]["email_address"];

					$tw = $social[0]["twitter"];
					$fb = $social[0]["facebook"];
					$vi = $social[0]["vimeo"];
				?>
				<div class="colophon">
					<h3>Contact us</h3>
					<?php echo $address ? '<address>'.$address.'</address>' : ''; ?>
					<?php echo $phone ? '<p class="contact phone">'.$phone.'</p>' : ''; ?>
					<?php echo $email ? '<p class="contact email"><a href="mailto:'.$email.'">'.$email.'</a></p>' : ''; ?>
				</div>
				<div class="colophon social">
					<h3>Follow us</h3>
					<?php if($tw): ?>
						<p class="contact"><a href="<?php echo $tw; ?>" target="_blank"><i class="fa fa-twitter"></i>Twitter</a></p>
					<?php endif; ?>
					<?php if($fb): ?>
						<p class="contact"><a href="<?php echo $fb; ?>" target="_blank"><i class="fa fa-facebook"></i>Facebook</a></p>
					<?php endif; ?>
					<?php if($vi): ?>
						<p class="contact"><a href="<?php echo $vi; ?>" target="_blank"><i class="fa fa-vimeo-square"></i>Vimeo</a></p>
					<?php endif; ?>
				</div>
			</div>
			<div class="footerRight">
				<p class="cr">&copy; <?php echo get_bloginfo('name'); ?> <?php echo date('Y'); ?>. All Rights Reserved.</p>
				<p class="madeBy">Made by <strong>Type &amp; Co.</strong></p>
			</div>
		</div>
	</footer>

</div> <!-- pageContainer -->                                         
<?php wp_footer(); ?>
   
</body>
</html>