<?php
/* Template Name: Strona Główna */
get_header();

?>

<main>
    <?php get_template_part(TMP_PART . 'Banner/banner-slider'); ?>
    <?php get_template_part(TMP_PART . 'about'); ?>
    <?php get_template_part(TMP_PART . 'new-collection'); ?>
    <?php get_template_part(TMP_PART . 'our-offer'); ?>
    <?php get_template_part(TMP_PART . 'layouts'); ?>
</main>

<?php get_footer(); ?>