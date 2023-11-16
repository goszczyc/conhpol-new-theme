import Swiper from "swiper";
import { Pagination, Autoplay, Navigation} from "swiper/modules";

import "swiper/css";
import "swiper/css/pagination";
import "swiper/css/navigation";

const bannerSlider_handle = () => {
    const slider = new Swiper('.banner',{
        spaceBetween: 40,
        modules: [Pagination, Autoplay, Navigation],
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        autoplay: {
            delay: 7000,
            // disableOnInteraction: false
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-butten-prev',
        },
        loop: true
        
    })
};

export default bannerSlider_handle;
