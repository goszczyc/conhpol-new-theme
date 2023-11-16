<?php if (have_rows('even-cols')) : ?>

    <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-12 gap-10 grid-flow-row-dense px-5 mb-10">

        <?php while (have_rows('even-cols')) : the_row(); ?>

            <div class="lg:col-span-5 lg:even:col-start-2 sm:row-span-2 lg:odd:col-start-7 sm:first:row-span-1">

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