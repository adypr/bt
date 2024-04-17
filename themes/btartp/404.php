<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package art-project
 */

get_header();
?>

	<main id="primary" class="site-main">
		<section class="error-404 not-found">
			<header class="page-header">
				<h2 class="page-title"><?php esc_html_e( 'That page can&rsquo;t be found.', 'btartp' ); ?></h2>
			</header>
			<div class="not-found__picture"></div>
		</section><!-- .error-404 -->
	</main><!-- #main -->

<?php
get_footer();
