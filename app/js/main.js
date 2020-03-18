
$(document).ready(function () {
    $('#product__slider-1').slick({
        // dots: true,
        // infinite: true,
        // speed: 500,
        // fade: true,
        // cssEase: 'linear'
        prevArrow: $('.prev'),
        nextArrow: $('.next'),
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        // adaptiveHeight: true,
        // slidesToScroll: 1,
        // autoplay: true,
        // autoplaySpeed: 2000,
    });

    $('#product__slider-2').slick({
        // dots: true,
        // infinite: true,
        // speed: 500,
        // fade: true,
        // cssEase: 'linear'
        prevArrow: $('.prev--2'),
        nextArrow: $('.next--2'),
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        // adaptiveHeight: true,
        // slidesToScroll: 1,
        // autoplay: true,
        // autoplaySpeed: 2000,
    });
});


'use strict';

let open = document.querySelector('.btn--intro');
let close = document.querySelector('.modal__close');
let modal = document.querySelector('.modal__partners');
let overlay = document.querySelector('#overlay');


open.addEventListener('click', function () {
    overlay.style.visibility = "visible";
    modal.classList.toggle('undisplay');
})

close.addEventListener('click', function () {
    overlay.style.visibility = "hidden";
    modal.classList.toggle('undisplay');
})


/* 
** Header menu
*/

let toggleMenu = document.querySelector('.header__burger'),
    headerMenu = document.querySelector('.header__nav');

toggleMenu.addEventListener('click', function () {
    headerMenu.classList.toggle('show');
})



var t1 = new TimelineMax({ paused: true });

t1.to(".line--first", 0.3, {
    y: 6,
    rotation: 45,
    ease: Expo.easeInOut
});
t1.to(".line--second", 0.4, {
    y: -6,
    rotation: -45,
    ease: Expo.easeInOut,
    delay: -0.8
});

t1.to(".header__nav", 1, {
    top: "0%",
    ease: Expo.easeInOut,
    delay: -1.4
});

t1.staggerFrom(".header__nav .item", 1.4, { x: 200, opacity: 0, ease: Expo.easeOut }, 0.3);

t1.reverse();
$(document).on("click", ".header__burger", function () {
    t1.reversed(!t1.reversed());
});
$(document).on("click", "header__nav a", function () {
    t1.reversed(!t1.reversed());
});
