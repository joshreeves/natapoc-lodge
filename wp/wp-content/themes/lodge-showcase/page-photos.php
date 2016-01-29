<?php
/*
  Template Name: Photos
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php include(locate_template('partials/slideshow.php')); ?>

<section id="content" class="photos">
	<div id="contentI">
		<?php
			$photos = get_field( 'photos' );
			$photos_chunked = array_chunk($photos, 4);
		?>

		<?php if ( $photos ): foreach( $photos_chunked as $photos_container_index => $photos ): ?>
			<div class="row<?php echo($photos_container_index % 2 == 0 ? 'A' : 'B'); ?>">
				<div class="rowI">
					<?php $is_gallery_mode = true; include(locate_template('partials/photos.php')); ?>
				</div>
			</div>
		<?php endforeach; endif; ?>
	</div>
</section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
