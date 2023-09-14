<?php
/* Template Name: Kolekcja */

get_header(); ?>

<main>
    <?php get_template_part(TMP_PART . '/Collection/heading'); ?>
    <?php get_template_part(TMP_PART . '/Collection/collumns'); ?>
    <?php get_template_part(TMP_PART . '/Collection/collumns-even'); ?>
</main>

<?php get_footer(); ?>