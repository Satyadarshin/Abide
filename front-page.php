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
        <div class="banner_image">    
            <img class="object-fit_me"  src="https://tessabide.com/wp-content/uploads/2015/04/tessa-ukelele.jpg" alt="Tessa Bide, theatremaker, playing the ukelele" />
        </div>
        <?php get_template_part( 'partials/acf', 'home'); ?>
	</article>
    <aside class="sidebar_right">
        <?php get_template_part( 'partials/sidebar' ); ?>
    </aside>
</main>
<?php
    get_footer();
?>
