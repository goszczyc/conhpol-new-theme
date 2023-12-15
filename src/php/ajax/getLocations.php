<?php
function getLocations()
{

    $geoTags = [];
    $shopId = 1;

    $lang = $my_current_lang = apply_filters('wpml_current_language', NULL);

    $country_parent_id = ($lang === 'en') ? 386 : 381;
    $models_parent_id = ($lang === 'en') ? 304 : 9;

    $args = array(
        'post_type' => 'shops',
        'numberposts' => -1,
    );


    $shops = new WP_Query($args);

    if ($shops->have_posts()) {
        while ($shops->have_posts()) {
            $shops->the_post();
            $shopTerms = get_the_terms('', 'filters');

            $shopName = get_the_title();
            $thumbnail = get_the_post_thumbnail_url();
            $type = get_field('type');
            $info = get_field('info');
            $icon = get_field('icon');
            $gLink = get_field('g_map_link');
            $country = '';
            $models = [];

            $data = array(
                'address' => $info['address'],
                'phone' => '<a class="map__search-shop-text" href="tel: ' . $info["phone"] . '">' . translate('phone', 'conhpol') . ': ' . $info["phone"] . '</a>',
                'email' => '<a class="map__search-shop-text" href="mailto: ' . $info["email"] . '">' . translate('e-mail', 'conhpol') . ': ' . $info["email"] . '</a>',
                'openHours' => $info['open-hours'],
            );
            $coordinates = array(
                'longitude' => get_field('longitude'),
                'lattitude' => get_field('lattitude')
            );
            $gMapLink = '<a class="map__search-shop-text map__popup-text--gm" href="' . $gLink . '">' . translate('See in Google Maps ', 'conhpol') . '</a>';

            foreach ($shopTerms as $shopTerm) {
                if ($shopTerm->parent == $models_parent_id) $models[] = $shopTerm->name;
            }
            foreach ($shopTerms as $shopTerm) {
                if ($shopTerm->parent == $country_parent_id) $country = $shopTerm->name;
            }

            $tag = array(
                'lang' => $my_current_lang,
                'shopId' => $shopId,
                'name' => $shopName,
                'type' => $type,
                'data' => $data,
                'country' => $country,
                'avModels' => $models,
                'coordinates' => $coordinates,
                'thumbnail' => $thumbnail,
                'icon' => $icon,
                'gMapLink' => $gMapLink
            );

            $shopId++;

            $geoTags[] = $tag;
        }
    }
    echo json_encode($geoTags);

    wp_die();
}



add_action('wp_ajax_getLocations', 'getLocations');
add_action('wp_ajax_nopriv_getLocations', 'getLocations');
