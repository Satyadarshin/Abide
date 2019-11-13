<?php
	//Widget locations
	function abideWidgets() {
		register_sidebar(
			array(
				'name' => 'Sidebar',
				'id' => 'sidebar_1',
				'before_widget' => '<div>',
				'after_widget' => '</div>',
				'before_title' => '<h4>',
				'after_title' => '</h4>'
			)
		);
	}
	add_action('widgets_init', 'abideWidgets');

	// //Custom JS, mainly for navigation dropdown
	// add_action( 'wp_enqueue_scripts', 'theme_scripts' );
	// function theme_scripts() {
	// 	wp_enqueue_script(
	// 		'abide', 
	// 		get_template_directory_uri() . '/js/abide.js', 
	// 		array('jquery') 
	// 	);
	// }

	function theme_scripts() {
		// register your script location, dependencies and version
		   wp_register_script(
			   'abide_script',
		   		get_template_directory_uri() . '/js/abide.js',
		   		array('jquery')
			);
		 // enqueue the script
		  wp_enqueue_script('abide_script');
		  }
		add_action('wp_enqueue_scripts', 'theme_scripts');
?>