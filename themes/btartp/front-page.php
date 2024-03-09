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
				<?php 
					$products = new WP_Query([
						'posts_per_page' => '20',
						'post_type' => 'product'
					]);
					
				?>

				<?php if ( $products->have_posts() ) : while ( $products->have_posts() ) : $products->the_post(); ?>
				<?php get_template_part('template-parts/content-product'); ?>
				<?php endwhile; else: ?>
					No products
				<?php endif; ?>
			</ul>
		</section>
	</main>
<?php get_footer(); ?>
