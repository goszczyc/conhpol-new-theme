<?php $component = isset($args['component']) ? $args['component'] : false;
if ($certyficates = get_sub_field($component)) :
  $title = $certyficates['title'];
  $logos = $certyficates['logos'];
?>

  <div class="certyficates container px-5 mx-auto">
    <div class="flex flex-wrap -mx-5">
      <h2 class="certyficates__title w-full px-5 sm:w-1/3 md:w-4/12 lg:w-3/12">
        <?= $title; ?>
      </h2>
      <div class="certyficates__logos grid grid-cols-3 gap-5 w-full items-center px-5 sm:w-2/3 md:w-8/12 lg:w-9/12">

        <?php foreach ($logos as $logo) : ?>
          <div class="certyficates__logo flex h-full justify-center items-center">
            <?= wp_get_attachment_image($logo, 'full'); ?>
          </div>
        <?php endforeach; ?>

      </div>
    </div>
  </div>

<?php endif; ?>