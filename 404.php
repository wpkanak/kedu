<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package kedu
 */

get_header();
?>

	<div class="container section-padding">
	<div class="row">
	<div class="col-lg-12">
	<main id="primary" class="site-main">
	<section class="error-404 not-found">
		<header class="page-header">
			<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'kedu' ); ?></h1>
		</header><!-- .page-header -->

		<div class="page-content">
			<p><?php esc_html_e( 'It looks like the link pointing here was faulty. Maybe try searching? ', 'kedu' ); ?></p>
			<?php get_search_form(); ?>
		</div><!-- .page-content -->
	</section><!-- .error-404 -->

	</main><!-- #main -->
	</div>
	</div>
	</div>


<?php
get_footer();
