/*
 * BASIC SCROLL TIMER
 * Execute function 'n' miliseconds after scroll event is finished.
 */
var scrollTimer;

$(window).on('scroll', function() {
    clearTimeout(scrollTimer);
    scrollTimer = setTimeout(function() {
        // load();
    }, 250);
});
