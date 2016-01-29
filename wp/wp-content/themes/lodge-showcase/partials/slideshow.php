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
