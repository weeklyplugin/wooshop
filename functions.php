	<?php 
function codgenx_scripts_styles_1607587704(){ 
 
 /*Register CSS*/ 
 
 wp_register_style('code-genx-theme-css-css',get_stylesheet_directory_uri().'/css/theme.css'); 
 

 /*   CALL ALL CSS AND SCRIPTS FOR SITE */ 
	  
 wp_enqueue_style('code-genx-theme-css-css');

  wp_register_style('code-genx-theme-main',get_stylesheet_uri()); 

 wp_enqueue_style('code-genx-theme-main');


 /*Register JS*/
 
 wp_register_script('code-genx-theme-js',get_stylesheet_directory_uri().'/js/theme.js');  
	
/*   CALL ALL CSS AND SCRIPTS FOR SITE */ 	 
 
  wp_enqueue_script('code-genx-theme-js'); 

}
add_action( 'wp_enqueue_scripts', 'codgenx_scripts_styles_1607587704' );

	
	/*Register a nav menu*/
	function codgenx_nav_menu_config_1607591089(){ 
 

		register_nav_menus( array(
 
		'demo' => 'DEmo site',
		 
		'footer_menu' => 'Footer Site',
		    
		) );
	
	}
	add_action( 'after_setup_theme', 'codgenx_nav_menu_config_1607591089' );

	/*Display a nav menu*/
  
 

 



