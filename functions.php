	<?php 
function codgenx_scripts_styles_1607587704(){ 
 
 /*Register CSS*/ 
 
 wp_register_style('code-genx-theme-css-css',get_stylesheet_directory_uri().'/css/theme.css'); 
 

 /*   CALL ALL CSS AND SCRIPTS FOR SITE */ 
	  
 wp_enqueue_style('code-genx-theme-css-css');

  wp_register_style('code-genx-theme-main',get_stylesheet_uri()); 

 wp_enqueue_style('code-genx-theme-main');

}
add_action( 'wp_enqueue_scripts', 'codgenx_scripts_styles_1607587704' );