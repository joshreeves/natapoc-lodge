<?php
/*
  Template Name: Amenities List
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php include(locate_template('partials/slideshow.php')); ?>

<section id="content">
	<div id="contentI">
		<div class="rowA">
			<div class="rowI">
				<?php the_field( 'introduction' ); ?>
			</div>
		</div>

		<?php if ( $amenities = get_field( 'amenities' ) ): foreach( $amenities as $photos_container_index => $post ): setup_postdata($post); ?>
			<div class="row<?php echo($photos_container_index % 2 == 0 ? 'B' : 'A'); ?>">
				<div class="rowI">
					<?php $photos = get_field( 'photos' ); ?>
					<?php $is_gallery_mode = false; include(locate_template('partials/photos.php')); ?>
					<h2><?php the_title(); ?></h2>
					<?php the_field( 'description' ); ?>
				</div>
			</div>
		<?php endforeach; wp_reset_postdata(); endif; ?>
	</div>
</section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
