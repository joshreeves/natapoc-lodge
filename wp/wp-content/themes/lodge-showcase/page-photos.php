<?php
/*
  Template Name: Photos
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section id="monitor">
	<div id="monitorPhotos">
    <div class="slider-wrapper theme-default">
      <div id="slider" class="nivoSlider">
				<?php if ( $slideshow_images = get_field( 'slideshow_images' ) ): foreach( $slideshow_images as $image ): ?>
					<?php echo wp_get_attachment_image( $image->ID, 'full' ); ?>
				<?php endforeach; endif; ?>
      </div>
    </div>
	</div>
	<div id="monitorI">
		<div id="monitorII">
		</div>
	</div>
</section>
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
