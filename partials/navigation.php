<?php
/**
 * The template-part for displaying main navigation.
 *
 * @package WordPress
 * @subpackage Abide
 * @since Abide 1.0
 */
?>
<nav id="main_nav">
    <?php 
        $args = array( 
            'menu' => 'mainnav', 
            'container' => false, 
            'menu_id' => false, 
            'menu_class' => 'main-navigation'
            ); 
        wp_nav_menu($args); 
    ?>
</nav>