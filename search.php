<?php
/*
 Template Name: Search page
 *
 * Outputs search results.
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
	<h2>Search Results page</h2>
	</div>
	<section class="primary_content">
        <article>
		<p>Showing all results of a site search for the term &ldquo;<?php the_search_query(); ?>&rdquo;.</p>
		<?php if ( have_posts() ): ?>
			<ul id="search_results">
			<?php  while ( have_posts() ) : the_post();  ?>
				<li>
					<h3><a href="<?php echo get_permalink(); ?>"><?php the_title();  ?></a></h3>
					<?php  //the_post_thumbnail('medium') ?>
					<?php echo substr(get_the_excerpt(), 0,200); ?>
					<div class="h-readmore"> <a href="<?php the_permalink(); ?>">Read More</a></div>
				</li>
			<?php endwhile ?>
		</ul>
		<?php echo paginate_links(); ?>
		<?php endif; ?>
		</article>
		<aside class="sidebar_right">
			<?php get_template_part( 'partials/sidebar' ); ?>
		</aside>
	</section>
</main>
<?php
    get_footer();
?>