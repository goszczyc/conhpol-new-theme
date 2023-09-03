<?php

get_header();

?>

<main>
    <?php get_template_part('/template-parts/banner'); ?>
    <h1><?php echo get_the_title(); ?></h1>
    <?php echo get_the_content(); ?>
</main>

<?php get_footer(); ?>
