<footer class="border-t border-solid border-t-gray">
    <div class="container grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-10 px-5 mx-auto py-[100px]">
        <div class="col-span-full md:col-span-1">
            <?php if ($social_heading = get_field('social_heading', 'options')) : ?>

                <h3 class="text-xl leading-[2.125rem] font-bold uppercase mb-7 text-center md:text-left">
                    <?php echo $social_heading; ?>
                </h3>

            <?php endif; ?>
            <?php if (have_rows('social_media', 'options')) : ?>

                <div class="flex items-center justify-center md:justify-start">

                    <?php while (have_rows('social_media', 'options')) :
                        the_row();
                        $url = get_sub_field('url');
                        $icon = get_sub_field('icon');
                    ?>

                        <a href="<?php echo esc_url($url); ?><" class="mr-[22px] last:mr-0">
                            <?php echo wp_get_attachment_image($icon, 'full', '', ['class' => 'w-12']); ?>
                        </a>

                    <?php endwhile; ?>

                </div>

            <?php endif; ?>
        </div>
        <div class="menu">

            <?php get_template_part(CMP . 'footer-menu', '', ['menu' => 'footer-menu']); ?>

        </div>
        <div class="legal">

            <?php get_template_part(CMP . 'footer-menu', '', ['menu' => 'footer-policies']); ?>

        </div>
        <div class="contact col-span-full sm:col-span-1 sm:text-right">

            <?php if ($contact_heading = get_field('contact_heading', 'options')) : ?>

                <h3 class="text-xl leading-[2.125rem] font-bold uppercase">
                    <?php echo $contact_heading; ?>
                </h3>

            <?php endif; ?>

            <?php if ($contact_info = get_field('contact_info', 'options')) : ?>

                <div class="prose prose-p:leading-[2.125rem] xs:prose-p:text-xl xs:prose-p:leading-[2.125rem] max-w-full ">
                    <?php echo $contact_info['address']; ?>
                </div>
                <?php if ($contact_info['phone']) : ?>
                    <div>
                        <a href="tel: <?php echo $contact_info['phone']; ?>" class="xs:text-xl font-bold hover:text-primary focus:text-primary transition-colors duration-300">
                            <?php echo $contact_info['phone']; ?>
                        </a>
                    </div>
                <?php endif; ?>
                <?php if ($contact_info['email']) : ?>
                    <div class="div">
                        <a href="mailto: <?php echo $contact_info['email']; ?>" class="xs:text-xl font-bold hover:text-primary focus:text-primary transition-colors duration-300">
                            <?php echo $contact_info['email']; ?>
                        </a>
                    </div>
                <?php endif; ?>

            <?php endif; ?>

        </div>
    </div>
    <div class="container px-5 mx-auto">
        <?php if ($footer_funds = get_field('footer_funds', 'options')) : ?>

            <?php echo wp_get_attachment_image($footer_funds, 'full', '', ['class' => 'w-full max-w-[896px] mx-auto']); ?>

        <?php endif; ?>

        <?php if ($company_name = get_field('company_name', 'options')) : ?>

            <div class="text-center text-heading my-8">
                <?php echo $company_name; ?>
            </div>

        <?php endif; ?>
    </div>

    <?php
    // Newsletter 
    ?>
    <div class="bg-gray">
        <div class="container px-5 py-8 mx-auto">
            <?php if ($application_info = get_field('application_info', 'options')) : ?>

                <div class="text-center mb-7">
                    <p>
                        <?php echo $application_info['text']; ?>
                        <a href="mailto: <?php echo $application_info['email']; ?>">
                            <?php echo $application_info['email']; ?>
                        </a>
                    </p>
                </div>

            <?php endif; ?>

            <?php if ($newsletter_heading = get_field('newsletter_heading', 'options')) : ?>

                <h2 class="text-heading font-bold upperase text-center uppercase mb-4">
                    <?php echo $newsletter_heading; ?>
                </h2>

            <?php endif; ?>
            <?php echo do_shortcode('[contact-form-7 id="5bb367d" title="Newsletter"]'); ?>
        </div>
    </div>

    <div class="container flex justify-between items-center px-5 py-6 mx-auto">
        <div class="text-gray text-sm">
            <?php _e('All rights reserved'); ?> &copy;CONHPOL <?php echo date('Y'); ?>
        </div>
        <a href="https://everywhere.pl/">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/everywhere-logo.png" alt="Everywhere Logo" class="w-[70px]">
        </a>
    </div>

</footer>

<?php wp_footer(); ?>

</body>

</html>