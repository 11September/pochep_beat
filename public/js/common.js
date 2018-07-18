$(document).ready(function() {
    /* ======= ScrollTo ======= */
    $('a.scrollto').on('click', function(e){

        //store hash
        var target = this.hash;

        e.preventDefault();

        $('body').scrollTo(target, 800, {offset: -50, 'axis':'y'});
        //Collapse mobile menu after clicking
        if ($('.navbar-collapse').hasClass('in')){
            $('.navbar-collapse').removeClass('in').addClass('collapse');
        }

    });
});
