<div class="container grid grid-cols-12 px-5 mx-auto md:gap-10 mb-28">
    <?php if ($img = get_field('about_image')) : ?>

        <div class="parallax-container col-start-1 col-span-full xs:col-start-2 xs:col-span-10 sm:col-start-3 sm:col-span-8 md:col-start-1 md:col-span-6 lg:col-start-2 lg:col-span-4">

            <?php echo wp_get_attachment_image($img, 'about', '', ['class' => 'w-full h-full object-cover']); ?>

        </div>

    <?php endif; ?>

    <?php if (($heading = get_field('about_heading')) && ($text = get_field('about_text'))) : ?>

        <div class="col-start-1 col-span-full xs:col-start-2 xs:col-span-10 md:col-start-7 md:col-span-6 flex flex-col justify-center items-center text-center p-5">
            <h2 class="main-heading uppercase font-bold mb-[1.5em]">
                <?php echo $heading; ?>
            </h2>
            <p class="standard-text max-w-[548px]">
                <?php echo $text; ?>
            </p>
        </div>

    <?php endif; ?>

</div>