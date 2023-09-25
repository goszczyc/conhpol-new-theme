<div class="container grid grid-cols-2 gap-10 mx-auto px-5">
    <div class="flex flex-col items-start col-start-2 row-start-1">

        <?php if ($text_1 = get_field('text_1')) : ?>

            <div class="w-5/6 prose-p:text-lg xs:prose-p:text-xl sm:prose-p:text-lg md:prose-p:text-xl mb-10 pt-6">
                <?php if ($history_heading = get_field('history_heading')) : ?>
                    <h2 class="text-5xl mb-6 font-bold uppercase"><?php echo $history_heading; ?></h2>
                <?php endif; ?>
                <?php echo $text_1; ?>
            </div>

        <?php endif; ?>

        <?php if ($image_3 = get_field('image_3')) : ?>

            <div class="w-full mb-10">
                <?php echo wp_get_attachment_image($image_3, 'standard', '', ['class' => 'w-full']); ?>
            </div>

        <?php endif; ?>

        <?php if ($image_4 = get_field('image_4')) : ?>

            <div class="w-5/6">
                <?php echo wp_get_attachment_image($image_4, 'standard', '', ['class' => 'w-full']); ?>
            </div>

        <?php endif; ?>



    </div>
    <div class="col-1 flex flex-col items-end col-start-1 row-start-1">

        <?php if ($image_1 = get_field('image_1')) : ?>

            <div class="w-5/6 mb-10">
                <?php echo wp_get_attachment_image($image_1, 'standard', '', ['class' => 'w-full']); ?>
            </div>

        <?php endif; ?>

        <?php if ($image_2 = get_field('image_2')) : ?>

            <div class="w-full mb-10">
                <?php echo wp_get_attachment_image($image_2, 'standard', '', ['class' => 'w-full']); ?>
            </div>

        <?php endif; ?>

        <?php if ($text_2 = get_field('text_2')) : ?>

            <div class="w-5/6 prose-p:text-lg xs:prose-p:text-xl sm:prose-p:text-lg md:prose-p:text-xl">
                <?php echo $text_2; ?>
            </div>

        <?php endif; ?>

    </div>

</div>