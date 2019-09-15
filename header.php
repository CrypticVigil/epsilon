<!doctype html>

<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( "charset" ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'coral' ); ?></a>

<header class="nav-header">
	<div class="navbar">
		<a class="navbar__link" href="<?php echo get_bloginfo('url')?>"><img class="navbar__logo" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/tin_logo.svg" alt="<?php echo get_bloginfo( 'name' ); ?>"></a>

		<div id="desktop-nav">
			<?php
			wp_nav_menu( array(
				'container'				=> 'nav',
				'container_class'	=> 'desktop-nav__menu',
				'menu_class'		 	=> 'desktop-nav__menu-ul',
				'depth'						=> '1'
				) );
			?>
		</div>

		<a href="javascript:void(0);" class="mobile-menu__link" onclick="navMenu()"><svg height="32px" id="mobile-menu__hamburger" style="enable-background:new 0 0 32 32;" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2  s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2  S29.104,22,28,22z"/></svg></a>

	</div>

	<div id="mobile-nav" class="mobile-menu--hidden">
		<?php
		wp_nav_menu( array(
			'container'				=> 'nav',
			'container_class'	=> 'mobile-nav__menu',
			'menu_class'		 	=> 'mobile-nav__menu-ul',
			'depth'						=> '1'
			) );
		?>
	</div>
</header>