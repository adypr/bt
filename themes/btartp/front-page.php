<?php get_header(); ?>

	<main class="main">
		<section class="wrapper main__wrapper">
			<div class="main__header">
				<h2 class="main__title">Gallery</h2>
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'art_categories',
                        'container' => false,
                        'items_wrap' => '<ul id="%1$s" class="%2$s categories">%3$s</ul>',
                        'walker' => new Categories_Menu(),
                    )
                )
                ?>
			</div>
			<ul class="works">

				<li class="work">
					<a href="/layouts/pages/product/index.html" class="work__link">
						<img src="<?php echo get_template_directory_uri(); ?>/images/works/thumbnails/1.jpg" alt="" class="work__img">
						<div class="work__description">
							<h3 class="work__title">Beautiful painting</h3>
							<p class="work__price">$10000</p>
						</div>
					</a>
				</li>

				<li class="work">
					<a href="/layouts/pages/product/index.html" class="work__link">
						<img src="<?php echo get_template_directory_uri(); ?>/images/works/thumbnails/2.jpg" alt="" class="work__img">
						<div class="work__description">
							<h3 class="work__title">Beautiful painting</h3>
							<p class="work__price">$10000</p>
						</div>
					</a>
				</li>

				<li class="work">
					<a href="/layouts/pages/product/index.html" class="work__link">
						<img src="<?php echo get_template_directory_uri(); ?>/images/works/thumbnails/3.jpg" alt="" class="work__img">
						<div class="work__description">
							<h3 class="work__title">Beautiful painting</h3>
							<p class="work__price">$10000</p>
						</div>
					</a>
				</li>

				<li class="work">
					<a href="/layouts/pages/product/index.html" class="work__link">
						<img src="<?php echo get_template_directory_uri(); ?>/images/works/thumbnails/4.jpg" alt="" class="work__img">
						<div class="work__description">
							<h3 class="work__title">Beautiful painting</h3>
							<p class="work__price">$10000</p>
						</div>
					</a>
				</li>

				<li class="work">
					<a href="/layouts/pages/product/index.html" class="work__link">
						<img src="<?php echo get_template_directory_uri(); ?>/images/works/thumbnails/5.jpg" alt="" class="work__img">
						<div class="work__description">
							<h3 class="work__title">Beautiful painting</h3>
							<p class="work__price">$10000</p>
						</div>
					</a>
				</li>

				<li class="work">
					<a href="/layouts/pages/product/index.html" class="work__link">
						<img src="<?php echo get_template_directory_uri(); ?>/images/works/thumbnails/6.jpg" alt="" class="work__img">
						<div class="work__description">
							<h3 class="work__title">Beautiful painting</h3>
							<p class="work__price">$10000</p>
						</div>
					</a>
				</li>

				<li class="work">
					<a href="/layouts/pages/product/index.html" class="work__link">
						<img src="<?php echo get_template_directory_uri(); ?>/images/works/thumbnails/7.jpg" alt="" class="work__img">
						<div class="work__description">
							<h3 class="work__title">Beautiful painting</h3>
							<p class="work__price">$10000</p>
						</div>
					</a>
				</li>

				<li class="work">
					<a href="/layouts/pages/product/index.html" class="work__link">
						<img src="<?php echo get_template_directory_uri(); ?>/images/works/thumbnails/8.jpg" alt="" class="work__img">
						<div class="work__description">
							<h3 class="work__title">Beautiful painting</h3>
							<p class="work__price">$10000</p>
						</div>
					</a>
				</li>

				<li class="work">
					<a href="/layouts/pages/product/index.html" class="work__link">
						<img src="<?php echo get_template_directory_uri(); ?>/images/works/thumbnails/9.jpg" alt="" class="work__img">
						<div class="work__description">
							<h3 class="work__title">Beautiful painting</h3>
							<p class="work__price">$10000</p>
						</div>
					</a>
				</li>

				<li class="work">
					<a href="/layouts/pages/product/index.html" class="work__link">
						<img src="<?php echo get_template_directory_uri(); ?>/images/works/thumbnails/10.jpg" alt="" class="work__img">
						<div class="work__description">
							<h3 class="work__title">Beautiful painting</h3>
							<p class="work__price">$10000</p>
						</div>
					</a>
				</li>

				<li class="work">
					<a href="/layouts/pages/product/index.html" class="work__link">
						<img src="<?php echo get_template_directory_uri(); ?>/images/works/thumbnails/11.jpg" alt="" class="work__img">
						<div class="work__description">
							<h3 class="work__title">Beautiful painting</h3>
							<p class="work__price">$10000</p>
						</div>
					</a>
				</li>

				<li class="work">
					<a href="/layouts/pages/product/index.html" class="work__link">
						<img src="<?php echo get_template_directory_uri(); ?>/images/works/thumbnails/12.jpg" alt="" class="work__img">
						<div class="work__description">
							<h3 class="work__title">Beautiful painting</h3>
							<p class="work__price">$10000</p>
						</div>
					</a>
				</li>

			</ul>
		</section>
	</main>
<?php get_footer(); ?>
