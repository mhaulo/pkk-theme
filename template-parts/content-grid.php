<?php
/**
 * The template used for displaying grid page content
 *
 * @package Restaurant_and_Cafe
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="banner">
		<?php the_post_thumbnail('restaurant-and-cafe-blog'); ?>

		<div class="banner-text featured-banner-text solid-bg-background">
			<?php the_title( '<h2 class="main-title featured-title">', '</h2>'); ?>
			<?php the_excerpt(); ?>
		</div>
	</div>
</article>
