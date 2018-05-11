import '../scss/common.scss'
import Swiper from 'swiper';

const commons = {
    slider: () => {
        var swiper = new Swiper('.swiper-container', {
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            loop: true
        });
    }
}
document.addEventListener('DOMContentLoaded', () => {
    commons.slider()
})