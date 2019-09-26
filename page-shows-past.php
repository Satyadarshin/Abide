<?php
/**
 * Template for displaying past shows archive.
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
		if ( have_posts() ) 
		while ( have_posts() ) : the_post(); 
	?>
		<article>
		<h2><?php the_title(); ?></h2>
	<?php 
		endwhile; 
		$loop = new WP_Query( array( 'post_type' => 'shows', 'posts_per_page' => 999, 'order' => 'DESC', 'orderby' => 'date',
			'tax_query' => array(
				array(
					'taxonomy'	=> 'show-type',
					'field'		=> 'slug',
					'terms' 	=> 'past-show'
				),
			),
		) ); 
		while ( $loop->have_posts() ) : $loop->the_post(); 
	?>
	<div class="">
		<a href="<?php the_permalink(); ?>">
		<?php
			$default_attr = array(
				'class' => "img",
				'alt'   => get_the_title( $post_id ),
			);
			the_post_thumbnail( 'medium' , $default_attr  );
		?>
		</a>
		<div class="">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php the_excerpt(); ?>
			<a class="inverted" href="<?php the_permalink(); ?>">read more</a>
		</div>
	</div>
	<?php endwhile; ?>
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
