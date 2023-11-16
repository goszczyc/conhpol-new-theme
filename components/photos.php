<?php $component = isset($args['component']) ? $args['component'] : false;
if ($images = get_sub_field($component)) :
  $i = 0; ?>

  <div class="images container container--old mx-auto px-5">
    <div class="flex -mx-5 justify-center">

      <?php foreach ($images as $image) :
        $col = ($i == 2) ? 'w-full' : 'w-1/2';
      ?>
        <div class="images__image px-5 w-10/12 xs:<?= $col; ?> lg:w-4/12">

          <?= wp_get_attachment_image($image, 'full'); ?>

        </div>
      <?php $i++; endforeach; ?>

    </div>
  </div>

<?php endif; ?>