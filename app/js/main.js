
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
let footerPartnersBtn = document.getElementById('footer-btn--partners');


let modalCloseBtn = document.querySelector('.modal__close');





function modalOpen(button, form) {
    button.addEventListener('click', function () {
        overlay.classList.add('modal__show');
        form.classList.add('modal__show');
    })
};

function modalClose(form) {
    modalCloseBtn.addEventListener('click', function () {
        overlay.classList.remove('modal__show');
        form.classList.remove('modal__show');
    });

    window.onclick = function (event) {
        if (event.target == overlay) {
            overlay.classList.remove("modal__show");
            form.classList.remove("modal__show");
        }
    };
};

modalOpen(introBtn, modalConsultation);
modalOpen(consultBtn, modalConsultation);
modalOpen(discountBtn, modalConsultation);
modalOpen(productConsult1, modalConsultation);
modalOpen(productConsult2, modalConsultation);
modalOpen(footerPartnersBtn, modalPartners);



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

$(".header__nav-list li a").on("click", function () {
    // $(".asterion-offcanvas-wrap").removeClass("active");
    $(".header__nav").removeClass('show');
    $(".header__burger").removeClass('show');
    // $(".header__nav").removeClass('show');
 
});



$(document).ready(function(){
    $("a[href*=#]").on("click", function(e){
        var anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top
        }, 777);
        e.preventDefault();
        return false;
    });
});


(function($) {
    $(function() {
    
        $('#up').click(function() {
            $('html, body').animate({scrollTop: 0},500);
            return false;
        })
    
    })
    })(jQuery)

