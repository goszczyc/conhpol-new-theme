import Swiper from "swiper";
import { Autoplay } from "swiper/modules";

import "swiper/css";

const clientsSlider_handler = () => {
    const slider = new Swiper(".clients-slider", {
        modules: [Autoplay],
        spaceBetween: 10,
        loop: true,
        slidesPerView: 3,
        speed: 7500,
        autoplay: {
            delay: 0,
            disableOnInteraction: false,
        },
        breakpoints: {
            576: {
                slidesPerView: 4,
                spaceBetween: 20
            },
            768: {
                spaceBetween: 40
            },
            992: {
                spaceBetween: 60
            },
            1200: {
                spaceBetween: 80
            }
        }
    });
};

export default clientsSlider_handler;
