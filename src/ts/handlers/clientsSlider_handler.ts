import Swiper from "swiper";
import { Autoplay } from "swiper/modules";

import "swiper/css";

const clientsSlider_handler = () => {
    const slider = new Swiper(".clients-slider", {
        modules: [Autoplay],
        spaceBetween: 80,
        loop: true,
        slidesPerView: 4,
        speed: 7500,
        autoplay: {
            delay: 0,
            disableOnInteraction: false,
        },
    });
};

export default clientsSlider_handler;
