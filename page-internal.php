<?php
/*
 Template Name: Custom Post
 *
 * Outputs custom post type content generated under Custom Post Type UI.
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
	if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<article>
		<h2><?php the_title(); ?></h2>
		<p>foo</p>
	<?php 
		endwhile; 
		$loop = new WP_Query( array( 'post_type' => $post->post_name, 'posts_per_page' => 999, 'order' => 'DESC', 'orderby' => 'date' ) ); 
		while ( $loop->have_posts() ) : $loop->the_post(); 
	?>

	<div class="">
		<?php
			// $default_attr = array(
			// 	'class' => "img",
			// 	'alt'   => get_the_title( $post_id ),
			// );
			// the_post_thumbnail( 'medium' , $default_attr  );
		?>
		<div class="">
			<h3><?php the_title(); ?></h3>
			<?php 
			if ( has_post_thumbnail() ) {
				$default_attr = array(
					'class' => "img",
					'alt'   => get_the_title( $post_id ),
				);
				the_post_thumbnail( 'medium' , $default_attr  );
			} 
			the_excerpt();
			?>
			<a class="" href="<?php the_permalink(); ?>">Read more</a>
		</div>
	</div>
	<?php endwhile; ?>
	</article>
    <aside>
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