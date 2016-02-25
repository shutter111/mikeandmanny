<?php
/**
 * @package WordPress
 * @subpackage WP-Skeleton
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />

<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if gte IE 9 ]><html class="no-js ie9" lang="en"> <![endif]-->

    <title><?php wp_title('|',true,'right'); ?><?php bloginfo('name'); ?></title>

	<meta name="description" content="<?php bloginfo('description'); ?>" />

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Mobile Specific Metas
  	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-114x114.png">

	<!-- Stylesheets
	================================================== -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheets/bootstrap.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheets/fancySelect.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheets/slicknav.css">

<?php wp_head(); ?>
<script type='text/javascript' src='/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js?ver=3.40.0-2013.08.13'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpcf7 = {"loaderUrl":"\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","sending":"Sending ..."};
/* ]]> */
</script>
<script type='text/javascript' src='/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=3.5.2'></script>
</head>

<body <?php body_class(); ?>><!-- the Body  -->
	<div id="pageContainer">
		<div class="containerWrapper">

			<section id="head">
				<header class="header">
					<div class="container">
						<div class="logo"><a href="<?php echo site_url(); ?>">Mike &amp; Manny Foundation</a></div>
						<nav id="global">
							<ul id="menu">
								<?php wp_nav_menu( array( 
														'theme_location' => 'primary',
														'container' => false,
														'items_wrap' => '%3$s'
													) 
												); 
								?>
								<li><a href="https://app.etapestry.com/cart/SportBC/default/item.php?ref=1691.0.110200877" class="mandmBtn" target="_blank">Donate Now</a></li>
							</ul>
						</nav>
					</div>
				</header>
			</section>
