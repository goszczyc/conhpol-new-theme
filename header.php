<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>

</head>


<body <?php body_class(); ?>>


	<header class="header sticky top-0 left-0 bg-white pt-4 pb-1 z-[1000] transition-all duration-300 text-sm">
		<div class="container mx-auto flex lg:flex-col justify-between items-center px-5">
			<div class="lg:relative lg:w-full lg:mb-3.5">
				<?php if ($main_logo = get_field('main_logo', 'options')) : ?>

					<a href="<?php echo get_home_url(); ?>" class="block w-full lg:w-max lg:mx-auto">
						<?php echo wp_get_attachment_image($main_logo, 'main_logo', '', ['class' => 'w-28 lg:w-48']); ?>
					</a>

				<?php endif; ?>
				<?php if (($eu_logo = get_field('eu_logo', 'options')) && $eu_link = get_field('eu_link', 'options')) : ?>

					<a href="<?php echo esc_url($eu_link); ?>" class="absolute right-20 top-1/2 -translate-y-[15%] lg:right-0 lg:-translate-y-1/3">
						<?php echo wp_get_attachment_image($eu_logo, 'eu_logo', '', ['class' => 'w-10 xs:w-12 lg:w-16']); ?></a>


				<?php endif; ?>
			</div>

			<div class="flex relative lg:justify-center items-center lg:w-full">

				<nav id="menu" class="fixed max-lg:top-0 max-lg:left-0 flex flex-col justify-center tems-center lg:relative lg:flex-row bg-white max-lg:w-screen max-lg:h-screen z-10">
					<div class="flex justify-center font-semibold lg:ml-auto">
						<?php echo language_selector(); ?>
					</div>
					<?php get_template_part(CMP . 'main-menu', '', ['menu' => 'main-nav']); ?>
					<div class=" flex flex-col lg:flex-row items-center">
						<a href="<?= esc_url(get_permalink(367)); ?>" class="lg:mr-3.5 my-5 lg:my-0">
							<img src="<?php echo get_template_directory_uri(); ?>/dist/images/pin.png" alt="pin">
						</a>
						<?php echo get_search_form(); ?>
					</div>

				</nav>

				<button id="burger" type="button" class="burger z-30">
					<div class="burger__bar burger__bar--top"></div>
					<div class="burger__bar burger__bar--mid"></div>
					<div class="burger__bar burger__bar--bot"></div>
				</button>
			</div>
		</div>

	</header>