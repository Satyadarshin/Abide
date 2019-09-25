<?php
/**
 * The template for displaying the document head.
 *
 * Displays all of the head element and everything up until the opening <body> tag.
 *
 * @package WordPress
 * @subpackage Abide
 * @since Abide 1.0
 */
?>
<!DOCTYPE html>
    <html class="no-js" <?php language_attributes(); ?>>
        <head>
            <meta charset="<?php bloginfo( 'charset' ); ?>" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
            <title><?php wp_title(); ?></title>
            <?php wp_head(); ?>
        </head>
        <body <?php body_class(); ?>>
        <div id="container">
            <header>
                <h1><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/main-logo.png" alt="<?php bloginfo('name'); ?>" /></a></h1>
            </header>
            
    
