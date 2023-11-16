<?php if (have_rows('clients_slider')) : ?>

    <section class="container px-5 mx-auto mb-40">
        <?php if ($clients_heading = get_field('clients_heading')) : ?>


            <h2 class="text-5xl uppercase text-center mb-20 decor faded-out">
                <strong class="font-bold">
                    <?php echo $clients_heading['strong']; ?>
                </strong>
                <?php echo $clients_heading['regular']; ?>
            </h2>
        <?php endif; ?>


        <div class="grid grid-cols-1 lg:grid-cols-12">

            <div class="col-span-full lg:col-start-2 lg:col-span-10 decor faded-out">
                <div class="clients-slider swiper">
                    <div class="swiper-wrapper">
                        <?php while (have_rows('clients_slider')) : the_row(); ?>
                            <?php if ($logo = get_sub_field('logo')) : ?>

                                <div class="swiper-slide">
                                    <!-- <div class="p-12 flex justify-center items-center"> -->
                                        <?php echo wp_get_attachment_image($logo, 'full', '', ['class' => 'w-full max-w-[180px] mx-auto']); ?>
                                    <!-- </div> -->
                                </div>

                            <?php endif; ?>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>

        </div>
    </section>

<?php endif; ?>