
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
        <h2><?php the_title(); ?></h2>
    </div>
    <section class="primary_content">
    <article>
            <h2>I&rsquo;m sorry, but I can&rsquo;t find that page</h2>
            <p>Please follow the main navigation, use the search box, or head back to the <a href="https://tessabide.com/">homepage</a>.</p>
        </article>
    <aside class="sidebar_right">
        <?php get_template_part( 'partials/sidebar' ); ?>
    </aside>
    </section>
</main>
<?php
    get_footer();
?>