/*
 * TRUNCATE TEXT
 * Reduce text to specific number of characters. Function displays only whole
 * words.
 *
 * @param {string} text = text to reduce
 * @param {number} maxCharNum = max number of characters
 * @param {string} endChars = characters to add at the end of shortened text
 * @return {string} = shortened text
 */
function truncateText(text, maxCharNum, endChars) {

    // string to number
    maxCharNum = Number(maxCharNum);

    if (text.length > maxCharNum) {
        text = jQuery.trim(text).substring(0, maxCharNum).split(' ').join(' ') + endChars;
    }

    return text;
}
