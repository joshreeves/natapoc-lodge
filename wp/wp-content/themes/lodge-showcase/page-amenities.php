<?php
/*
  Template Name: Amenities List
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
<section id="content">
	<div id="contentI">
		<div class="rowA">
			<div class="rowI">
				<?php the_field( 'introduction' ); ?>
			</div>
		</div>

		<?php if ( $amenities = get_field( 'amenities' ) ): foreach( $amenities as $index => $post ): setup_postdata($post); ?>
			<div class="row<?php echo($index % 2 == 0 ? 'B' : 'A'); ?>">
				<div class="rowI">
					<?php if ( $photos = get_field( 'photos' ) ): foreach( $photos as $photo_index => $photo ): ?>
						<a href="<?php echo wp_get_attachment_url( $photo->ID, 'full' ); ?>" class="thumbnail<?php echo($index % 2 == 0 ? '' : ' alt'); ?>"<?php if ($photo_index > 0) { echo ' style="display: none;"'; } ?>>
							<figure>
								<?php echo wp_get_attachment_image( $photo->ID, 'medium' ); ?>
								<figcaption></figcaption>
							</figure>
						</a>
					<?php endforeach; endif; ?>
					<h2><?php the_title(); ?></h2>
					<?php the_field( 'description' ); ?>
				</div>
			</div>
		<?php endforeach; wp_reset_postdata(); endif; ?>
	</div>
</section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
