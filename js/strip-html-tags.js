/*
 * STRIP HTML TAGS
 * Replace characters '<>' with empty spaces to avoid rendering as HTML.
 *
 * @param {string} text = string in which to strip tags
 * @return {string} = string cleared of tags
 */
 function stripHTMLtags(text) {
     var map = {
         '<': '',
         '>': ''
     };
     return text.replace(/[<>]/g, function(m) { return map[m]; });
 }
