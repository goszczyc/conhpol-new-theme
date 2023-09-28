<?php if (have_rows('history-cols')) : ?>

    <div class="container grid grid-cols-1 xs:grid-cols-8 sm:grid-cols-1 xl:grid-cols-12 mx-auto gap-10">

        <?php while (have_rows('history-cols')) : the_row(); ?>

            <div class="flex col-span-full sm:even:flex-row-reverse flex-wrap xs:col-span-6 xs:col-start-2 sm:col-start-1 sm:col-span-full xl:col-start-2 xl:col-span-10 mb-[88px]">

                <?php if ($image = get_sub_field('image')) : ?>

                    <div class="sm:w-1/2 px-5">

                        <?php echo wp_get_attachment_image($image, 'standard'); ?>

                    </div>

                <?php endif; ?>

                <?php if ($text = get_sub_field('text')) : ?>

                    <div class="flex flex-col justify-center prose sm:w-1/2 prose-p:text-lg xs:prose-p:text-xl sm:prose-p:text-lg md:prose-p:text-xl prose-p:text-black prose-p:max-w-full max-w-full prose-p:mb-12 prose-p:last-of-type:mb-0 py-5 flex-shrink-0 px-5">

                        <?php echo $text; ?>

                    </div>

                <?php endif; ?>
            </div>

        <?php endwhile; ?>

    </div>

<?php endif; ?>