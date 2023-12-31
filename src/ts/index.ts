import "fslightbox";

import bannerSlider_init from "./inits/bannerSLider_init";
import historySlider_init from "./inits/historySlider_init";
import animateItemsIn_init from "./inits/animateItemsIn_init";
import burgerMenu_init from "./inits/burgerMenu_init";
import subMenus_init from "./inits/subMenus_init";
import scrolledHeader_init from "./inits/scrolledHeader_init";
import checkInput_init from "./inits/checkInput_init";
import clientsSldier_init from "./inits/clientsSlider_init.";
// import map_init from "./map/map_init";
import getTags from "./map/map_handle";
import sendCites from "./checkCites";

document.addEventListener("DOMContentLoaded", () => {
    burgerMenu_init();
    bannerSlider_init();
    historySlider_init();
    animateItemsIn_init();
    subMenus_init();
    scrolledHeader_init();
    checkInput_init();
    clientsSldier_init();
    sendCites();
    getTags();
});
