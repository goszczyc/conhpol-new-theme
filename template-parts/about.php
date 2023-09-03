<div class="container grid grid-cols-12 px-5 mx-auto gap-10">
    <?php if ($img = get_field('about_image')) : ?>

        <div class="col-start-2 cols-span-4">

            <?php echo wp_get_attachment_image($img, 'about'); ?>

        </div>

    <?php endif; ?>

    <?php if (($heading = get_field('about_heading')) && ($text = get_field('about_text'))) : ?>

        <div class="col-start-7 col-span-6 flex flex-col items-center text-center p-5">
            <h2 class="text-5xl text-bold mb-20">
                <?php echo $heading; ?>
            </h2>
            <p>
                <?php echo $text; ?>
            </p>
        </div>

    <?php endif; ?>

</div>