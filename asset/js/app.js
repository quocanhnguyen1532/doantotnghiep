$('.prev').click(function () {
    $('.owl-carousel').trigger('prev.owl.carousel');
});
$('.next').click(function () {
    $('.owl-carousel').trigger('next.owl.carousel');
});

$('.owl-carousel').owlCarousel({
    loop: false,
    margin: 10,
    nav: false,
    items: 4,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 4
        }
    }
})

var owl = $(".owl-slide");
owl.owlCarousel({
    autoplay: false,
    autoplayHoverPause: true,
    items: 1,
    speed: 200,
    rewind: true,
})

// Mmenu
document.addEventListener(
    "DOMContentLoaded", () => {
        new Mmenu("#menu", {
            "offCanvas": {
                "position": "left"
            },
            "theme": "dark"
        });
    }
);