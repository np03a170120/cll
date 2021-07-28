$(".main-banner-slider").slick({
    infinite: true,
    arrows: false,
    speed: 300,
    dots: true,
});

$(".btn-group, .dropdown").hover(
    function() {
        $(">.dropdown-menu", this).stop(true, true).fadeIn("fast");
        $(this).addClass("open");
    },
    function() {
        $(">.dropdown-menu", this).stop(true, true).fadeOut("fast");
        $(this).removeClass("open");
    }
);

$(document).ready(function() {
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none",
        helpers: {
            overlay: {
                css: {
                    background: "rgba(58, 42, 45, 0.95)",
                },
            },
        },
    });
});

$(".center").slick({
    centerMode: true,
    centerPadding: "60px",
    slidesToShow: 3,
    arrows: true,
    prevArrow: '<i class="fas fa-arrow-left"></i>',
    nextArrow: '<i class="fas fa-arrow-right"></i>',
    responsive: [{
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: "40px",
                slidesToShow: 3,
            },
        },
        {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: "40px",
                slidesToShow: 1,
            },
        },
    ],
});