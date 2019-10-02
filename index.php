<?php
/**
 * The default template for displaying the content.
 *
 * Pulls together all of the template parts needed to display complete page content.
 *
 * @package WordPress
 * @subpackage Abide
 * @since Abide 1.0
 */
?>

<?php 
    get_header(); 
?>
<main>
<?php
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
    <div class="widget">
        <?php if ( is_active_sidebar( 'sidebar_1' ) ): ?>
            <?php dynamic_sidebar(' sidebar_1' ); ?>
        <?php endif; ?>
    </div>
    </aside>
</main>
<?php
    get_footer();
?>