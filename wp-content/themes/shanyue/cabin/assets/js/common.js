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
            } else {
                document.querySelector('#masthead').classList.remove('scroll-down')
                document.querySelector('#content').classList.remove('scroll-down')
            }
        })
    }
}
document.addEventListener('DOMContentLoaded', () => {
    commons.navbarToggle()
    commons.windowScroll()
})