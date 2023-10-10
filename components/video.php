<?php $component = isset($args['component']) ? $args['component'] : false;
if ($video = get_sub_field($component)) : ?>

  <div class="video container container--old mx-auto px-5">
    <?= $video; ?>
  </div>

<?php endif; ?>