<?php $component = isset($args['component']) ? $args['component'] : false;
if ($image = get_sub_field($component)) : ?>

  <div class="one-image container container--old  mx-auto px-5">
    <div class="flex -mx-5 justify-center">
      <?= wp_get_attachment_image($image, 'full'); ?>
    </div>
  </div>

<?php endif; ?>