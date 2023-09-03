<?php
$args = wp_parse_args($args, array(
	'menu' => null,
	'class' => null
));
$menu = wp_get_menu_array($args['menu']);
$current = ($item['current']) ? '' : '';
?>
<ul class="">
	<?php foreach ($menu['menus'] as $item) : ?>
		<li class="">
			<a href="<?php echo $item['url'] ?>" class="">
				<?php echo $item['title'] ?>
			</a>
			<?php if ($item['children']) : ?>

				<ul class="">
					<?php foreach ($item['children'] as $child) : ?>

						<li>
							<a href="<?php echo $child['url'] ?>" class="">
								<?php echo $child['title'] ?>
							</a>
						</li>

					<?php endforeach; ?>

				</ul>
			<?php endif ?>
		</li>
	<?php endforeach; ?>
</ul>