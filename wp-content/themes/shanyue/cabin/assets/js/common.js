import '../scss/common.scss'
import Swiper from 'swiper';

const commons = {
    navbarToggle: () => {
        document.querySelector('#site-navigation button.toggle').addEventListener('click', function () {
            if (document.querySelector('#primary-menu').classList.contains('opened')) {
                document.querySelector('#primary-menu').classList.remove('opened')
            } else {
                document.querySelector('#primary-menu').classList.add('opened')
            }
        })
    },
    windowScroll: () => {
        window.addEventListener('scroll', () => {
            if (document.documentElement.scrollTop >= 40) {
                document.querySelector('#masthead').classList.add('scroll-down')
                document.querySelector('#content').classList.add('scroll-down')
                document.querySelector('#colophon .search-form').classList.add('scroll-down')

            } else {
                document.querySelector('#masthead').classList.remove('scroll-down')
                document.querySelector('#content').classList.remove('scroll-down')
                document.querySelector('#colophon .search-form').classList.remove('scroll-down')
            }
        })
    },
    slider: () => {
        var swiper = new Swiper('.swiper-container', {
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            loop: true
        });
    },
    searchSubmit: () => {
        document.querySelector('#colophon form.search-form').addEventListener('submit', (e) => {
            let searchField = document.querySelector('#colophon form.search-form .search-field')
            if (!searchField.value.trim()) {
                searchField.value = ''
                e.preventDefault()
            }
        })
    }
}
document.addEventListener('DOMContentLoaded', () => {
    commons.navbarToggle()
    commons.windowScroll()
    commons.slider()
    commons.searchSubmit()
})