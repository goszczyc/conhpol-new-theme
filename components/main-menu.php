<?php
$args = wp_parse_args($args, array(
    'menu' => null,
    'class' => null
));
$menu = wp_get_menu_array($args['menu']);
?>
<ul class="relative flex flex-col items-center lg:flex-row uppercase">
    <?php foreach ($menu['menus'] as $item) :
        $current = ($item['current']) ? 'text-primary' : '';
    ?>
        <li class="relative mx-2 xl:mx-5 mb-5 lg:mb-0">
            <a href="<?php echo $item['url'] ?>" class="lg:px-2 xl:px-[15px] py-4 font-semibold hover:text-primary focus:text-primary transition-colors duration-300 <?php echo $current; ?> <?php if ($item['children']) : ?>has-sub <?php endif; ?>">
                <?php echo $item['title'] ?>
            </a>
            <?php if ($item['children']) : ?>

                <ul aria-hidden="true" class="sub-menu flex fixed top-0 left-0  flex-col justify-center pb-5 px-5 h-screen bg-white -translate-x-full transition-transform duration-300 max-lg:w-screen z-[1000] lg:shadow-sub-menu overflow-auto lg:min-w-[464px]">
                    <button class="sub-close absolute top-10 right-10 w-10 h-10"></button>
                    <?php foreach ($item['children'] as $child) : ?>

                        <li class="lg:px-32 mt-[74px] first-of-type:mt-0 font-semibold max-lg:text-center">
                            <a href="<?php echo $child['url'] ?>" class="px-4">
                                <?php echo $child['title'] ?>
                            </a>
                        </li>

                    <?php endforeach; ?>

                </ul>
            <?php endif ?>
        </li>
    <?php endforeach; ?>
</ul>