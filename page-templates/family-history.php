<?php
/* Template Name: Historia rodziny */

get_header();

?>

<main>

    <?php get_template_part(TMP_PART . 'Banner/banner'); ?>
    <?php get_template_part(TMP_PART . '/Collection/heading'); ?>
    <?php get_template_part(TMP_PART . 'history-cols'); ?>
    <?php get_template_part(TMP_PART . 'history-slider'); ?>
    <?php get_template_part(TMP_PART . 'history-last'); ?>
    
</main>

<?php get_footer(); ?>