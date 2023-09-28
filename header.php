<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<title><?php echo wp_title(); ?></title>
	<?php wp_head(); ?>

</head>


<body <?php body_class(); ?>>


	<header class="header sticky top-0 left-0 bg-white py-6 z-50 transition-all duration-300">
		<div class="container mx-auto flex lg:flex-col items-center px-5">
			<?php if ($main_logo = get_field('main_logo', 'options')) : ?>

				<a href="<?php echo get_home_url(); ?>" class="lg:mb-3.5 block w-full lg:w-max">
					<?php echo wp_get_attachment_image($main_logo, 'main_logo', '', ['class' => 'w-28 lg:w-48']); ?>
				</a>

			<?php endif; ?>

			<div class="flex relative justify-center items-center lg:w-full">

				<div id="menu" class="fixed max-lg:top-0 max-lg:left-0 flex flex-col justify-center tems-center lg:relative lg:flex-row bg-white max-lg:w-screen max-lg:h-screen z-10">
					<div class="flex justify-center font-semibold lg:ml-auto max-lg:order-2">
						<?php echo language_selector(); ?>
					</div>
					<?php get_template_part(CMP . 'main-menu', '', ['menu' => 'main-nav']); ?>
					<div class=" flex flex-col lg:flex-row items-center max-lg:order-3">
						<a href="<?= esc_url(get_permalink(get_page_by_title('mapa'))); ?>" class="xl:mr-3.5 my-5 lg:my-0">
							<img src="<?php echo get_template_directory_uri(); ?>/dist/images/pin.png" alt="pin">
						</a>
						<?php echo get_search_form(); ?>
					</div>
				</div>
				<?php if ($eu_logo = get_field('eu_logo', 'options')) : ?>

					<div class="mx-2 lg:mx-0 lg:pl-44"><?php echo wp_get_attachment_image($eu_logo, 'eu_logo', '', ['class' => 'ml-auto']); ?></div>

				<?php endif; ?>
				<button id="burger" type="button" class="burger z-30">
					<div class="burger__bar burger__bar--top"></div>
					<div class="burger__bar burger__bar--mid"></div>
					<div class="burger__bar burger__bar--bot"></div>
				</button>
			</div>
		</div>

	</header>