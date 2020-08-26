<?php

add_theme_support( 'post-thumbnails' );
/*
 * Widget locations
*/
function abide_Widgets() {
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
add_action('widgets_init', 'abide_Widgets');

/*
 * Makes a shotcode available for inserting responsive, embedded YouTube videos.
 * Insert the shortcode [abide-youtube src=""] with the the url of the video as the attribute.
*/
function responsive_youtube_embed( $atts ) {
	$embed = shortcode_atts( array(
		'src' => 'something',
	), $atts );
	return "<div class=\"youtube-responsive-container\"><iframe src=\"{$embed['src']}\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></div>";
}
add_shortcode( 'abide-youtube', 'responsive_youtube_embed' );

function abide_theme_scripts() {
//Register script location, dependencies, and version
	wp_register_script(
		'abide_script',
		get_template_directory_uri() . '/js/abide.js',
		array('jquery')
	);
	//Enqueue the script
	wp_enqueue_script('abide_script');
}
add_action('wp_enqueue_scripts', 'abide_theme_scripts');

// Customize the page-post password protection login
function abide_page_password_form() {
    global $post;
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    $o = '<div class="protection-login"><form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
    ' . __( "<p>To view this page, enter the password below.<br>If you don&rsquo;t yet have a password, <a href=\"/contact-us/\">contact us</a>.</p>" ) . '
    <label for="' . $label . '">' . __( "Password:" ) . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" /><input type="submit" name="Submit" value="' . esc_attr__( "Submit" ) . '" />
    </form></div>
    ';
    return $o;
}
add_filter( 'the_password_form', 'abide_page_password_form' );
/*
 * Take control of WP Gallery styling 
 * /
add_filter( 'use_default_gallery_style', '__return_false' );
?>