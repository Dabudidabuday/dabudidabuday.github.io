
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

// FEEDBACK

const feedbackBtn = document.getElementById('feedbackBtn');
const formSuccess = document.getElementById('form-success');
// feedbackBtn.addEventListener('click', function () {

//     overlay.classList.add('modal__show');
//     formSuccess.classList.add('modal__show');
// })

// OVERLAY
const overlay = document.getElementById('overlay');

// MODAL WINDOWS
const modalPartners = document.querySelector('.modal__partners');
const modalConsultation = document.querySelector('.modal__consultation');
const modalBuy = document.querySelector('.modal__buy');
const modalSuccess = document.getElementById('form-success');


// MODAL OPEN BUTTONS
const introBtn = document.querySelector('.btn--intro');
const freeConsultBtn = document.getElementById('freeConsultBtn');
const discountBtn = document.getElementById('discountBtn');


const productConsult1 = document.getElementById('productConsult--1');
const productConsult2 = document.getElementById('productConsult--2');
const productbuy1 = document.getElementById('buy1');
const productbuy2 = document.getElementById('buy2');


const footerPartnersBtn = document.getElementById('footer-btn--partners');


const modalCloseBtn = document.querySelector('.modal__close');
const closeBuyBtn = document.querySelector('.close-buy-btn');
const closeSuccess = document.querySelector('.success__back-btn');
const closePartners = document.getElementById('close-Partners');




function modalOpen(button, form) {
    button.addEventListener('click', function () {
        overlay.classList.add('modal__show');
        form.classList.add('modal__show');
    })
};

function modalOpenConsult(form) {
    freeConsultBtn.addEventListener('click', function () {
        overlay.classList.add('modal__show');
        form.classList.add('modal__show');
    })
};



function modalClose(form) {
    modalCloseBtn.addEventListener('click', function () {
        overlay.classList.remove('modal__show');
        form.classList.remove('modal__show');
    });

    window.addEventListener('click', function () {
        if (event.target == overlay) {
            overlay.classList.remove("modal__show");
            form.classList.remove("modal__show");
        }
    })
};
function modalCloseBuy(form) {
    closeBuyBtn.addEventListener('click', function () {
        overlay.classList.remove('modal__show');
        form.classList.remove('modal__show');
    });

    window.addEventListener('click', function () {
        if (event.target == overlay) {
            overlay.classList.remove("modal__show");
            form.classList.remove("modal__show");
        }
    })
};

function modalCloseSuccess(form) {
    closeSuccess.addEventListener('click', function () {
        overlay.classList.remove('modal__show');
        form.classList.remove('modal__show');
    });

    window.addEventListener('click', function () {
        if (event.target == overlay) {
            overlay.classList.remove("modal__show");
            form.classList.remove("modal__show");
        }
    })
};

function modalClosePartners(form) {
    closePartners.addEventListener('click', function () {
        overlay.classList.remove('modal__show');
        form.classList.remove('modal__show');
    });

    window.addEventListener('click', function () {
        if (event.target == overlay) {
            overlay.classList.remove("modal__show");
            form.classList.remove("modal__show");
        }
    })
};

modalOpen(introBtn, modalConsultation);
modalOpenConsult(modalConsultation);
modalOpen(discountBtn, modalConsultation);
modalOpen(productConsult1, modalConsultation);
modalOpen(productConsult2, modalConsultation);
modalOpen(footerPartnersBtn, modalPartners);

modalOpen(productbuy1, modalBuy);
modalOpen(productbuy2, modalBuy);


modalClosePartners(modalPartners);
modalClose(modalConsultation);
modalCloseBuy(modalBuy);
modalCloseSuccess(modalSuccess);

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



$(document).ready(function () {
    $("a[href*=#]").on("click", function (e) {
        var anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top -= 60
        }, 500);
        e.preventDefault();
        return false;
    });
});


(function ($) {
    $(function () {

        $('#up').click(function () {
            $('html, body').animate({ scrollTop: 0 }, 500);
            return false;
        })

    })
})(jQuery)


















    //   // Open modal Buttons (VIDEO)
    //   const Play = document.querySelector("play");


    //   // Close modal widnows
    // //   const introCloseBtn = document.getElementById("intro-close");


    //   // Video
    //   const Video = document.querySelector(".intro__modal-video");


    //   /**
    //    * @method openVideoModal
    //    * @param button {HTMLElement}
    //    * @param window {HTMLElement}
    //    * @param url {String}
    //    */
    //   const openVideoModal = function(button, window, url) {
    //     const iframe = document.createElement("iframe");

    //     iframe.className = "intro__iframe";
    //     iframe.width = "100%";
    //     iframe.height = "90%";
    //     iframe.src = url;
    //     iframe.frameborder = "0";
    //     iframe.allow =
    //       "accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture";
    //     iframe.allowfullscreen;

    //     button.addEventListener("click", function() {
    //       overlay.classList.add("modal__show");
    //       window.classList.remove("undisplay");
    //       window.appendChild(iframe);
    //     });
    //   };

    //   const modalVideoClose = function(button, video) {
    //     button.addEventListener("click", function() {
    //       const iframe = document.querySelector(".intro__iframe");
    //       if (iframe) {
    //         video.removeChild(iframe);
    //       }
    //       overlay.classList.add("undisplay");
    //       video.classList.add("undisplay");
    //     });
    //   };

    //   openVideoModal(
    //     Play,
    //     Video,
    //     "https://www.youtube.com/embed/Ev92DX9HlXI?autoplay=1"
    //   );


    //   modalVideoClose(introCloseBtn, introVideo);