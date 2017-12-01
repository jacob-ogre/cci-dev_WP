<?php
/**
 * The main template file.
 *
 * Used to display the homepage when home.php doesn't exist.
 */
?>
<?php get_header(); ?>
	<div id="page" class="home-page">
		<p class="top_panel">
			Each "product" from the Center for Conservation Innovation (CCI) is presented in a brief post 
			that provides context and some usage guidance. Browse the posts below, use the navigation bar
			above to filter by category, or use the search box to the right. Shortcuts to all of the products
			are available under <a href="https://beta.cci-dev.org/all-products/">All Products</a>.
		</p>
		<div id="content" class="article">
			<?php if ( have_posts() ) :
				$publishable_lite_full_posts = get_theme_mod('publishable_lite_full_posts');
				while ( have_posts() ) : the_post();
					publishable_lite_archive_post();
				endwhile;
				publishable_lite_post_navigation();
			endif; ?>
		</div><!-- .article -->
		<?php get_sidebar(); ?>
		</div>
		<?php get_footer(); ?>
