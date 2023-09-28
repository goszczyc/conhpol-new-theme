<?php
if (function_exists('acf_add_options_page')) {
	$parent = acf_add_options_page(array(
		'page_title'  => 'Pola uniwersalne',
		'menu_title'  => 'Pola uniwersalne',
		'menu_slug'   => 'repeat',
		'capability'  => 'edit_posts',
		'redirect'    => true
	));

	$header = acf_add_options_sub_page(array(
		'page_title' => 'Menu',
		'menu_title' => 'Menu',
		'parent_slug' => $parent['menu_slug']
	));

	$footer = acf_add_options_sub_page(array(
		'page_title' => 'Stopka',
		'menu_title' => 'Stopka',
		'parent_slug' => $parent['menu_slug']
	));
}
