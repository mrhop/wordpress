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
    },
    searchClick: () => {
        document.querySelector('form.woocommerce-product-search').addEventListener('submit', (e) => {
            let domInput = document.querySelector('form.woocommerce-product-search input.search-field')
            if (domInput.value && domInput.clientWidth) {
                return true
            } else {
                domInput.focus()
                e.preventDefault()
            }
        })
    },
    commentSubmit: () => {
        let form = document.querySelector('form.comment-form')
        form.addEventListener('submit', (e) => {
            let pComment = form.querySelector('p.comment-notes')
            let domTextArea = form.querySelector('textarea')
            let domName = form.querySelector('#author')
            let domEmail = form.querySelector('#email')
            if (domTextArea.value.trim() && domName.value.trim() && domEmail.value.trim()) {
                return true
            } else {
                let br = document.createElement('br')
                let span = document.createElement('span')
                span.classList.add('danger')
                span.innerHTML = 'Comment, Name, Email area need to be filled'
                pComment.append(br)
                pComment.append(span)
                e.preventDefault()
            }
        })
    }
}
document.addEventListener('DOMContentLoaded', () => {
    commons.slider()
    commons.searchClick()
    commons.commentSubmit()
})