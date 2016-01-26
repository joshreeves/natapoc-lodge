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
    <div class="rowB">
      <div class="rowI">
        <?php the_field('body'); ?>
      </div>
	  </div>
  </div>
</section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
