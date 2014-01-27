<!-- HEADER -->
<!doctype html>
<html lang="ru">
<head>
	<title>BestSound Studios</title>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/normalize.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
	<meta charset="UTF-8">

</head>
<body>

	<div class="wrapper">
		<div class="rel">
			<img src="<?php bloginfo('template_directory'); ?>/img/Logo.png" alt="BestSound" class="logo">
			<form action="#">
				<input type="search" name="q" placeholder="Поиск">
			</form>
		</div>

	<?php
		$args = array(
		'menu'				=> 'main menu',
		'container'			=> 'nav',
		'container_class'	=> '',
		'before'			=> '',
		'after'				=> '',
		'depth'				=> '0'
		);
		wp_nav_menu( $args );
	?>


<!-- /HEADER -->