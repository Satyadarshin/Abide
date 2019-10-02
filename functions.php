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
?>