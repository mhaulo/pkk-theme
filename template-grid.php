<?php
/**
 * Template Name: Grid Page
 *
 * @package Restaurant_and_Cafe
 */

get_header();

$sidebar_layout = restaurant_and_cafe_sidebar_layout();

?>

<div class="col-8">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content', 'page' );
				endwhile;
			?>
		</main><!-- #main -->
	</div><!-- #primary -->
</div>

<div class="col-4 desktop-only">
	<?php
		if( $sidebar_layout == 'right-sidebar' ) {
			get_sidebar();
		}
	?>
</div>

<?php
	$args = array(
		'post_type' => 'page',
		'post_parent' => get_the_ID(),
		'posts_per_page' => -1,
		'orderby' => 'menu_order'
	);

	$the_query = new WP_Query( $args );
?>

<div class="section-1">
	<?php while ( $the_query->have_posts() ) : $the_query->the_post()  ?>
		<a style="display:block;" href="<?php echo get_permalink(); ?>">
		<div class="col grid-item">
			<?php get_template_part( 'template-parts/content', 'grid' ); ?>
		</div>
		</a>
	<?php endwhile; ?>
</div>

<div class="mobile-only">

<?php
	if( $sidebar_layout == 'right-sidebar' ) {
		include( TEMPLATEPATH . '/sidebar.php');
	}
?>

</div>


<?php
	 wp_reset_postdata();
?>



<?php get_footer(); ?>

