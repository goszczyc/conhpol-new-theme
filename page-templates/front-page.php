<?php
/* Template Name: Strona Główna */
get_header();

?>

<main>
    <?php get_template_part(TMP_PART . 'Banner/banner-slider'); ?>
    <?php get_template_part(TMP_PART . 'about'); ?>
    <?php get_template_part(TMP_PART . 'new-collection'); ?>
    <h1><?php echo get_the_title(); ?></h1>
    <?php echo get_the_content(); ?>
</main>

<?php get_footer(); ?>