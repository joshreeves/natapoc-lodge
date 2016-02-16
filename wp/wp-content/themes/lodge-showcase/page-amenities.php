<?php
/*
  Template Name: Amenities List
*/

const SEASONS_FIELD_KEY = 'field_56ad2f674ad4d';

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
					<h2>
						<?php the_title(); ?><br>
						<?php if (has_category( 'activities', $post )): ?>
							<?php
								$season_options = get_field_object(SEASONS_FIELD_KEY);
								$season_options = $season_options['choices'];
								$seasons = get_field( 'seasons' );
							?>
							<span class="seasons">
								<?php if ( $season_options ): foreach ( $season_options as $season_option ): ?>
									<i class="season<?php echo in_array($season_option, $seasons) ? ' season--valid' : '' ?> ">
										<img src="<?php echo get_template_directory_uri(); ?>/images/icons/<?php echo strtolower($season_option); ?>.png">
									</i>
								<?php endforeach; endif; ?>
							</span>
						<?php endif; ?>
					</h2>
					<?php the_field( 'description' ); ?>
				</div>
			</div>
		<?php endforeach; wp_reset_postdata(); endif; ?>
	</div>
</section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
