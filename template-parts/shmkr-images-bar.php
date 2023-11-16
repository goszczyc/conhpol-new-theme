<?php if ($images_bar = get_field('images_bar')) : ?>

    <div class="container px-5 mx-auto grid grid-cols-2 xs:grid-cols-4 mb-[120px]">

        <?php foreach ($images_bar as $image) : ?>

            <div class="decor faded-out">
                <?php echo wp_get_attachment_image($image, 'square_img', '', ['class' => 'w-full transition-transform duration-1000 hover:scale-[102%] ']); ?>
            </div>

        <?php endforeach; ?>

    </div>  

<?php endif; ?>