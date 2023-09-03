<?php if (have_rows('banner')) : ?>
    <section class="container mx-auto mb-28 px-5">

        <div class="banner swiper">
            <div class="swiper-wrapper">
                <?php
                while (have_rows('banner')) :
                    the_row();
                    $slide_type = get_sub_field('slide_type');
                    get_template_part(TMP_PART . 'Banner/banner-slide', '', ['slide_type' => $slide_type]);
                endwhile;
                ?>
            </div>
            <div class="swiper-pagination "></div>
        </div>

        <!-- <div class="slide-dots"></div> -->

    </section>

<?php endif; ?>