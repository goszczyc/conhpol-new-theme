<?php if (have_rows('history')) :
    $i = 0;
?>


    <section class="bg-l-gray mb-16">
        <div class="container grid grid-cols-1 lg:grid-cols-12 px-5 mx-auto">
            <div class="lg:col-span-10 lg:col-start-2">

                <div class="history-slider swiper pt-20 pb-20 ">
                    <div class="swiper-wrapper">

                        <?php while (have_rows('history')) : the_row(); ?>

                            <div <?php if (get_sub_field('year') == '2008') : ?> data-initial="<?php echo $i; ?> <?php endif; ?>" data-year="<?php echo get_sub_field('year'); ?>" class="swiper-slide bg-l-gray">

                                <div class="flex max-sm:flex-wrap-reverse gap-10">
                                    <div class="w-full sm:w-1/2 md:w-2/5 md:pt-8 lg:pt-16 xl:pt-20">
                                        <h2 class="text-5xl sm:text-6xl md:text-8xl lg:text-year font-bold mb-8 sm:mb-10 md:mb-12 lg:mb-16"><?php echo get_sub_field('year'); ?></h2>
                                        <?php if ($text = get_sub_field('text')) : ?>

                                            <p class="standard-text"><?php echo $text; ?></p>

                                        <?php endif; ?>
                                    </div>
                                    <div class="w-full sm:w-1/2 md:w-3/5">
                                        <?php echo wp_get_attachment_image(get_sub_field('zdjecie'), 'standard', '', ['class' => 'w-full']); ?>
                                    </div>
                                </div>

                            </div>

                        <?php $i++;
                        endwhile; ?>

                    </div>
                    <div class="px-4 xs:px-8 lg:px-12">
                        <div class="flex -mx-4 xs:-mx-8 lg:-mx-12 mt-20">
                            <div class="swiper-pagination history-pagination flex justify-between px-4 xs:px-8 lg:px-12"></div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>


<?php endif; ?>