<?php
/**
 * Template name: Static page
 * 
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
    <div class="title_block">
        <h2><?php the_title(); ?></h2>
    </div>
    <section class="primary_content">
        <article>
            <?php
                the_content();
                endwhile;
                else :
                    echo '<p>Sorry buddy, no content to display.</p>';
                endif;
            ?>
        </article>
        <aside class="sidebar_right">
            <?php get_template_part( 'partials/sidebar' ); ?>
        </aside>
    </section>
</main>
<?php
    get_footer();
?>