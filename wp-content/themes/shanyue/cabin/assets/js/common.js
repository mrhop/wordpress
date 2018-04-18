const commons = {
    navbarToggle: () => {
        document.querySelector('#site-navigation button.toggle').addEventListener('click', function () {
            if (document.querySelector('#primary-menu').classList.contains('opened')) {
                document.querySelector('#primary-menu').classList.remove('opened')
            } else {
                document.querySelector('#primary-menu').classList.add('opened')
            }
        })
    }
}
document.addEventListener('DOMContentLoaded', () => {
    commons.navbarToggle()
})