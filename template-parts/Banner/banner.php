<?php if ($banner_image = get_field('banner_image')) : ?>
    <section class="container mx-auto mb-28 px-5">

        <div class="container mx-auto">

            <?php echo wp_get_attachment_image($banner_image, 'banner'); ?>

        </div>

    </section>

<?php endif; ?>