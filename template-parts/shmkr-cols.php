<?php if (have_rows('shmkr_cols')) : ?>

    <div class="container grid lg:grid-cols-12 lg:gap-10 mx-auto mb-[120px]">
        <?php while (have_rows('shmkr_cols')) :  the_row(); ?>
            <div class="flex even:flex-row-reverse flex-wrap col-span-full lg:col-span-10 lg:col-start-2">
                <div class="w-full sm:w-1/2 px-5 decor faded-out">
                    <?php if ($image = get_sub_field('image')) : ?>

                        <?php echo wp_get_attachment_image($image, 'full', '', ['class' => 'w-full h-full object-cover']); ?>

                    <?php endif; ?>
                </div>
                <div class="flex flex-col items-center w-full sm:w-1/2 px-5 py-4 decor faded-out">
                    <?php if ($logo = get_sub_field('logo')) : ?>

                        <?php echo wp_get_attachment_image($logo, 'full', '', ['class' => 'mb-8']); ?>

                    <?php endif; ?>
                    <?php if ($text = get_sub_field('text')) : ?>

                        <div class="prose-p:text-lg xs:prose-p:text-xl sm:prose-p:text-lg md:prose-p:text-xl max-w-full w-full text-center mb-16">
                            <?php echo $text; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($small_img = get_sub_field('small_img')) : ?>

                        <?php echo wp_get_attachment_image($small_img, 'img_small', '', ['class' => 'transition-transform duration-500 hover:scale-[1.1]']); ?>

                    <?php endif; ?>
                </div>
            </div>
        <?php endwhile; ?>
    </div>

<?php endif; ?>