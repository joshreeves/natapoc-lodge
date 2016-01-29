<?php if ( $photos ): foreach( $photos as $photo_index => $photo ): ?>
  <a href="<?php echo wp_get_attachment_url( $photo->ID, 'full' ); ?>" class="thumbnail<?php echo(!$is_gallery_mode && $photos_container_index % 2 == 0 ? '' : ' alt'); ?>"<?php if (!$is_gallery_mode && $photo_index > 0) { echo ' style="display: none;"'; } ?>>
    <figure>
      <?php echo wp_get_attachment_image( $photo->ID, 'medium' ); ?>
      <figcaption></figcaption>
    </figure>
  </a>
<?php endforeach; endif; ?>
