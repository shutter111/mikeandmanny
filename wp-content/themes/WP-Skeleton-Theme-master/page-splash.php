<?php
/**
 * @package WordPress
 * @subpackage WP-Skeleton
 */
 	get_header();
?>
<div id="splash-page">
	<div class="containerWrapper">
		<div class="header">
			<div class="container">
				<a href="#">Visit Current Site >></a>
			</div>
		</div>
		<?php 
		 	
		    while ( have_posts() ) : the_post();
		   
		?> 
		<div class="container">
			<?php if(has_post_thumbnail()): ?>
				<figure class="banner"><?php the_post_thumbnail(); ?></figure>
			<?php endif; ?>
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
			<div class="cta">
				<a class="mandmBtn" href="#">Apply Now</a>
				<a class="mandmBtn" href="#">For Coaches</a>
			</div>
		</div>
		<?php endwhile; ?>
		<div class="push"></div>
	</div><!-- Wrapper -->
	
	<div class="footer splash">
		<div class="container">
			<div class="footerLeft">
				<div class="colophon">
					<h3>Contact us</h3>
					<address>BC Alpine Ski Association<br>403 - 1788 W Broadway Vancouver, BCV6J 1Y1</address>
					<p class="contact phone">1.123.456.7890</p>
					<p class="contact email"><a href="mailto:info@mikeandmanny.org">info@mikeandmanny.org</a></p>
				</div>
				<div class="colophon social">
					<h3>Follow us</h3>
					<p class="contact"><a href="#" target="_blank"><i class="fa fa-twitter"></i>Twitter</a></p>
					<p class="contact"><a href="#" target="_blank"><i class="fa fa-facebook"></i>Facebook</a></p>
					<p class="contact"><a href="#" target="_blank"><i class="fa fa-vimeo-square"></i>Vimeo</a></p>
				</div>
			</div>
			<div class="footerRight">
				<p class="cr">&copy; Mike &amp; Manny Foundation 2014. All Rights Reserved.</p>
				<p class="madeBy">Made by <strong>Type &amp; Co.</strong></p>
			</div>
		</div>
	</div>
</div>