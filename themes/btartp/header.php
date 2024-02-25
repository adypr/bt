<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<link rel="icon" type="image/svg+xml" href="/vite.svg" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Main page</title>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<header class="header">
		<div class="wrapper header__wrapper">
			<div class="header__logo">
				<h1 class="header__title"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
			</div>
			<?php wp_nav_menu(
				array(
					'theme_location' => 'header_menu',
					'container' => 'nav',
					'container_class' => 'menu-menu-1-container header__nav',
					'menu_class' => 'menu header__list',
					'walker' => new Btartp_Menu(),
				)
			); ?>
			<ul class="header__icons">
				<li class="header__icon">
					<a href="#" class="header__favor header__badge">
						<svg class="icon">
							<use xlink:href="<?php echo get_template_directory_uri()?>/images/icons-sprite.svg#heart">favorites</use>
						</svg>
					</a>
				</li>
				<li class="header__icon">
					<a href="#" class="header__cart header__badge">
						<svg class="icon">
							<use xlink:href="<?php echo get_template_directory_uri()?>/images/icons-sprite.svg#cart">Cart</use>
						</svg>
					</a>
				</li>
				<li class="header__icon">
					<a href="#" class="header__user">
						<svg class="icon">
							<use xlink:href="<?php echo get_template_directory_uri()?>/images/icons-sprite.svg#user">User</use>
						</svg>
					</a>
				</li>
			</ul>
		</div>
	</header>