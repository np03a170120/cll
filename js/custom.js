$(".main-banner-slider").slick({
    infinite: true,
    slidesToShow: 1,
    infinite: false,
    arrows: false,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    prevArrow: '<i class="fas fa-chevron-circle-right"></i>',
    nextArrow: '<i class="fas fa-chevron-circle-left"></i>',
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

function LinkFormatter(value, row, index) {
    return "<a href='" + row.url + "'>" + value + "</a>";
}

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