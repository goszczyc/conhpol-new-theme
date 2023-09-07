<?php $slide_type = $args['slide_type']; ?>

<?php if ($slide_type == 'img_txt') : ?>

    <div class="swiper-slide">
        <div class="grid sm:grid-cols-12 items-center gap-10">
            <?php if ($bg_image = get_sub_field('bg_image')) : ?>

                <div class="col-start-1 col-span-full row-start-1 row-span-1 relative before:absolute before:inset-0 before:bg-black before:bg-opacity-60 before:animate-fadeIn-fast before:opacity-0 sm:before:animate-none h-full">
                    <?php echo wp_get_attachment_image($bg_image, 'banner', '', ['class' => 'absolute top-0 left-0 sm:relative object-cover w-full h-full']) ?>
                </div>

            <?php endif; ?>
            <div class="flex flex-col items-center relative sm:items-start opacity-0 col-start-1 col-span-full sm:col-start-8 sm:col-span-5 row-start-1 px-5 sm:px-0 py-20 animate-fadeIn ">
                <?php if ($heading = get_sub_field('heading')) : ?>
                    <h2 class="leading-snug uppercase font-bold text-white mb-[0.73em] text-2xl md:text-3xl lg:text-4xl xl:text-5xl 2xl:text-6xl">
                        <?php echo $heading; ?>
                        <?php if ($heading_l = get_sub_field('heading_l')) : ?>

                            <br><span class="text-[1.2em] xs:text-[1.666em] leading-none"><?php echo $heading_l; ?></span>

                        <?php endif; ?>
                    </h2>
                <?php endif; ?>
                <a href="" class="btn btn--adaptive">Shop all</a>
            </div>
        </div>
    </div>

<?php elseif ($slide_type == 'photo') : ?>

    <div class="swiper-slide">
        <?php if ($bg_image = get_sub_field('bg_image')) : ?>

            <div class="backgeround col-start-1 col-span-12 row-start-1 row-span-1">
                <?php wp_get_attachment_image($bg_image, 'banner', '', ['class' => 'object-cover']) ?>
            </div>

        <?php endif; ?>
    </div>

<?php else : ?>
    <div class="swiper-slide">
        <video controls class="aspect-[2.13] object-cover">
            <source src="<?= get_sub_field('video'); ?>">
        </video>
    </div>
<?php endif; ?>