<?php if ($heading = get_field('heading')) : ?>

    <div class="container px-5 mx-auto mb-20">
        <h1 class="text-5xl uppercase text-center">
            <strong class="font-bold">
                <?php echo $heading['strong']; ?>
            </strong>
            <?php echo $heading['regular']; ?>
        </h1>
    </div>

<?php endif; ?>