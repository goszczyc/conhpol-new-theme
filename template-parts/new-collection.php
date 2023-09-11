<div class="container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-12 gap-3 px-5 mx-auto mb-28">

    <div class="col-start-1 col-span-full sm:col-span-1 lg:col-span-5">
        <?php if ($new_collection_img = get_field('new_collection_img')) : ?>

            <img src="<?php echo wp_get_attachment_image_url($new_collection_img, 'standard') ?>" alt="" class="w-full h-full object-cover">

        <?php endif; ?>
    </div>
    <a href="<?php //TODO: ADD LINK TO NEWEST COLLECTION ?>" class="col-span-1 md:col-span-2 lg:col-span-7 py-12 md:py-8 bg-center bg-cover bg-no-repeat" <?php if ($bg = get_field('new_collection_bg')) : ?> style="background-image: url('<?php echo esc_url($bg); ?>')" <?php endif; ?>>
        <div class="flex justify-center items-center h-full p-12">
            <h2 class="text-2xl xs:text-3xl sm:text-4xl md:text-6xl lg:text-7xl xl:text-[92px] leading-[0.9] uppercase font-bold mb-8 relative">
                <?php if ($new_collection_heading = get_field('new_collection_heading')) : ?>

                    <?php echo $new_collection_heading; ?>

                <?php endif; ?>
                <?php if ($new_collection_heading_l = get_field('new_collection$new_collection_heading_l')) : ?>
                    <br>
                    <span class="text-[1.54em] leading-[0.9] text-white">

                        <?php echo $new_collection_heading_l; ?>

                    </span>
                <?php endif; ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/tap.svg" alt="" class="absolute top-full -right-5 w-12 sm:w-20 animate-tap">
            </h2>
        </div>
    </a>

</div>