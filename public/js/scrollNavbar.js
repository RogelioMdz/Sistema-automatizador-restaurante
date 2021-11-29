$(window).scroll(function () {
    if ($(window).scrollTop()) {
        $("nav").addClass("sticky-top");
        $("nav").addClass("scrollActive");
    }
    if ($(window).scrollTop() < 1) {
        $("nav").removeClass("sticky-top");
        $("nav").removeClass("scrollActive");
    }
})