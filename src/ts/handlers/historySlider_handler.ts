import Swiper from "swiper";
import { EffectFade, Pagination } from "swiper/modules";

import "swiper/css";
import "swiper/css/pagination";

const historySlider_handle = () => {
    const initSlide = document.querySelector('[data-initial]') as HTMLElement;
    const slider = new Swiper(".history-slider", {
        modules: [EffectFade, Pagination],
        spaceBetween: 40,
        effect: "fade",
        initialSlide: parseInt(initSlide.dataset.initial),
        pagination: {
            el: ".history-pagination",
            clickable: true,

            renderBullet: function (index, className) {
                return (
                    '<span class="' +
                    className +
                    '"><span class="history-pagination-el">' +
                    this.slides[index].dataset.year +
                    "</span></span>"
                );
            },
        },
    });
};

export default historySlider_handle;
