<?php get_header(); ?>

<section id="monitor">
	<div id="monitorPhotos">
    <div class="slider-wrapper theme-default">
      <div id="slider" class="nivoSlider">
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
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <h1><?php the_title(); ?></h1>
          <p><?php the_content(); ?></p>

        <?php endwhile; else : ?>

          <p><?php _e( 'Sorry, no page matched your criteria.' ); ?></p>

        <?php endif; ?>
      </div>
	  </div>
  </div>
</section>

<?php get_footer(); ?>
