$(document).ready(function () {

    // carousel-product
    $('.owl-proudact').owlCarousel({
        loop: true,
        dots: false,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        pagination: false,
        responsive: {
            0: {
                items: 1
            },

            425: {
                items: 2
            },
            767: {
                items: 3
            },
            992: {
                items: 1
            },
            1200: {
                items: 2
            }

        }
    })
    // carousel-most-product
    $('.owl-most-proudact').owlCarousel({
        loop: true,
        dots: false,
        margin: 10,
        items: 3,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        pagination: false,
        responsive: {
            0: {
                items: 1
            },

            425: {
                items: 2
            },
            767: {
                items: 3
            },
            992: {
                items: 4
            },
            1200: {
                items: 6
            },

        }
    })
});