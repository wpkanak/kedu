<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kedu
 */

?>
<!-- Copy right Start -->
<div class="footer-copy-right">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
				<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'kedu' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'kedu' ), 'Wordpress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: Design by Wpkanak', 'kedu' ));
				?>
		</div><!-- .site-info -->
                </div>
            </div>
        </div>
    </div>
    <!-- Copy right End-->

	<?php wp_footer(); ?>
</body>
</html>
