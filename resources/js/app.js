import "./bootstrap";
import Swiper from "swiper/bundle";
import "swiper/css/bundle";

const swiper = new Swiper(".swiper", {
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
   scrollbar: {
    el: '.swiper-scrollbar',
    draggable: true,
   }
});
