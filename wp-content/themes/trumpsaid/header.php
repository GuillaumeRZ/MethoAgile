<!doctype html>
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo( 'name' ); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../wp-content/themes/trumpsaid/js/clipboard.min.js">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js" async></script>
	
	     <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script> 
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
	<header class="header">
			<?php
				wp_nav_menu( array(
				'theme_location'  => 'main-menu',
				'menu'            => '',
				'container'       => 'nav',
				'container_class' => 'main-menu',
				'container_id'    => 'main-menu',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu'
			) ); ?>
	</header>