<section class="container px-5 mx-auto mb-20">
    <?php if ($cooperation_heading = get_field('cooperation_heading')) : ?>


        <h1 class="main-heading uppercase text-center mb-20">
            <strong class="font-bold">
                <?php echo $cooperation_heading['strong']; ?>
            </strong>
            <?php echo $cooperation_heading['regular']; ?>
        </h1>
        </div>

    <?php endif; ?>

    <?php if ($cooperation_cols = get_field('cooperation_cols')) : ?>

        <div class="grid sm:grid-cols-2 xl:grid-cols-12 gap-10">
            <div class="xl:col-span-5 xl:col-start-2 w-full standard-text standard-list max-w-full">
                <?php echo $cooperation_cols['text_left']; ?>
            </div>
            <div class="xl:col-span-5 prose w-full standard-text max-w-full standard-list">
                <?php echo $cooperation_cols['text_right']; ?>
            </div>
        </div>

    <?php endif; ?>
</section>