<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kedu
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'kedu' ); ?></a>

	<div class="main-menu">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-sm-12">
				<?php          
					$custom_logo = get_theme_mod( 'custom_logo' );
					$kedu_logo = wp_get_attachment_image_src( $custom_logo , 'full' );               
                        if (has_custom_logo()) {?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php
							echo '<img class="logo" src="' . esc_url( $kedu_logo[0] ) . '" alt="' .  esc_attr(get_bloginfo( 'name' )) . '">';?>
							</a> <?php 
                        }  else {                             
                            ?>
                            <div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
                        <?php } ?>
				</div>
					<div class="col-lg-9 col-sm-12"> 
				<div class="menu-right">
			<div id="masthead">			
				
				<button id="menu-toggle" class="menu-toggle"><?php esc_html_e( 'Menu', 'kedu' ); ?></button>

				<div id="site-header-menu" class="site-header-menu">
					
						<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'kedu' ); ?>">
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_class' => 'primary-menu',
									)
								);
							?>
						</nav><!-- .main-navigation -->
				
				</div><!-- .site-header-menu -->
			
	      	</div><!-- .site-header-main -->
				</div>
				</div>
			</div>
		</div>
	</div>

	
