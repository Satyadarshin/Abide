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
            <title><?php wp_title(); ?></title>
            <?php wp_head(); ?>
        </head>
        <body <?php body_class(); ?>>
            <header>
                <h1><a href=""><?php bloginfo('name'); ?></a></h1>
                <p><?php bloginfo('description'); ?></p>
            </header>
            
    
