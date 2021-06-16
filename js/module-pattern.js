/*
 * MODULE PATTERN
 * Define independent, self-executed module pattern.
 */
var Module = (function() {

    // methods
    function display() {}
    function hide() {}

    // make functions public
    return {
        display: display,
        hide: hide
    }

})(); // !Module

// Module.display();
