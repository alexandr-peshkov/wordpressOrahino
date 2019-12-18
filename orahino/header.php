<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package orahino
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Mono|Roboto+Slab:300,400,700|Roboto:400,700&display=swap&subset=cyrillic-ext" rel="stylesheet">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<header class="header">
			<div class="container">
				<div class="header-flex">
					<div class="header-logo">
						<div class="name"><a href="<?php home_url()?>"><?php bloginfo('name')?></a></div>
						<div class="slogan"><?php bloginfo('description')?></div>
					</div>
					<div class="header-phone">8<span>(495)</span>777-77-77</div>
					<div class="header-menu"></div>
				</div>

			</div>
			<div class="header-line">
				<?php wp_nav_menu(array(
					'menu_class' => 'header-line_flex'
				));
				?>
			</div>
		</header>

		<div id="content" class="site-content">
			<!-- <ul class="header-line_flex">
					<li><a href="#" class="link-active">Главная</a></li>
					<li><a href="#">Производство</a></li>
					<li><a href="#">Продукция</a></li>
					<li><a href="#">Новости</a></li>
					<li><a href="#">Сертификаты</a></li>
					<li><a href="#">Контакты</a></li>
				</ul> -->