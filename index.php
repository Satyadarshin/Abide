
<?php
/**
 * The default template for displaying the content.
 *
 * Pulls together all of the template parts needed to display a complete page content.
 *
 * @package WordPress
 * @subpackage Abide
 * @since Abide 1.0
 */
?>
<main>
<?php
    get_header();

    if ( have_posts() ) :
    while ( have_posts() ) : the_post();
?>
    <article>
        <h2><?php the_title(); ?></h2>
<?php
    the_content();
    endwhile;
    else :
        echo '<p>Sorry buddy, no content to display.</p>';
    endif;
?>
    </article>
    <aside>
    <?php if ( is_active_sidebar( 'sidebar1' ) ): ?>
        <?php dynamic_sidebar(' sidebar1' ); ?>
    <?php endif; ?>
    </aside>
</main>
<?php
    get_footer();
?>