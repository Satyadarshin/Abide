
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

<?php 
    get_header(); 
?>
<main>
    <div class="title_block">
        <h2>404: This is not the page you&rsquo;re looking for</h2>
    </div>
    <section class="primary_content">
        <article>
            <p>I&rsquo;m sorry, but I can&rsquo;t find that page.</p>
            <p>Please follow the navigation above, use the serach box, or head back to the <a href="https://tessabide.com/">homepage</a>.</p>
        </article>
        <aside class="sidebar_right">
            <?php get_template_part( 'partials/sidebar' ); ?>
        </aside>
    </section>
</main>
<?php
    get_footer();
?>

