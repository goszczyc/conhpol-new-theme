<?php
/* Template Name: News */

// the query
$i = 0;
$current_id = get_the_ID();
$args = array(
    'post_type' => 'post',
    'posts_per_page' => -1,
    'paged' => false,
);
$blog = new WP_Query($args);


get_header();

?>
<main class="main">

    <?php if ($blog->have_posts()) : ?>

        <section class="blog container px-5 mx-auto">
            <div class="flex flex-wrap -mx-5 perspective">

                <?php while ($blog->have_posts()) :
                    $blog->the_post();
                    $title_secondary = get_field('title_secondary');
                    $location = get_field('location');
                    $custom_excerpt = get_field('short_description');
                    $thumbnail = get_the_post_thumbnail('', 'blog-thumb');
                    $date = get_the_date('d.m.Y');
                ?>

                    <a href="<?= esc_url(get_permalink()); ?>" class="w-full xs:w-1/2 md:w-1/3 lg:w-1/4 blog__card relative px-5">
                        <div class="blog__card-top">

                            <?php if ($thumbnail) : ?>
                                <div class="blog__card-thumbnail">
                                    <?= $thumbnail; ?>
                                </div>
                            <?php endif; ?>

                            <div class="blog__card-title">

                                <?php if (!$title_secondary) : ?>

                                    <h2><?= get_the_title(); ?></h2>

                                <?php else : ?>
                                    <?= $title_secondary; ?>
                                <?php endif; ?>

                            </div>
                        </div>
                        <div class="blog__card-content">

                            <?php if (!$location) : ?>
                                <h3 class="blog__card-date">
                                    <?= $date; ?>
                                </h3>
                            <?php else : ?>
                                <h3> <?= $location; ?></h3>
                            <?php endif; ?>

                            <?php if ($custom_excerpt) : ?>
                                <?= $custom_excerpt; ?>
                            <?php endif; ?>

                        </div>
                        <p class="blog__card-read-more"><?php _e('read more', 'conhpol'); ?>...</p>
                    </a>

                <?php endwhile; ?>

            </div>
        </section>

    <?php endif; ?>

</main>

<?php get_footer(); ?>