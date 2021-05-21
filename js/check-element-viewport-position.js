/*
 * CHECK ELEMENT VIEWPORT POSITION
 * It receives element and desired offset.
 * It returns one of values: 'above' | 'below' | 'in_view'.
 *
 * @param {object} el = HTML element selected in jQuery
 * @param {number} offset = offset from page position
 * @return {string} = value where is element positioned relative to scrolled position
 */
function checkElementViewportPosition(el, offset) {

    if (isNaN(offset) || offset == '') {
        offset = 0;
    }

    var rect = el[0].getBoundingClientRect();

    if (rect.bottom < -1 - offset) {
        return 'above';
    } else if (rect.top >= $(window).height() + offset) {
        return 'below';
    } else {
        return 'in_view';
    }

}
