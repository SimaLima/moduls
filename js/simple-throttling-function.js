/*
 * BASIC THROTTLING HANDLER
 * Show difference between native and throttled scroll.
 */
var scrollTimeout;
var timing = 50;

$(window).on('scroll', function() {
    if (!scrollTimeout) {
        scrollTimeout = setTimeout(function() {
            console.log('throttled scroll');
            scrollTimeout = null;
        }, timing);
    }
    console.log('native scroll');
});
