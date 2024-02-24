<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
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
				<h1 class="header__title"><a href="#">ArtYasins</a></h1>
			</div>
			<nav class="header__nav">
				<ul class="header__list">

					<li class="header__item">
						<a href="#" class="header__link">Home</a>
					</li>

					<li class="header__item">
						<a href="#" class="header__link">About me</a>
					</li>

					<li class="header__item">
						<a href="#" class="header__link">Blog</a>
					</li>

					<li class="header__item">
						<a href="#" class="header__link">Contacts</a>
					</li>

				</ul>
			</nav>
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

	<div class="breadcrumbs">
		<div class="wrapper breadcrumbs__wrapper">
			<a href="#" class="breadcrumbs__link">Home</a>

			| <a href="#" class="breadcrumbs__link"> Gallery</a>

			<span class="breadcrumbs__current"> | Abstract</h2>

		</div>
	</div>
	<main class="main">
		<section class="wrapper main__wrapper">
			<div class="main__header">
				<h2 class="main__title">Gallery</h2>
				<ul class="categories">
					<li class="categories__item active">All</li>

					<li class="categories__item"><a href="#" class="categories__link">Abstract</a></li>

					<li class="categories__item"><a href="#" class="categories__link">Sea</a></li>

					<li class="categories__item"><a href="#" class="categories__link">Mountains</a></li>

				</ul>
			</div>
			<ul class="works">

				<li class="work">
					<a href="/layouts/pages/product/index.html" class="work__link">
						<img src="<?php echo get_template_directory_uri()?>/images/works/thumbnails/1.jpg" alt="" class="work__img">
						<div class="work__description">
							<h3 class="work__title">Beautiful painting</h3>
							<p class="work__price">$10000</p>
						</div>
					</a>
				</li>

				<li class="work">
					<a href="/layouts/pages/product/index.html" class="work__link">
						<img src="<?php echo get_template_directory_uri()?>/images/works/thumbnails/2.jpg" alt="" class="work__img">
						<div class="work__description">
							<h3 class="work__title">Beautiful painting</h3>
							<p class="work__price">$10000</p>
						</div>
					</a>
				</li>

				<li class="work">
					<a href="/layouts/pages/product/index.html" class="work__link">
						<img src="<?php echo get_template_directory_uri()?>/images/works/thumbnails/3.jpg" alt="" class="work__img">
						<div class="work__description">
							<h3 class="work__title">Beautiful painting</h3>
							<p class="work__price">$10000</p>
						</div>
					</a>
				</li>

				<li class="work">
					<a href="/layouts/pages/product/index.html" class="work__link">
						<img src="<?php echo get_template_directory_uri()?>/images/works/thumbnails/4.jpg" alt="" class="work__img">
						<div class="work__description">
							<h3 class="work__title">Beautiful painting</h3>
							<p class="work__price">$10000</p>
						</div>
					</a>
				</li>

				<li class="work">
					<a href="/layouts/pages/product/index.html" class="work__link">
						<img src="<?php echo get_template_directory_uri()?>/images/works/thumbnails/5.jpg" alt="" class="work__img">
						<div class="work__description">
							<h3 class="work__title">Beautiful painting</h3>
							<p class="work__price">$10000</p>
						</div>
					</a>
				</li>

				<li class="work">
					<a href="/layouts/pages/product/index.html" class="work__link">
						<img src="<?php echo get_template_directory_uri()?>/images/works/thumbnails/6.jpg" alt="" class="work__img">
						<div class="work__description">
							<h3 class="work__title">Beautiful painting</h3>
							<p class="work__price">$10000</p>
						</div>
					</a>
				</li>

				<li class="work">
					<a href="/layouts/pages/product/index.html" class="work__link">
						<img src="<?php echo get_template_directory_uri()?>/images/works/thumbnails/7.jpg" alt="" class="work__img">
						<div class="work__description">
							<h3 class="work__title">Beautiful painting</h3>
							<p class="work__price">$10000</p>
						</div>
					</a>
				</li>

				<li class="work">
					<a href="/layouts/pages/product/index.html" class="work__link">
						<img src="<?php echo get_template_directory_uri()?>/images/works/thumbnails/8.jpg" alt="" class="work__img">
						<div class="work__description">
							<h3 class="work__title">Beautiful painting</h3>
							<p class="work__price">$10000</p>
						</div>
					</a>
				</li>

				<li class="work">
					<a href="/layouts/pages/product/index.html" class="work__link">
						<img src="<?php echo get_template_directory_uri()?>/images/works/thumbnails/9.jpg" alt="" class="work__img">
						<div class="work__description">
							<h3 class="work__title">Beautiful painting</h3>
							<p class="work__price">$10000</p>
						</div>
					</a>
				</li>

				<li class="work">
					<a href="/layouts/pages/product/index.html" class="work__link">
						<img src="<?php echo get_template_directory_uri()?>/images/works/thumbnails/10.jpg" alt="" class="work__img">
						<div class="work__description">
							<h3 class="work__title">Beautiful painting</h3>
							<p class="work__price">$10000</p>
						</div>
					</a>
				</li>

				<li class="work">
					<a href="/layouts/pages/product/index.html" class="work__link">
						<img src="<?php echo get_template_directory_uri()?>/images/works/thumbnails/11.jpg" alt="" class="work__img">
						<div class="work__description">
							<h3 class="work__title">Beautiful painting</h3>
							<p class="work__price">$10000</p>
						</div>
					</a>
				</li>

				<li class="work">
					<a href="/layouts/pages/product/index.html" class="work__link">
						<img src="<?php echo get_template_directory_uri()?>/images/works/thumbnails/12.jpg" alt="" class="work__img">
						<div class="work__description">
							<h3 class="work__title">Beautiful painting</h3>
							<p class="work__price">$10000</p>
						</div>
					</a>
				</li>

			</ul>
		</section>
	</main>


	<footer class="footer">
		<div class="wrapper footer__wrapper">
			<div class="footer__main">
				<div class="footer__form">
					<p class="footer__text">Subscribe to my news</p>
					<div class="footer__send">
						<input type="text" class="footer__field" placeholder="Email">
						<input type="button" class="footer__button" value="Send">
					</div>
				</div>
				<nav class="footer__nav">
					<ul class="footer__list">

						<li class="footer__item">
							<a href="#" class="footer__link">Home</a>
						</li>

						<li class="footer__item">
							<a href="#" class="footer__link">About me</a>
						</li>

						<li class="footer__item">
							<a href="#" class="footer__link">Blog</a>
						</li>

						<li class="footer__item">
							<a href="#" class="footer__link">Contacts</a>
						</li>

					</ul>
				</nav>
			</div>
			<div class="footer__copy">© 2023</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>

</html>