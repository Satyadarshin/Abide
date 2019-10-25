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

<section class="primary_content">
	<?php the_field( 'home_1' ); ?>
</section>
<section class="home_gallery">
	<?php the_field( 'home_2' ); ?>
</section>
<section class="home_contact_capture">
	<?php the_field( 'home_3' ); ?>
</section>