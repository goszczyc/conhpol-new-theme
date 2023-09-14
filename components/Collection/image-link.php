<?php
$url = get_sub_field('url');
$text = get_sub_field('text');
$text_l = get_sub_field('text-l');
$img = get_sub_field('img');
$position = get_sub_field('position');
$align = get_sub_field('align');

$text_class = $position . ' ' . $align;
$classes = 'top-0 bottom-1/2 bottom-0 text-center text-left text-right';
?>

<a href="<?php echo esc_url($url); ?>" class="block relative  h-full overflow-hidden isolate before:absolute before:top-0 before:left-0 before:w-full before:h-full before:bg-black before:bg-opacity-60 before:opacity-0 before:transition-opacity before:duration-300 hover:before:opacity-100 z-10">
    <?php echo wp_get_attachment_image(get_sub_field('img'), 'standard', '', ['class' => 'w-full h-full object-cover']); ?>
    <div class="absolute <?php echo $text_class; ?> text-3xl xs:text-ilink text-white uppercase w-full px-5 py-6 xs:px-10 xs:py-8 z-20">
        <?php echo $text; ?>
        <div class="text-4xl xs:text-ilink-l font-bold">
            <?php echo $text_l; ?>
        </div>
    </div>
</a>