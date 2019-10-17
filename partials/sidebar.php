<?php
/**
 * The template-part for displaying the site-wide sidebar.
 *
 * @package WordPress
 * @subpackage Abide
 * @since Abide 1.0
 */
?>
    
<?php get_template_part( 'partials/navigation' ); ?>
<div class="widget">
    <?php if ( is_active_sidebar( 'sidebar_1' ) ): ?>
        <?php dynamic_sidebar(' sidebar_1' ); ?>
    <?php endif; ?>
</div>