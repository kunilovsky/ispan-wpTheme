<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Spain
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<!-- Developer by Kunilovsky VA -->
<!-- https://kunilovsky.ru -->

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
	<?php wp_head(); ?>
</head>
<?php global $redux_demo; ?>

<body style="background-image: url(<?php echo $redux_demo['bg-body']['url']; ?>);" <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header class="pt-2 sticky-top">
		<nav class="navbar navbar-expand-lg">
			<div class="container header">
				<a class="navbar-brand" href="#">
					<img src="<?php echo $redux_demo['logo']['url']; ?>" alt="logo">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="menu">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'container' => false,
							'menu_class' => 'navbar-nav ms-auto pe-2 mb-2 mb-lg-0',
							'add_li_class' => 'nav-item',
							'link_class' => 'nav-link'
						)
					);
					?>
				</div>
			</div>
		</nav>
	</header>