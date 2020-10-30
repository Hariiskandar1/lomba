$(document).ready(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 50) {

            // Sticky Navbar
            $('.main-navbar').addClass("sticky");
            $('#scroll').fadeIn();
        } else {
            $('.main-navbar').removeClass("sticky");
            $('#scroll').fadeOut();
        }
    });

    //Pre Loader
    $(".preloader").fadeOut();

    // Back To Top
    // $('#scroll').click(function() {
    //     $("html, body").animate({
    //         scrollTop: 0
    //     }, 1000);
    //     return false;
    // });

    // Smooth Scroll
    var scroll = new SmoothScroll('a[href*="#"]', {
        speed: 1500,
        speedAsDuration: true
    });

    // Animate On Scroll
    AOS.init();
})