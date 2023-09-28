<?php
$args = wp_parse_args($args, array(
    'menu' => null,
    'class' => null
));
$menu = wp_get_menu_array($args['menu']);
$current = ($item['current']) ? '' : '';
?>
<ul class="flex flex-col">
    <?php foreach ($menu['menus'] as $item) : ?>
        <li class="xs:text-xl leading-[2.125rem] uppercase mb-2">
            <a href="<?php echo $item['url'] ?>" class="hover:text-primary focus:text-primary transition-colors duration-300">
                <?php echo $item['title'] ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>
