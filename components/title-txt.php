<?php
$repeater_name = isset($args['component']) ? $args['component'] : false;
if (have_rows($repeater_name)) :
?>

  <section class="section-tt container container--old mx-auto px-5">
    <div class="flex -mx-5 flex-wrap">
      <?php while (have_rows($repeater_name)) :
        the_row();
        $title = get_sub_field('title');
        $text = get_sub_field('text');
      ?>
        <div class="section-tt__title w-full xs:w-5/12 md:w-1/2">
          <?php if ($title) : ?>

            <?= $title; ?>

          <?php endif; ?>
        </div>

        <div class="section-tt__text w-full xs:w-7/12 md:w-1/2">
          <?php if ($text) : ?>
            <?= $text; ?>
          <?php endif; ?>
        </div>

      <?php endwhile; ?>
    </div>
  </section>

<?php endif; ?>