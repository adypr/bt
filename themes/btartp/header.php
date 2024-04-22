<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Main page</title>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<header class="header">
		<div class="wrapper header__wrapper">
			<div class="header__logo">
				<h1 class="header__title"><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
			</div>
			<div class="nav__container">
			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'header_menu',
					'container'       => 'nav',
					'container_class' => 'menu-menu-1-container header__nav',
					'menu_class'      => 'menu header__list',
					'walker'          => new Btartp_Menu(),
				)
			);
			?>
			</div>
			<ul class="header__icons">
				<li class="header__icon">
					<?php echo do_shortcode('[ti_wishlist_products_counter]') ?>	
				</li>
				<li class="header__icon">
					<a href="<?php echo wc_get_cart_url(); ?>" class="header__cart">
						<svg class="icon">
							<use xlink:href="<?php echo get_template_directory_uri(); ?>/images/icons-sprite.svg#cart">Cart</use>
						</svg>
						<span class="header_count mini-cart-cnt"><?php echo count(WC()->cart->get_cart()); ?></span>
					</a>
					
				</li>
				<li class="header__icon">
					<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" class="header__user">
						<svg class="icon">
							<use xlink:href="<?php echo get_template_directory_uri(); ?>/images/icons-sprite.svg#user">User</use>
						</svg>
					</a>
				</li>
			</ul>
			<div class="nav__overlay"></div>
			<div class="nav__burger">
				<span class="nav__lines"></span>
				<span class="nav__lines"></span>
				<span class="nav__lines"></span>
			</div>
			<div class="nav__toggle">
				<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" class="header__user">
					<svg class="icon">
						<use xlink:href="<?php echo get_template_directory_uri(); ?>/images/icons-sprite.svg#user">User</use>
					</svg>
				</a>
				<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'header_menu',
							'container'       => 'div',
							'container_class' => 'menu-menu-1-container',
							'menu_class'      => 'menu__burger',
						)
					);
			?>
			</div>
			
		</div>
	</header>
