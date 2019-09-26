<?php
/*
 Template Name: ACF
 *
 * Outputs custom Advanced Custom Fields (ACF) content.
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
		<section>
			<?php the_field( 'content_1' ); ?>
		</section>
		<section>
			<h2>Gallery</h2>
			<?php the_field( 'content_2' ); ?>
		</section>
		<section>
			<?php the_field( 'content_3' ); ?>
		</section>
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
