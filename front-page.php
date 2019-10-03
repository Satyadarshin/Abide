<?php
/*
 Template Name: Front Page
 *
 * Outputs custom front page template.
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
	<article>
		<h2><?php the_title(); ?></h2>
		<?php get_template_part( 'partials/acf', 'home'); ?>
	</article>

    <aside>
    <?php get_template_part( 'navigation' ); ?>
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
