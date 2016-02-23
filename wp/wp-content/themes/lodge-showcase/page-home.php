<?php
/*
  Template Name: Home
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

        <!-- Begin MailChimp Signup Form -->
        <link href="http://cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
        <style type="text/css">
          section#signup, section#signup .signupI {margin: 0;padding: 0;}
          #mc_embed_signup{margin: 0; padding: 0; background:transparent; clear:left; font:14px Helvetica,Arial,sans-serif; }
          #mc_embed_signup form {margin: 0; padding: 0;}
          #mc_embed_signup .button { background: #7f341c;}
          #mc_embed_signup .email { background: #e8e8e8;}
          /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
             We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
        </style>
          <div id="mc_embed_signup">
          <form action="http://natapoclodge.us4.list-manage.com/subscribe/post?u=0d721924bb72c4c6647f493a2&amp;id=42f4ab566b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate">
            <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Sign up to be notified of special offers and discounted rates" required>
            <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
          </form>
          </div>

        <!--End mc_embed_signup-->


      </div>
    </div>
    <div class="rowB">
      <div class="rowI">

        <div style="overflow: hidden; margin-bottom: .75em">

          <div style="width: 100px; float: left;">
            <div id="TA_socialButtonBubbles153" class="TA_socialButtonBubbles">
            <ul id="MjrnCqJ" class="TA_links 4z7vkPK">
            <li id="gNwRoEO" class="gmvDflQPV4z">
            <a target="_blank" href="http://www.tripadvisor.com/Hotel_Review-g58560-d2015550-Reviews-Natapoc_Lodge-Leavenworth_Washington.html"><img src="http://www.tripadvisor.com/img/cdsi/img2/branding/socialWidget/20x28_green-21693-2.png"/></a>
            </li>
            </ul>
            </div>
            <script src="http://www.jscache.com/wejs?wtype=socialButtonBubbles&amp;uniq=153&amp;locationId=2015550&amp;color=green&amp;size=rect&amp;lang=en_US&amp;display_version=2"></script>
          </div>

          <!-- Go to www.addthis.com/dashboard to customize your tools -->
          <div class="addthis_sharing_toolbox"></div>

        </div>

        <aside id="features" style="width: 184px;">

          <!-- <div class="photo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/live_thumb.jpg" />
            <a href="/livephoto.php.jpg" class="thumbnail" rel="photos" style="margin-bottom: 0"><img src="<?php echo get_template_directory_uri(); ?>/images/picture-frame.png" class="frame" /></a>
          </div> -->

          <div style="text-align: center; margin-bottom: 1.25em">
            <div style="display:inline-block;"><a href="http://www.vrbo.com/411334" rel="nofollow"><img src="http://www.vrbo.com/haow/api/image/vrbo/vrbo/411334/reviews" alt="HomeAway Property" style="border:none;" rel="nofollow"/></a><div style="text-align:center;"><a href="http://www.vrbo.com/411334/reviews" rel="nofollow">Read</a> or <a href="http://www.vrbo.com/411334/reviews/write" rel="nofollow">Write</a> Reviews</div></div>
          </div>

          <div class="fb-page" data-href="https://www.facebook.com/natapoc" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/natapoc"><a href="https://www.facebook.com/natapoc">Natapoc Lodge</a></blockquote></div></div>
    <br><br>

        </aside>

    <?php the_field('body'); ?>

    </div>
	</div>
</section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
