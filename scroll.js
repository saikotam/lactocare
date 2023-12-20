$(window).scroll(function() {
    if ($(this).scrollTop() > 1600) { //use `this`, not `document`
        $('.arrow').css({
            'display': 'none'
        });
    }
});