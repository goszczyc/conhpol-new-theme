<?php if (have_rows('collection-cols')) : ?>

    <div class="container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 xl:grid-cols-12 xs:gap-10 px-5  mx-auto mb-10">

        <?php while (have_rows('collection-cols')) : the_row(); ?>

            <div class="col-span-full sm:col-span-1 md:odd:col-span-3 xl:odd:col-start-2 xl:odd:col-span-6 md:even:col-span-2  xl:even:col-span-4">

                <?php
                if (get_row_layout() == 'text') {

                    get_template_part(CMP . 'Collection/text');
                }
                if (get_row_layout() == 'image') {

                    get_template_part(CMP . 'Collection/image');
                }
                if (get_row_layout() == 'image-link') {

                    get_template_part(CMP . 'Collection/image-link');
                }
                ?>

            </div>

        <?php endwhile; ?>

    </div>

<?php endif; ?>