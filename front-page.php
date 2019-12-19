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
    <div class="title_block">
        <!-- <h2><?php the_title(); ?></h2> -->
    </div>
    <section class="primary_content">
        <article>
            <img class="salutation" src="http://localhost:8888/TessaBide/working/wp-content/themes/Abide/images/hello.png" alt="Cut-out word 'hello'">
            <div class="banner_image">    
                <img class="object-fit_me"  src="https://tessabide.com/wp-content/uploads/2019/12/SelfishGiantOmnibusTheatre.72dpi.jpg" alt="Tessa Bide, theatremaker, playing the ukelele" />
            </div>
            <?php the_field( 'home_1' ); ?>
        </article>
        <aside class="sidebar_right">
            <?php get_template_part( 'partials/sidebar' ); ?>
        </aside>
    </section>
    <section class="home_gallery">
        <article>
            <?php the_field( 'home_2' ); ?>
        </article>
    </section>
    <section class="home_contact_capture">
    <article>
        <?php the_field( 'home_3' ); ?>
</article>
    </section>
</main>

<?php
    get_footer();
?>
