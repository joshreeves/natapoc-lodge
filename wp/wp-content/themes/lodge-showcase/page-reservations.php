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

        <div id="wufoo-z7x3x5">
    		Fill out my <a href="http://natapoc.wufoo.com/forms/z7x3x5">online form</a>.
    		</div>
    		<script type="text/javascript">var z7x3x5;(function(d, t) {
    		var s = d.createElement(t), options = {
    		'userName':'natapoc',
    		'formHash':'z7x3x5',
    		'autoResize':true,
    		'height':'1000',
    		'async':true,
    		'header':'show'};
    		s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'wufoo.com/scripts/embed/form.js';
    		s.onload = s.onreadystatechange = function() {
    		var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
    		try { z7x3x5 = new WufooForm();z7x3x5.initialize(options);z7x3x5.display(); } catch (e) {}};
    		var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
    		})(document, 'script');</script>

      </div>
    </div>
</section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
