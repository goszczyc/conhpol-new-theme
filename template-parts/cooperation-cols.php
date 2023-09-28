<section class="container px-5 mx-auto mb-20">
    <?php if ($cooperation_heading = get_field('cooperation_heading')) : ?>


        <h1 class="text-5xl uppercase text-center mb-20">
            <strong class="font-bold">
                <?php echo $cooperation_heading['strong']; ?>
            </strong>
            <?php echo $cooperation_heading['regular']; ?>
        </h1>
        </div>

    <?php endif; ?>

    <?php if ($cooperation_cols = get_field('cooperation_cols')) : ?>

        <div class="grid sm:grid-cols-2 xl:grid-cols-12 gap-10">
            <div class="xl:col-span-5 xl:col-start-2 prose w-full prose-p:text-lg xs:prose-p:text-xl sm:prose-p:text-lg md:prose-p:text-xl prose-p:mb-5 prose-p:text-black prose-li:text-lg xs:prose-li:text-xl sm:prose-li:text-lg md:prose-li:text-xl prose-li:text-black prose-li:accent-black max-w-full prose-li:mb-1">
                <?php echo $cooperation_cols['text_left']; ?>
            </div>
            <div class="xl:col-span-5 prose w-full prose-p:text-lg xs:prose-p:text-xl sm:prose-p:text-lg md:prose-p:text-xl prose-p:mb-5 prose-p:text-black max-w-full prose-li:text-lg xs:prose-li:text-xl sm:prose-li:text-lg md:prose-li:text-xl prose-li:text-black prose-li:accent-black prose-li:mb-1">
                <?php echo $cooperation_cols['text_right']; ?>
            </div>
        </div>

    <?php endif; ?>
</section>