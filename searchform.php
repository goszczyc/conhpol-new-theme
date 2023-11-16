<form action="<?= get_home_url(); ?>/" method="get" class="header__searchbar">
    <div class="flex flex-col lg:flex-row items-center relative">
        <label for="search">
            <img src="<?= get_template_directory_uri(); ?>/dist/images/search.png" alt="search" class="header__searchbar-icon header-icon cursor-pointer h-[26px]">
        </label>
        
        <input class="searchbar lg:absolute left-full bg-primary text-xs leading-loose w-28 px-3.5 border-2 border-solid border-primary rounded-full outline-none mt-5 lg:mt-0 lg:ml-5 focus:bg-secondary placeholder:text-black 
        opacity-0 flex-shrink-0 transition-all duration-300" type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="<?= translate('Search', 'conhpol'); ?>" />
    </div>
</form>