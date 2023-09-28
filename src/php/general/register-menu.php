<?php

/*************** MENU ***************/
add_action('init', 'register_menu');
function register_menu()
{
  register_nav_menus(array(
    'main-nav' => esc_html__('Menu Główne', 'conhpol'),
    'footer-menu' => esc_html__('Stopka - menu', 'conhpol'),
    'footer-policies' => esc_html__('Stopka - polityka', 'conhpol')
  ));
}
