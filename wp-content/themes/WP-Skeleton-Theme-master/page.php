<?php
	get_header();

	if(have_posts()): while(have_posts()): the_post();
?>

	<article class="main">
		<div class="container">
			<header>
				
				<h1>Welcome to the Mike &amp; Manny Cowboy Ski Camp</h1>
				<?php if(has_post_thumbnail()): ?>
					<figure class="banner"><?php the_post_thumbnail('full'); ?></figure>
				<?php endif; ?>

			</header>

			<div class="content-area">
				<h2>Mike and Manny grew up watching their families make a lot of tough sacrifices to help them chase their ski racing dreams.</h2>
				<p>They know there are a lot of other young ski racers out there who are dreaming those same dreams today – but like Mike and Manny did – are watching their families make some tough financial decisions and sacrifices to keep their dreams alive.</p>
				<h3>Our goal</h3>
				<p>They know there are a lot of other young ski racers out there who are dreaming those same dreams today – but like Mike and Manny did – are watching their families make some tough financial decisions and sacrifices to keep their dreams alive.</p>
			</div>

		</div>
	</article>

<?php
	endwhile; endif;

	get_footer(); 
?>