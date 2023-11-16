<?php
$repeater_name = isset($args['component']) ? $args['component'] : false;
if (have_rows($repeater_name)) :
?>

  <section class="text-center-cmp container container--old  mx-auto">
    <div class="flex flex-wrap -mx-5 px-5">
      <?php while (have_rows($repeater_name)) :
        the_row();
        $text = get_sub_field('text');
      ?>
        <div class="w-full px-5">
          <?= $text; ?>
        </div>
      <?php endwhile; ?>
    </div>
  </section>

<?php endif; ?>