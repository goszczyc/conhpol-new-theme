<?php
function language_selector()
{
    $languages = apply_filters('wpml_active_languages', NULL, '');

    if (!empty($languages)) {
        foreach ($languages as $l) {
            $code = $l['language_code'];
            $code = ($l['language_code'] == 'uk') ? 'en' : $code;

            if (!$l['active']) {
                $lang =  array(
                    'code' => $code,
                    'link' => '<a href="' . $l['url'] . '" class="uppercase mx-2.5 lg:mx-0 lg:ml-[14px] hover:text-primary transition-colors duration-300">' . $code . '</a>'
                );
            } else {
                $lang = array(
                    'code' => $code,
                    'link' => '<p href="' . $l['url'] . '" class="uppercase mx-2.5 lg:mx-0 lg:ml-[14px] text-primary">' . $code . '</p>'
                );
            }

            echo $lang['link'];
        }
    }
}
