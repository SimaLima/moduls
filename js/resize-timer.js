/*
 * BASIC RESIZE TIMER
 * Execute function 'n' miliseconds after resize event is finished.
 */
var resizeTimer;

$(window).on('resize', function() {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function() {
        // load();
    }, 250);
});
