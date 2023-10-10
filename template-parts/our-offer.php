<div class="container px-5 mx-auto mb-32 xl:grid xl:grid-cols-12">
    <div class="xl:col-start-2 xl:col-span-10">
        <?php if ($offer_heading = get_field('offer_heading')) : ?>
            <h2 class="text-5xl uppercase text-center mb-20 decor faded-out">
                <strong class="font-bold">
                    <?php echo $offer_heading['strong']; ?>
                </strong>
                <?php echo $offer_heading['regular']; ?>
            </h2>
        <?php endif; ?>

        <?php if (($offer_link = get_field('offer_link')) && ($offer_image = get_field('offer_image'))) : ?>

            <a href="<?php echo $offer_link; ?>" class="decor faded-out">
                <?php echo wp_get_attachment_image($offer_image, 'full'); ?>
            </a>

        <?php endif; ?>
    </div>
</div>1