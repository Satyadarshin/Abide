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
	<div class="title_block">
		<h2><?php the_title(); ?></h2>
	</div>
	<section class="primary_content">
	<article>
	<?php 
		endwhile; 
		$loop = new WP_Query( array( 'post_type' => $post->post_name, 'posts_per_page' => 999, 'order' => 'DESC', 'orderby' => 'date' ) ); 
		while ( $loop->have_posts() ) : $loop->the_post(); 
	?>
		<div class="post_item">
		<?php if ( has_post_thumbnail() ): ?>
			<div class="post_thumb">
				<a href="<?php the_permalink(); ?>">
				<?php
					$default_attr = array(
						'alt'	=> get_the_title( $post_id ),
					);
					the_post_thumbnail( 'thumb' , $default_attr  );
					?>
				</a>
			</div>
		<?php endif; ?>
			<div class="post_intro">
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<?php the_excerpt(); ?>
				<button class="read_more_btn"><a class="" href="<?php the_permalink(); ?>">Read more</a></button>
			</div>
		</div>
	<?php endwhile; ?>
		</article>
		<aside class="sidebar_right">
			<?php get_template_part( 'partials/sidebar' ); ?>
		</aside>
	</section>
</main>
<?php
    get_footer();
?>