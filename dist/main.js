
$(document).ready(function () {
    $('#product__slider-1').slick({
        prevArrow: $('.prev'),
        nextArrow: $('.next'),
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
    });

    $('#product__slider-2').slick({
        prevArrow: $('.prev--2'),
        nextArrow: $('.next--2'),
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,

    });
});


// 'use strict';

// OVERLAY
let overlay = document.querySelector('#overlay');

// MODAL WINDOWS
let modalPartners = document.querySelector('.modal__partners');
let modalConsultation = document.querySelector('.modal__consultation');

// MODAL OPEN BUTTONS
let introBtn = document.querySelector('.btn--intro');
let consultBtn = document.getElementById('consultBtn');
let discountBtn = document.getElementById('discountBtn');
let productConsult1 = document.getElementById('productConsult--1');
let productConsult2 = document.getElementById('productConsult--2');


let modalCloseBtn = document.querySelector('.modal__close');





function modalOpen(button, form) {
    button.addEventListener('click', function () {
        overlay.classList.remove('undisplay');
        form.classList.remove('undisplay');
    })
};

function modalClose(form) {
    modalCloseBtn.addEventListener('click', function () {
        overlay.classList.add('undisplay');
        form.classList.add('undisplay');
    });

    window.onclick = function (event) {
        if (event.target == overlay) {
            overlay.classList.add("undisplay");
            form.classList.add("undisplay");
        }
    };
};

<<<<<<< HEAD
modalOpen(introBtn, modalConsultation);
=======
modalOpen(introBtn, modalPartners);
>>>>>>> 95b1fe04b501202343307d339809b17a7ad829b7
modalOpen(consultBtn, modalConsultation);
modalOpen(discountBtn, modalConsultation);
modalOpen(productConsult1, modalConsultation);
modalOpen(productConsult2, modalConsultation);



modalClose(modalPartners);
modalClose(modalConsultation);

/* 
** Header menu
*/

let toggleMenuBtn = document.querySelector('.header__burger'),
    headerNavMenu = document.querySelector('.header__nav');

toggleMenuBtn.addEventListener('click', function () {
    headerNavMenu.classList.toggle('show');
    toggleMenuBtn.classList.toggle('show');
})







