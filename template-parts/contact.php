<div class="container grid sm:grid-cols-2 xl:grid-cols-12 gap-10 mx-auto px-5 grid-flow-dense">
    <?php if (have_rows('divisions')) : ?>

        <div class="xl:col-start-2 xl:col-span-5">


            <?php while (have_rows('divisions')) : the_row(); ?>

                <div>
                    <?php if ($division_name = get_sub_field('division_name')) : ?>

                        <h2 class="text-heading mb-10 decor faded-out">
                            <?php echo $division_name; ?>
                        </h2>

                    <?php endif; ?>

                    <?php if (have_rows('staff')) : ?>



                        <?php while (have_rows('staff')) : the_row(); ?>

                            <div class="flex flex-col xs:flex-row mb-16">

                                <div class="flex flex-col justify-center text-primary text-lg font-bold xs:w-1/2 border-b xs:border-b-0 text-center xs:text-left xs:border-r border-gray border-solid xs:pr-5 py-2 uppercase decor faded-out">

                                    <?php if ($language = get_sub_field('language')) : ?>

                                        <?php echo $language; ?>

                                    <?php endif; ?>

                                </div>
                                <div class="xs:w-1/2 text-gray text-center xs:text-left xs:pl-5 py-2 decor faded-out">
                                    <?php if ($name = get_sub_field('name')) : ?>

                                        <div class="uppercase text-lg font-medium">
                                            <?php echo $name; ?>
                                        </div>

                                    <?php endif; ?>
                                    <?php if ($email = get_sub_field('email')) : ?>

                                        <div>
                                            <a href="mailto: <?php echo $email; ?>" class="hover:text-primary focus:text-primary transition-colors">
                                                <?php echo $email; ?>
                                            </a>
                                        </div>

                                    <?php endif; ?>
                                    <?php if ($phone = get_sub_field('phone')) : ?>

                                        <div>
                                            <a href="tel: <?php echo $phone; ?>" class="hover:text-primary focus:text-primary transition-colors">
                                                <?php echo $phone; ?>
                                            </a>
                                        </div>

                                    <?php endif; ?>
                                </div>
                            </div>

                        <?php endwhile; ?>



                    <?php endif; ?>

                </div>

            <?php endwhile; ?>


        </div>
    <?php endif; ?>
    <div class="row-start-1 sm:col-start-2 xl:col-start-7 xl:col-span-5">
        <?php if ($form_heading = get_field('form_heading')) : ?>

            <div class="mb-5">
                <h2 class="text-heading decor faded-out">
                    <?php echo $form_heading; ?>
                </h2>
                <?php if ($form_subheading = get_field('form_subheading')) : ?>

                    <p class="text-sm italic text-gray decor faded-out">
                        <?php echo $form_subheading; ?>
                    </p>

                <?php endif; ?>


            </div>

        <?php endif; ?>
        <div id="contact-form decor faded-out">
            <?php echo do_shortcode('[contact-form-7 id="ae8038d" title="Formularz kontaktowy"]'); ?>
        </div>
    </div>
    <?php if (have_rows('locations')) : ?>
        <div class="sm:col-span-full md:col-span-1 xl:col-start-2 xl:col-span-5">


            <?php while (have_rows('locations')) : the_row(); ?>

                <div>
                    <?php if ($locations_heading = get_sub_field('locations_heading')) : ?>

                        <h2 class="text-heading mb-10 decor faded-out">
                            <?php echo $locations_heading; ?>
                        </h2>

                    <?php endif; ?>

                    <?php if (have_rows('address')) : ?>



                        <?php while (have_rows('address')) : the_row(); ?>

                            <div class="flex flex-col xs:flex-row mb-16">

                                <div class="text-primary text-lg font-bold xs:w-1/2 border-b xs:border-b-0 text-center xs:text-left xs:border-r border-gray border-solid xs:pr-5 py-2 uppercase decor faded-out">

                                    <?php if ($type = get_sub_field('type')) : ?>

                                        <?php echo $type; ?>

                                    <?php endif; ?>

                                </div>
                                <address class="xs:w-1/2 text-gray text-center xs:text-left xs:pl-5 py-2 text-lg uppercase decor faded-out">
                                    <?php if ($street = get_sub_field('street')) : ?>

                                        <div>
                                            <?php echo $street; ?>
                                        </div>

                                    <?php endif; ?>
                                    <?php if ($city = get_sub_field('city')) : ?>

                                        <div>
                                            <?php echo $city; ?>
                                        </div>

                                    <?php endif; ?>
                                    <?php if ($country = get_sub_field('country')) : ?>

                                        <div>
                                            <?php echo $country; ?>
                                        </div>

                                    <?php endif; ?>
                                </address>
                            </div>

                        <?php endwhile; ?>



                    <?php endif; ?>

                </div>

            <?php endwhile; ?>


        </div>

    <?php endif; ?>
</div>