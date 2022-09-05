<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package kedu
 */

get_header();
?>

<div class="blog-single section-padding">
<div class="container">
	<div class="row">
 <div class="col-lg-8">
 <main id="primary" class="site-main">

<?php
	while ( have_posts() ) :
		the_post();

		get_template_part( 'template-parts/content', 'single' );

		the_post_navigation(
			array(
				'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'kedu' ) . '</span> <span class="nav-title">%title</span>',
				'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'kedu' ) . '</span> <span class="nav-title">%title</span>',
			)
		);

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

	endwhile; // End of the loop.
?>

</main><!-- #main -->
 </div>
 <div class="col-lg-4">
<?php  
get_sidebar(); 
?>
 </div>
</div>
</div>
</div>

<?php
get_footer();