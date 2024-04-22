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
				<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'header_menu',
							'container'       => 'nav',
							'container_class' => 'footer__nav',
							'menu_class'      => 'footer__list',
						)
					);
				?>
				<ul class="footer__icons">
					<li class="footer__icon">
						<a href="https://www.artmajeur.com/tatiana-yasin?view=grid&collections%5B%5D=2302081">
							<svg class="icon" width="48" height="48">
								<use xlink:href="<?php echo get_template_directory_uri(); ?>/images/social-sprite.svg#artmajeur">Artmajeur</use>
							</svg>
						</a>
					</li>
					<li class="footer__icon">
						<a href="https://www.instagram.com/tartyasin/">
							<svg class="icon" width="48" height="48">
								<use xlink:href="<?php echo get_template_directory_uri(); ?>/images/social-sprite.svg#instagram">Instagram</use>
							</svg>
						</a>
					</li>
				</ul>
			</div>
			<div class="footer__copy">© 2024</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>
