<?php
/*
 Template Name: Hangout page
 *
 * Outputs custom Anarchist Librarian hangout page template.
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
    <section class="primary_content hangout">
        <article>
        <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    the_content();
                endwhile;  
            endif;
        ?>
        <? if ( ! post_password_required() ): ?>
            <?php the_field( 'hangout_1' ); ?>
        <? endif; ?>
        </article>
        <aside class="sidebar_right">
            <?php get_template_part( 'partials/sidebar' ); ?>
        </aside>
    </section>
    <? if ( ! post_password_required() ): ?>
    <section class="hangout area_a ">
        <article>
            <?php the_field( 'hangout_2' ); ?>
        </article>
    </section>
    <section class="hangout area_b hangout_gallery">
        <article>
            <?php the_field( 'hangout_3' ); ?>
        </article>
    </section>
    <section class="hangout area_a hangout_contact_capture">
        <article>
            <?php the_field( 'hangout_4' ); ?>
        </article>
    </section>
    <? endif; ?>
</main>

<?php
    get_footer();
?>
