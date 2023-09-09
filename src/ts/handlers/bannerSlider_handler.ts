import Swiper from "swiper";
import { Pagination, Autoplay} from "swiper/modules";

import "swiper/css";
import "swiper/css/pagination";

const bannerSlider_handle = () => {
    const slider = new Swiper('.banner',{
        spaceBetween: 40,
        modules: [Pagination, Autoplay],
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        // autoplay: {
        //     delay: 7000,
        //     disableOnInteraction: false
        // },
        loop: true
        
    })
};

export default bannerSlider_handle;
