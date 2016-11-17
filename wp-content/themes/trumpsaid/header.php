<!doctype html>
<head>
	<meta charset="UTF-8">
	<title><?php the_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
	<header id="header">
		<!-- <h1>
			// <a href="<?php // home_url(); ?>" ><?php // bloginfo( 'name' );?></a>
		</h1>
		<div class="menu">
			// <?php
			//	wp_nav_menu( array(
			// 	'theme_location'  => 'main-menu',
			// 	'menu'            => '',
			// 	'container'       => 'nav',
			// 	'container_class' => 'class-nav',
			// 	'container_id'    => 'menu-principal',
			// 	'menu_class'      => 'menu',
			// 	'menu_id'         => '',
			// 	'echo'            => true,
			// 	'fallback_cb'     => 'wp_page_menu',
			// 	'before'          => '',
			// 	'after'           => '',
			// 	'link_before'     => '<span class="icon">',
			// 	'link_after'      => '</span>',
			// 	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			// 	'depth'           => 0,
			// 	'walker'          => ''
			//  ) ); ?>
		</div> -->
	</header>