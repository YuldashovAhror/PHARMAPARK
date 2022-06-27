var preloader    = $('.preloader'),
    imagesCount  = $('img').length,
    dBody        = $('body'),
    percent      = 100 / imagesCount,
    progress     = 0,
    imgSum       = $('img').length,
    loadedImg    = 0;


for (var i = 0; i < imagesCount; i++) {
    var img_copy        = new Image();
    img_copy.src        = document.images[i].src;
    img_copy.onload     = img_load;
    img_copy.onerror    = img_load;
}

function img_load () {
    progress += percent;
    loadedImg++;
    $('.preloader__loading').css('height', `${progress}vh`)
    $('.preloader__percent').css('bottom', `${progress}vh`)
    $('.preloader__percent span').text(progress.toFixed(0))
    if (progress >= 100 || loadedImg == imagesCount) {
        preloader.delay(500).fadeOut('slow');
        dBody.css('overflow', '');
    }
}


let counter = 1
$(window).on('load', () => {
    setInterval(() => {
    }, 5000)
})

$('.header__menu').click(function (event) {
    event.preventDefault();
    $('.menu').fadeToggle('200');
    $('body').toggleClass('on');
})

$('.section__banner button').addClass('btn__feedback')

$('.btn__feedback').click(function (event) {
    event.preventDefault();
    $('.popup__feedback').fadeIn('slow')
})

$('.feedback__close').click(function (event) {
    event.preventDefault();
    $('.popup__feedback').fadeOut('slow')
})

AOS.init({
    // Global settings:
    disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
    startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
    initClassName: 'aos-init', // class applied after initialization
    animatedClassName: 'aos-animate', // class applied on animation
    useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
    disableMutationObserver: false, // disables automatic mutations' detections (advanced)
    debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
    throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


    // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
    offset: 120, // offset (in px) from the original trigger point
    delay: 0, // values from 0 to 3000, with step 50ms
    duration: 400, // values from 0 to 3000, with step 50ms
    easing: 'ease', // default easing for AOS animations
    once: false, // whether animation should happen only once - while scrolling down
    mirror: false, // whether elements should animate out while scrolling past them
    anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

});


