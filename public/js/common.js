$(document).ready(function () {
    /* ======= ScrollTo ======= */
    $('a.scrollto').on('click', function (e) {

        //store hash
        var target = this.hash;

        e.preventDefault();

        $('body').scrollTo(target, 800, {offset: -50, 'axis': 'y'});
        //Collapse mobile menu after clicking
        if ($('.navbar-collapse').hasClass('in')) {
            $('.navbar-collapse').removeClass('in').addClass('collapse');
        }
    });

    $('#burger').on('click', function (e) {
        e.preventDefault();
    });

    $('#carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth: 210,
        itemMargin: 5,
        asNavFor: '#slider'
    });

    $('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: "#carousel"
    });

    $('#tracks-slider').flexslider({
        itemHeight: 450,
        animationLoop: false,
        slideshow: false,
        animation: "slide",
        // controlsContainer: $(".custom-controls-container"),
        // customDirectionNav: $(".custom-navigation a")
    });

    $('.sample').jabradoodle();
});
