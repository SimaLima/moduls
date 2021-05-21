/*
 * ESCAPE HTML TAGS
 * Display characters '<>' but encoded.
 *
 * @param {string} text = string in which to escape tags
 * @return {string} = escaped string
 */
function escapeHtml(text) {
    var map = {
        '&': '&amp;',
        '<': '&lt;',
        '>': '&gt;',
        '"': '&quot;',
        "'": '&#039;'
    };
    return text.replace(/[&<>"']/g, function(m) { return map[m]; });
}
