<?php 
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' ); 
 
function enqueue_parent_styles() { 
  wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' ); 
} 


add_action( 'wp_print_scripts', 'remover_js', 100 );
function remover_js() {
	if(is_page('registro')){
		wp_deregister_script( 'angular-app' );
	}
}



?>