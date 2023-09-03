<?php
if (function_exists('acf_add_options_page')) {
	$parent = acf_add_options_page(array(
		'page_title'  => 'Pola powtarzalne',
		'menu_title'  => 'Pola powtarzalne',
		'menu_slug'   => 'repeat',
		'capability'  => 'edit_posts',
		'redirect'    => true
	));
}
