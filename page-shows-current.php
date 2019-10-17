<?php
/**
 * Template for displaying current shows.
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
		if ( have_posts() )  ;
		while ( have_posts() ) : the_post(); 
	?>
		 <article>
		<h2><?php the_title(); ?></h2>
	<?php 
		endwhile; 
		$loop = new WP_Query( array( 
			'post_type' => $post->post_name, 
			'posts_per_page' => 999, 
			'order' => 'DESC', 
			'orderby' => 'date',
			'tax_query' => array(
				array(
					'taxonomy'	=> 'show-type',
					'field'		=> 'slug',
					'terms' 	=> 'past-show',
					'operator'	=> 'NOT IN'
				),
			),
		) ); 
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
				the_post_thumbnail( 'medium' , $default_attr  );
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
</main>
<?php
    get_footer();
?>
