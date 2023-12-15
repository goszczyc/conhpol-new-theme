<?php
$parent_tax_id = 9;
$filters = get_terms($args = array(
    'taxonomy' => 'filters',
    'hide_empty' => false,
    'parent' => 9
));
$regions = get_terms($args = array(
    'taxonomy' => 'filters',
    'hide_empty' => false,
    'parent' => 381
));
?>



<section class="map relative">

    <div class="flex flex-wrap">
        <div class="w-full sm:w-4/12 lg:w-3/12 xl:w-2/12 map__sidebar">
            <div class="map__search">
                <button class="map__search-show-btn"></button>
                <form id="map-search" class="map__search-form px-5">
                    <label for="region" class="map__search-label"><?php _e('country/region or city', 'conhpol'); ?></label>
                    <!-- <input id="region" name="region" type="text" class="map__search-input"> -->
                    <select name="region" id="region" class="map__search-input">

                        <option value="all"><?php _e('All countries', 'conhpol'); ?></option>

                        <?php foreach ($regions as $region) : ?>
                            <?php $option = $region->name; ?>

                            <option value="<?php echo strtolower($option); ?>">
                                <?php echo $option; ?>
                            </option>

                        <?php endforeach; ?>

                    </select>
                    <input type="submit" value="<?php _e('Search', 'conhpol'); ?>" class="map__search-submit">
                    <button id="filters-btn" class="map__search-btn" type="button"><?php _e('filter by', 'conhpol'); ?> <span class="map__search-btn-arrow"></span></button>
                    <fieldset class="map__search-filters">

                        <?php foreach ($filters as $filter) :
                            $option = $filter->name; ?>

                            <div class="map__search-filter-group w-1/2">
                                <input class="map__search-filter-input" type="checkbox" name="filter" id="<?= $option; ?>" value="<?= $option; ?>">
                                <label class="map__search-filter-label" for="<?= $option; ?>"><?= $option; ?></label>
                            </div>

                        <?php endforeach; ?>

                    </fieldset>
                </form>

                <div class="map__search-results">
                    <h3 class="map__search-results-heading px-5"><span id="num-of-results"></span><?php _e(' results found', 'conhpol'); ?></h3>
                    <div class="map__search-shops px-5">

                    </div>
                </div>
            </div>
        </div>
        <div id="map-container" class="w-full sm:w-8/12 lg:w-9/12 xl:w-10/12 map__container">
            <div id="map" style="height: 100%;"></div>
        </div>
    </div>

</section>