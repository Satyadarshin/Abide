
<?php
/**
 * The default template for displaying the content.
 *
 * Pulls together all of the template parts needed to display a 404 error page.
 *
 * @package WordPress
 * @subpackage Abide
 * @since Abide 1.0
 */
?>

<?php get_header(); ?>
<main>
<?php

?>
    <article>
        <h2>404: This is not the page you&rsquo;re looking for</h2>
        <p>I&rsquo;m sorry, but I can&rsquo;t find that page.</p>
        <p>Please follow the navigation above, use the serach box, or head back to the <a href="https://tessabide.com">homepage</a>.</p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/cat.png" alt="Paper-cut cat" />
    </article>
    <aside>
        <div class="widget">
        <?php if ( is_active_sidebar( 'sidebar1' ) ): ?>
            <?php dynamic_sidebar(' sidebar1' ); ?>
        <?php endif; ?>
        </div>
    </aside>
</main>
<?php
    get_footer();
?>