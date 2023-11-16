<footer class="border-t border-solid border-t-gray footer">
    <div class="container grid grid-cols-2 xs:grid-cols-3 md:grid-cols-4 gap-x-10 xs:gap-10 px-5 mx-auto pt-[60px] max-w-[1102.48px]">
        <div class="col-span-full md:col-span-1 mb-10 xs:mb-0">
            <?php if ($social_heading = get_field('social_heading', 'options')) : ?>

                <h3 class="font-extralight leading-none  uppercase mb-[.6em] text-center md:text-left">
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

                        <a href="<?php echo esc_url($url); ?><" class="mr-[14px] last:mr-0">
                            <?php echo wp_get_attachment_image($icon, 'full', '', ['class' => 'w-10']); ?>
                        </a>

                    <?php endwhile; ?>

                </div>

            <?php endif; ?>
        </div>
        <div class="menu max-md:col-start-1">

            <?php get_template_part(CMP . 'footer-menu', '', ['menu' => 'footer-menu']); ?>

        </div>
        <div class="legal col-start-1 xs:col-start-2 row-start-2 md:row-start-1">
            <?php if ($legal_heading = get_field('legal_heading', 'options')) : ?>

                <h3 class="font-extralight leading-none mb-[.6em] uppercase">
                    <?php echo $legal_heading; ?>
                </h3>

            <?php endif; ?>
            <?php get_template_part(CMP . 'footer-menu', '', ['menu' => 'footer-policies']); ?>

        </div>
        <div class="contact row-start-2 col-start-2 xs:col-start-3 row-span-2 md:row-start- md:col-start-4 xs:row-span-1">

            <?php if ($contact_heading = get_field('contact_heading', 'options')) : ?>

                <h3 class="font-extralight leading-none mb-[.6em] uppercase">
                    <?php echo $contact_heading; ?>
                </h3>

            <?php endif; ?>

            <?php if ($contact_info = get_field('contact_info', 'options')) : ?>

                <div class="prose prose-p:leading-none  xs:prose-p:leading-none max-w-full ">
                    <?php echo $contact_info['address']; ?>
                </div>
                <?php if ($contact_info['phone']) : ?>
                    <div class="leading-none">
                        <a href="tel: <?php echo $contact_info['phone']; ?>" class="xs: font-bold hover:text-primary focus:text-primary transition-colors duration-300">
                            <?php echo $contact_info['phone']; ?>
                        </a>
                    </div>
                <?php endif; ?>
                <?php if ($contact_info['email']) : ?>
                    <div class="leading-none">
                        <a href="mailto: <?php echo $contact_info['email']; ?>" class="xs: font-bold hover:text-primary focus:text-primary transition-colors duration-300">
                            <?php echo $contact_info['email']; ?>
                        </a>
                    </div>
                <?php endif; ?>

            <?php endif; ?>

        </div>
    </div>
    <div class="container px-5 mx-auto mt-8">
        <?php if ($footer_funds = get_field('footer_funds', 'options')) : ?>

            <?php wp_get_attachment_image($footer_funds, 'full', '', ['class' => 'w-full max-w-[896px] mx-auto mt-5']); ?>

        <?php endif; ?>

        <?php if ($company_name = get_field('company_name', 'options')) : ?>

            <div class="text-center text-[24px] xs:text-[30px] leading-8 py-5">
                <?php echo $company_name; ?>
            </div>

        <?php endif; ?>
    </div>

    <?php
    // Newsletter 
    ?>
    <div class="bg-gray">
        <div class="container px-5 mx-auto">
            <?php
            $application_info = get_field('application_info', 'options');
            if ($application_info['text']) : ?>

                <div class="text-center text-xs font-extralight tracking-[2.2px] p-5 border-b border-solid border-black">
                    <p>
                        <?php echo $application_info['text']; ?>
                        <a href="mailto: <?php echo $application_info['email']; ?>">
                            <?php echo $application_info['email']; ?>
                        </a>
                    </p>
                </div>

            <?php endif; ?>

            <div class="py-4 max-w-[980px] mx-auto flex flex-col items-center">
                <?php if ($newsletter_heading = get_field('newsletter_heading', 'options')) : ?>

                    <h2 class="text-sm font-extralight uppercase text-center leading-none mb-4">
                        <?php echo $newsletter_heading; ?>
                    </h2>

                <?php endif; ?>
                <?php echo do_shortcode('[contact-form-7 id="9fdc689" title="Newsletter"]'); ?>
            </div>
        </div>
    </div>

    <div class="container flex justify-center items-center px-5 py-4 mx-auto">
        <div class="text-gray text-[10px] leading-none text-center">
            &copy; <?php echo date('Y'); ?> Conhpol <?php _e('All rights reserved'); ?>
        </div>
    </div>

</footer>

<?php wp_footer(); ?>

</body>

</html>