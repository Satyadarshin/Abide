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
			<?php if ( have_posts() ): ?>
			<p>Showing all results of a site search for the term &ldquo;<?php the_search_query(); ?>&rdquo;.</p>
			<ul id="search_results">
			<?php  while ( have_posts() ) : the_post();  ?>
				<li>
					<h3><a href="<?php echo get_permalink(); ?>"><?php the_title();  ?></a></h3>
					<?php the_excerpt(); ?>
					<button class="read_more_btn"><a href="<?php the_permalink(); ?>">Read More</a></button>
				</li>
			<?php endwhile ?>
		</ul>
		<?php echo paginate_links(); ?>
		<?php else: ?>
			<h3>Sorry: no luck!</h3>
			<p>I Can&rsquo;t find any results for the search query &ldquo;<?php the_search_query(); ?>&rdquo;.</p>
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