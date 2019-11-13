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
    <div id="trigger"><span id="hamburger" class="dashicons dashicons-menu-alt3">&nbsp;</span></div>
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