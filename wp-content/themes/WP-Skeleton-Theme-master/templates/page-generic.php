<?php

	$page_title = get_field('page_title');
	$secondary_title = get_field('secondary_title');
	$page_intro = get_field('page_intro');

?>
<article class="main">
	<div class="container">
		<header>
			
			<?php echo $page_title ? '<h1>'.$page_title.'</h1>' : ''; ?>
			<?php if(has_post_thumbnail()): ?>
				<figure class="banner"><?php the_post_thumbnail('full'); ?></figure>
			<?php endif; ?>

		</header>

		<div class="content-area">
			<?php echo $secondary_title ? '<h2>'.$secondary_title.'</h2>' : ''; ?>
			<?php echo $page_intro ? $page_intro : ''; ?>
		</div>

	</div>
</article>