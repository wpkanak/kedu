<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kedu
 */

get_header();
?>

   <div class="container section-padding">
	   <div class="row">
		   <div class="col-lg-8">
		   <main id="primary" class="site-main">

			<?php if ( have_posts() ) : ?>

				<div class="archive-header">
				<header class="page-header">
					<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
					?>
				</header><!-- .page-header -->
				</div>

				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/*
					* Include the Post-Type-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Type name) and that will be used instead.
					*/
					get_template_part( 'template-parts/content', 'excerpt' );

				endwhile;

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>

			</main><!-- #main -->
		   </div>
		   <div class="col-lg-4">
		 <?php  get_sidebar(); ?>
		   </div>
	   </div>
   </div>
<?php
get_footer();
