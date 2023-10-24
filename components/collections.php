<?php $component = isset($args['component']) ? $args['component'] : false;
if (have_rows($component)) :  $i = 1; ?>
  <?php while (have_rows($component)) : the_row(); ?>
    <?php
    $revClass = 'sm:flex-row-reverse';
    ?>

    <div class="collections container mx-auto px-5">

      <div class="flex flex-wrap -ml-5 -mr-5 <?php if ($i < 0) echo $revClass; ?>">
        <?php if ($description = get_sub_field('description')) : ?>
          <div class="collections__text w-full sm:w-1/2">
            <?= $description; ?>


            <?php
            // $element = '';
            $article = get_sub_field('article');
            if ($article) : ?>

              <a href="<?= esc_url(get_permalink($article)); ?>" class="materials__btn btn btn--primary">
                <?php _e('More', 'conhpol'); ?>
              </a>

              <!-- <div class="materials__opportunities">
                <?php
                while (have_rows('collections_layouts')) {
                  the_row();
                  if (get_row_layout() == 'collections-title-text') {
                    $element = 'title-txt';
                  } elseif (get_row_layout() == 'collections-slider') {
                    $element = 'slider_images';
                  }
                  get_template_part('/components/' . $element, '', ['component' => $element]);
                } ?>
                <button class="materials__opportunities-exit"></button>
              </div> -->

            <?php endif; ?>




          </div>
        <?php endif; ?>

        <?php if ($image = get_sub_field('image')) : ?>

          <div class="collections__image w-full sm:w-1/2">
            <?= wp_get_attachment_image($image, 'full'); ?>

            <?php if ($image_hover = get_sub_field('image_hover')) : ?>
              <div class="collections__image-hover">
                <?= wp_get_attachment_image($image_hover, 'full'); ?>
              </div>
            <?php endif; ?>

          </div>

        <?php endif; ?>


      </div>

    </div>

  <?php $i = $i * (-1);
  endwhile; ?>

<?php endif; ?>