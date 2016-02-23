<?php
/*
  Template Name: Reservations
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php include(locate_template('partials/slideshow.php')); ?>

<section id="content">
	<div id="contentI">
    <div class="rowA">
      <div class="rowI">
        <div id="calendarWrap">
          <!-- OwnerRez Single Month Calendar widget for Natapoc Lodge -->
          <div class="ownerrez-widget" data-widgetId="2d2d08dab92d4e3ba62fcdcb270d1363" data-propertyId="c0013024c66049e183caccf5152933ad"></div>
          <script type="text/javascript" src="https://secure.ownerreservations.com/widget.js"></script>

        </div>

        <?php the_field( 'introduction' ); ?>

    		<div id="ratesWrap">
    			<h3>Rates</h3>
    			<div id="rates">
    				<table>
              <?php if ( $rates = get_field( 'rates' ) ): foreach( $rates as $index => $post ): setup_postdata($post); ?>
                <tr class="<?php echo($index % 2 == 0 ? 'odd' : 'even'); ?>">
      						<th><?php echo get_field( 'description' ); ?></th>
      						<td><?php echo get_field( 'value' ); ?></td>
      					</tr>
      				<?php endforeach; wp_reset_postdata(); endif; ?>
    				</table>
    			</div>
    			<?php echo get_field( 'body' ); ?>
    		</div>

				<!-- OwnerRez Booking/Inquiry widget for Natapoc Lodge -->
				<div class="ownerrez-widget" data-widgetId="2d144d1be26a46f086014087cce5194c" data-propertyId="c0013024c66049e183caccf5152933ad"></div>
				<script type="text/javascript" src="https://secure.ownerreservations.com/widget.js"></script>

      </div>
    </div>
</section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
