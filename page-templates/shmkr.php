<?php
/* Template Name: ShoeMaker */

get_header();

?>

<main>

    <?php get_template_part(TMP_PART . 'Banner/banner-slider'); ?>
    <?php get_template_part(TMP_PART . '/Collection/heading'); ?>
    <?php get_template_part(TMP_PART . '/shmkr-cols'); ?>
    <?php get_template_part(TMP_PART . '/shmkr-images-bar'); ?>
    <?php get_template_part(TMP_PART . '/shmkr-gallery'); ?>
    
</main>

<?php get_footer(); ?>