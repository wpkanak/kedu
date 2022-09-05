<?php 

function kedu_script() {
	
// Bootstrap-CSS
	wp_enqueue_style( 'bootstrap-css',get_theme_file_uri( '/assets/css/bootstrap.min.css' ), null, _S_VERSION );

// fontawesome-CSS
	wp_enqueue_style( 'fontawesome-css',get_theme_file_uri( '/assets/css/fontawesome.min.css' ), null, _S_VERSION );

// Google-fonts
	wp_enqueue_style( 'google-font', '//fonts.googleapis.com/css?family=Poppins|Roboto:100,300,400,500,700,900',  '', '1.0.0', 'screen' );

// Main-CSS
	wp_enqueue_style( 'style-css',get_theme_file_uri( '/assets/css/main.css' ), null, _S_VERSION );

// Responsive-CSS
	wp_enqueue_style( 'responsive-css',get_theme_file_uri( '/assets/css/responsive.css' ), null, _S_VERSION );

// Style-CSS
    wp_enqueue_style( 'kedu-style', get_stylesheet_uri(), array(), _S_VERSION );

// Editor-style-CSS
	add_editor_style( 'editor-style',get_theme_file_uri( '/assets/css/editor-style.css' ), null, _S_VERSION );

// RTL
    wp_style_add_data( 'kedu-style', 'rtl', 'replace' );
	
// Jquery_enqueue 

	// Bootstrap-JS
	 wp_enqueue_script( 'bootstrap-js', get_theme_file_uri( '/assets/js/bootstrap.min.js' ), array( 'jquery' ), _S_VERSION, true );

	  // Popper-JS
	 wp_enqueue_script( 'popper-js', get_theme_file_uri( '/assets/js/popper.min.js' ), array( 'jquery' ), _S_VERSION, true );

	 //navigation-JS 
	 wp_enqueue_script( 'navigation-js', get_theme_file_uri( '/assets/js/navigation.js' ), array( 'jquery' ), _S_VERSION, true );

	 if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'kedu_script' );