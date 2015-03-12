<?php
	//global $post;
	//$post = $wp_query->post;
	$sponsors = get_field('sponsors');

	if($sponsors){
		echo '<section class="section" id="sponsors">';
			echo '<h1 class="center">We love our sponsors</h1>';
			echo '<div class="container">';
	}

	foreach($sponsors as $sponsor):

		$logo = $sponsor["logo"];
		$logo_alt = $sponsor["logo_alt"];
?>
		<img src="<?php echo $logo; ?>" alt="<?php echo $logo_alt; ?>">

<?php 
	endforeach;

	if($sponsors){
			echo '</div>';
		echo '</section>';
	}
?>