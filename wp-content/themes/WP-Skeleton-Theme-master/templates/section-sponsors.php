<?php
	//global $post;
	//$post = $wp_query->post;
	$sponsors = get_field('sponsors');
	$frontpage_ID = get_option('page_on_front');

	if(!$sponsors){
		$sponsors = get_field('sponsors', $frontpage_ID);
	}


	if($sponsors){
?>
		<section class="section" id="sponsors">
			<h1 class="center">We love our sponsors</h1>

			<div class="sectionWrapper">
				<div class="container">
					<div class="pager" id="sponsors-pager">
						<div class="left"></div>
						<div class="right"></div>
					</div>
					<ul class="bxslider">
<?php
	};

					foreach($sponsors as $sponsor):
						$logo = $sponsor["logo"];
						$logo_alt = $sponsor["logo_alt"];
?>

							<li><figure class="sponsor"><img src="<?php echo $logo; ?>" alt="<?php echo $logo_alt; ?>"></figure></li>
<?php 

					endforeach;
	

?>


<?php 

	if($sponsors){
?>
					</ul>
				</div>
			</div>
		</section>
<?php
	};
?>