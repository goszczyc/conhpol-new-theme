<?php if ($shmkr_gallery = get_field('shmkr_gallery')) : ?>
    <div class="container grid grid-cols-1 xs:grid-cols-2 md:grid-cols-3 gap-10 px-5 mx-auto">

        <?php foreach ($shmkr_gallery as $image) : ?>


            <a href="<?php echo wp_get_attachment_image_url($image, 'full'); ?>" data-fslightbox="shmkr-gallery" class="overflow-hidden decor faded-out">
                <?php echo wp_get_attachment_image($image, 'gallery_img transition-transform duration-1000 hover:scale-110'); ?>
            </a>


        <?php endforeach; ?>

    </div>

<?php endif; ?>